<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

<title>ELCON CABLE TRAYS PVT.LTD.</title>
<meta name="description" content="" />
<meta name="author" content="Designed and Promoted by Maharashtra Industries Directory, www.maharashtradirectory.com" />
<meta name="keywords" content="" />

    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
	
	<!--menu-->
 <link rel="stylesheet" type="text/css" href="css/palkesh-menu.css">
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/style-menu.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap-menu.css" type="text/css" />

<script src="js/jquery.min.js"></script>
	
	
	<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<script language=JavaScript src="js/feedbackallNew.js" type=text/javascript></script>
<?php
$mynumber= rand(673,62389);
$ilength=strlen($mynumber);
?>
<script type="text/javascript">
//defining variable and storinging in script
var randomnumber= <?= $mynumber?>;
// Validating
	</script>
	
	<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet"> 
  <script type="text/javascript" src="js/rightclick.js"></script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="NavWrapper"> <!-- MAIN MENU -->
  <div class="bg-white">
    <!-- <div class="container-fluid">
      
    </div>-->
  <div class="row">
        <div class="col-md-12" style="margin-bottom:0px;">
          <div class="container_logo">
            <div class="logo"> <a href="index.html"><img src="img/logo.png" alt="" title="ELCON GROUP, ELCON Cable Trays, Ladder Type, Perforated Cable Trays, Cable Glands, Lugs, Junction Boxes, Earthing Materials, GI Earthing Strips, Conduit Pipes, Accessories, Manufacturer, Exporter, Supplier, Pune, Maharashtra, India"></a> </div>
          </div>
          <div id="responsive-menu-container"></div>
  
     <div class="hidden-sm" align="right">
      
     <div class="header-contact">
<a href="enquiry.php"><i class="fa fa-envelope"></i><img src="img/email1.jpg" alt="ELCON GROUP" > </a>
         <a href="contact.html"><i class="fa fa-phone"></i> +91 87676 06060</a>
                                <a href="catlogue-2017.pdf" style="color: #4e4e4e" target="_blank"><i class="fa fa-download"></i> Download Catalogue</a>
                            </div>
      
      
      </div>
          <!-- Social Links -->
  
          <nav>
            <div class="container_menu">
              <ul>
                <li><a href="index.html" class="borderMe">Home</a></li>
                <li class="menu-item-has-children"><a href="" class="borderMe">Who We Are</a>
                  <ul class="sub-menu">
                    <li><a href="about-elcon.html">Introduction</a></li>
                      <li><a href="about-director.html">Know Our Directors</a></li>
                      <li><a href="our-setup.html">Our Setup</a></li>
                      <li><a href="quality-policy.html">Quality Policy</a></li>
                      <li><a href="certificates.html">Certification</a></li>
                      <li><a href="achievements.html">Achievements</a></li>
                  </ul>
                </li>
                <li><a href="cable-trays-manufacturer.html" class="borderMe">Products</a></li>
            
                
                <li><a href="elcon-clients.html" class="borderMe">Clients</a></li>
                <li><a href="gallery.html" class="borderMe">Gallery</a></li>
                <li><a href="contact.html" class="borderMe">Contact</a></li>
                <li><a href="enquiry.php" class="borderMe active">Enquiry</a></li>
                <li><a href="faq.html" class="borderMe">Faq's</a></li>
                
              
              </ul>

              
            </div>

                <div class="container_logo1 hidden-sm">
            <div class="logo1"> <a href="index.html"><img src="img/logo1.png" alt="" title="ELCON GROUP"></a> </div>
          </div><div class="clearfix"></div>
          </nav>
          
          <div class="clearfix"></div>
        </div>
      </div>
    <!-- MOBILE MENU --> </div>
</div>
                </div>
            </div>
        </div>
  
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <p>Enquiry</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">

<p class="excert" align="justify">
                     </p><br>


<?php

include('smtp/PHPMailerAutoload.php');

$company_name = '';
$fullname = '';
$email = '';
$contact = '';
$address = '';
$common_error = '';

