<?php    
$message = '
<html>
<head>
  <title>PRODUCT ENQUIRY</title>
</head>
<body>
  <table>

    <tr>
      <td>Name :</td>
      <td>'.$_REQUEST["name"].'</td>
    </tr>
    <tr>
      <td>Telephone :</td>
      <td>'.$_REQUEST["tel"].'</td>
    </tr>
    <tr>
      <td>Email :</td>
      <td>'.$_REQUEST["email"].'</td>
    </tr>
    
    
    </table>
</body>
</html>
';
    $subject = "GST Registration"; 
    $to="spmohanty03@gmail.com";
    $headers  = "MIME-Version: 1.0\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\n"; 

    mail($to, $subject, $message, "From:" .$_REQUEST["email"]. "\nReply-To:".$_REQUEST["email"].$headers); 
     
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="refresh" content="1; URL=GST-Registration.html">
    <title>Taxvisor</title>

    <link rel="stylesheet" href="assets/stylesheets/icons.min.css">
    <link rel="stylesheet" href="assets/stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/stylesheets/main.css">
    <link rel="stylesheet" href="assets/stylesheets/red-color.css">
    <link rel="stylesheet" href="assets/stylesheets/yellow-color.css">
    <link rel="stylesheet" href="assets/stylesheets/blue-color.css">
    <link rel="stylesheet" href="assets/stylesheets/responsive.css">
    <link rel="stylesheet" href="assets/font-awsome/css/fontawesome.css">
    <link rel="stylesheet" href="assets/font-awsome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/font-awsome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/font-awsome/css/fontawesome-all.min.css">

    <!-- Revolution Style -->
    <link rel="stylesheet" href="assets/stylesheets/revolution/settings.css">
    <link rel="stylesheet" href="assets/stylesheets/revolution/navigation.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117625082-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117625082-1');
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ac24fa14b401e45400e4632/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</head>
<body itemscope>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <main>
        <div class="rspn-hdr">
            <div class="lg-mn">
                <div class="logo">
                    <h1><a href="index.html" title="" itemprop="url"><img src="assets/images/lgo1-drk.png" alt="lgo1-drk.png" itemprop="image"></a></h1>
                </div>
                <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul>
                    <li><a href="index.html" title="" itemprop="url">Home</a></li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">GST</a>
                        <ul >
                                          <li><a href="GST-Registration.html"></i>GST Registration</a></li>
                                          <li><a href="GST-Return-Filing.html"></i>GST Return Filing</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Start Business</a>
                        <ul>
                                              <li><a href="Proprietorship-Firm.html">Proprietorship Firm</a></li>
                                              <li><a href="Partnership-Firm.html">Partnership Firm</a></li>
                                              <li><a href="Limited-Liability-Partnership.html">Limited Liability Partnership</a></li>
                                              <li><a href="Private-Limited-Company.html">Private Limited Company</a></li>
                                              <li><a href="One-Person-Company.html">One Person Company (OPC)</a></li>
                        </ul>
                    </li>

                     <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Business Services</a>
                        <ul>
                                                <li><a href="Import-Export-Code.html">Import Export Code (IEC)</a></li>
                                                <li><a href="MSME.html">Micro, Small and Medium Enterprise (MSME)</a></li>
                                                <li><a href="Digital-Signature-Certificate.html">Digital Signature Certificate</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children"><a href="#" tmark-Objection.html">Objection</a></li>
                                                        <li><a href="Trademark-Renewal.html">Renewal</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="Import-Export-Code.html">Import Export Code (IEC)</a></li>
                                                <li><a href="FSSAI.html">FSSAI</a></li>
                                                <li><a href="MSME.html">Micro, Small and Medium Enterprise (MSME)</a></li>
                                                <li><a href="Digital-Signature-Certificate.html">Digital Signature Certificate</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Knowledge</a>
                        <ul>
                                              <li><a href="GST.html">GST</a></li>
                                              <li><a href="Income-Tax.html">Income Tax</a></li>
                                              <li><a href="Others.html">Others</a></li>
                        </ul>
                    </li>
                    <li><a href="Login.html" title="" itemprop="url">Login</a></li>
                    <li><a href="Login.html" title="" itemprop="url">Sign-Up</a></li>
                    <li><a href="Contact.html" title="" itemprop="url">Contact</a></li>
                </ul>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->
        
        <header class="stck styl1 aftr-sec">
            <div class="lgo drk-blu-bg"><h1 itemprop="headline"><a href="index.html" title="Home" itemprop="url"><img src="assets/images/lgo1-lgt.png" alt="lgo1-lgt.png" itemprop="image"></a></h1></div>
            <nav>
                <ul>
                    <li><a href="index.html" title="" itemprop="url">Home</a></li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">GST</a>
                        <ul >
                                          <li><a href="GST-Registration.html"></i>GST Registration</a></li>
                                          <li><a href="GST-Return-Filing.html"></i>GST Return Filing</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Start Business</a>
                        <ul>
                                              <li><a href="Proprietorship-Firm.html">Proprietorship Firm</a></li>
                                              <li><a href="Partnership-Firm.html">Partnership Firm</a></li>
                                              <li><a href="Limited-Liability-Partnership.html">Limited Liability Partnership</a></li>
                                              <li><a href="Private-Limited-Company.html">Private Limited Company</a></li>
                                              <li><a href="One-Person-Company.html">One Person Company (OPC)</a></li>
                        </ul>
                    </li>

                     <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Business Services</a>
                        <ul>			        <li><a href="Import-Export-Code.html">Import Export Code (IEC)</a></li>
                                                <li><a href="MSME.html">Micro, Small and Medium Enterprise (MSME)</a></li>
                                                <li><a href="Digital-Signature-Certificate.html">Digital Signature Certificate</a></li>
                        </ul>
                    </li>

                    

                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Knowledge</a>
                        <ul>
                                              <li><a href="GST.html">GST</a></li>
                                              <li><a href="Income-Tax.html">Income Tax</a></li>
                                              <li><a href="Others.html">Others</a></li>
                        </ul>
                    </li>
                    <li><a href="Login.html" title="" itemprop="url">Login</a></li>
                    <li><a href="Login.html" title="" itemprop="url">Sign-Up</a></li>
                    <li><a href="Contact.html" title="" itemprop="url">Contact</a></li>
                </ul>
            </nav>
        </header><!-- Header -->
        <div class="hdr-hgt"></div>
        <section>
            <div class="gp no-gp">
                <div class="row mrg">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="cnt-inf-wrp text-left gry-bg2">
                            <h1 itemprop="headline" style="text-align: center;">Thank You</h1>
                            <h3 itemprop="description" style="text-align: center;">We will reach you soon as possible</h3>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>



        <section>
            <div class="gp">
                <div class="container">
                     <div class="row">                        
                        <div class="col-md-7">
                             <h1 itemprop="headline">What is GST Registration?</h1>
                             <p style="font-size: 18px; color: black; text-align: justify;">In GST regime, businesses whose turnover exceeds Rs. 20lakhs (10lakhs in case of north east states, J&K, Himachal Pradesh and Uttarakhand) is required to register as a normal taxable person in Goods and Service Tax. The process of registration is GST Registration.<br><br>

                            For some business, registration under GST is mandatory. If the organisation conducts business without being registered in GST may face heavy penalties and fines. The process of GST registration normally takes 3 working days, our experts will assist you in getting registered in GST in 3 steps.
                            </p>
                        </div>
                        <div class="col-md-5">
                        </div>    

                    </div>
                </div>
            </div>
        </section>




        <section>
            <div class="gp">
                <div class="container">
                     <div class="row">      
                      <div class="col-md-5">
                        </div>                      
                        <div class="col-md-7">
                            <h1 itemprop="headline">GST Registration Process</h1>
                             <p style="font-size: 18px; color: black; text-align: justify;">The Goods And Services Tax (GST) Registration services at ClearTax helps you to get your business GST registered and obtain your GSTIN.<br></br>

