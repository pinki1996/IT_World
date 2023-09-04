<?php
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="google-site-verification=PgTrCIFeao5k-xVTE9HbnXl0cxOkIXw_3_7S9SD2E3o" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IT World: Website Design Company Noida | Digital Marketing Company Noida - ITWorldTechs.in
</title>
    <meta name="description" content="- IT World🌍 Improves your Business Online with client satisfaction. Website Design & Digital Marketing Services Company Noida Delhi. Call Us on☕+919935811101." />

    <meta name="keywords" content="website design company in Noida, digital marketing Services in Noida Delhi NCR, Website design and development in Noida India, responsive website design company in Noida Delhi, affordable price website design in Noida Delhi, best digital marketing Company in Noida Delhi NCR, E-commerce Website Design Company in Noida Delhi, Digital Marketing Services, IT Company in Noida.
" />
    <meta name="author" content="IT World Technologies Pvt.Ltd">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 days">
    <!-- IT World Technologies is a Best Web Design & Developement Company in Delhi-NCR India-ITWorldTechs.in -->
    <meta name="google-site-verification=PgTrCIFeao5k-xVTE9HbnXl0cxOkIXw_3_7S9SD2E3o" />
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                 <li data-target="#main-slider" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/first.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/second.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                                    <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/third.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/fourth.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <div id="navbar">
            <li class="col-sm-7">
          <a class="fa fa-skype" href="live:itworldtechs"> Skype</a>
          <a class="fa-whatsapp" href="live:itworldtechs">Whatsapp On +919935811101 </a>
          <button style="color: Red " data-toggle="modal" data-target="#myModal" href="">Request on call</button>
          <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Contact Us</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
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

                  <!-- Modal body -->
                  <div class="modal-body">
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
                        <span id="divCULoader"><input type="submit" name="submit" id="submit" class="ct_input_submit submit_btn_effect" value="SEND NOW"></span>
                        </div>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>

    </div>
  </div>
