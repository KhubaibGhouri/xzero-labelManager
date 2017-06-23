 <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li><a href="javascript:;">Release Details</a></li>
                <li class="active">Release Details</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Release Details <small></small></h1>
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
                            <h4 class="panel-title">Release Details</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered" data-parsley-validate="true">
                           <div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4"> Submit Status :</label>
                                    <div class="col-md-6 col-sm-6">
                                         <select class="form-control input-sm " id="select-required" name="selectBox" data-parsley-required="true">
                                            
                                            <option value="foo">Draft Release</option>
                                            <option value="bar">Final Release</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Artist : *</label>
                                    <div class="col-md-6 col-sm-6">
                                      <select class="form-control input-sm" id="select-required" name="selectBox" data-type="alphanum" data-parsley-required="true">
                                            <option value="">Please Select...</option>
                                            <option value="foo">JHON</option>
                                            <option value="bar">khalid</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                </div>

<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Catalog :</label>
                                    <div class="col-md-6 col-sm-6">
                                     <input class="form-control input-sm" type="text" id="alphanum" name="art_web"  data-type="alphanum" placeholder="Enter Catalog"  data-parsley-required="false" />
                                    </div>
                                
                                </div>
                                </div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Release  Name : * </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control input-sm" type="text" id="alphanum" name="release_name"  data-type="alphanum" placeholder="Enter Release Name"  data-parsley-required="true" />
                                    </div>
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4"> Record Label : :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control input-sm" id="select-required" name="selectBox" data-parsley-required="true">
                                           <option value="">Please Select...</option>
                                            <option value="foo">Cave Records</option>
                                            <option value="bar">Xzero Records</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label col-md-4 col-sm-4">Release Type :</label>
                                    <div class="col-md-6 col-sm-6">
                                       <label class="radio-inline">
                                            <input type="radio" name="optionsRadios" value="Single" data-parsley-group="wizard-step-1" data-parsley-required="false">
                                           : Single 
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadios" value="EP" data-parsley-group="wizard-step-1" data-parsley-required="false">
                                            : EP  
                                        </label>
                                         <label class="radio-inline">
                                            <input type="radio" name="optionsRadios" value="Album" data-parsley-group="wizard-step-1" data-parsley-required="false">
                                            : Album
                                        </label>
                                    </div>
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4"> Official Release Date    :</label>
                                    <div class="col-md-6 col-sm-6">
                                      <input type="date" class="form-control" id="datepicker-default" placeholder="Select Date" value="" />
                                    </div>
                                </div>
                                </div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4"> Format :</label>
                                     <div class="col-md-6 col-sm-6">
                                      <div class="checkbox-inline"><label><input type="checkbox" name="mincheck[]" value="bar" /> : MP3</label> </div>
                                         <div class="checkbox-inline"><label><input type="checkbox" name="mincheck[]" value="bar" /> :CD </label> </div>
                                         <div class="checkbox-inline"><label><input type="checkbox" name="mincheck[]" value="bar" /> : Vinyl </label> </div>
                                       
                                       
                                    </div>



                                    

                                </div>
                                </div>
                                </div>
                                <div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-6">


                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4"> Date Signed :</label>
                                    <div class="col-md-6 col-sm-6">
                                         <input type="date" class="form-control" id="datepicker-default" placeholder="Select Date" value="" />
                                    </div>
                                </div>
                                </div>

                                <!-- begin col-4 -->
                                <div class="col-md-6">
                               <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4"> LW Licensing Usage :</label>
                                     <div class="col-md-6 col-sm-6">
                                       <label class="radio-inline">
                                            <input type="radio" name="optionsRadios" value="Single" data-parsley-group="wizard-step-1" data-parsley-required="false">
                                           Not Available
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadios" value="EP" data-parsley-group="wizard-step-1" data-parsley-required="false">
                                            Available 
                                       </label>
                                    </div>
                                </div>
                                </div>
                                 </div>

<div class="row">
                                <!-- begin col-4 -->
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-4"> Exclusive Store / Date : </label>
                                      <div class="col-md-3">
                                       <select class="form-control input-sm" id="select-required" name="selectBox" data-parsley-required="true">
                                           <option value="">Please Select...</option>
                                            <option value="foo">Cave Records</option>
                                            <option value="bar">Xzero Records</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 ">
                                        <input class="form-control input-sm" type="date" id="alphanum" name="art_web"  data-type="alphanum" placeholder=""  data-parsley-required="false" />
                                    </div>
                                   
                                </div>
                                </div>

                                <!-- begin col-4 -->
                                
                                </div>
                                
                                

                              
  <div class="form-section"><p > Social Networking Links</p></div>
  sdgsasda dahsdashd adaksdj

<div class="form-section"><p >Label Profile / Biography (Minimum 50 Words) *</p></div>

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

            <script src="assets/plugins/parsley/dist/parsley.js"></script>
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
    