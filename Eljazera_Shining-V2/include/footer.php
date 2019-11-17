<section class="section-40 section-sm-60 bg-cod-gray">
      <div class="shell">
        <div class="range range-xs-center">
          <div class="cell-xs-10 cell-sm-11 cell-md-12">
            <div class="range">
              <div class="cell-sm-6 cell-md-4">
                <div class="inset-md-right-30">

                <?php 
              $contact=$cont->prepare("SELECT * FROM  about_us");
              $contact->execute();
              $row=  $contact->fetch();

               ?>
                  <h6 class="text-uppercase"><?php echo $row['title'] ?></h6>
                  <p class="offset-top-22"> <?php echo $row['body'] ?></p>
                </div>
                <div class="offset-top-22">
                  <div class="group-md group-top">
                    <div>
                    <?php 
              $contact=$cont->prepare("SELECT * FROM contact_us");
              $contact->execute();
              $row=  $contact->fetch();

               ?>
                      <div class="unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xs-smaller icon-primary fa-whatsapp"></span></div>
                        <div class="unit-body"><a href="callto:#" class="link link-bold link-white-v2"><?php echo $row['phone'] ?></a></div>
                      </div>
                      <div class="inset-left-30"><a href="mailto:Info@aljazeerashining.com" class="link-white-v2" style="font-size: 18px;"><span class="__cf_email__" data-cfemail="2d44434b426d494840424144434603425f4a"><?php echo $row['email'] ?></span></a></div>
                    </div>
                    <div>
                      <ul class="list-inline list-inline-reset">
                        <li><a href="#" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-facebook"></a></li>
                        <li><a href="#" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-twitter"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
                <h6 class="text-uppercase">لينكات سريعة</h6>
                <div style="max-width: 340px;" class="row offset-top-22 offset-md-top-30">
                  <div class="col-xs-6">
                    <ul class="list-marked-variant-2">
                      <li><a href="#!">من نحن</a></li>
                      <li><a href="#!">مشاريعنا</a></li>
                    </ul>
                  </div>
                  <div class="col-xs-6">
                    <ul class="list-marked-variant-2">
                      <li><a href="#!">الرئيسية</a></li>
                      <li><a href="#!">خدماتنا</a></li>
                      <li><a href="#!">تواصل معنا</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">
                <div class="offset-top-22 offset-md-top-30">
                  <p>اشترك فى النشرة البريدية</p>
                  <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform form-classic form-inline offset-top-15">
                    <div class="form-group">
                      <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                      <label for="contact-email" class="form-label">ادخل بريدك الالكترونى</label>
                    </div>
                    <button type="submit" aria-label="Subscribe" class="btn btn-icon-only btn-primary"><span class="icon icon-xs icon-white fa-envelope-o"></span></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="page-foot section-15 bg-gray-base">
      <div class="shell text-center">
        <div class="range">
          <div class="cell-sm-12">
            <p class="rights text-white-03"><bdi>© Copyright, 2019 Aljendy For Lawyers and Consultants. All rights reserved.</bdi> </p> <br/>
            <p class="rights text-white-03">Programming and Designed by <a href="https://www.clicktopass.com/">Clicktopass</a> </p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div id="form-output-global" class="snackbars"></div>
  <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
  <div class="pswp__bg"></div>
  <div class="pswp__scroll-wrap">
    <div class="pswp__container">
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>
    <div class="pswp__ui pswp__ui--hidden">
      <div class="pswp__top-bar">
        <div class="pswp__counter"></div>
        <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
        <button title="Share" class="pswp__button pswp__button--share"></button>
        <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
        <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
      </div>
      <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
      <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
      <div class="pswp__caption">
        <div class="pswp__caption__cent"></div>
      </div>
    </div>
  </div>
  </div>
  <script src="js/core.min.js"></script> 
  <script src="js/script.js"></script>
  </body>
</html>