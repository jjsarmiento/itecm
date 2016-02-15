    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Discipulus</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?=base_url()?>shop/home">Shop</a>
                    </li>

                    <li>
                    <?php
                        if(@$_SESSION['firstname']){
                            echo '<a href="'.base_url().'shop/userProfile">'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</a>';
                        }else{
                            echo '<a class="page-scroll" href="#" data-toggle="modal" data-target="#loginModal">Login</a>';
                        }
                    ?>
                    </li>
<!--                    <li>-->
<!--                        <a class="page-scroll" href="#services">Services</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="page-scroll" href="#portfolio">Portfolio</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="page-scroll" href="#about">About</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="page-scroll" href="#team">Team</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="page-scroll" href="#contact">Contact</a>-->
<!--                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Discipulus Bookshop</div>
                <div class="intro-heading">READ AND LET READ</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="text-align: justify;">
                    <center><h2 class="section-heading">Services</h2></center>

                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">By browsing our catalog, it will be easier for our customers to buy and sell books.</p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Ad Services</h4>
                    <p class="text-muted">Selling of books will cost customers an advertising fee and advertise their books to a wide variety of audience.</p>
                </div>
<!--                <div class="col-md-4">-->
<!--                    <span class="fa-stack fa-4x">-->
<!--                        <i class="fa fa-circle fa-stack-2x text-primary"></i>-->
<!--                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>-->
<!--                    </span>-->
<!--                    <h4 class="service-heading">Web Security</h4>-->
<!--                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
<!--                </div>-->
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
<!--    <section id="portfolio" class="bg-light-gray">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 text-center">-->
<!--                    <h2 class="section-heading">Portfolio</h2>-->
<!--                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">-->
<!--                        <div class="portfolio-hover">-->
<!--                            <div class="portfolio-hover-content">-->
<!--                                <i class="fa fa-plus fa-3x"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/portfolio/roundicons.png" class="img-responsive" alt="">-->
<!--                    </a>-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Round Icons</h4>-->
<!--                        <p class="text-muted">Graphic Design</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">-->
<!--                        <div class="portfolio-hover">-->
<!--                            <div class="portfolio-hover-content">-->
<!--                                <i class="fa fa-plus fa-3x"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/portfolio/startup-framework.png" class="img-responsive" alt="">-->
<!--                    </a>-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Startup Framework</h4>-->
<!--                        <p class="text-muted">Website Design</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">-->
<!--                        <div class="portfolio-hover">-->
<!--                            <div class="portfolio-hover-content">-->
<!--                                <i class="fa fa-plus fa-3x"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/portfolio/treehouse.png" class="img-responsive" alt="">-->
<!--                    </a>-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Treehouse</h4>-->
<!--                        <p class="text-muted">Website Design</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">-->
<!--                        <div class="portfolio-hover">-->
<!--                            <div class="portfolio-hover-content">-->
<!--                                <i class="fa fa-plus fa-3x"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/portfolio/golden.png" class="img-responsive" alt="">-->
<!--                    </a>-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Golden</h4>-->
<!--                        <p class="text-muted">Website Design</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">-->
<!--                        <div class="portfolio-hover">-->
<!--                            <div class="portfolio-hover-content">-->
<!--                                <i class="fa fa-plus fa-3x"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/portfolio/escape.png" class="img-responsive" alt="">-->
<!--                    </a>-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Escape</h4>-->
<!--                        <p class="text-muted">Website Design</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-4 col-sm-6 portfolio-item">-->
<!--                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">-->
<!--                        <div class="portfolio-hover">-->
<!--                            <div class="portfolio-hover-content">-->
<!--                                <i class="fa fa-plus fa-3x"></i>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/portfolio/dreams.png" class="img-responsive" alt="">-->
<!--                    </a>-->
<!--                    <div class="portfolio-caption">-->
<!--                        <h4>Dreams</h4>-->
<!--                        <p class="text-muted">Website Design</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <div class="col-md-8 col-md-offset-2 well" style="margin-bottom: 3em; text-align: justify;">

                        Founded in late 2015 by Team Discipulus, Discipulus has come a long way in development from its beginnings in a project for an E-commerce course in FEU Institute of Technology. When Discipulus first started out, the team’s passion for books drove them to research and eventually started building a web application that will hopefully connect likeminded people, and gave them the impetus to turn hard work and inspiration into a new online store. Now, we can now enable book lovers using Discipulus to reach each other by registering to the site and start business activities, they hope that they can make a change in the e-commerce industry.
                        We hope you enjoy our services as much as we enjoy offering them to you. If you have any questions or comments, please don’t hesitate to contact us

                        <br/><br/>Sincerely,<br/>
                        Team Discipulus
                    </div>
                    <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?=base_url()?>assets/img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>November 2015</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">This started as an e-commerce project for our Web and mobile development course</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?=base_url()?>assets/img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2015</h4>
                                    <h4 class="subheading">An Idea</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Now we are one step closer into completing our project.</p>
                                </div>
                            </div>
                        </li>