if( isset($_POST['submit']) ){

    if($_POST['companyName'] != "" && $_POST['fullname'] != "" && $_POST['contact'] != "" && $_POST['email'] != "" && $_POST['address'] != ""){
    
    $to_mail =  $_POST['email'];
    //admin
    $admin_msg_body = '';
    //user
    $user_msg_body = '';

    //admin body
    $admin_msg_body .= 'Dear Team';
    //user body
    $user_msg_body .= 'Dear '.$fullname.',<br>';
    $user_msg_body .= 'Thanks for submission.<br>';
    $user_msg_body .= 'Thanks and Regards,<br>';
    $user_msg_body .= 'Elconglobal,<br>';

        //admin body
        smtp_mailer('zanwarsakshi5@gmail.com','subject',$admin_msg_body);

        //User body
        smtp_mailer($_POST['email'] ,'subject',$user_msg_body);
    }else{
        $common_error = "Please fill the fields!!"; 
    }

    if( !preg_match ("/^[a-zA-Z ]*$/", $_POST['companyName'])) {
        $company_name = "Please Enter Valid Company Name!!";
    }

    if( !preg_match ("/^[a-zA-Z ]*$/", $_POST['fullname'])) {
        $fullname = "Please Enter Valid Name!!";
    }

    if (!preg_match("/^[0-9]*$/",$_POST['contact'])) {
        $contact = "Please Enter Valid Contact!!";
    }

    if (!preg_match ("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@gmail+(\.com)$/", $_POST['email'])) {
        $email = "Please Enter Valid Email!!";
    }

/*
    //companyName
    $companyName = $_POST["companyName"];
    if (!preg_match ("/^[a-zA-Z]*$/", $companyName)){
        $ErrMsg = "Only alphabets are allowed.";
    } else {
        echo "Hi";
        //$length = strlen ($companyName);
        // if ( $length < 3) {
        //     $ErrMsg = "Name is too short.";
        // } elseif ($length >= 20) {
        //     $ErrMsg = "Name is too long.";
        // } else {
        //     echo "Company Name : $companyName";
        // }
    }

    // name
    $name = $_POST["fullname"];
    if (!preg_match ("/^[a-zA-Z]*$/", $name)){
        $ErrMsg = "Only alphabets are allowed.";
    } else {
        $length = strlen ($name);
        if ( $length < 3) {
            $ErrMsg = "Name is too short.";
        } elseif ($length >= 20) {
            $ErrMsg = "Name is too long.";
        } else {
            echo "Name : $name";
        }
    }

    // contact
    $contact = $_POST["contact"];
    if (!preg_match("/^[0-9]*$/",$contact)) {
        $contactErr = "Invalid Contact";
    } else {
        echo "<br>Contact : $contact";
    }

    // email
    $email = $_POST["email"];
    if (!preg_match ("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@gmail+(\.com)$/", $email)) { 
        $emailErr = "Invalid Email";
    } else {
        echo "<br>Email : $email";
    }

    // address
    $address = $_POST["address"];
    if ( !preg_match("/^[a-zA-Z0-9]*$/",$address) ) {
        $addressErr = "Invalid Address";
    } else {
        echo "<br>Address : $address";
    }

    function validate(){
         if( empty($_POST['email'] )){
            print("Email");

         }
  

    }
  
//

    //$to_mail =  $_POST['email'];
    //admin
    
    $admin_msg_body = '';
    $user_msg_body = '';
    
    $admin_msg_body .= 'Dear Team';
    
    
    
    $user_msg_body .= 'Dear '.$name.',<br>';
    $user_msg_body .= 'Thanks for submission.<br>';
    $user_msg_body .= 'Thanks and Regards,<br>';
    $user_msg_body .= 'Elconglobal,<br>';
    
    
    
    //user

    
*/

}

function smtp_mailer($to,$subject,$msg){
        $mail = new PHPMailer(); 
        $mail->SMTPDebug  = 3;
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = "smtp.gmail.com"; // smtp change
        $mail->Port = 587; 
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = "helpdesk@ikf.co.in"; // smtp email
        $mail->Password = "Help987$#"; // pass
        $mail->SetFrom("laxmantest2525@gmail.com"); // email
        $mail->Subject = $subject;
        $mail->Body =$msg;
        $mail->AddAddress($to);
        $mail->SMTPOptions=array('ssl'=>array(
                'verify_peer'=>false,
                'verify_peer_name'=>false,
                'allow_self_signed'=>false
        ));
        if(!$mail->Send()){
                //echo $mail->ErrorInfo;
                print("Something went wrong please try after sometime!!");
                //header("refresh:7; url=https://www.elconglobal.com/enquiry.php");
        }else{ ?>
             <div class='success_msg'>Success!!</div>
            <?php
            //header("refresh:5; url=https://www.elconglobal.com/enquiry.php");
                
        }
}
?>

            





      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
         <div class="col-lg-8">
			    <div id="FeedbackForm">
