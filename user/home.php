 <!--main content start-->
 <section id="main-content">
     <section class="wrapper">
         <div class="row">
             <div class="col-lg-9 main-chart">
                 <div class="row content-panel">
                     <div class="border-head">
                         <h4>USER VISITS</h4>
                     </div>
                     <div class="custom-bar-chart">
                         <ul class="y-axis">
                             <li><span>10.000</span></li>
                             <li><span>8.000</span></li>
                             <li><span>6.000</span></li>
                             <li><span>4.000</span></li>
                             <li><span>2.000</span></li>
                             <li><span>0</span></li>
                         </ul>
                         <div class="bar">
                             <div class="title">JAN</div>
                             <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip"
                                 data-placement="top">85%</div>
                         </div>
                         <div class="bar ">
                             <div class="title">FEB</div>
                             <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip"
                                 data-placement="top">50%</div>
                         </div>
                         <div class="bar ">
                             <div class="title">MAR</div>
                             <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip"
                                 data-placement="top">60%</div>
                         </div>
                         <div class="bar ">
                             <div class="title">APR</div>
                             <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip"
                                 data-placement="top">45%</div>
                         </div>
                         <div class="bar">
                             <div class="title">MAY</div>
                             <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip"
                                 data-placement="top">32%</div>
                         </div>
                         <div class="bar ">
                             <div class="title">JUN</div>
                             <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip"
                                 data-placement="top">62%</div>
                         </div>
                         <div class="bar">
                             <div class="title">JUL</div>
                             <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip"
                                 data-placement="top">75%</div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- /content-panel -->


             <div class="col-lg-3 ds">

                 <div id="calendar" class="">
                     <div class="panel green-panel no-margin">
                         <div class="panel-body">
                             <div id="date-popover" class="popover top"
                                 style="cursor: pointer; logout: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                 <div class="arrow"></div>
                                 <h3 class="popover-title" style="disadding: none;"></h3>
                                 <div id="date-popover-content" class="popover-content"></div>
                             </div>
                             <div id="my-calendar"></div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
         <div class="row mt">
             <div class="col-md-12">
                 <div class="row content-panel">
                     <div class="col-md-4 profile-text mt mb centered">
                         <div class="right-divider hidden-sm hidden-xs">
                             <h4>1922</h4>
                             <h6>FOLLOWERS</h6>
                             <h4>290</h4>
                             <h6>FOLLOWING</h6>
                             <h4>$ 13,980</h4>
                             <h6>MONTHLY EARNINGS</h6>
                         </div>
                     </div>
                     <!-- /col-md-4 -->
                     <div class="col-md-4 profile-text">
                         <h3><?php echo $_SESSION['nama_admin']?></h3>
                         <h6>Main Administrator</h6>
                         <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                             piece
                             of classical Latin literature from 45 BC.</p>
                         <br>
                     </div>
                     <!-- /col-md-4 -->
                     <div class="col-md-4 centered">
                         <div class="profile-pic">
                             <p><img src="../admin/Admin/picture/<?php echo $_SESSION['picture']?>" class="img-circle">
                             </p>
                             <p>
                                 <button class="btn btn-theme"><i class="fa fa-check"></i> Follow</button>
                                 <button class="btn btn-theme02">Add</button>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </section>

     <footer class="site-footer">
         <div class="text-center">
             <p>
                 &copy; Copyrights<br> <strong>Anhar Hadhitya 18111184 <br>Dendi Renaldi 18111190<br> Sandi Alif
                     Ramadhan 18111228<br> Kharisma Firsty 18111078 </strong>
             </p>
             <div class="credits">
                 <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->

             </div>
             <a href="index.html#" class="go-top">
                 <i class="fa fa-angle-up"></i>
             </a>
         </div>
     </footer>
 </section>
 <!--main content end-->