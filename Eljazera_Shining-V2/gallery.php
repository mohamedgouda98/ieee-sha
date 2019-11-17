<?php 
      include "include/navbar.php";
    ?>
      <main class="page-content">

        <section class="section-50 section-sm-90 section-md-bottom-120 section-lg-bottom-165">
          <div class="shell isotope-wrap text-center">
            <div class="range">
              <div class="cell-xs-12">
                <ul class="isotope-filters-responsive">
                  <li>
                    <p>Choose your category:</p>
                  </li>
                  <li class="block-top-level">
                    <button data-custom-toggle="#isotope-1" data-custom-toggle-hide-on-blur="true" class="isotope-filters-toggle btn btn-sm btn-default">Filter<span class="caret"></span></button>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="cell-xs-12 offset-top-40">
                <div class="row">
                  <div data-isotope-layout="fitRows" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope isotope-gutter-default">
                    <?php 
                       $stmt=$cont->prepare("SELECT * FROM projects");
                       $stmt->execute();
                       while($row=$stmt->fetch()){
                    ?>
                  
                    <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                      <div class="thumbnail thumbnail-variant-3">
                        <figure><img src="images/370x278.jpg" alt="" width="370" height="278"/> </figure>
                        <div class="caption"><a href="images/1200x900.jpg" data-photo-swipe-item="" data-size="1200x900" class="link link-original"></a></div>
                      </div>
                    </div>
                    
                    
                    
                    <?php  } ?>
                    
                    
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
  <?php
  
  include "include/footer.php";
  ?>