 <div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Label</a></li>
				<li class="active">New Label</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">New Label <small></small></h1>
			<!-- end page-header -->
			
 <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Label Details</h4>
                        </div>
                        <div class="panel-body panel-form">
<form class="form-horizontal form-bordered" data-parsley-validate="true"  Method="POST" action="<?php echo base_url().'admin/label/addlabel'; ?>"
                 enctype="multipart/form-data">
                            <div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Label Name  :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_name"  data-type="alphanum" placeholder="Enter Label Name"  data-parsley-required="false" />
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Use Main Details  :</label>
									<div class="col-md-6 col-sm-6">
									 <div class="checkbox"><label><input type="checkbox" name="use_main_detail" value="1" /></label></div>
									</div>
								</div>
								</div>
								</div>

<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Label Address  :</label>
									<div class="col-md-6 col-sm-6">
									  <textarea class="form-control" placeholder="" rows="2" name="label_address"  data-parsley-required="false"></textarea>
									</div>
								
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Contact Name   :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_contact"  data-type="alphanum" placeholder="Enter Website"  data-parsley-required="false" />
									</div>
								</div>
								</div>
								</div>
								<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Country Name  :</label>
									<div class="col-md-6 col-sm-6">
										<select class="form-control" id="select-required" name="label_country" data-parsley-required="true">
											<option value="">Please choose country</option>
											<option value="USA">USA</option>
											<option value="UK">UK</option>
										</select>
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Contact Email   :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="email" id="alphanum" name="label_cont_email"  data-type="alphanum" placeholder="Enter Website"  data-parsley-required="false" />
									</div>
								</div>
								</div>
								</div>
								<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Telephone   :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="data-phone" data-parsley-type="number" placeholder="" name="label_phone" />
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Main Email   :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="email" id="alphanum" name="label_main_email"  data-type="alphanum" placeholder="Enter Website"  data-parsley-required="false" />
									</div>
								</div>
								</div>
								</div>
								<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">


								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Fax   :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_fax"  data-type="alphanum" placeholder=""  data-parsley-required="false" />
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Feedback Email  :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="email" id="alphanum" name="label_feedback_email"  data-type="alphanum" placeholder="Enter Website"  data-parsley-required="false" />
									</div>
								</div>
								</div>
								</div>
<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Website   :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_web"  data-type="alphanum" placeholder=""  data-parsley-required="false" />
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                
								</div>
								
								

                              
  <div class="form-section"><p > Social Networking Links</p></div>
<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Facebook   : <i style="font-size: 30px" class="fa fa-facebook-square" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_fb"  data-type="alphanum" placeholder="Enter Facebook Url"  data-parsley-required="false" />
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label col-md-4 col-sm-4">SoundCloud   : <i style="font-size: 30px" class="fa fa-soundcloud" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_soundcloud"  data-type="alphanum" placeholder="Enter SoundCloud Url"  data-parsley-required="false" />
									</div>
								</div>
								</div>
								</div>
<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Myspace   :<img style="height: 30px;
    width: 30px;" src="<?php echo ADMIN_ASSETS; ?>img/myspace_icon.png"></label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_myspace"  data-type="alphanum" placeholder="Enter Facebook Url"  data-parsley-required="false" />
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								
 <div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Twitter  : <i style="font-size: 30px" class="fa fa-twitter-square" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_twitter"  data-type="alphanum" placeholder="Enter Facebook Url"  data-parsley-required="false" />
									</div>
								</div> 
								</div>
								</div>
								<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Youtube  : <i style="font-size: 30px" class="fa fa-youtube-square" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_youtube"  data-type="alphanum" placeholder="Enter Youtube Url"  data-parsley-required="false" />
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Blog / RSS   : <i style="font-size: 30px" class="fa fa-rss-square" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_rss"  data-type="alphanum" placeholder="Enter Blog / RSS Url"  data-parsley-required="false" />
									</div>
								</div>
								</div>
								</div>
								<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Google Pages   : <i style="font-size: 30px" class="fa fa-google-plus-square" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_google"  data-type="alphanum" placeholder="Enter Google Pages Url"  data-parsley-required="false" />
									</div>
								</div> 
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								 <div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Instagram    : <i style="font-size: 30px" class="fa fa-instagram" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_instagram"  data-type="alphanum" placeholder="Enter Instagram  Url"  data-parsley-required="false" />
									</div>
								</div> 
								</div>
	</div>
	<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Tumblr : <i style="font-size: 30px" class="fa fa-tumblr-square" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_tumblr"  data-type="alphanum" placeholder="Enter Tumblr  Url"  data-parsley-required="false" />
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
							<div class="form-group">
									<label class="control-label col-md-4 col-sm-4">Digg  : <i style="font-size: 30px" class="fa fa-digg" aria-hidden="true"></i> </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_digg"  data-type="alphanum" placeholder="Enter Digg   Url"  data-parsley-required="false" />
									</div>
								</div>
								</div>
	</div>

 <div class="form-section"><p >Distribution </p></div>
							
		<div class="form-group" style="text-align:center;">
                                    
                                    <div class="col-md-12 col-sm-12">
                                       <div class="checkbox"><label><input type="checkbox" name="label_distribute[]" value="1" />
                                       Xzero should distribute this label</label>
                                       </div>
                                    </div>
                                	 </div>


							
 				<div class="form-section"><p >Label History </p></div>			 

 							<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">


								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Parent Label  :</br> (leave blank if none)</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_parent"  data-type="alphanum" placeholder=""  data-parsley-required="false" />
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Sub Label (s) : </br> (leave blank if none) </label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="email" id="alphanum" name="label_sublabel"  data-type="alphanum" placeholder="Enter Website"  data-parsley-required="false" />
									</div>
								</div>
								</div>
								</div>
 							