ClearTax GST experts will guide you on the applicability and compliances under GST for your business and get your business registered under GST.</p>
                        </div>
                       

                    </div>
                </div>
            </div>
        </section>


 <section>
            <div class="gp">
                <div class="container">
                     <div class="row">                        
                        <div class="col-md-12">
                             <h1 itemprop="headline">Who should register for GST?</h1>
                            <p style="font-size: 16px; color: black; line-height: 25px;">

                                <i class="fas fa-check"></i> Person making inter-state supply<br>
                                <i class="fas fa-check"></i> Agent (Person supplying goods or services on behalf of someone else)<br>
                                <i class="fas fa-check"></i> Casual taxable person<br>
                                <i class="fas fa-check"></i> Input service Distributor<br>
                                <i class="fas fa-check"></i> Who are required to pay tax under Reverse Charge<br>
                                <i class="fas fa-check"></i> Vendor selling on e-commerce platform <br>
                                <i class="fas fa-check"></i> Non resident taxable person making any taxable supply<br>
                                <i class="fas fa-check"></i> Every e-commerce operator<br>
                                <i class="fas fa-check"></i> Person rendering online information database access services from outside India<br>
                                <i class="fas fa-check"></i> Who are required to deduct TDS.<br>
                                <i class="fas fa-check"></i> Any other person notified by the Government from time to time.<br>

                        </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="gp">
                <div class="container">
                     <div class="row">                        
                        <div class="col-md-12">
                             <p style="font-size: 20px; color: red; text-align: center;"><i>Person required to be registered under GST and not registered may face heavy penalty 100% of amount of tax.</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>




 <section>
            <div class="gp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           <h1 itemprop="headline">Documents Required for GST Registration</h1>
                                    

 <div class="col-md-6">
 	<h3>Business proof</h3>
 	<p style="font-size: 16px; color: black; line-height: 25px;">

            <i class="fas fa-check"></i> PAN of Applicant<br>
            <i class="fas fa-check"></i> Aadhaar Card<br>
            <i class="fas fa-check"></i> Passport size photo<br>
            <i class="fas fa-check"></i> Copy of cancelled cheque/ bank statement<br>
