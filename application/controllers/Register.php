<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller {
    public $data = array();
    public function __construct()
    {
        parent::__construct();
          if(!isset($_SESSION)) 
			{ 
				session_start(); 
			} 
                 include 'checkSession.php'; 
              
                date_default_timezone_set('UTC');
           
        $this->load->model(array('backend/Model_menu_frontend','web/Model_register','web/Model_label','web/Model_content'));
		
        $this->load->helper(array('funcglobal','menu','accessprivilege','alias','url'));
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        $this->data["method"]='register';
    }

    public function index()
    {

    if ($_POST) {    
            $name = $this->security->xss_clean(trim($_POST['firstname']));
            $last = $this->security->xss_clean(trim($_POST['lastname']));
            $email = $this->security->xss_clean(trim($_POST['email']));
            $country = $this->security->xss_clean(trim($_POST['country'])); 
            $hp = $this->security->xss_clean(trim($_POST['phone'])); 
            $company = $this->security->xss_clean(trim($_POST['company']));  
            $position    = $this->security->xss_clean(secure_input($_POST['position']));
            $signup_date = date("Y-m-d H:i:s");
            $phone= $country.'-'.$hp;
            
            
            $password    = '';
            $email_verification_code = random_string('alnum', 20);     
            $check_email = $this->Model_register->checkEmail($email, 0);
                 if ($check_email) {
                    $data = 0;
                } else {
                    $status      = 0;
                    $step=0;
                    $agent_id    = $this->Model_register->AddAgent($name, $last, $email, $phone, $password, $company, $position, $status, $signup_date,$step,$email_verification_code);
                    if ($agent_id){
                        $this->sendmailAdmin($name, $last, $email, $phone,$company, $position, $signup_date);
                        $this->sendmail($name, $last, $email,$email_verification_code);
                    } 
                    $data = 1;
                }
             echo json_encode($data);
    }
    else {
        redirect(BASE_URL.'/home');
    }
    }
	
    function sendmailAdmin($name, $last, $email, $phone,$company, $position, $signup_date)
    {
        $htmlContent = '<h1>NEW APPLICATION</h1><br/>';
        $htmlContent .= '<p>From</p>';
        $htmlContent .= 'Name : ' . $name . '-' . $last . '<br/>';
        $htmlContent .= 'Email : ' . $email . ' <br/>';
        $htmlContent .= 'Phone : ' . $phone . ' <br/>';
        $htmlContent .= 'Position : ' . $position . ' <br/>';
        $htmlContent .= 'Company : ' . $company . ' <br/>';
        $htmlContent .= 'Date : ' . date_convert($signup_date) . ' <br/>';
        $subject = 'Register member';
     $this->load->library('email');

		$this->email->initialize(array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'tls://smtp.gmail.com:587',
                    'smtp_user' => 'panomatics.vr@gmail.com',
                    'smtp_pass' => 'P4n0m4V_r',
                    'smtp_port' => 587,
					'mailtype' => 'html',
                    'crlf' => "\r\n",
                    'newline' => "\r\n"
        ));
        $this->email->from('panomatics.vr@gmail.com', 'Aplication Panomatics');
		$this->email->to(MAIL_INFO); // change it to yours
		$this->email->cc(MAIL_CC); // change it to yours
		$this->email->bcc(MAIL_BCC); // change it to yours
        $this->email->subject($subject);
        $this->email->message($htmlContent);
       if ($this->email->send()) {
                        return true;
        } else {
            show_error($this->email->print_debugger());
        }
    }
    function sendmail($name, $last, $email,$email_verification_code)
    {        
        $message_email = "Welcome<br>";
        $message_email .= "" . $name . " " . $last . "<br>";
        $message_email .= "Sign up success<br>";
        $message_email .= "we will send your password <br>";
        $message_email .= "Email : " . $email . "<br>";
        $message_email .= "Please click link below to email verification<br>";
        $message_email .= "<a href=".BASE_URL."/Register/verify/" .$email_verification_code.">";
        $message_email .= BASE_URL."/Register/verify/"; 
        $message_email .= "</a> <br>";	
        $subject = 'Register member';
	  $this->load->library('email');

		$this->email->initialize(array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'tls://smtp.gmail.com:587',
                    'smtp_user' => 'panomatics.vr@gmail.com',
                    'smtp_pass' => 'P4n0m4V_r',
                    'smtp_port' => 587,
					'mailtype' => 'html',
                    'crlf' => "\r\n",
                    'newline' => "\r\n"
        ));
        $this->email->from('panomatics.vr@gmail.com', 'Registration Panomatics'); // change it to yours
        $this->email->to($email); // change it to yours
        $this->email->subject($subject);
        $this->email->message($message_email);
       if ($this->email->send()) {
                        return true;
        } else {
            show_error($this->email->print_debugger());
        }
    }
    function verify($verificationText=NULL) { 			
                $noOfRecords = $this->Model_register->verifyEmailAddress($verificationText);
                if ($noOfRecords > 0) {  
                    $hasil = $this->Model_register->getByVerify($verificationText);	

                            if (!empty($hasil)){
                             redirect(BASE_URL.'/home');

                            } else { 

                            redirect(BASE_URL.'/home');

                              }                  					

                        } else { 
                              redirect(BASE_URL.'/home');

                        }  

            }
            
            
		function forgetPassword(){
                  if ($_POST) { 
                    $email = $this->security->xss_clean(trim($_POST['email']));
                     $check_email = $this->Model_register->checkEmail($email,0);
                        if ($check_email) {
                            $passgenerate = random_string('alnum', 6);
                            $password = md5($passgenerate);
                            $update    = $this->Model_register->updateAgent($email, $password);
                            $this->sendmailConf($email, $passgenerate);
                            $data = 5;
                        } else {
                            $data = 6;
                        }
                        echo json_encode($data);
                    }
                      else {
                                redirect(BASE_URL.'/home');
                            }
            }
            
            
		function forgetPasswordss(){
		die;
			 $email = 'hl.prbadolsa@gmail.com';
			 $check_email = $this->Model_register->checkEmail($email,0);
			 echo count($check_email);
			  if (count($check_email) > 0 ) {
				$passgenerate = random_string('alnum', 6);
                            $password = md5($passgenerate);
                            $update    = $this->Model_register->updateAgent($email, $password);
                            $this->sendmailConf($email, $passgenerate);
				$data=5;  
			  }
			 else {
				$data=6;
			}
				echo json_encode($data);
			// print_r($check_email);
			 die;	
			 				
            
					
		}	
			
        function sendmailConf($email, $passgenerate)
    {
       
        $subject       = "Panomatic.com - Request Password Confirmation ";
        $message_email = "Dear, <br>";
        $message_email .= "" . $email . "<br>";
        $message_email .= "Please use email & password below to login <br>";
        $message_email .= "Email : " . $email . "<br>";
        $message_email .= "Password : " . $passgenerate . "<br>";
        $message_email .= "Website<br>";
        $message_email .= "<a href=" . BASE_URL . "/home/>";
        $message_email .= BASE_URL . "/home/";
        $message_email .= "</a> <br>";
	   $this->load->library('email');

		$this->email->initialize(array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'tls://smtp.gmail.com:587',
                    'smtp_user' => 'panomatics.vr@gmail.com',
                    'smtp_pass' => 'P4n0m4V_r',
                    'smtp_port' => 587,
					'mailtype' => 'html',
                    'crlf' => "\r\n",
                    'newline' => "\r\n"
        ));
           
        $this->email->from('panomatics.vr@gmail.com', 'Password Confirmation');
        $this->email->to($email); // change it to yours
        $this->email->subject($subject);
        $this->email->message($message_email);
		if ($this->email->send()) {
                        return true;
        } else {
            show_error($this->email->print_debugger());
        }
    }    
            
            
            
}