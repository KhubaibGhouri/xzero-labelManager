
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="<?php echo ADMIN_ASSETS; ?>plugins/bootstrap-wizard/css/bwizard.min.css" rel="stylesheet" />
    <link href="<?php echo ADMIN_ASSETS; ?>plugins/parsley/src/parsley.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo ADMIN_ASSETS; ?>plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->


        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li><a href="javascript:;">Form Stuff</a></li>
                <li class="active">Wizards + Validation</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Wizards + Validation <small>header small text goes here...</small></h1>
            <!-- end page-header -->
            
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
                            <h4 class="panel-title">Form Wizards</h4>
                        </div>
                        <div class="panel-body">
                            <form action="/" method="POST" data-parsley-validate="true" name="form-wizard">
                                <div id="wizard">
                                    <ol>
                                         <li>
                                           Create New Release  
                                            <small>Enter Release Details</small>
                                        </li>
                                        <li>
                                           Create New Track
                                            <small>Enter New Track Details.</small>
                                        </li>
                                        <li>
                                            Login
                                            <small>Phasellus lacinia placerat neque pretium condimentum.</small>
                                        </li>
                                        <li>
                                            Completed
                                            <small>Sed nunc neque, dapibus non leo sed, rhoncus dignissim elit.</small>
                                        </li>
                                    </ol>
                                    <!-- begin wizard step-1 -->
                                    <div class="wizard-step-1">
                                        <fieldset>
                                            <legend class="pull-left width-full">Release Details</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-4 -->
                                             <div class="col-md-4">
                                                    <div class="form-group block1">
                                                        <label>Release Artist Name : *</label>
                                                       <select class="form-control" id="select-required" name="selectBox" data-parsley-group="wizard-step-1" data-parsley-required="true">
                                            <option value="">Please Select...</option>
                                            <option value="foo">JHON</option>
                                            <option value="bar">khalid</option>
                                        </select>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Release Name : *</label>
                                                        <input type="text" name="middle" placeholder="Enter Release Name" class="form-control" data-parsley-group="wizard-step-1" data-parsley-required="true" />
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Record Label :</label>
                                                          <select class="form-control" id="select-required" name="selectBox" data-parsley-group="wizard-step-1" data-parsley-required="false">
                                            <option value="">Please Select...</option>
                                            <option value="foo">Cave Records</option>
                                            <option value="bar">Xzero Records</option>
                                        </select>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                            </div>
                                            <!-- end row -->
<div class="form-group">
                                            <div class="col-md-12">
                                    <label class="control-label col-md-3 col-sm-3">Release Type :</label>
                                    <div class="col-md-8 col-sm-8">
                                 
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

                                        </fieldset>
                                    </div>
                                    <!-- end wizard step-1 -->
                                    <!-- begin wizard step-2 -->
                                    <div class="wizard-step-2">
                                        <fieldset>
                                            <legend class="pull-left width-full">New Track Details</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Track Artist : *</label>
                                                            <select class="form-control" id="select-required" name="selectBox" data-parsley-group="wizard-step-2" data-parsley-required="true">
                                            <option value="">Please Select...</option>
                                            <option value="foo">JHON</option>
                                            <option value="bar">khalid</option>
                                        </select>
                                                    </div>
                                                </div>
                                                <!-- end col-6 -->
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Track Title : *</label>
                                                        <input type="text" name="title" placeholder="Enter Track Title" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="alphanum" required />
                                                    </div>
                                                </div>
                                                <!-- end col-6 -->
                                            </div>
                                            <div class="row">
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Remix Artist : (if any)</label>
                                                           <select class="form-control" id="select-required" name="selectBox" data-parsley-group="wizard-step-2" data-parsley-required="false">
                                            <option value="">Please Select...</option>
                                            <option value="foo">JHON</option>
                                            <option value="bar">khalid</option>
                                        </select>
                                                    </div>
                                                </div>
                                                <!-- end col-6 -->
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Mix Name : *</label>
                                                        <input type="text" name="mix_name" placeholder="Enter Mix Name :" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="alphanum" required />
                                                    </div>
                                                </div>
                                                <!-- end col-6 -->
                                            </div>
                                            <!-- end row -->
                                        </fieldset>
                                    </div>
                                    <!-- end wizard step-2 -->
                                    <!-- begin wizard step-3 -->
                                    <div class="wizard-step-3">
                                        <fieldset>
                                            <legend class="pull-left width-full">Login</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <div class="controls">
                                                            <input type="text" name="username" placeholder="johnsmithy" class="form-control" data-parsley-group="wizard-step-3" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Pasword</label>
                                                        <div class="controls">
                                                            <input type="password" name="password" placeholder="Your password" class="form-control" data-parsley-group="wizard-step-3" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Confirm Pasword</label>
                                                        <div class="controls">
                                                            <input type="password" name="password2" placeholder="Confirmed password" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-6 -->
                                            </div>
                                            <!-- end row -->
                                        </fieldset>
                                    </div>
                                    <!-- end wizard step-3 -->
                                    <!-- begin wizard step-4 -->
                                    <div>
                                        <div class="jumbotron m-b-0 text-center">
                                            <h1>Login Successfully</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat commodo porttitor. Vivamus eleifend, arcu in tincidunt semper, lorem odio molestie lacus, sed malesuada est lacus ac ligula. Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin. </p>
                                            <p><a class="btn btn-success btn-lg" role="button">Proceed to User Profile</a></p>
                                        </div>
                                    </div>
                                    <!-- end wizard step-4 -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        
        </div>
        </div>
        <!-- end #content -->
        
        <!-- begin theme-panel -->
     
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="<?php echo ADMIN_ASSETS; ?>plugins/parsley/dist/parsley.js"></script>
    <script src="<?php echo ADMIN_ASSETS; ?>plugins/bootstrap-wizard/js/bwizard.js"></script>
    <script src="<?php echo ADMIN_ASSETS; ?>js/form-wizards-validation.demo.min.js"></script>
  
    <!-- ================== END PAGE LEVEL JS ================== -->
      <script>
    $(document).ready(function() {
      App.init();
      FormWizardValidation.init();
    });
  </script>
  