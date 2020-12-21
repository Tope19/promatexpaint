<?php include('includes/header.php') ?>
<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
  $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: ' . $location);
  exit;
}
?>
<title>Home :: Promatex Paint</title>
<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
    
    <div class="owl-one owl-carousel owl-theme">
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5> We are architects, planners &amp; designers.</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum necessitatibus blanditiis porro cum</p>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.php"> Our Services</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>We Create Beautiful Home Exteriors.</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum necessitatibus blanditiis porro cum</p>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="contact.php"> Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Exceptional Designing For Exceptional Spaces</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum necessitatibus blanditiis porro cum</p>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="about.php"> About Us</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Giving Your Home a New Style Every Style</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum necessitatibus blanditiis porro cum</p>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.php">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>

</div>


  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- /main-slider -->
</section>
 <!--  services section -->
<section class="w3l-index6" id="about">
  <div class="features-with-17_sur py-5">
    <div class="container py-lg-5">
      <div class="heading text-center mx-auto mb-5">
        <h3 class="head">Build your base</h3>
        <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
        Nulla mollis dapibus nunc, ut rhoncus
        turpis sodales quis. Integer sit amet mattis quam.</p>
      </div>
      <div class="features-with-17-top_sur mt-5 pt-3">
        <div class="row">
          <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1 mb-3">
                <span class="fa fa-paint-brush" aria-hidden="true"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url">Conceptual Architecture</a></h6>
                <p> Lorem Ipsum is simply dummy text of the printing and industry.
                  Lorem Ipsum has the industry's standard dummy text ever since the 1500s,</p>
                  <a href="services.php" class="actionbg">Read More </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1 mb-3">
                <span class="fa fa-ils" aria-hidden="true"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url">Plans and Projects</a></h6>
                <p> Lorem Ipsum is simply dummy text of the printing and industry.
                  Lorem Ipsum has the industry's standard dummy text ever since the 1500s,</p>
                  <a href="services.php" class="actionbg">Read More </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
            <div class="features-with-17-right-tp_sur">
              <div class="features-with-17-left1 mb-3">
                <span class="fa fa-building" aria-hidden="true"></span>
              </div>
              <div class="features-with-17-left2">
                <h6><a href="#url">Apartment Buildings</a> </h6>
                <p> Lorem Ipsum is simply dummy text of the printing and industry.
                  Lorem Ipsum has the industry's standard dummy text ever since the 1500s,</p>
                  <a href="services.php" class="actionbg">Read More </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <!--  //services section -->
 <!--  About section -->
 <div class="w3l-about1 py-5" id="about">
  <div class="container py-lg-3">
   
    <div class="aboutgrids row">
      <div class="col-lg-6 aboutgrid2">
        <img src="assets/images/a2.jpg" alt="about image" class="img-fluid" />
      </div>
      <div class="col-lg-6 aboutgrid1 mt-lg-0 mt-4 pl-lg-5">
        <h4>We never stop to create new ideas</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum necessitatibus blanditiis porro cum, facere qui impedit dolor doloribus quis reiciendis ullam repellendus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, velit recusandae eum necessitatibus blanditiis porro cum, facere qui impedit dolor doloribus quis reiciendis ullam repellendus.</p>

        <a class="btn btn-secondary btn-theme2" href="about.php"> Learn More</a>
      </div>
    </div>
  </div>
</div>
 <!--  //About section -->
<!-- specifications -->
<section class="w3l-specifications-9">
    <div class="main-w3 py-5" id="stats">
        <div class="container py-md-3">
            
           <div class="main-cont-wthree-fea row ">
                <div class="grids-speci1 col-lg-3 col-6">
                    <div class="spec-2 text-center">
                     <span class="fa fa-hourglass"></span>
                    <h3 class="title-spe">7242</h3>
                    <p>Hours of Works</p>
                </div>
                </div>
                <div class="grids-speci1 midd-eff-spe col-lg-3 col-6">
                    <div class="spec-2 text-center">
                        <span class="fa fa-folder"></span>
                    <h3 class="title-spe">380</h3>
                    <p>Projects Done</p>
                    </div>
                </div>
                <div class="grids-speci1 las-but col-lg-3 col-6  mt-lg-0 mt-4">
                    <div class="spec-2 text-center">
                        <span class="fa fa-smile-o"></span>
                    <h3 class="title-spe">220</h3>
                    <p>Satisfied Customers</p>
                    </div>
                </div>
                <div class="grids-speci1 las-t col-lg-3 col-6  mt-lg-0 mt-4">
                    <div class="spec-2 text-center">
                        <span class="fa fa-trophy"></span>
                        <h3 class="title-spe">24 </h3>
                        <p>Awards Winning</p>
                        </div>
                    </div>
            </div>
            
        </div>
    </div>
    <!-- //specifications -->
</section>
<div class="products-4" id="gallery">
    <!-- Products4 block -->
    <div id="products4-block" class="text-center">
        <div class="container">
            <div class="heading text-center mx-auto mb-5">
                <h3 class="head">Projects</h3>
                <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                Nulla mollis dapibus nunc, ut rhoncus
                turpis sodales quis. Integer sit amet mattis quam.</p>
              </div>
              <input id="tab1" type="radio" name="tabs" checked>
              

            <section id="content1" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <div class="product">
                        <a href="assets/images/WhatsApp Image 2020-12-17 at 10.04.35 AM (1).jpeg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/WhatsApp Image 2020-12-17 at 10.04.35 AM (1).jpeg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product">
                        <a href="assets/images/WhatsApp Image 2020-12-17 at 10.06.41 AM.jpeg" data-lightbox="example-set"
                            data-title="Promatex Epoxy finish paint">
                            <figure>
                                <img src="assets/images/WhatsApp Image 2020-12-17 at 10.06.41 AM.jpeg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product">
                        <a href="assets/images/WhatsApp Image 2020-12-17 at 10.07.53 AM.jpeg" data-lightbox="example-set"
                            data-title="Matt and Emulsion Paint">
                            <figure>
                                <img src="assets/images/WhatsApp Image 2020-12-17 at 10.07.53 AM.jpeg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product">
                        <a href="assets/images/WhatsApp Image 2020-12-17 at 10.06.43 AM (1).jpeg" data-lightbox="example-set"
                            data-title="Promatex Epoxy finish paint">
                            <figure>
                                <img src="assets/images/WhatsApp Image 2020-12-17 at 10.06.43 AM (1).jpeg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product">
                      <a href="assets/images/WhatsApp Image 2020-12-17 at 10.07.51 AM.jpeg" data-lightbox="example-set"
                          >
                          <figure>
                              <img src="assets/images/WhatsApp Image 2020-12-17 at 10.07.51 AM.jpeg" class="img-responsive" alt="" />
                          </figure>
                      </a>
                      
                  </div>

                    
                    <div class="product">
                        <a href="assets/images/WhatsApp Image 2020-12-17 at 5.32.41 PM.jpeg" data-lightbox="example-set"
                            >
                            <figure>
                                <img src="assets/images/WhatsApp Image 2020-12-17 at 5.32.41 PM.jpeg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    
                    
                </div>
            </section>
        </div>
    </div>
    <!-- Products4 block -->
</div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/lightbox-plus-jquery.min.js"></script>

<?php include('includes/footer.php') ?>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>

<script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

<!-- Smooth scrolling -->

<script src="assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->