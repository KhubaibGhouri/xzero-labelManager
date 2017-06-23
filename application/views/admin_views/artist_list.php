	<link href="<?php echo ADMIN_ASSETS; ?>plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo ADMIN_ASSETS; ?>plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />

	<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Artist</a></li>
				<li class="active">Artist List</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Artist List<small</small></h1>
			<!-- end page-header -->
			  <?php if(($this->session->flashdata('successmsg'))){ ?>
        <?php echo $this->session->flashdata('successmsg') ?>
        <?php } ?>
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Artist List</h4>
                        </div>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Artist Name</th>
                                        <th>Collaboration</th>
                                        <th>Website Links</th>
                                        <th>Edit / Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php 

                                    foreach($artist as $row){ ?>
                                    <tr class="odd gradeX">
                                    <td>
                                    <?php
                                    if(!empty($row['art_img_url'])){ ?>
                                    	<img style="width: 35px;
    height: 30px;" src="<?php echo ADMIN_ASSETS.'uploads/images/artist/'.$row['art_img_url']; ?>">
                                    	<?php

                                    }else { ?>

                                    	<img style="width: 30px;" src="<?php echo ADMIN_ASSETS; ?>img/avatar.jpg">
                                    	<?php
                                    }

                                    ?>
                                     </td>   
                                        <td> <?= $row['art_name'] ?></td>
                                        <td> </td>
                                        <td>
                                      <?php  if(!empty($row['art_fb'])){ ?>
                   <a href="<?=  prep_url($row['art_fb'] );?>" target="_blank" style="color: #808080;">
                   <i style="font-size:25px" class="fa fa-facebook-square" aria-hidden="true"></i>
                   </a>
                   
                   <?php }if(!empty($row['art_twitter'])){ ?>
                      <a href="<?=  prep_url($row['art_twitter']) ?>" style="color: #808080;"><i style="font-size:25px" class="fa fa-twitter-square" aria-hidden="true"></i></a>
                       <?php }if(!empty($row['art_youtube'])){ ?>
                   <a href="<?=  prep_url($row['art_youtube'] )?>" style="color: #808080;"><i style="font-size:25px" class="fa fa-youtube-square" aria-hidden="true"></i></a>
                   <?php }if(!empty($row['art_myspace'])){ ?>
                 <a href="<?=  prep_url($row['art_myspace']) ?>" style="color: #808080;"><img style="height:25px; width: 25px;margin-top: -10px;" src="<?php echo ADMIN_ASSETS; ?>img/myspace_icon.png"></a>
                
          
              <?php }if(!empty($row['art_rss'])){ ?>
                <a href="<?=  prep_url($row['art_rss']); ?>" style="color: #808080;"><i style="font-size:25px" class="fa fa-rss-square" aria-hidden="true"></i></a>
                  <?php }if(!empty($row['art_soudcloud'])){ ?>
                   <a href="<?=  prep_url($row['art_soudcloud']); ?>" style="color: #808080;"><i style="font-size:25px" class="fa fa-soundcloud" aria-hidden="true"></i></a>
                   <?php }?>                     
                                        </td>
                                        <td style="text-align: center;">  
 <a href="edit/<?= $row['id']; ?>"><i style="font-size:20px" class="fa fa-edit (alias)" aria-hidden="true"></i></a>
 &nbsp
          
                                        <a  href="delete/<?= $row['id']; ?>" style="color:#e74c3c;"><i style="font-size:20px" class="fa fa-times-circle" aria-hidden="true"></i></a>



                                        </td>
                                    </tr>
                                   
                                     <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->


	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>


           <script src="<?php echo ADMIN_ASSETS; ?>plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo ADMIN_ASSETS; ?>plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo ADMIN_ASSETS; ?>plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo ADMIN_ASSETS; ?>js/table-manage-default.demo.min.js"></script>
	<!-- <script src="<?php echo ADMIN_ASSETS; ?>js/apps.min.js"></script> -->
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	