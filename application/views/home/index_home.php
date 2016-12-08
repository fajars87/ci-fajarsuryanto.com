<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Fajar Suryanto" name="description">
    <meta content="Fajar Suryanto" name="author">
    <!--Fav-->
    <link href="<?php echo base_url(); ?>assets/img/Logofs.png" rel="shortcut icon">
    
    <!--styles-->
    <link href="<?php echo base_url(); ?>assets/s87/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/s87/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/s87/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/s87/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/s87/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/s87/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--fonts google-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
       <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--PRELOADER-->
    <div id="preloader">
      <div id="status">
        <img height="119px" alt="logo" src="<?php echo base_url(); ?>assets/img/Logofsgr.png">
      </div>
    </div>
    <!--/.PRELOADER END-->

    <!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
        <div class="col-md-2 col-xs-6 logo">
          <a href="<?php echo base_url(); ?>"><img alt="logo" class="logo-nav" src="<?php echo base_url(); ?>assets/img/LogoFSwN.png"></a>
        </div>
        <!--/.LOGO END-->
      </div>
      <div class="menu-wrap">
        <nav class="menu">
          <div class="menu-list">
            <a data-scroll="" href="#home" class="active">
              <span>Home</span>
            </a>
            <a data-scroll="" href="#about">
              <span>About</span>
            </a>
            <a data-scroll="" href="#work">
              <span>Work</span>
            </a>
             <a data-scroll="" href="#services">
              <span>Services</span>
            </a>
            <a data-scroll="" href="#employement">
              <span>Employement</span>
            </a>
            <a data-scroll="" href="#skill">
              <span>Skills</span>
            </a>
            <a data-scroll="" href="#education">
              <span>Education</span>
            </a>
            <a data-scroll="" href="#blog">
              <span>Blog</span>
            </a>
            <a data-scroll="" href="#contact">
              <span>Contact</span>
            </a>
          </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
      </div>
      <button class="menu-button" id="open-button">
        <span></span>
        <span></span>
        <span></span>
      </button><!--/.for-sticky-->
    </div>
    <!--/.HEADER END-->
    
    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">
        <!--HOME-->
        <section id="home">
          <div class="container">
            <div class="row">
              <div class="wrap-hero-content">
                  <div class="hero-content">
                    <h1>Hello</h1>
                    <br>
                    <span class="typed"></span>
                  </div>
              </div>
              <div class="mouse-icon margin-20">
                <div class="scroll"></div>
              </div>
            </div>
          </div>
        </section>
        <!--/.HOME END-->

        <!--ABOUT-->
        <section id="about">
          <div class="col-md-6 col-xs-12 no-pad">
            <div class="bg-about"></div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 white-col">
            <div class="row">
              <!--OWL CAROUSEL2-->
              <div class="owl-carousel2">
                <div class="col-md-12">
                  <div class="wrap-about">
                    <div class="w-content">
                      <p class="head-about">
                        <?php echo $user_det['about']; ?>
                      </p>
                      
                      <h5 class="name">
                        <?php echo $user_det['name']; ?>
                      </h5>
                      <img alt="signature" src="<?php echo base_url(); ?>assets/img/tdd.png" height="57px">
                    </div>
                  </div>
                </div>
              
                <div class="col-md-12 col-sm-12 col-xs-12 white-col">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                      <div class="wrap-about">
                        <table class="w-content">
                          <tr>
                            <td class="title">Name </td>
                            <td class="break">:</td>
                            <td> <?php echo $user_det['name']; ?></td>
                          </tr>
                          <tr>
                            <td class="title">Phone </td>
                            <td class="break">:</td>
                            <td> <?php echo $user_det['phone']; ?></td>
                          </tr>
                          <tr>
                            <td class="title">Email </td>
                            <td class="break">:</td>
                            <td> <?php echo $user_det['email']; ?></td>
                          </tr>
                          <tr>
                            <td class="title">Address </td>
                            <td class="break">:</td>
                            <td> <?php echo $user_det['address']; ?></td>
                          </tr>
                          <tr>
                            <td class="title">Skype </td>
                            <td class="break">:</td>
                            <td> fajars87</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/.OWL CAROUSEL2 END-->
            </div>
          </div>
        </section>
        <!--/.ABOUT END-->

        <!--WORK-->
        <section class="grey-bg mar-tm-10" id="work">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span><?php echo $detail['w-title']; ?></span>
                </h3>
                <p class="content-detail">
                  <?php echo $detail['w-detail']; ?>
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--PORTFOLIO IMAGE-->
                <?php foreach ($portfolio as $rows) { ?>
                <ul class="portfolio-image">
                  <li class="col-md-4">
                    <a href="<?php echo $rows['link']; ?>" title="<?php echo $rows['detail']; ?>"><img alt="<?php echo $rows['title']; ?>" src="<?php echo $rows['link']; ?>">
                      <div class="decription-wrap">
                        <div class="image-bg">
                           <p class="desc"><?php echo $rows['title']; ?></p>
                        </div>

                      </div>
                    </a>
                  </li>
                </ul>
                <?php } ?>
                <!--/.PORTFOLIO IMAGE END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.WORK END-->

        <!--SERVICES-->
        <section class="white-bg" id="services">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span><?php echo $detail['s-title']; ?></span>
                </h3>
                <p class="content-detail">
                  <?php echo $detail['s-detail']; ?>
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                  <?php foreach($service as $row) { ?>
                    <li>
                      <div class="col-md-4 col-sm-4">
                        <h3>
                          <i class="<?php echo $row['icon']; ?>"></i>
                        </h3>
                        <p class="head-sm">
                          <?php echo $row['title']; ?>
                        </p>
                        <p class="text-grey">
                          <?php echo $row['body']; ?>
                        </p>
                      </div>
                    </li>
                  <?php } ?>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.SERVICES END-->

        <!--EMPLOYEMENT-->
        <section class="grey-bg" id="employement">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span><?php echo $detail['em-title']; ?></span>
                </h3>
                <p class="content-detail">
                  <?php echo $detail['em-detail']; ?>
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <?php foreach($work as $row){ ?>
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              <?php echo $row['period']; ?>
                            </h2>
                            <p class="job">
                              <?php echo $row['job']; ?>
                            </p>
                            <p class="company">
                              <?php echo $row['company']; ?>
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                <?php echo $row['detail']; ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
                  </ul> 
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.EMPLOYEMENT END-->

        <!--SKILLS-->
        <section class="white-bg" id="skill">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span><?php echo $detail['sk-title']; ?></span>
                </h3>
                <p class="content-detail">
                  <?php echo $detail['sk-detail']; ?>
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--SKILLST-->
                <div class="skillst">
                <?php foreach($skill as $row) { ?>
                  <div class="skillbar" data-percent="<?php echo $row['progress']; ?>">
                    <div class="title head-sm">
                      <?php echo $row['name']; ?>
                    </div>
                    <div class="count-bar">
                      <div class="count"></div>
                    </div>
                  </div>
                <?php } ?>
                </div>
                <!--/.SKILLST END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.SKILLS END-->

        <!--EDUCATION-->
        <section class="grey-bg" id="education">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span><?php echo $detail['ed-title']; ?></span>
                </h3>
                <p class="content-detail">
                  <?php echo $detail['ed-detail']; ?>
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <?php foreach($edu as $row){ ?>
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              <?php echo $row['period']; ?>
                            </h2>
                            <p class="job">
                              <?php echo $row['job']; ?>
                            </p>
                            <p class="company">
                              <?php echo $row['company']; ?>
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                <?php echo $row['detail']; ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
                  </ul> 
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.EDUCATION END-->

        <!--BLOG-->
        <section class="blog-bg" id="blog">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3 class="title-small-center text-center">
                  <span><?php echo $detail['b-title']; ?></span>
                </h3>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <p class="content-details text-center">
                      <?php echo $detail['b-detail']; ?>
                    </p>
                  </div>
                </div>
                <!--GRID BLOG-->
                <div class="grid">
                <?php foreach ($blog as $m){ ?>
                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog-1" class="img-circle text-center" src="<?php echo $m->better_featured_image->media_details->sizes->medium->source_url; ?>">
                      <p class="subtitle fancy">
                        <span><?php echo date("m/d/Y", strtotime($m->date)); ?></span>
                      </p>
                      <a href="<?php echo $m->link; ?>">
                        <h3 class="title">
                          <?php echo $m->title->rendered; ?> 
                        </h3>
                      </a>
                      <p class="content-blog">
                        <?php echo $m->excerpt->rendered; ?>
                      </p>
                    </div>
                  </div>
                <?php }?>                

                </div>
                <!--/.GRID BLOG END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.BLOG END-->

        <!--CONTACT-->
        <section id="contact" class="white-bg">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span><?php echo $detail['c-title']; ?></span>
                </h3>
                <p class="content-detail">
                  <?php echo $detail['c-detail']; ?>
                </p>
                <h3>
                  <a href="https://facebook.com/fajarsuryantocom"><i class="fa fa-facebook-square"></i></a>
                  <a href="https://twitter.com/fajars87"><i class="fa fa-twitter-square"></i></a>
                  <a href="https://instagram.com/surya_nto"><i class="fa fa-instagram"></i></a>
                  <a href="https://plus.google.com/104956408556298151045"><i class="fa fa-google-plus-square"></i></a>
                  <a href="http://lnked.in/fajarsuryanto"><i class="fa fa-linkedin-square"></i></a>
                  <a href="https://github.com/fajars87"><i class="fa fa-github-square"></i></a>
                </h3>
              </div>
              <div class="col-md-9 content-right">
                <form method="post" action="<?php echo base_url() ?>home/contact">
                  <div class="group">
                    <input required="" name="name" type="text"><span class="highlight"></span><span class="bar"></span><label>Name</label>
                  </div>
                  <div class="group">
                    <input required="" name="email" type="email"><span class="highlight"></span><span class="bar"></span><label>Email</label>
                  </div>
                  <div class="group">
                    <textarea required="" name="message"></textarea><span class="highlight"></span><span class="bar"></span><label>Message</label>
                  </div>
                  <div class="group">
                    <?php echo $this->recaptcha->render(); ?>
                  </div>
                  <input id="sendMessage" name="sendMessage" type="submit" value="Send Message">
                </form>
              </div>
            </div>
          </div>
        </section>
        <!--/.CONTACT END-->
        
        <!--FOOTER-->
        <footer>
          <div class="footer-top">
            <ul class="socials">
              <li class="facebook">
                <a href="https://facebook.com/fajarsuryantocom" data-hover="Facebook">Facebook</a>
              </li>
              <li class="twitter">
                <a href="https://twitter.com/fajars87" data-hover="Twitter">Twitter</a>
              </li>
              <li class="gplus">
                <a href="https://plus.google.com/104956408556298151045" data-hover="Google +">Google +</a>
              </li>
            </ul>
          </div>

          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <img height="119px" src="<?php echo base_url(); ?>assets/img/Logofsgr.png" alt="logo bottom" class="center-block" />
              </div>
            </div>
          </div>
        </footer>
        <!--/.FOOTER-END-->

      <!--/.CONTENT END-->
      </div>
    <!--/.CONTENT-WRAP END-->
    </div>
    

    <script src="<?php echo base_url(); ?>assets/s87/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/s87/js/jquery.appear.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/s87/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/s87/js/classie.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/s87/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/s87/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/s87/js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/s87/js/masonry.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/s87/js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/s87/js/typed.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/s87/js/main.js" type="text/javascript"></script>
  </body>
</html>