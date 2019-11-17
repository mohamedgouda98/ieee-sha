    <?php 
      include "include/navbar.php";
    ?>
      <main class="page-content">
        <section>
          <div data-loop="false" data-autoplay="false" data-simulate-touch="true" class="swiper-container swiper-slider swiper-variant-1 bg-gray-base">
            <div class="swiper-wrapper text-center">

            <?php
            $slider = $cont->prepare("SELECT * FROM slider");
            $slider->execute();
            while($row_slider = $slider->fetch()){
              ?>
                <div data-slide-bg="images/slider-1.jpg" class="swiper-slide">
                  <div class="overlay"></div>
                  <div class="swiper-slide-caption">
                    <div class="shell">
                      <div class="range range-sm-center">
                        <div class="cell-sm-11 cell-md-10 cell-lg-9">
                          <h2 data-caption-animate="fadeInUp" data-caption-delay="0s" class="slider-header"><?php echo $row_slider['title']?></h2>
                          <p data-caption-animate="fadeInUp" data-caption-delay="100" class="text-bigger slider-text"><?php echo $row_slider['body']?></p>
                          <div class="group-xl-responsive offset-top-30 offset-sm-top-45"><a data-caption-animate="fadeInUp" data-caption-delay="250" href="#" data-custom-scroll-to="about" class="btn btn-white-outline-variant-1">من نحــــــن</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }
            
            ?>
              


            <div class="swiper-scrollbar"></div>
            <div class="swiper-nav-wrap">
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </section>
        <section  class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145" id="about">
        
            
            <div class="shell">
            <div class="range range-md-bottom range-sm-center">
            <?php 
              $about=$cont->prepare("SELECT * FROM about_us");
              $about->execute();
              $row=  $about->fetch()
             
                ?>
               
              <div class="cell-sm-11 cell-md-6 offset-top-40 offset-sm-top-60 offset-md-top-0">
                  <div data-wow-duration="2s" data-wow-offset="200" class="cell-sm-10 cell-md-5 wow fadeInRight">
                    <h2><?php  echo $row ['title'] ?></h2>
                    <p class="h4 offset-top-30"> <?php  echo $row ['body'] ?>  </p>
                    <p class="offset-top-40 text-secondary"><?php  echo $row ['body'] ?> </p></div></div>
              <div class="cell-sm-11 cell-md-6 offset-top-40 offset-sm-top-60 offset-md-top-0">
                <div class="image-group">
                  <img src="images/about.png" alt=""/>
                </div>
              </div>
              
              </div>
          </div>
          
        </section>
        <div class="divider-spectrum"></div>
        <section data-on="false" data-md-on="true" class="rd-parallax bg-gray-base bg-image" id="services">
          <div data-speed="0.33" data-type="media" data-url="" class="rd-parallax-layer"></div>
          <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="section-50 section-sm-75 section-lg-top-100 section-lg-bottom-120">
           

              <div class="shell">
                <div class="range range-sm-center">
                  <div class="cell-sm-11 cell-md-10 cell-lg-9 text-center">
                  <div class="row">
                    <h3>خدماتنا</h3>
                  </div>
                </div>
                
                 <?php 
              $serv=$cont->prepare("SELECT * FROM services");
              $serv->execute();

              while($row=  $serv->fetch()){
                ?>
                    <div class="cell-sm-6 cell-md-6 offset-top-50 offset-lg-top-60">
                    <article class="icon-box-vertical"><span class="icon icon-primary icon-md material-icons-security"></span>
                      <h5 class="icon-box-header"> <?php echo $row['title']?> </h5>
                      <p><?php echo $row['body']?></p>
                    </article>
                  </div>

                <?php
              }
                  ?>
                
                </div>

                </div>

              </div>

              
            </div>
          </div>
        </section> 

        <section class="section-50 section-sm-90 section-lg-top-120 section-lg-bottom-145" id="projcts">
          <div class="shell isotope-wrap">
            <div class="range">
              <div class="cell-xs-12 text-center">
                <h3>مشاريعنا</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eos aliquam amet commodi, placeat odio.</p>
              </div>
              <div class="cell-xs-12 offset-top-40">
                <div class="row">
                  <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default">
                   
                   <?php
                    $select_projects = $cont->prepare("SELECT * FROM projects LIMIT 6");
                    $select_projects->execute();
                    while($row_project = $select_projects->fetch()){
                      ?>
                      <div data-filter="Category 3" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                        <div class="thumbnail thumbnail-variant-3">
                          <figure><img src="images/work-6.png" alt="" > </figure>
                          <div class="caption"><a href="images/work-6.png" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                        </div>
                     </div>
                      <?php
                    }
                   ?>
                   
                   


                  </div>
                  <div class="cell-xs-12 text-center offset-top-50"><a href="gallery.php" class="btn btn-xl btn-primary">اعرض المزيد</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php 
              $contact=$cont->prepare("SELECT * FROM contact_us");
              $contact->execute();
              $row=  $contact->fetch();

               ?>
        <section class="section-60 section-sm-top-90 section-sm-bottom-100" id="contact">
            <div class="shell">
              <div class="range range-md-justify">
                <div class="cell-md-5 cell-lg-4">

                  <div class="inset-md-right-15 inset-lg-right-0">
                    <div class="range">
                      <div class="cell-sm-6 cell-md-12 offset-top-30 offset-sm-top-45">
                        <h5>تواصل معنا</h5>
                        <address class="contact-info">
                        <p class="text-uppercase"><?php echo $row['addr'] ?></p>
                        <dl class="list-terms-inline">
                          <dt>الجوال</dt>
                          <dd><a href="callto:#" class="link-secondary"><?php echo $row['phone'] ?></a></dd>
                        </dl>
                        <dl class="list-terms-inline">
                          <dt>البريد الالكترونى</dt>
                          <dd><a href="mailto:Info@aljazeerashining.com" class="link-primary"><span class="__cf_email__"><?php echo $row['email'] ?></span></a></dd>
                        </dl>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-md-7 cell-lg-6 offset-top-50 offset-md-top-0">
                  <h4>أبقى على تواصل</h4>
                  <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform form-modern offset-top-30">
                    <div class="range">
                      <div class="cell-sm-6">
                        <div class="form-group">
                          <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
                          <label for="contact-name" class="form-label">الأسم</label>
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-top-30 offset-sm-top-0">
                        <div class="form-group">
                          <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                          <label for="contact-email" class="form-label">البريد الالكترونى</label>
                        </div>
                      </div>
                      <div class="cell-xs-12 offset-top-30">
                        <div class="form-group">
                          <div class="textarea-lined-wrap">
                            <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
                            <label for="contact-message" class="form-label">ارسالتك</label>
                          </div>
                        </div>
                      </div>
                      <div class="cell-xs-8 offset-top-30 offset-xs-top-30 offset-sm-top-50">
                        <input type="submit" value="ارسل الرسالة" class="btn btn-primary btn-block">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
      </main>
    <?php 
      include "include/footer.php";

    ?>