<?php
    include_once "navbar.php";
?>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./Images/Book_wallpaper 2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h5>A book is a gift you can open again and again</h5>
                  <!-- <p>Some representative placeholder content for the first slide.</p> -->
                  <?php 
                    if(isset($_SESSION['email'])){
                  ?>
                    <p><a href="./products.php" class="btn btn-warning mt3">Shop Now</a></p>
                  <?php
                    }else{?>
                    <p><a href="./Log_in.php" class="btn btn-warning mt3">Shop Now</a></p>      
                   <?php }?>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./Images/book_wallpaper.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h5>A book is a humble massenger from paradise to a daily life</h5>
                  <!-- <p>Some representative placeholder content for the second slide.</p> -->
                  <?php 
                    if(isset($_SESSION['email'])){
                  ?>
                    <p><a href="./products.php" class="btn btn-warning mt3">Shop Now</a></p>
                  <?php
                    }else{?>
                    <p><a href="./Log_in.php" class="btn btn-warning mt3">Shop Now</a></p>      
                   <?php }?>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./Images/books-bookshelf-bookstore-c-s-lewis.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h5>There is no friend as loyal as a book</h5>
                  <!-- <p>Some representative placeholder content for the third slide.</p> -->
                  <?php 
                    if(isset($_SESSION['email'])){
                  ?>
                    <p><a href="./products.php" class="btn btn-warning mt3">Shop Now</a></p>
                  <?php
                    }else{?>
                    <p><a href="./Log_in.php" class="btn btn-warning mt3">Shop Now</a></p>      
                   <?php }?>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
         </div>
        </div>
      <section id="about" class="about section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
              <div class="about-img">
                <img src="./Images/books-shelves-shelf-library.jpg" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
              <div class="about-text">
                <h2>We Provide Best<br>Book Ever</h2>
                <p>Get best out of best books from Us</p>
                  <a href="#" class="btn btn-warning">Learn More</a>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section id="services" class="services section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Our Services</h2>
              <p>Here You will get all kind of books <br>We provide fastest delivery </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <h3 class="card-title">Best Quality</h3>
                <p class="lead">"Price will be forgotten Quality doesnot"<br>Second Hand books but book quality is at its best               </p>
                <button class="btn btn-warning text-dark">Read More</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <h3 class="card-title">Sustainability</h3>
                <p class="lead">Books having quality issues,missing pages will eligible for 100% return</p>
                <button class="btn btn-warning text-dark">Read More</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <h3 class="card-title">Integrity</h3>
                <p class="lead">Though books are second hand,We provide you books with best conditiion</p>
                <button class="btn btn-warning text-dark">Read More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 <!--Our books-->

    <section id="portfolio" class="portfolio section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Our Books</h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Enim, perspiciatis!</p> -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col12 col-md-12 col-lg-4">
            <div class="card text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="./Images/history.jpg" alt="" class="img-fluid">
                </div>
                <h3 class="card-title2">Historic</h3>
                <p class="lead2">[John Julius Norwich] remembered that there was a public composed of people who read books of history for pleasure,
                   not for duty</p>
                <button class="btn bg-warning text-dark">Learn More</button>
              </div>
            </div>
          </div>
          <div class="col12 col-md-12 col-lg-4">
            <div class="card text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="./Images/autobiography.jpg" alt="" class="img-fluid">
                </div>
                <h3 class="card-title2">Autobiography</h3>
                <p class="lead2">The autobiography of West Indies fast-bowling legend turned Sky pundit, Michael Holding.</p>
                <button class="btn bg-warning text-dark">Learn More</button>
              </div>
            </div>
          </div>
          <div class="col12 col-md-12 col-lg-4">
            <div class="card text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="./Images/psDelvelop.jpg" alt="" class="img-fluid">
                </div>
                <h3 class="card-title2">Personality Development</h3>
                <p class="lead2">This handbook is the first volume to provide a comprehensive look at personality development. It features a state-of-the-art examination of the field,
                  an area that is enjoying a resurgence in popularity.</p>
                <button class="btn bg-warning text-dark">Learn More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!--Our team-->
    
  <section class="team section-padding" id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Our Team</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-2">
          <div class="card text-center">
            <div class="card-body">
              <img src="./Images/shibashis.jpg" alt="" class="img-fluid rounded-circle">
              <h6 class="card-title py-2">Shibashis Mohapatra</h6>
              <p class="card-text">Design & Front-End Web Developer </p>
              <p class="socials">
                <i class="fab fa-facebook-square fa-2x"></i>
                <i class="fab fa-instagram-square fa-2x"></i>
                <i class="fab fa-twitter-square fa-2x"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
          <div class="card text-center">
            <div class="card-body">
              <img src="./Images/sachikant2.jpg" alt="" class="img-fluid rounded-circle">
              <h6 class="card-title py-2">Sachikant Mohanty</h6>
              <p class="card-text">Front-End Web Developer </p>
              <p class="socials">
                <i class="fab fa-facebook-square fa-2x"></i>
                <i class="fab fa-instagram-square fa-2x"></i>
                <i class="fab fa-twitter-square fa-2x"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
          <div class="card text-center">
            <div class="card-body">
              <img src="./Images/safaly.jpg" alt="" class="img-fluid rounded-circle">
              <h6 class="card-title py-2">Safalya Padhi</h6>
              <p class="card-text">Design & Back-End Web Developer</p>
              <p class="socials">
                <i class="fab fa-facebook-square fa-2x"></i>
                <i class="fab fa-instagram-square fa-2x"></i>
                <i class="fab fa-twitter-square fa-2x"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
          <div class="card text-center">
            <div class="card-body">
              <img src="./Images/diptesh12.jpg" alt="" class="img-fluid rounded-circle">
              <h6 class="card-title py-2">Diptesh Choudhary</h6>
              <p class="card-text">Back-End Web Developer</p>
              <p class="socials">
                <i class="fab fa-facebook-square fa-2x"></i>
                <i class="fab fa-instagram-square fa-2x"></i>
                <i class="fab fa-twitter-square fa-2x"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
          <div class="card text-center">
            <div class="card-body">
              <img src="./Images/monali.jpg" alt="" class="img-fluid rounded-circle">
              <h6 class="card-title py-2">Monali Priyadarshini Sahoo</h6>
              <p class="card-text">Front-End Developer</p>
              <p class="socials">
                <i class="fab fa-facebook-square fa-2x"></i>
                <i class="fab fa-instagram-square fa-2x"></i>
                <i class="fab fa-twitter-square fa-2x"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
          <div class="card text-center">
            <div class="card-body">
              <img src="./Images/sudipta.jpg" alt="" class="img-fluid rounded-circle">
              <h6 class="card-title py-2">Sudipta Kar</h6>
              <p class="card-text"> Front-End Developer</p>
              <p class="socials">
                <i class="fab fa-facebook-square fa-2x"></i>
                <i class="fab fa-instagram-square fa-2x"></i>
                <i class="fab fa-twitter-square fa-2x"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!--Contact-->
  <section id="contact" class="contact section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Contact Us</h2>
            <p>What ever you have doubt <br> Tell us.</p>
          </div>
        </div>
      </div>
      <div class="row m-0">
        <div class="col-md-12 p-0 pt-4 p-4 m-auto">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <input type="text" name="user-name" class="form-control" required placeholder="Your Full name">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <input type="email" name="mail-id" class="form-control" required placeholder="Your Email Here">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <textarea name="Query" cols="10" rows="3" required class="form-control"  placeholder="Your Query Here"></textarea>
              </div>
            </div>
            <button class="btn btn-warning btn-lg btn-block mt-3" id="contact_btn">Send Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>
    <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h1">Address</h1>
                        <p class="lead">
                            Utakl University <br />
                            Vani Vihar <br />
                            Bhubaneswar <br />
                            Odisha<br />
                        </p>
                        <div class="social-icons">
                            <i class="fab fa-facebook-square fa-2x"></i>
                            <i class="fab fa-instagram-square fa-2x"></i>
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </div>

                    </div>
                    <div class="col-md-6 text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.9104250390715!2d85.8374768149206!3d20.30397448639552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909f2fb8416b5%3A0xf04a450cccd03186!2sUtkal%20University!5e0!3m2!1sen!2sin!4v1652411279483!5m2!1sen!2sin" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <?php
    include_once "footer.php";
?>