</p>
 </div>

 <div class="col-md-6">
 	<h3>Address Proof</h3>
 	<p style="font-size: 16px; color: black; line-height: 25px;">

            <i class="fas fa-check"></i> Electricity Bill <br>
            <i class="fas fa-check"></i> Rent Agreement<br>
            <i class="fas fa-check"></i> NOC Certificate from owner of property (if rented or consent by owner)<br>
           
</p>
 </div>


                               </div>
                       
                    </div>
      </div>
        </section>



<section>
            <div class="gp">
                <div class="container">
                     <div class="row">                        
                        <div class="col-md-12">
                             <h1 itemprop="headline">Types of GST Registration</h1>
                        </div>
                        
                        <div class="col-md-4">
<table style="border: solid; border-width: 1px; border-bottom-width: 5px; color:#009adf;" width="100%">
<tr>
<td style="text-align: center; font-size: 25px; color: black; line-height: 50px">
Regular Registration</td></tr>
</table>
</div>

 <div class="col-md-4">
<table style="border: solid; border-width: 1px; border-bottom-width: 5px; color: #009adf;" width="100%">
<tr>
<td style="text-align: center; font-size: 25px; color: black; line-height: 50px">
Composit Registration</td></tr>
</table>
</div>

 <div class="col-md-4">
<table style="border: solid; border-width: 1px; border-bottom-width: 5px; color:#009adf;" width="100%">
<tr>
<td style="text-align: center; font-size: 25px; color: black; line-height: 50px">
Casual Registration</td></tr>
</table>
</div>




                        
                    </div>
                </div>
            </div>
        </section>



<section>
            <div class="gp">
                <div class="container">
                     <div class="row">                        
                        <div class="col-md-12">
                             <h1 itemprop="headline">Benefits of getting GST registration?</h1>
                        </div>
                        
                        <div class="col-md-4">
                             <h4>For Voluntarily egistered person</h4>

                             <p style="font-size: 16px; color: black; line-height: 25px;">

            <i class="fas fa-check"></i> Proof of business existence<br>
            <i class="fas fa-check"></i> Take input tax credit on purchases<br>
            <i class="fas fa-check"></i> Make interstate sales<br>
            <i class="fas fa-check"></i> Register on e-commerce websites as a seller<br>
            <i class="fas fa-check"></i> Competitive advantage compared to other businesses<br>
            
                            </p>
                        </div>

                <div class="col-md-4">
                             <h4>For Normal Registered Person</h4>

                             <p style="font-size: 16px; color: black; line-height: 25px;">

            <i class="fas fa-check"></i> Legally recognized as supplier<br>
            <i class="fas fa-check"></i> Make interstate sales<br>
            <i class="fas fa-check"></i> Take input tax credit on purchases<br>
            <i class="fas fa-check"></i> Register on e-commerce websites as a seller<br>
            <i class="fas fa-check"></i> Can raise tax invoice<br>
            
                            </p>
                        </div>
 

 <div class="col-md-4">
                             <h4>For Composite Dealer</h4>

                             <p style="font-size: 16px; color: black; line-height: 25px;">

            <i class="fas fa-check"></i> Less tax liability <br>
            <i class="fas fa-check"></i> More working capital<br>
            <i class="fas fa-check"></i> Limited compliances<br>
            <i class="fas fa-check"></i> Lower rate of tax<br>
            <i class="fas fa-check"></i> No input tax credit<br>
            
                            </p>
                        </div>

                        
                    </div>
                </div>
            </div>
        </section>

       <section>
            <div class="gp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           <h1 itemprop="headline">Compliances after GST Registration</h1>
                            
                            <p style="font-size: 16px; color: black; line-height: 25px;">         
                           After getting registered in GST, There are compliances which has to be complied properly, if not then there are heavy penalties<br><br>


                           <b>1)   Invoices: </b>In GST regime ,Invoices play a great role. Invoices must be made as per rules of GST, one can also use our GST Invoicing software to create GST complaint invoice for FREE.<br><br>
                           <b>2)  Returns:</b> There are several return under GST depending upon type of taxpayer and has to be filed on or before due date to avoid interest, late fees and penalties. Registered person should file their returns irrespective of their sales and purchases.<br><br>
                            
                           <i>For any queries contact us on <a href="tel:9136566866">9136566866</a> or <a href="mailto:info@taxvisor.in">info@taxvisor.in</a></i>
                            </p>



                               </div>
                       
                    </div>
      </div>
        </section>


        <section>
            <div class="gp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           <h1 itemprop="headline" align="center">Related articles</h1>
                        </div>