<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">


								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Year Established : *</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="number" id="alphanum" name="label_established"  data-parsley-type="number" placeholder=""  data-parsley-required="false" />
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Releases In Catalog  :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="number" id="alphanum" name="label_catalog"  data-parsley-type="number" placeholder="Enter Website"  data-parsley-required="false" />
									</div>
								</div>
								</div>
								</div>
								 
								<div class="form-group">
								 <div class="col-md-12">
									<label class="control-label col-md-3 col-sm-3"> Format  :</label>
									<div class="col-md-8 col-sm-8">
									<label>What formats will you be releasing via this label or have you released through this label in the past :</label></br>
										 <div class="checkbox-inline"><label><input type="checkbox" name="label_format[]" value="Digital" /> : Digital</label> </div>
										 <div class="checkbox-inline"><label><input type="checkbox" name="label_format[]" value="Vinyl" /> : Vinyl</label> </div>
										 <div class="checkbox-inline"><label><input type="checkbox" name="label_format[]" value="CD Mixed" /> : CD Mixed</label> </div>
										 <div class="checkbox-inline"><label><input type="checkbox" name="label_format[]" value="CD Album" /> : CD Album</label> </div>
									</div>
								</div>
								</div>

									<div class="form-section"><p >Main Artists</p></div>

<div class="row">
                                <!-- begin col-4 -->
                                 <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Artist 1  : *</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_artist1"  data-type="alphanum" placeholder="Enter Artist 1"  data-parsley-required="false" />
									</div>
								</div>
								</div>
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Main Genre  : *</label>
									<div class="col-md-6 col-sm-6">
										<select class="form-control" id="select-required" name="label_main_genre" data-parsley-required="true">
											<option value="">Please Select ...</option>
											<option value="Bass">Bass</option>
											<option value="Jazz">Jazz</option>
										</select>
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                               
								</div>
<div class="row">
                                <!-- begin col-4 -->
                                 <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Artist 2   :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_artist2"  data-type="alphanum" placeholder="Enter Artist 2"  data-parsley-required="false" />
									</div>
								</div>
								</div>
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Second Genre  : </label>
									<div class="col-md-6 col-sm-6">
										<select class="form-control" id="select-required" name="label_sec_genre" data-parsley-required="true">
											<option value="">Please Select ...</option>
											<option value="Bass">Bass</option>
											<option value="Jazz">Jazz</option>
										</select>
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                               
								</div>
								<div class="row">
                                <!-- begin col-4 -->
                                 <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Artist 3   :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_artist3"  data-type="alphanum" placeholder="Enter Artist 3"  data-parsley-required="false" />
									</div>
								</div>
								</div>
                              
								</div>
								<div class="row">
                                <!-- begin col-4 -->
                                 <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Artist 4   :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_artist4"  data-type="alphanum" placeholder="Enter Artist 4"  data-parsley-required="false" />
									</div>
								</div>
								</div>
                              
								</div>
								<div class="row">
                                <!-- begin col-4 -->
                                 <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Artist 5   :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="alphanum" name="label_artist5"  data-type="alphanum" placeholder="Enter Artist 5"  data-parsley-required="false" />
									</div>
								</div>
								</div>
                              
								</div>
								<div class="form-section"><p >Label Logos</p></div>

								<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">


								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Add Label Logo </br>1400 x 1400 pixels (JPG) :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="file" id="img" name="label_logo"  data-type="alphanum"   data-parsley-required="false" />
									</div>
								</div>
								</div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"> Add Promo Logo </br> 180 x 60 pixels (JPG) :</label>
									<div class="col-md-6 col-sm-6">
							<input class="form-control" type="file" id="img" name="label_logo_promo"  data-type="alphanum"   data-parsley-required="false" />
									</div>
								</div>
								</div>
								</div>

<div class="form-section"><p >Label Profile / Biography (Minimum 50 Words) *</p></div>
<div class="form-group">
<div class="col-md-12 col-sm-12">
                                        <textarea class="form-control" id="word_count" placeholder="" rows="5" name="label_biography"></textarea>
                                    </div>
                                <label style="margin-left:10px">Word Count :</label>   <span id="display_count"><b>0</b></span> words.
                                 <label style="margin-left:10px">Word Left :</label> <span id="word_left"><b>50</b></span> words.
 </div>
								<div class="form-group">
									
									<div class="col-md-12 col-sm-12" style="text-align: center;">
										<button type="submit" class="btn btn-success">SUbmit</button>
										<button type="cancel" class="btn btn-danger ">Cancel</button>
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

          <!--   <script src="assets/plugins/parsley/dist/parsley.js"></script> -->
            <script type="text/javascript">
            	$(document).ready(function() {
  $("#word_count").on('keyup', function() {
    var words = this.value.match(/\S+/g).length;

    if (words > 200) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 200).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      $('#display_count').text(words);
      $('#word_left').text(50-words);
    }
  });
}); 
            </script>
	