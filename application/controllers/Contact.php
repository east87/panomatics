<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	public $data = array();
	public function __construct()

	{
		parent::__construct();
                   if (!$_SESSION) {
                    session_start();
                }
                 include 'checkSession.php'; 
              
                date_default_timezone_set('UTC');
                $this->load->model(array('backend/Model_menu_frontend','web/Model_label','web/Model_content','web/Model_register'));
                $this->load->helper(array('funcglobal','menu','accessprivilege','alias','url','email')); 
                $this->data['controller'] = $this->uri->segment(1);
                $this->data["module_location"]=105;
                $this->data['menuActive'] = '';  
                $this->data['getCountry'] = $this->Model_register->getCountry(); 
               
                
	}

	
	public function index()                          
	{                  
                $whereLocation = '';
                $whereLocation .= " WHERE  a.row_active_status=1 and  a.row_parent=0 and a.module_id = ".$this->data["module_location"];
                $order_limit ="";
                $order_limit .= " order by a.row_order ASC";
                $ListContact = $this->Model_content->getListContent($whereLocation,$order_limit);
                $this->data["countContact"] = count($ListContact);
		$this->data["ListContact"] = $ListContact;  
               
                
        $this->load->view('vcontact',$this->data);

	}
   
        function postMsg() {
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
	{
		//your site secret key
        $secret = SECRET_KEY;
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
      
            $name = $this->security->xss_clean(trim($_POST['contact_name']));
            $country = xss_clean(trim($_POST['contact_country']));
            $phone = $this->security->xss_clean(trim($_POST['contact_phone']));
            $email = $this->security->xss_clean(trim($_POST['contact_email']));
            $message = $this->security->xss_clean(trim($_POST['contact_message']));   
            
             
                $htmlLocation = '<h1>Contact Form</h1><br/>';
                $htmlLocation .= '<p>From</p>';
                $htmlLocation .= 'Name : '.$name.'<br/>';
                $htmlLocation .= 'Email : '.$email.' <br/>';
                $htmlLocation .= 'Country : '.$country.' <br/>'; 
                $htmlLocation .= 'Phone : '.$phone.' <br/>'; 
                $htmlLocation .= 'Messages : '.$message.' <br/>'; 
                $subject= 'New Message from Panomatics.com';

                    $this->load->library('email');
                    $config['protocol'] = 'sendmail';
                    $config['mailpath'] = '/usr/sbin/sendmail';
                    $config['charset'] = 'iso-8859-1';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html';
                    $this->email->initialize($config);                    
                    $this->email->set_newline("\r\n");
                    $this->email->set_crlf("\r\n");
                    $this->email->from('contact@panomatics.com'); // change it to yours
                    $this->email->to(MAIL_INFO); // change it to yours
					$this->email->cc(MAIL_CC); // change it to yours
					$this->email->bcc(MAIL_BCC); // change it to yours
                    
                    $this->email->subject($subject);
                    $this->email->message($htmlLocation);
                    if ($this->email->send()) {
                       
                    } else {
                        show_error($this->email->print_debugger());
                    }
            
             $result='Thank you for your interest in panomatics. Our representative will be in touch with you shortly';
        
    }
    else
	{
        $result='check_captcha';
        
	}
        
       echo json_encode($result);
}

function subscribe() {
            if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
	{
            $secret = SECRET_KEY;
        //get verify response data
             $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
      
                 
            $email = $this->security->xss_clean(trim($_POST['subs_email']));
            $checkmail=$this->Model_register->checkSubs($email);
            if($checkmail){
                 $resultsubs=0;
            }
            else 
            {
                $insert = $this->Model_register->addSubs($email);
                $htmlLocation = '<h1>New Subscriber</h1><br/>';
                $htmlLocation .= 'Email : '.$email.' <br/>';
                $subject= 'New Subscriber';

                    $this->load->library('email');
                    $config['protocol'] = 'sendmail';
                    $config['mailpath'] = '/usr/sbin/sendmail';
                    $config['charset'] = 'iso-8859-1';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html';
                    $this->email->initialize($config);                    
                    $this->email->set_newline("\r\n");
                    $this->email->set_crlf("\r\n");
                    $this->email->from('contact@panomatics.com'); // change it to yours
                    $this->email->to(MAIL_INFO); // change it to yours
					$this->email->cc(MAIL_CC); // change it to yours
					$this->email->bcc(MAIL_BCC); // change it to yours
                    
                    $this->email->subject($subject);
                    $this->email->message($htmlLocation);
                    if ($this->email->send()) {
						$resultsubs=1;
                    } else {
                        show_error($this->email->print_debugger());
						$resultsubs=0;
                    }
                
            }
       // $resultsubs=3;
       
}
 else
	{
        $resultsubs=2;
        
	}
	
	echo json_encode($resultsubs);
}

            

}