<div class="col-md-2">
</div>
                        <div class="col-md-4">
                             <p style="font-size: 16px; color: black; line-height: 25px;">

            <i class="fas fa-check"></i> Verify GST Identificaion Number <br>
            <i class="fas fa-check"></i> Cancellation of GST<br>
            <i class="fas fa-check"></i> Invoice under GST<br>
                            </p>
                        </div>

                       <div class="col-md-4">
                             <p style="font-size: 16px; color: black; line-height: 25px;">
              <i class="fas fa-check"></i> Composition Scheme under GST<br>
            <i class="fas fa-check"></i> Casual Taxable Person<br>
            <i class="fas fa-check"></i> Returns under GST<br>
                            </p>
                        </div>
                        <div class="col-md-2">
                        </div>
                       
                    </div>
      </div>
        </section>



        <footer>
            <div class="gp ls-spc drk-bg2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="wdgt wdgt_abt">
                              
                                <div class="cnt-inf-lst">
                                    <span><i class="fa fa-phone"></i> Phone: 9136566866</span>
                                    <span><i class="fa fa-envelope"></i> Email: info@taxvisor.in<br><br></span>
                                    <img src="assets\images\comodo.png">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="wdgt wdgt_cate">
                                <h4 class="wdgt-tl" itemprop="headline">Information</h4>
                                <ul>
                                    <li><a href="Contact.html" title="" itemprop="url">Contact Us</a></li>
                                    <li><a href="Terms-of-Service.html" title="" itemprop="url">Terms & Conditions</a></li>
                                    <li><a href="Privacy-Policy.html" title="" itemprop="url">Privacy Policy</a></li>
                                    <li><a href="Refund-Policy.html" title="" itemprop="url">Refund Policy</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="wdgt wdgt_cate">
                   <div class="fb-page" data-href="https://www.facebook.com/Taxvisor-1794755477486519/" data-tabs="timeline" data-height="300" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Taxvisor-1794755477486519/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Taxvisor-1794755477486519/">Taxvisor</a></blockquote></div>
                            </div>
                        </div>

                         


                        
                       
                    </div>
                </div>
            </div>

        </footer>
        <div class="btm-br drk-bg3 text-center">
           <div class="container"><p itemprop="description">&copy; Managed by Taxvisor</p></div>
        </div>
    </main><!-- Main Wrapper -->

    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/scripts/bootstrap.min.js"></script>
    <script src="assets/scripts/highcharts.js"></script>
    <script src="assets/scripts/exporting.js"></script>
    <script src="assets/scripts/highcharts-more.js"></script>
    <script src="assets/scripts/plugins.js"></script>
    <script src="assets/scripts/chrt-int1.js"></script>
    <script src="assets/scripts/main.js"></script>

    <!-- Revolution JS Files -->
    <script src="assets/scripts/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="assets/scripts/revolution/jquery.themepunch.revolution.min.js"></script>

    <!-- Slider Revolution 5.0 Extensions -->   
    <script src="assets/scripts/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/scripts/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/scripts/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/scripts/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/scripts/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/scripts/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/scripts/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/scripts/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/scripts/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/scripts/revolution/revolution.initialize11.js"></script>
</body>	
</html>