<p>We welcome any question or requirment you may have for our products</p>
<form action=" " method="post" name="Enquiry" onSubmit="return onSubmit()"  enctype ="multipart/form-data">
<input name="redirect" type="hidden">
<input name="recipient" type="hidden" value="info@elconpune.com">
<input name="subject" type="hidden" value="Enquiry From elconglobal.com Website">
<div class="LeftForm">
<input maxLength="100" name="companyName" size="30" class="inputField" placeholder="Company Name*" tabindex="1">
<span><?php   echo ($company_name != "" )? $company_name: ''; ?></span>
<input maxLength="100" name="fullname" size="30" class="inputField" placeholder="Name*"  tabindex="2">
<span><?php   echo ($fullname != "" )? $fullname: ''; ?></span>
<input maxLength="100" name="contact" size="18" class="inputField" placeholder="Contact*"  tabindex="3">
<span><?php   echo ($contact != "")? $contact: ''; ?></span>
<input maxLength="100" name="email" size="29"  class="inputField" placeholder="E-mail*"  tabindex="4">
<span><?php   echo ($email != "" )? $email:''; ?></span>

</div>
<div class="RightForm">
<textarea cols="33" name="address" rows="3" MAXLENGTH="100" class="inputField" placeholder="Address*"  tabindex="5"></textarea>
<textarea cols="34"  placeholder="Requirements Details*"name="requirement_details" rows="3" MAXLENGTH="5000" class="inputField"  tabindex="6"></textarea>
<input type="file" name="file" id="file" onChange="return validateFileExtension(this)"  placeholder="Attach file"/>
<!-- 
  <input type="text" name="q" class="inputField"  placeholder="Please,Enter Below Verification Numbers here:"  tabindex="7">
  <div class="capchaImage">
    <?php
for($i=0; $i<$ilength; $i++)
{
$ipic= substr($mynumber, $i, 1);
$sFilePath = "";
//if (file_exists(".$ipic.".gif"))
$sFilePath = $ipic.".gif";
?>
  <img src="https://mipl.co.in/nb/<?=$sFilePath ?>" class="Validators" />
  <?php
}
?> -->
</div>
<div class="buttonWrapper">
<input type="submit" value="Submit" name="submit" class="formButton">
  <!-- <input type="reset" value="Reset" class="formButton"> -->
  </div>
 </div>
  <div class="clear"></div>
