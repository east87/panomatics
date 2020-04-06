$('document').ready(function ()
    {
        
        /* validation */
        jQuery.validator.addMethod("lettersonly", function(value, element) 
        {
            return this.optional(element) || /^[a-z ]+$/i.test(value);
        }, "Letters and spaces only please"); 
		jQuery.validator.addMethod("correctemail", function(value, element) 
        {
             return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);        
        },"Must correct email"); 
        $("#form-contact").validate({
            rules:
                {
                    contact_name: {
                        required: true,
                        minlength: 3,
                        maxlength: 100,
                        lettersonly: true
                    },
                    contact_phone: {
                       
                        minlength: 10,
                        maxlength: 15,
                        number: true
                    },
                    contact_email: {
                        required: true,
                        correctemail:true,
                        email: true
                    },
                    contact_message: {
                        required: true,
                        minlength: 5
                    }
                   
                 },
            messages:
                    {
                        contact_name: {
                            required : "Please enter name",
                            minlength : "Minimum 3 characters",
                            maxlength : "Maximum 30 characters"
                        },
                        contact_phone: {
                            minlength : "Minimum 10 characters",
                            maxlength : "Maximum 15 characters"
                        },
                        contact_email: "Please enter a valid email address",
                        contact_message: {
                            required : "Please enter message",
                            minlength : "Minimum 5 characters"
                        }
                    },
                    
                  
            submitHandler: submitContactForm
        });
        
        /* validation */
    });
/* form submit */
    function submitContactForm()
    {
        var data = $("#form-contact").serialize();
      
        $.ajax({
            type: 'POST',
            url: 'https://www.panomatics.com/contact/postMsg',
            data: data,
            beforeSend: function ()
            {
                $("#btn-submit").html("&nbsp; sending ...");
            },
            success: function (result)
            {
               
                $("#btn-submit").html("&nbsp;sending");
                if(result == "success")
                {
                    $('#contact_name').val('');
                    $('#contact_email').val('');
                    $('#contact_country').val('');
                    $('#contact_phone').val('');
                    $('#contact_message').val('');
                    
                  
                  
                }
                else if(result == "robot_fail")
                {
                    alert('Robot verification failed, please try again.');
                    $('#captcha_error').html('Robot verification failed, please try again.');
                    location.reload();
                }
                else if(result == "check_captcha")
                {
                    alert('Please click on the reCAPTCHA box.');
                    $('#captcha_error').html('Please click on the reCAPTCHA box.');
                }
                else
                {
                    $('#contact_name').val('');
                    $('#contact_email').val('');
                    $('#contact_lastname').val('');
                    $('#contact_message').val('');
                   // $('#form-contact').hide();
                   location.reload();
                   $('#captcha_error').html('Robot verification failed, please try again.');
                 // window.open("http://beta.panomatics.asia/contact/thankyou","_self");
                }
                //console.log(data);
            }
        });
        return false;
    }
    /* form submit */
      
    function myFunctionSUBS ()
    {
        /* validation */
        jQuery.validator.addMethod("lettersonly", function(value, element) 
        {
            return this.optional(element) || /^[a-z ]+$/i.test(value);
        }, "Letters and spaces only please"); 
		jQuery.validator.addMethod("correctemail", function(value, element) 
        {
             return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);        
        },"Must correct email"); 
        $("#form-newsletter").validate({
            rules:
                {
                    subs_email: {
                        required: true,
                        correctemail:true,
                        email: true
                    }
                    
                   
                 },
            messages:
                    {
                        subs_email: "Please enter a valid email address"
                     
                    },
                    
                  
            submitHandler: submitSubs
        });
        
        /* validation */
    }
/* form submit */
    function submitSubs()
    {
        var data = $("#form-newsletter").serialize();
      // alert(data);
        $.ajax({
            type: 'POST',
            url: 'https://www.panomatics.com/contact/subscribe',
            data: data,
            beforeSend: function ()
            {
                $("#btn-subs").html("&nbsp; sending ...");
            },
            success: function (resultsubs)
            {
                //alert(resultsubs);
                if(resultsubs == 3)
                {
                    alert('Robot verification failed, please try again.');
                    $('#captcha_error').html('Robot verification failed, please try again.');
                    location.reload();
                }
                else if(resultsubs == 2)
                {
                    alert('Please click on the reCAPTCHA box.');
                    $('#captcha_error2').html('Please click on the reCAPTCHA box.');
					$('#notife_subs').text('');
					location.reload();
                }
                
                if(resultsubs == 1)
                {
                $("#btn-subs").html("&nbsp;Subscribe");
                $('#subs_email').val('');
				$('#captcha_error2').text('');
                $('#notife_subs').text( 'Success Subscribe:' );
                  
                }
			 if (resultsubs == 0){
                    $("#btn-subs").html("&nbsp;Subscribe");
                    $('#subs_email').val('');
                    $('#notife_subs').text( 'The e-mail you entered seems to be already on our subscriber list. Please check your e-mail and try again');
					$('#captcha_error2').html('');
                  
                 // window.open("https://localhost/panom/contact/subscribe","_self");
                }
                //console.log(data);
            }
        });
        return false;
    }
    
    
    

