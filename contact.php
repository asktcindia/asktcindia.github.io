<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/creating-a-contact-form.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('enquiry@asktc.in'); 
$formproc->AddRecipient('info@asktc.in'); 
//<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thankyou.html");
   }
}

?>
<!DOCTYPE HTML>
                    <html>
                      <head>
                        <meta  content="text/html; charset=windows-1252"  http-equiv="content-type">
                        <title>ASK Training Consultants : Your One-Stop Training
                          Solution Shop</title>
                        <link  href="css/bootstrap.css"  rel="stylesheet"  type="text/css"

                           media="all">
                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                        <script  src="js/jquery.min.js"></script>
                        <script  src="js/gen_validatorv31.js"></script>
                        <!-- Custom Theme files -->
                        <!--theme-style-->
                        <link  href="css/style.css"  rel="stylesheet"  type="text/css"

                           media="all">
                        <!--//theme-style-->
                        <meta  name="viewport"  content="width=device-width, initial-scale=1, maximum-scale=1">
                        <script  type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
                        <!--fonts-->
                        <link  href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800"

                           rel="stylesheet"  type="text/css">
                        <!--//fonts
</head><body> 
    <!--header-->
                      </head>
                      <body>
                        <div  class="header">
                          <div  style="height: 60px;"  class="header-top">
                            <div  class="container">
                              <div  class="logo"> <a  href="index.html"><img  style="width: 158px; height: 45px;"

                                     src="images/logo.png"  alt=" "></a> </div>
                              <ul>
                                <li  style="height: 17px; text-align: left;"><strong><em></em></strong></li>
                              </ul>
                            </div>
                            <div  class="clearfix"></div>
                          </div>
                          <div  class="header-bottom">
                            <div  style="height: 25px;"  class="container">
          <div  class="top-nav"> <span  class="menu"> </span>
            <ul>
              <li><a  href="index.html"  class="scroll">HOME </a></li>
              <li><a  href="methodology.html"  class="scroll">METHODOLOGY </a></li>
              <li><a  href="skills.html"  class="scroll">SOFT SKILLS </a></li>
              <li><a  href="series.html"  class="scroll">PROGRAMS </a></li>
              <li><a  href="contact.html"  class="scroll">ENQUIRY</a></li>
              <!--script-->
              <script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
            </ul>
          </div>
          <div  class="clearfix"> </div>
        </div>
      </div>
    </div>
                            <!--content-->
                            <div  class="content">
                              <div  class="container">
                                <div  style="height: 634px;"  class="contact">
                                  <div  class="col-md-7 contact-para">
                                    <form  style="height: 385px;"  action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                                    <h5  style="margin-top: -76.8px; height: 13px;">ENQUIRY FORM</h5>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<!-- 
<input type='text'  name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
<div><span><?php echo $formproc->GetErrorMessage(); ?></span></div>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
 -->
                                      <div  class="grid-contact">
                                        <div  class="col-md-6 contact-grid">
                                          <p  class="your-para">NAME SURNAME</p>
                                          <li  class="list-grid"> <input name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' onfocus="this.value='';"  onblur="if (this.value == '') {this.value ='';}" type="text"> <span  class="icon">
                                            </span>

                                            <div  class="clearfix"> </div>
                                          </li>
                                        </div>
                                        <div  class="col-md-6 contact-grid">
                                          <p  class="your-para">E-MAIL ADDRESS</p>
                                          <li  class="list-grid"> <input  name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' onfocus="this.value='';"  onblur="if (this.value == '') {this.value ='';}" type="text"> <span  class="icon icon-name">
                                            </span>
                                            <div  class="clearfix"> </div>
                                          </li>
                                        </div>
                                        <div  class="clearfix"> </div>
                                      </div>
                                      <div  class="grid-contact">
                                        <div  class="col-md-6 contact-grid">
                                          <p  class="your-para">TELEPHONE</p>
                                          <li  class="list-grid"> <input  name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' onfocus="this.value='';"  onblur="if (this.value == '') {this.value ='';}" type="text"> <span  class="icon icon-phone">
                                            </span>
                                            <div  class="clearfix"> </div>
                                          </li>
                                        </div>
                                        <div  class="col-md-6 contact-grid">
                                          <p  class="your-para">ORGANIZATION</p>
                                          <li  class="list-grid"> <input  name='organization' id='organization' value='<?php echo $formproc->SafeDisplay('organization') ?>' onfocus="this.value='';"  onblur="if (this.value == '') {this.value ='';}" type="text">
                                            <div  class="clearfix"> </div>
                                          </li>
                                        </div>
                                        <div  class="clearfix"> </div>
                                      </div>
                                      <p  class="your-para msg-para">MESSAGE</p>
                                      <textarea rows="6" cols="50" name='message' id='message' value='<?php echo $formproc->SafeDisplay('message') ?>' onfocus="this.value='';"  onblur="if (this.value == '') {this.value = '';}"></textarea>
										<div  style="height: 53px;"  class="send">
										<input id="submit" name="submit" type="submit" value="SENT MESSAGE">
								</div>
			</form>
			</div>	
			<div  class="clearfix"> </div>
		</div>
	</div>

	<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->
<!-- 
<script type='text/javascript'>
// <![CDATA[
// ]]>

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("phone","phone","Please provide your contact number");

    frmvalidator.addValidation("organization","organization","Please enter your Organization name");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

</script>
 -->
	<!--footer-->
	<div class="footer">
		<div class="container">
				<div class="footer-class">
				<div class="class-footer">
					 <p>2017 &copy; ASK Training Consultants</p><BR>
				<div class="clearfix"> </div>
			 	</div>
		 </div>
	</div>
	</div>
	<!--footer End-->
</body></html>