</form>
<span><?php echo $common_error; ?></span> 
					
					
					
					
					
					
</div>
			   </div>
		  
		  <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Elcon Group</h3>
              <p>Gat No-21, H.No - 253, Varve BK, Tal:- Bhor, Dist-Pune, 412210.Maharashtra, INDIA.</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+91 - 87676 06060</h3>
              <p>Monday - Saturday / 9.00 AM - 6.00 PM</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <a href="enquiry.php"><img src="img/email.jpg" alt=""/></a>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  <!-- contact us part start-->
  <section class="project_part section_padding single_page_project">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					 
                    <div class="project_slider owl-carousel">
                        <div class="single_project_slide">
                            <div class="row">
                                <!-- <div class="col-lg-3 col-md-3"> <a href="cable-trays.html"><img src="img/cable-trays-manufacturer.jpg" alt="Cable Trays" title="Cable Trays"></a>
                                    <div class="single_project_text">
                                       
                                        <a href="cable-trays.html" class="admin_name">Cable Trays</a><br><br>
                                       
                                        <a href="cable-trays.html" class="btn_1">READ MORE <span><img
                                                    src="img/icon/left.svg" alt="Cable Trays"></span> </a>
                                    </div>
                                </div> -->
                                <div class="col-lg-3 col-md-3"> <a href="cable-glands-lugs-supplier.html"><img src="img/cable-glands-lugs-manufacturer.jpg" alt="" title="Cable Glands/ Cable Lugs"></a>
                                    <div class="single_project_text">
                                       
                                        <a href="cable-glands-lugs-supplier.html" class="admin_name">Cable Glands / Cable Lugs</a><br><br>
                                       
                                        <a href="cable-glands-lugs-supplier.html" class="btn_1">READ MORE <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                    </div>
                                </div>
                               <div class="col-lg-3 col-md-3"> <a href="earthing-materials.html"><img src="img/earthing-materials-manufacturer.jpg" alt="" title="Earthing Materials"></a>
                                    <div class="single_project_text">
                                       
                                        <a href="earthing-materials.html" class="admin_name">Earthing Materials</a><br><br>
                                       
                                        <a href="earthing-materials.html" class="btn_1">READ MORE <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                    </div>
                                </div>
                               <div class="col-lg-3 col-md-3"> <a href="utility-channel-support-systems.html"><img src="img/utility-channel-support-manufacturer.jpg" alt="" title="Utility Channel Support Systems"></a>
                                    <div class="single_project_text">
                                       
                                        <a href="utility-channel-support-systems.html" class="admin_name">Utility Channel Support Systems</a>
                                       
                                        <a href="utility-channel-support-systems.html" class="btn_1">READ MORE <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_project_slide">
                            <div class="row">
                                  <div class="col-lg-3 col-md-3"> <a href="wire-mesh-cable-trays.html"><img src="img/wire-mesh-cable-trays3.jpg" alt="" title="Wire Mesh Cable Tray"></a>
                                    <div class="single_project_text">
                                       
                                        <a href="wire-mesh-cable-trays.html" class="admin_name">Wire Mesh Cable Tray</a><br><br>
                                       
                                        <a href="wire-mesh-cable-trays.html" class="btn_1">READ MORE <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3"> <a href="heat-insulators.html"><img src="img/heat-insulator.jpg" alt="" title="Heat Insulators"></a>
                                    <div class="single_project_text">
                                       
                                        <a href="heat-insulators.html" class="admin_name">Heat Insulators</a><br><br>
                                       
                                        <a href="heat-insulators.html" class="btn_1">READ MORE <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                    </div>
                                </div>
                              <div class="col-lg-3 col-md-3"> <a href="perforated-cable-trays.html"><img src="img/perforated-cable-tray.jpg" alt="" title="Perforated Cable Tray"></a>
                                    <div class="single_project_text">
                                       
                                        <a href="perforated-cable-trays.html" class="admin_name">Perforated Cable Tray</a><br><br>
                                       
                                        <a href="perforated-cable-trays.html" class="btn_1">READ MORE <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                    </div>
                                </div> 
								<div class="col-lg-3 col-md-3"> <a href="ladder-cable-trays.html"><img src="img/ladder-cable-tray.jpg" alt="" title="Ladder Cable Tray"></a>
                                    <div class="single_project_text">
                                       
                                        <a href="ladder-cable-trays.html" class="admin_name">Ladder Cable Tray</a><br><br>
                                       
                                        <a href="ladder-cable-trays.html" class="btn_1">READ MORE <span><img
                                                    src="img/icon/left.svg" alt=""></span> </a>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- contact us part end-->

   <!-- map us part start-->

   <!-- map us part end-->

   <!-- footer part start-->
  <div class="clearfix"></div>
 <footer class="footer-area">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget footer_1">
          <h4>About Us</h4>
          <p>ELCON GROUP was incorporated in the year 1987 & has a Group Turnover of 50Cr. Elcon Cable Trays was converted to a Pvt Ltd Firm in 2012, Elcon SolTec LLP & Elcon Delta Control LLP were formed in 2017</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget footer_2">
          <h4>Products</h4>
          <ul>
           <!--  <li><a href="cable-trays.html">Cable Trays</a></li> -->
             <li> <a href="raceways-cable-ducts.html"> Raceways Cable Ducts  </a> </li>
            <li><a href="cable-glands-lugs-supplier.html">Cable Glands & Cable Lugs</a></li>
            <li><a href="earthing-materials.html">Earthing Materials</a></li>
            <li><a href="accessories.html">Accessories</a></li>
            <li><a href="wire-mesh-cable-trays.html">Wire Mesh Cable Tray</a></li>
            <li><a href="utility-channel-support-systems.html">Utility Channel Support Systems</a></li>
            <li><a href="heat-insulators.html">Heat Insulators</a></li>
          </ul>
        </div>
        <br>
        <div><a href="enquiry.php" target="_blank"><img src="img/request-quote.png" alt=""/></a></div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="single-footer-widget footer_2">
          <h4>Visit Also</h4>
          <ul>
            <li><a href="https://www.elconpune.com/" target="_blank">www.elconpune.com</a></li>
            <li><a href="https://galvanisedcabletrays.com/" target="_blank">www.galvanisedcabletrays.com</a></li>
            <li><a href="https://gicabletrays.com/" target="_blank">www.gicabletrays.com</a></li>
            <li><a href="https://indiacabletray.com/" target="_blank">www.indiacabletray.com</a></li>
            <li><a href="https://elconcabletray.com/" target="_blank">www.elconcabletray.com</a></li>
            <li><a href="https://www.earthingmaterialindia.com/" target="_blank">www.earthingmaterialindia.com</a></li>
            <li><a href="https://www.laddercabletray.com/" target="_blank">www.laddercabletray.com</a></li>
            <li><a href="https://cabletraysuppliers.com/" target="_blank">www.cabletraysuppliers.com</a></li>
            <li><a href="https://www.perforatedcabletrays.com/" target="_blank">www.perforatedcabletrays.com</a></li>
            <li><a href="https://www.elcongroup.in/" target="_blank">www.elcongroup.in</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Felconpune&tabs=timeline&width=200&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
      </div>
    </div>
  </div>
  <div class="copyright_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p class="footer-text m-0">Designed by <a href="https://maharashtradirectory.com/Aboutus/webdeshost" target="_blank">MID</a>&nbsp; Hosted by<a href="https://www.gujaratdirectory.com/" target="_blank"> GID</a> &nbsp; Promoted by<a href="https://www.punebusinessdirectory.com" target="_blank"> PBD</a> </p>
        </div>
      </div>
    </div>
  </div>
