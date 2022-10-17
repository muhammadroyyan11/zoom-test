 <!-- ======= Services Section ======= -->
 <section id="services" class="section-bg">
     <div class="container" data-aos="fade-up">

         <header class="section-header">
             <h3>Zoom</h3>
             <p>Click room name to start meet</p>
         </header>

         <div class="row justify-content-center">
             <?php
                foreach ($room as $key => $data) { ?>
                 <div class="col-md-3 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                     <div class="box text-center">
                         <h4 class="title"><a href="<?= $data->link ?>" target="_blank"><?= $data->name ?></a></h4>
                         <p class="description">Host key : <?= $data->host_key ?></p>
                     </div>
                 </div>
             <?php   }
                ?>
         </div>

     </div>
 </section><!-- End Services Section -->