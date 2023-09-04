<?php
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us | IT World Technologies</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<img src="images/contact_banner.png" alt="contact banner" class="img-responsive"/>
    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead"><h3>We are as eager to work on an exciting project as you are to partner with a great company. Surely, a good reason to get in touch.

</h3></p>
        </div>
         <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Contact Us</h2>
                </div> 
                <?php
                    $Msg="";
                    if(isset($_GET['error']))
                    {
                        $Msg="Please fill in the blanks";
                        echo '<div class="alert alert-danger">'.$Msg.'</div>';
                    }

                     if(isset($_GET['success']))
                     {
                        $Msg="Your Message has been sent";
                        echo '<div class="alert alert-success">'.$Msg.'</div>';
                     }
                ?>
            <div class="row contact-wrap"> 
                <div class="status alert alert-success " style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="align_left">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="NAME" required="required">
                        </div>
                            <div class="form-group">
                            <input type="email" name="email" class="form-control"  placeholder="EMAIL" required="required">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" placeholder="PHONE " class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" placeholder="MESSAGE" required class="form-control" rows="8"></textarea>
                        </div>                        
                        
                            <div class="clear"></div>
                            <div class="check_box">                         
                                <input type="checkbox" id="c1" name="Service" value="Web Design and Development" />
                                <label for="c1"><span></span>Web Design & Development</label><br>
                                
                                <input type="checkbox" id="c2" name="Service" value="Mobile Application Development" />
                                <label for="c2"><span></span>Mobile Application Development</label><br>
                                
                                <input type="checkbox" id="c3" name="Service" value="E-Commerce Solutions" />
                                <label for="c3"><span></span>E-Commerce Solutions</label><br>
                                
                                <input type="checkbox" id="c4" name="Service" value="Dedicated Hosting" />
                                <label for="c4"><span></span>Dedicated Hosting</label><br>
                                
                                <input type="checkbox" id="c5" name="Service" value="Web Application Development" />
                                <label for="c5"><span></span>Web Application Development</label><br>
                                
                                <input type="checkbox" id="c6" name="Service" value="Search Engine Optimization" />
                                <label for="c6"><span></span>Search Engine Optimization</label><br>
                                
                                <input type="checkbox" id="c7" name="Service" value="Digital Marketing" />
                                <label for="c7"><span></span>Digital Marketing</label><br>
                                
                                <input type="checkbox" id="c8" name="Service" value="Social Media Optimization" />
                                <label for="c8"><span></span>Social Media Optimization</label><br>
                                
                                <input type="checkbox" id="c9" name="Service" value="Website Maintenance Services" />
                                <label for="c9"><span></span>Website Maintenance Services</label><br>                                  
                            </div>
                            <span id="divCULoader"><input type="submit" name="submit" id="submit" class="ct_input_submit submit_btn_effect" value="SEND NOW"></span>
                        </div>
                        </form>        
        </div><!--/.row-->        
        </div><!--/.container-->  
    </section><!--/#contact-page--><br>
    <div class="container">
            <div class="center wow fadeInDown">
<h2 class="align_left">Frequently Asked Question</h2>
                <p class="lead"><b>Q- Which IT Company is best in Noida Delhi?</b><br>
                    A-  You can find many of the IT solutions company in Noida offering digital solutions for your business. Moreover, you can't find any best company better than IT World Technologies. Contact us to get the best solution for your business.<br><br>

                    <b>Q- How does IT Company work?</b><br>
                    A-  If you are thinking to get a digital solution for your business. Then the executive of IT World Company in Noida Delhi will meet you to know about the requirements for your business. What you want for your business. And of course which strategy will be the best to get you on track. After getting done with all the query round they will start plotting the pan and implement it.<br><br>

                    <b>Q- What does IT Company do?</b><br>

                    A-  IT solution companies in Noida do provide a digital solution for your products or services. Using digital solutions like digital marketing, website development, etc. you can get rapid success for your business.<br><br>

                    <b>Q- What technologies do you use for web development?</b><br>
                    A-  We use many of the modern technologies to make your website present your business that appeals to your customers. This is why we use HTML, CSS, Java, Joomla, WordPress, Magento, etc.<br><br>


                    <b>Q- What does digital marketing company do?</b><br>
                    A-  Digital marketing company in Noida works to provide sales by launching ads campaigns over social media platforms. You can generate more leads for your business through social media platforms such as Instagram, Facebook, YouTube, etc.<br><br>

                    <b>Q- Why do I need to hire a digital marketing company?</b><br>
                    A-  A digital marketing company in Noida will be implementing the right technology apt for your business growth. This is the fact, a professional can do its work at its best. So don't you need to worry too much now?<br><br>

                    <b>Q- How much do digital marketing company in Noida charge?</b><br>
                    A-  IT World Company in Noida Delhi company doesn't charge much out of your budget. Our company provides pocket-friendly digital marketing services that make your business thrive on top.<br><br>
                    </p>
            </div>
        </div>
         <div class="gmap-area">
        <div class="container">
            <div class="row">
                
                    <div>
                        <iframe width="100%"
                                height="450"
                                frameborder="0" style="border:0"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDrD9H_YMC7JQTZCeufJN4NQ8RzhABBPls&q=IT+World+Technologies,Noida+India" allowfullscreen></iframe>

                    </div>
                </div><br>  
                <div class="col-sm-6 map-content">
                    <ul class="row">
                        <li class="col-sm-6">
                            <address>
                                <h5>Noida INDIA</h5>
                                <p>B-66, Ground Floor, B Block Road Sector 64 </p>
                                <p>Noida, Uttar Pradesh India 201301</p>
                                <p>
                                    Phone:+919935811101<br>
                                    Email Id:info@itworldtechs.in
                                </p>
                            </address>
                        </li>
                                                           
                        <li class="col-sm-6">                           
                            <address>
                              <h5>Bangaluru INDIA</h5>
                                <p>5,6,7, 4th Floor Sanjeevani Complex</p>
                                <p>Gear Road Doddakannelli, Bangaluru, India.</p>
                                <p>
                                    Phone:+919935811101<br>
                                    Email Id:info@itworldtechs.in
                                </p>
                            </address>
                        </li>
                    </ul>
                </div>
                    <div class="col-sm-6 map-content">
                    <ul class="row">                    
                        <li class="col-sm-6">                                                
                            <address>
                                <h5>IRVING, Texas Dallas</h5>
                                <p>9901 East Valley Ranch Parkway</p>
                                <p>Ste#3045, IRVING, TX-75063</p>
                                <p>
                                    Email Address:info@itworldtechs.in<br>
                                    Skype-live:itworldtechs
                                </p>
                            </address>                        
                        </li>
                     <li class="col-sm-6">
                            <address>
                                <h5>California USA </h5>
                                <p>Coming Soon</p>
                                <p>
                                    Email Address:info@itworldtechs.in<br>
                                    Skype-live:itworldtechs
                                </p>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><br><br>
      


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <?php
    include('footer.php');
?>
</body>
</html>