</footer>
   <!-- footer part end-->
   <!-- footer part end-->

   <!-- jquery plugins here-->
   <!-- jquery -->
   <script src="js/jquery-1.12.1.min.js"></script>
   <!-- popper js -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="js/bootstrap.min.js"></script>
   <!-- magnific-popup js -->
   <script src="js/jquery.magnific-popup.js"></script>
   <!-- swiper js -->
   <script src="js/swiper.min.js"></script>
   <!-- masonry js -->
   <script src="js/masonry.pkgd.js"></script>
   <!-- carousel js -->
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/gmap3.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
   </script>
   <script src="js/slick.min.js"></script>
   <script src="js/gijgo.min.js"></script>
   <script src="js/jquery.nice-select.min.js"></script>
   <script src="js/masonry.pkgd.min.js"></script>
   <script src="js/contact.js"></script>
   <script src="js/jquery.ajaxchimp.min.js"></script>
   <script src="js/jquery.form.js"></script>
   <script src="js/mail-script.js"></script>
   <script src="js/jquery.validate.min.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
	
	<!--menu-->
 <!--  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>-->
		<!--menu-->

	
	
	<div class="clear"></div>
<script src="js/jquery.palkesh-menu.min.js"></script> 


<script>
 if( jQuery().meanmenu ){
        jQuery('header nav').meanmenu({
            meanMenuClose: '<i class="fa fa-times"></i>', // single character you want to represent the close menu button
            meanExpand: "", // single character you want to represent the expand for ULs
            meanContract: "", // single character you want to represent the contract for ULs
            meanMenuContainer: '#responsive-menu-container', // Choose where meanmenu will be placed within the HTML
            meanScreenWidth: "768", // set the screen width you want meanmenu to kick in at
            meanRemoveAttrs: true // true to remove classes and IDs, false to keep them
        });
    }

</script> 

<script type="text/javascript">
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var refferer = (document.referrer) ? encodeURIComponent(document.referrer) : '';
var location  = (document.location) ? encodeURIComponent(document.location) : '';
po.src = '//elconpune.com/support/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(hide_offline)/yes/(check_operator_messages)/yes/(top)/350/(units)/pixels/(leaveamessage)/yes/(department)/49?r='+refferer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
</body>

</html>
