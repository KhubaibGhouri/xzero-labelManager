 <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li><a href="javascript:;">Artist</a></li>
                <li class="active">New Artist</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Create New Track <small></small></h1>
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
                            <h4 class="panel-title"> New Track Details  </h4>
                        </div>
                        <div class="panel-body panel-form">

                            <form class="form-horizontal form-bordered" data-parsley-validate="true">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Track Artist Name : * :</label>
                                    <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="select-required" name="selectBox" data-type="alphanum" data-parsley-required="true">
                                            <option value="">Please Select...</option>
                                            <option value="foo">JHON</option>
                                            <option value="bar">khalid</option>
                                        </select>
                                      
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Track Title : * </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" id="alphanum" name="Track_name"  data-type="alphanum" placeholder="Enter Track Name"  data-parsley-required="true" />
                                    </div>
                                </div>
  <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Remix Artist : (if any)</label>
                                    <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="select-required" name="selectBox" data-type="alphanum" data-parsley-required="false">
                                             <option value="">Please Select...</option>
                                            <option value="foo">Cave Records</option>
                                            <option value="bar">Xzero Records</option>
                                        </select>
                                      
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Mix Name : *</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" id="alphanum" name="mix_name"  data-type="alphanum" placeholder="Enter Track Name"  data-parsley-required="true" />
                                    </div>
                                </div>
                                


                           

                                
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4"></label>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="submit" class="btn btn-success">Next</button>
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
    