</div>
        </div>
    </div>
        <script>
            window.onscroll = function() {myFunction()};

            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;

            function myFunction() {
              if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
              } else {
                navbar.classList.remove("sticky");
              }
            }
            </script>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
    <section class="container">
        <div class="center">
            <h3> <b>IT WORLD TECHNOLOGIES</b> </h3>
            <h2>Website Design | Digital Marketing Services Company in Noida Delhi India</h2>
            <p class="lead">
                A professional and attractive looking website is a basic need for any successful business
                in today’s world. To get an attractive and interactive website for your website, you will need to hire one of the best <b>website design company in Noida</b>. A professional web designing company will deliver the exact website that you desire. But it’s not that easy to find the best company which will deliver the website exactly as you require.
				<b>IT World Technologies</b> is ranked as the #1 Website design and development in Noida India because we are always available for our client’s help and provide them with premium quality services. The only aim to have a website for your business is to break the distance boundaries and attract potential clients. Therefore, none of the business owners or entrepreneurs is deprived of a website for their business. Well, having a ‘call-to-action button’ on your website brings you closer to the potential customers. With this idea in mind, you can create an easy option for your customers to reach out to you. This means that your clients don’t bounce back from your website.Apart from having a website, it is very important for you to make an appropriate marketing strategy by which your customers can easily search you online. It takes a lot of experience to design one marketing strategy which will pull out the high conversion rate for you. To get it done, you will need professional <b>digital marketing services in Delhi NCR</b>. Also, if your website does not get adjusted with different screen sizes and resolutions then you need to contact the best responsive website design company in Noida Delhi, that is exactly what IT World Technologies does. Because nobody does it better than the IT professional since they hold a lot of experience and IT World Technologies is the right company for your website designing and development. To get more insight into our services kindly continue reading.

            <div class="center wow fadeInDown">
                <h3>WHAT WE DO ?</h3>
                <p class="lead">From website content management to customer relationship management. IT World Technologies has first-class engineering and thoughtful strategies to meet all digital marketing needs. We have built our reputation by offering rewarding projects within strict deadlines </p>
                <p class="lead">IT World Technologies is always looking forward to maintaining long-term partnerships as well as providing real-time customer service 24 hours a day, 365 days a year. We work with our customers to understand their interests, plans, needs, business goals. While combining industry knowledge with in-depth analysis, we develop results-oriented success strategies.</p>
                <p class="lead">Using proven technology, innovative ideas, and rich industry experience, we at IT World Technologies have created a plan to carry out every project with creativity. We always thrive to develop new systems for you and get the desired results that meet your expectations. Our expert developers are knowledgeable, experienced, creative, and help you achieve your website goals.</p>
                <p class="lead">We, at IT World Technologies, provide customized solutions from start to finish with implementation, integration, and expertise. Our team will help you through SEO, PPC, digital marketing, website design, and other allied services.</p>

            </div>
            <div id="services"></div>
 <div class="campus-container-about">
            <div class="container container-1">
                <div class="hadding">
                    <div class="center wow fadeInDown">
                <h2>Our Services</h>
                    </div>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                        <div class="campus">
                            <a href="https://www.weblieu.com/e-commerce-development">
                                <p>Website Design and Development Services </p>
                            <img src="images/portfolio/recent/item1.png" style="width: 100%;">
                            
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                            <a href="https://www.weblieu.com/static-web-designing">
                            <p>Digital Marketing Services</p>
                            <img src="images/portfolio/recent/item2.png" style="width: 100%;">
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                           <a href="https://www.weblieu.com/e-commerce-development">
                            <p>Apps Development Services </p>
                            <img src="images/portfolio/recent/item4.png" style="width: 100%;">
                           </a>
                        </div>

                    </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                            <a href="https://www.weblieu.com/search-engine-optimization">
                            <p>Domain & Hosting</p>
                            <img src="images/portfolio/recent/item5.png" style="width: 100%;">
                            </a>
                        </div>

                    </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                           <a href="https://www.weblieu.com/digital-marketing">
                            <p>Software Development</p>
                            <img src="images/portfolio/recent/item6.png" style="width: 100%;">
                           </a>
                        </div>
                        </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                           <a href="https://www.weblieu.com/digital-marketing">
                            <p>Product Development</p>
                            <img src="images/portfolio/recent/item7.png" style="width: 100%;">
                           </a>
                        </div>
                        </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                           <a href="https://www.weblieu.com/digital-marketing">
                            <p>Ecommerce Solutions</p>
                            <img src="images/portfolio/recent/item8.png" style="width: 100%;">
                           </a>
                        </div>
                        </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                           <a href="https://www.weblieu.com/digital-marketing">
                            <p>Annual Maintenance</p>
                            <img src="images/portfolio/recent/item7.png" style="width: 100%;">
                           </a>
                        </div>
                        </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                           <a href="https://www.weblieu.com/digital-marketing">
                            <p>Online Reputation Management</p>
                            <img src="images/portfolio/recent/item7.png" style="width: 100%;">
                           </a>
                        </div>
                        </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                           <a href="https://www.weblieu.com/digital-marketing">
                            <p>Search Engine Optimisation </p>
                            <img src="images/portfolio/recent/item7.png" style="width: 100%;">
                           </a>
                        </div>
                        </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                           <a href="https://www.weblieu.com/digital-marketing">
                            <p>Social Media Optimisation </p>
                            <img src="images/portfolio/recent/item7.png" style="width: 100%;">
                           </a>
                        </div>

                    </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                               <a href="https://www.weblieu.com/pay-per-click-ppc">
                            <p>Pay Per Click (PPC)</p>
                            <img src="images/portfolio/recent/item7.png" style="width: 100%;">
                               </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->
        <section id="services" class="service-item">
       <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Skills</h2>                
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">PHP</h3>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services2.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Cake PHP</h3>
                    </div>
                </div>

               <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services3.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Laravel</h3>
                    </div>
                </div>  

                 <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services4.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Ionic</h3>
                    </div>
                </div>

                 <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services5.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Angular</h3>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services6.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Node JS</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services7.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">React</h3>
                    </div>
                </div>     
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services8.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Codeigniter</h3>
                    </div>
                </div>     
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services9.png">
                        </div>
                        <div class="media-body">                                                   
                        </div>
                        <h3 class="media-heading">Bootstrap</h3>
                    </div>
                </div>     
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services10.png">
                        </div>
                        <div class="media-body">                           
                        </div>
                         <h3 class="media-heading">Typescript</h3>
                    </div>
                </div>     
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services11.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-text">Wordpress</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services12.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Sass</h3>
                    </div>
                </div>                                                           
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->
    <section>
       <div id="services"></div>
 <div class="campus-container-about">
            <div class="container container-1">
                <div class="hadding">
                    <div class="center wow fadeInDown">
                <h2>Our Work</h>
                    </div>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                        <div class="campus">
                            <a href="https://www.weblieu.com/e-commerce-development">
                            <img src="images/services/work1.jpg" style="width: 100%;">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                            <a href="https://www.weblieu.com/static-web-designing">
                            <img src="images/services/work2.jpg" style="width: 100%;">                          
                            </a>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                           <a href="https://www.weblieu.com/e-commerce-development">
                            <img src="images/services/work3.jpg" style="width: 100%;">
                           </a>
                        </div>

                    </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                            <a href="https://www.weblieu.com/search-engine-optimization">
                            <img src="images/services/work4.jpg" style="width: 100%;">
                            </a>
                        </div>

                    </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                           <a href="https://www.weblieu.com/digital-marketing">
                            <img src="images/services/work5.jpg" style="width: 100%;">
                           </a>
                        </div>
                        </div>
                      <div class="col-md-4">
                        <div class="campus" data-aos="fade-right" data-aos-offset="200" data-aos-duration="750">
                           <a href="https://www.weblieu.com/digital-marketing">
                            <img src="images/services/work6.jpg" style="width: 100%;">
                           </a>
                        </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>


            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->
    <section class="container">
        <div class="center">
            <h3 ><b>Best IT solution at affordable rates</b></h3>
            <p class="lead">Take it easy because our services are never expensive. You are dealing with inexpensive website design and development in India.</p>
            <p class="lead">At IT World Technologies, we serve not only the small business but also start-up as well as huge organized enterprises. So, while sharing your website requirements with us, feel free, and don’t expect the services to run out of your budget. Share every tiny detail that you want on your website so that way we may assist you better. IT World Technologies aims to deliver affordable website design in Noida Delhi to every client. When you are dealing with IT World Technologies, you get support for a lifetime whether you want to change the content of your website or anything else related to it.</p>
            <p class="lead"><b>About Our Company</b><br>
            IT World Technologies company was started in the year 2015 in Noida, Delhi. Over these years, we have gained so many happy and satisfied clients. Being one of the reputed website Design and Digital Marketing company Noida Delhi, IT World Technologies is a one-stop solution for your online version business AKA your website. We have a dedicated team of expert developers to serve each and every client. We take care of our client’s creative demands for their website which is why we offer various services such as responsive website designing, E-commerce website designing, SEO services, digital marketing, etc.</p>

            <p class="lead"><b>Why choose us?</b><br> 
            •   There are many website development companies in Noida Delhi India but offering basic services to your online business is just not enough. Nowadays, your website needs to grab extra attention and stand apart from the crowd due to cut-throat competition in the market. This is where IT World Technologies have gain expertise which makes us one of the best digital marketing Company in Noida Delhi NCR. Not only this, but we are also serving the clients overseas for projects related to e-commerce, digital marketing, PPC, etc. and we are well known as the best E-commerce Website Design Company In Noida Delhi as well as around the globe.<br>
            •   24*7 availability of customer support team<br>
            •   Bunch of IT solution under one table<br>
            •   We have dedicated team to cater to every need for your website<br>
            •   Affordable services that meet your business requirements</p>

            </p>
        </div>
    </section>