<!--                        <li>-->
<!--                            <div class="timeline-image">-->
<!--                                <img class="img-circle img-responsive" src="--><?//=base_url()?><!--assets/img/about/3.jpg" alt="">-->
<!--                            </div>-->
<!--                            <div class="timeline-panel">-->
<!--                                <div class="timeline-heading">-->
<!--                                    <h4>December 2012</h4>-->
<!--                                    <h4 class="subheading">Transition to Full Service</h4>-->
<!--                                </div>-->
<!--                                <div class="timeline-body">-->
<!--                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="timeline-inverted">-->
<!--                            <div class="timeline-image">-->
<!--                                <img class="img-circle img-responsive" src="--><?//=base_url()?><!--assets/img/about/4.jpg" alt="">-->
<!--                            </div>-->
<!--                            <div class="timeline-panel">-->
<!--                                <div class="timeline-heading">-->
<!--                                    <h4>July 2014</h4>-->
<!--                                    <h4 class="subheading">Phase Two Expansion</h4>-->
<!--                                </div>-->
<!--                                <div class="timeline-body">-->
<!--                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?=base_url()?>assets/img/team/emman.jpg" class="img-responsive img-circle" alt="">
                        <h4>Emmanuel Francisco</h4>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?=base_url()?>assets/img/team/cherry.jpg" class="img-responsive img-circle" alt="">
                        <h4>Cherrylet Castro</h4>                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?=base_url()?>assets/img/team/jan.jpg" class="img-responsive img-circle" alt="">
                        <h4>Jan Sarmiento</h4>
                       <!-- <p class="text-muted">Lead Developer</p>-->
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?=base_url()?>assets/img/team/ren.jpg" class="img-responsive img-circle" alt="">
                        <h4>Ren Benig</h4>                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?=base_url()?>assets/img/team/miguel.jpg" class="img-responsive img-circle" alt="">
                        <h4>Miguel Antonio Rodriguez</h4>                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
<!--                <div class="col-md-12 col-sm-12">-->
<!--                    <a href="#">-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/logos/feu.jpg" class="img-responsive img-centered" alt="">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-sm-6">-->
<!--                    <a href="#">-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/logos/envato.jpg" class="img-responsive img-centered" alt="">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-sm-6">-->
<!--                    <a href="#">-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-sm-6">-->
<!--                    <a href="#">-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-sm-6">-->
<!--                    <a href="#">-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </aside>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">P. Paredes, Sampaloc, Manila, Metro Manila, Philippines</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Discipulus 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?=base_url()?>assets/img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?=base_url()?>assets/img/portfolio/startup-framework-preview.png" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?=base_url()?>assets/img/portfolio/treehouse-preview.png" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?=base_url()?>assets/img/portfolio/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?=base_url()?>assets/img/portfolio/escape-preview.png" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="<?=base_url()?>assets/img/portfolio/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
