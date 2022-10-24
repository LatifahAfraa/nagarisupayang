 
 <!-- ##### Post Details Title Area Start ##### -->
 <div class="post-details-title-area bg-overlay clearfix" style="background-image: url(img/bg-img/88.jpg); height: 16em">
        <div class="container-fluid h-100">
            <div class="row h-10 align-items-center">
                <div class="col-12 col-lg-8 mx-auto">
                    <!-- Post Content -->
                    <div class="post-content text-center my-5">
                        <p class="post-title" style="font-size: 44px;"> DATA JUMLAH PENDUDUK NAGARI SUPAYANG</p>
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
                 <div class="box-body" style="item-align:center;">
                     <center>
                         <div class="table table-responsive">
                           <table id="example1" class="table table-bordered table-striped">
                             <thead>
                               <tr>
                                 <th>No</th>
                                 <th>Nama Dusun</th>
                                 <th>Jumlah Jiwa</th>
                                 <th>Laki-Laki</th>
                                 <th>Perempuan</th>
                                
                               </tr>
                             </thead>
                             <tbody>
             
             
                               <?php
                               $be = mysqli_query($kon, "SELECT * FROM dataadmin");
             
                               $no = 1;
                               $total = 0;
                               $total1=0;
                               $total2=0;
                               $total3=0;
                               $total4=0;
                               while ($r = mysqli_fetch_assoc($be)) {
                               ?>
                                 <tr>
                                   <td><?= $no; ?></td>
                                   <td><?= $r["admin_nama"]; ?></td>
                                   <td><?= $r["admin_jiwa"]; ?></td>
                                   <td><?= $r["admin_jekel1"]; ?></td>
                                   <td><?= $r["admin_jekel2"]; ?></td>
                                  
                                 </tr>
                               <?php $no++;
                                 $total2 += (int) $r['admin_jiwa'];
                                 $total3 += $r['admin_jekel1'];
                                 $total4 += $r['admin_jekel2'];
                               } ?>
                             </tbody>
                             <tr>
                               <td colspan="2" align="right"><b>Total</b></td>
                               <td> <?= $total2 ?> </td>
                               <td> <?= $total3 ?> </td>
                               <td> <?= $total4 ?> </td>
             
                             </tr>
                           </table>
                         </div>
                     </center>
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