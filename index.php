<?php require 'header.php';
require 'config.php'
 ?>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>ມີບໍລິການຫຼາຍຢ່າງຈາກນັກສືກສາ</h3><br>
                   
                </div>
            </div>

            <?php
            $query = "SELECT * FROM `portfolio`" ;
            $result = mysqli_query($conn, $query);
            $rows=0;
            if($result->num_rows > 0 ){
              while($row = $result->fetch_assoc()) {
                if ($rows == 0){
                    echo "<div class=''>";
                 }
              ?>

              <div class="col-md-4 col-xs-12" style="margin-bottom: 15px">
                 <div class="card">
                   <img src="<?php echo str_replace("../", "", $row["p_img"]); ?>" alt="Avatar" class="img-responsive">
                 </div>
               </div>

            <?php
              if($rows == 5){
                   echo '</div>';
                   $rows = -1;
                }
                $rows++; ?>

              <?php } }?>

        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about"  style="background-image:url(img/g.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>ກ່ຽວກັບພວກເຮົາ</h3><br><br>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>ພວກເຮົາແມ່ນກຸ່ມທີມນັກສືກສາຈາກມະຫາວິທະຍາໄລແຫ່ງຊາດທີ່ຄິດໄອເດຍ Student-Jobs ຂື້ນມາເວົ້າງ່າຍໆກໍ່ຄື ອາຊີບນັກສືກສານັ້ນເອງສາເຫດທີ່ພວກເຮົາສ້າງເວັບໄຊທ໌ນີ້ຂື້ນມາກໍ່ເພື່ອສືກສາປະສົບການຂອງການເຮັດວຽກໃນໄລຍະເປັນນັກສຶກເພື່ອກ່ຽມທີ່ຈະເຮດວຽກໃນອະນາຄົດ ອີກຢ່າງກໍ່ແມ່ນເພື່ອຫາເງີນເພື່ອທືນການສືກສາໃຫ້ແກ່ຕົນເອງ ແລະ ເພື່ອຫຼຸດຜ່ອນຄ່າໃຊ້ຈ່າຍຈາກທາງພໍ່ແມ່ ຫວັງວ່າທີ່ສິ່ງພວກເຮົາເຮັດຂື້ນມາຈະມີຜູ່ໃຫຍ່ໃຈດີມາສະໜັບສະໜູນມາໃຊ້ວຽກພວກເຮົາເພື່ອສົ່ງເສີ່ມນັກສືກສາໃຫ້ມີຄວາມດຸໝັ່ນ ແລະ ພັດທະນາຕົນເອງໃຫ້ເກັ່ງໃນການເຮັດວຽກ ແລະ ຮ່ຳຮຽນ ເພື່ອອະນາຄົດຂອງຕົນເອງ ແລະ ປະເທດຊາດນີ້ກໍ່ແມ່ນເປົ້າໝາຍຂອງພວເຮົາ </p>
                </div>
                <div class="col-lg-4">
                    <p>ກຸ່ມນັກສືກສາພວກເຮົາມີຫຼາຍໆບໍລິການທີ່ພວກເຮົາສາມາດເຮັດໄດ້ ແລະ ເຮັດໄດ້ດີກໍ່ມີຫຼາຍໆຢ່າງ ບໍ່ວ່າຈະເປັນການພີມເອກະສານ ການແປພາສາ ການເປັນນັກຂາຍອອນໄລນ໌ ເປັນຜູ່ດູແດເວັບໄຊທ໌ ແລະ ເພຈ Facebook ບໍລິການອອກແບບນາມບັດ ໂລໂກ້ ແລະ ອື່ນໆອີກຫຼາຍໆຢ່າງທີ່ພວກເຮົາບໍລິການ ຫວັງຢ່າງຍິງວ່າກຸ່ມນັກສືກສາພວກເຮົາຈະໄດ້ເຮັດວຽກສ່ວນນື່ງໃຫ້ບັນດາທ່ານຕ່າງໆທີ່ມີຄວາມສົນໃຈຢາກທີ່ຈະມາຈ້າງນັກສືກສາສະໜັບສະນູນນັກສືກໃຫ້ມີຄວາມພັດທະນາຕໍ່ການສືກສາຮຽນຮູ້ເພື່ອທີ່ຈະເປັນແນວທາງທີ່ດີຂອງການພັດທະນາຊັບພະຍາກອນມະນຸດຂອງປະເທດຊາດຈາກລຸ້ນສູ່ລຸ້ນ ໂດຍກຸ່ມນັກສືກສາ ມຊ Student-Jobs</p>
                    </div>
    </section>

    <!-- Service -->
    <section class="" id="service" style="background-color:#1E88E5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 style="color:#ffffff">ອັດຕາຄ່າບໍລິການວຽກ</h3><br><br>
                    <?php
                    $query = "SELECT * FROM `service`" ;
                    $result = mysqli_query($conn, $query);
                    $rows=0;
                    if($result->num_rows > 0 ){
                      while($row = $result->fetch_assoc()) {
                        if ($rows == 0){
                            echo "<div class='row'>";
                         }
                      ?>
                     <a href="#contact">
                      <div class="col-md-3 col-xs-12" style="margin-bottom: 15px">
                        <!-- <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal"> -->
                         <div class="card">
                           <img src="<?php echo str_replace("../", "", $row["s_img"]); ?>" alt="Avatar" class="img-responsive">
                             <div class="container1" style="color:#ffffff">
                             <h5><b><?php echo $row["s_name"]; ?></b></h5>
                              <p style="margin-bottom: 12px"><?php echo $row["s_post"]; ?></p>
                           </div>
                         </div>
                       </div>
                      </a>
                    <?php
                      if($rows == 7){
                           echo '</div>';
                           $rows = -1;
                        }
                        $rows++; ?>
                      <?php } }?>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3><b>ຕິດຕໍ່ພວກເຮົາ</b></h3><br> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form action="admin/insert/insert-contact.php" method="post" enctype="multipart/form-data">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>ຊື່ຂອງທ່ານ</label>
                                <input type="text" class="form-control" name="name" placeholder="ຊື່ຂອງທ່ານ" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>ອີເມວ</label>
                                <input type="email" class="form-control" name="email" placeholder="ອີເມວ" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Facebook</label>
                                <input type="text" class="form-control" name="phone" placeholder="ຊື່ Facebook" required >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" name="post" placeholder="ໃສ່ຂໍ້ມູນກ່ຽວກັບວຽກ" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" name="submit" class="btn btn-info btn-lg">ຕິດຕໍ່</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
<?php require 'footer.php' ?>