<section id="services" class="service-item">
       <div class="container">
            <div class="center wow fadeInDown">
                <h2>INDUSTRIES WE SERVE</h2>                
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In1.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Healthcare</h3>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In2.jpg">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Food</h3>
                    </div>
                </div>

               <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In3.jpg">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">B2B</h3>
                    </div>
                </div>  

                 <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In4.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Education</h3>
                    </div>
                </div>

                 <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In5.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Associations</h3>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In6.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Telecom/Tech</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In7.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Non-Profit</h3>
                    </div>
                </div>     
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In8.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Financial</h3>
                    </div>
                </div>     
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In9.png">
                        </div>
                        <div class="media-body">                                                   
                        </div>
                        <h3 class="media-heading">Retail</h3>
                    </div>
                </div>     
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In10.png">
                        </div>
                        <div class="media-body">                           
                        </div>
                         <h3 class="media-heading">Utilities</h3>
                    </div>
                </div>     
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In11.png">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-text">Travel</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/In12.jpg">
                        </div>
                        <div class="media-body">                            
                        </div>
                        <h3 class="media-heading">Chemical</h3>
                    </div>
                </div>                                                           
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->    
<section class="container">
        <div class="center">
            <h4><b>YOU WANT TO SPREAD YOUR BUSINESS?</b></h4>
            <p class="lead">Having a simple business running offline is not just enough in this growing digital world. If you want recognition for your business you need to reach out to maximum potential users. This is how your business can get recognition and become a brand. Now, achieving this is not just a cupcake. It takes a lot of time and if you want the rapid growth of your business. getting a website ready for your business is the only solution. To rank up your online business, the first thing that needs to be done is to take the right step by choosing the domain and web hosting for your website. Then leave the rest of the job in our safe hands. We create a specialized website design in Noida Delhi for your business. The next step is to present your website in front of your customers or the launch of your website. Further, you need marketing of your website and you need to present an appealing website to the potential customers. This is what IT World Technologies do for you, starting from the scratch to the presentation of the website to the customers within your budget.
                </p>
        </div>
    </section>
   
    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h5>-Do you have project and want to discuss with us?</h5>
                            <p class="lead"><b>IT World Technologies</b> is a result-driven and passionate IT Company in Noida which is based in Noida India. Our Design Strategies are based on statistics coupled with decades of experience in the realm that allow us to deliver the best results to our Global Customers. We are the Indian marketing firm serving clients all across the globe to cater the online marketing needs. If you are looking for Web Design and Development Services, Apps Development Company, and a range of Digital Marketing Services, your search ends with IT World Technologies. Discuss your projects with us and get the desired results. IT World Technologies is renowned for Domain Services, Cloud Computing, Digital Marketing, Website Development, and App Development Services. For more Info, Contact Us-
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->
    
    
    <section class="container">
        <div class="center">
            <h2>CEO Speak's</h2>
            <div class="col-sm-3">
            <img src="images/ceo.jpg">
            </div>
            <div class="col-sm-9">
            <p class="align_left">For the Growth of the Business this is not only enough to Provide Services to the client. The main Agenda is to maintain the Customer Relationship to keep your Business stable in the market and Provide Modification in the project with the Updating of Technologies so that we can meet the client’s Requirement and the Client canGet in Touch with the latest updated Technology. </p>
            <p class="align_left">As an IT Services provider this is our Responsibility to satisfyour client’s and provides our Best Services. We, <strong>“IT World Techs”</strong> Provide you Best Services to our client and always get ready for the client’s Feedback.Because the only client can explain our Services Better. We are the IT Services provider but how should we have to deal in the market this is also the important fact for the Business.</p>
            <p class="align_left">Our Respected team always ready to meet with the client’s and understand their Requirement or Business.</p>
            <p class="align_left">For any Successful Business to make client is not only enough. To create the Relationship with the client is the key for Successful Business.</p>
            </div>
        </div>
  </section><!--/#blog-->
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
    </section><!--/#contact-page-->
      
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