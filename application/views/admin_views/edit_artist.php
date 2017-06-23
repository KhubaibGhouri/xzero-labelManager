 <div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Artist</a></li>
				<li class="active">New Artist</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">New Artist <small></small></h1>
			<!-- end page-header -->
			  <?php if(($this->session->flashdata('successmsg'))){ ?>
        <?php echo $this->session->flashdata('successmsg') ?>
        <?php }
                                    foreach($artist as $row){

         ?>
 <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Artist Details</h4>
                        </div>

                        <div class="panel-body panel-form">
               
                 <form class="form-horizontal form-bordered" data-parsley-validate="true" Method="POST" action="<?php echo base_url().'admin/artist/update/'.$row['id']; ?>"
                 enctype="multipart/form-data">
                 <input type="hidden" id="userId" name="id" value="<?php
                    echo $row['id'];
                    ?>">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Alias Name * :</label>
									<div class="col-md-6 col-sm-6">
	<input class="form-control" type="text" id="alphanum" name="art_name"  data-type="alphanum" placeholder="Enter Artist Name"  data-parsley-required="true"
	 value="<?= $row['art_name']; ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Website  :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="art_web"  data-type="alphanum" placeholder="Enter Website"  data-parsley-required="false"  value="<?= $row['art_web']; ?>" />
									</div>
								</div>

								  <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Type</label>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="radio-inline">
                                     
                                            <input type="radio" name="art_type" value="Label Artist" <?php if($row['art_type'] =="Label Artist"){echo 'checked';}?> />
                                             : Label Artist 
                                     
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="art_type" value="Guest Remixer" <?php if($row['art_type'] =="Guest Remixer"){echo 'checked';}?>/>
                                             : Guest Remixer
                                        </label>
                                    </div>
                                </div>

                                <div class="form-section"><p >Distributed Releases</p></div>
								<div style="padding: 10px">
									
This artist is not linked to any distributed releases
								</div>
  <div class="form-section"><p > Social Networking Links</p></div>



 							 <div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Facebook   : <i style="font-size: 30px" class="fa fa-facebook-square" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="art_fb"  data-type="alphanum" placeholder="Enter Facebook Url"  data-parsley-required="false"  value="<?= $row['art_fb']; ?>"/>
									</div>
								</div>

 <div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Twitter  : <i style="font-size: 30px" class="fa fa-twitter-square" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="art_twitter"  data-type="alphanum" placeholder="Enter Twitter Url"  data-parsley-required="false"  value="<?= $row['art_twitter']; ?>"/>
									</div>
								</div> 
<div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Myspace   :<img style="height: 39px;
    width: 38px;" src="<?php echo ADMIN_ASSETS; ?>img/myspace_icon.png"></label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="art_myspace"  data-type="alphanum" placeholder="Enter Facebook Url"  data-parsley-required="false"  value="<?= $row['art_myspace']; ?>"/>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Youtube  : <i style="font-size: 30px" class="fa fa-youtube-square" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="art_youtube"  data-type="alphanum" placeholder="Enter Youtube Url"  data-parsley-required="false"  value="<?= $row['art_youtube']; ?>"/>
									</div>
								</div>
								 <div class="form-group">
									<label class="control-label col-md-4 col-sm-4">SoundCloud   : <i style="font-size: 30px" class="fa fa-soundcloud" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="art_soudcloud"  data-type="alphanum" placeholder="Enter SoundCloud Url"  data-parsley-required="false"  value="<?= $row['art_soudcloud']; ?>" />
									</div>
								</div>
								 <div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Blog / RSS   : <i style="font-size: 30px" class="fa fa-rss-square" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="art_rss"  data-type="alphanum" placeholder="Enter Blog / RSS Url"  data-parsley-required="false"  value="<?= $row['art_rss']; ?>"/>
									</div>
								</div>
								
 <div class="form-section"><p > Artist Biography</p></div>

 							<div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Artist Biography</label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea class="form-control" placeholder="" rows="5" name="art_biography" ><?= $row['art_biography']; ?></textarea>
                                    </div>
                                </div>

 							<div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Artist Image</label>
                                    <div class="col-md-6 col-sm-6">
                                    <img src="<?php echo ADMIN_ASSETS.'uploads/images/artist/'.$row['art_img_url']; ?>" style="height: 125px;
    width: 125px">
                                        <input class="form-control" type="file" id="img" name="art_img_url"  data-type="alphanum"   data-parsley-required="false" />
                                    </div>
                                </div>

								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-success">SUbmit</button>
									</div>
								</div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
            </div>
<?php } ?>
           <!--  <script src="<?php echo ADMIN_ASSETS; ?>plugins/parsley/dist/parsley.js"></script> -->
	