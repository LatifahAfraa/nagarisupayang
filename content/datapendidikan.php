 
 <!-- ##### Post Details Title Area Start ##### -->
 <div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;"> DATA PENDIDIKAN NAGARI SUPAYANG</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
  
    <!-- ##### Top News Area Start ##### -->
    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">
           

            <div class="col-12 ">
                <!-- Single News Area -->
                <div class="box-body">
            <div class="table table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Kelompok</th>
                    <th colspan="2">Jumlah</th>
                    <th colspan="2">Laki-Laki</th>
                    <th colspan="2">Perempuan</th>
                  </tr>
                  <tr>
                    <td>n</td>
                    <td>%</td>
                    <td>n</td>
                    <td>%</td>
                    <td>n</td>
                    <td>%</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $be = mysqli_query($kon, "SELECT * FROM datapendidik");

                  $no = 1;
                  

                    if(mysqli_num_rows($be) == 0) {
                        echo "<h4>*Data Pendidikan Belum Ada*</h4>";
                    } else {
                    }
                    while ($r = mysqli_fetch_assoc($be)) {
                    
                  ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r["pendkk_kel"]; ?></td>

                      <td><?= $r["pendkk_jml"]; ?></td>
                      <td><?= $r["pendkk_jml2"]; ?></td>
                      <td><?= $r["pendkk_lk"]; ?></td>
                      <td><?= $r["pendkk_lk2"]; ?></td>
                      <td><?= $r["pendkk_pr"]; ?></td>
                      <td><?= $r["pendkk_pr2"]; ?></td>

                      
                    </tr>
                  <?php $no++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
            </div>
                

              
                        <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

                
  
  
    
</body>

</html>