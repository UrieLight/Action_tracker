<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> My Tasks
        <small> To do</small>
      </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-6 text-left">
                <div class="form-group">
                    <!-- <a class="btn btn-primary" href="<?php echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Edit </a> -->
                    <button type="button" class="btn btn-default fa fa-tasks"> See all</button>
                </div>
            </div>
            <div class="col-xs-6 text-right">
                <div class="form-group">
                    <!-- <a class="btn btn-primary" href="<?php echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Edit </a> -->
                    <button type="button" class="btn btn-info fa fa-folder" data-toggle="modal" data-target="#modal-project"> Projects</button>
                    <button type="button" class="btn btn-success fa fa-gavel" data-toggle="modal" data-target="#modal-problem"> Problems</button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Tasks List</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <!-- <thead> -->
                                <tr>
                                    <th>TaskID</th>
                                    <th>Task</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                    <th>Owner</th>
                                </tr>
                            <!-- </thead> -->

                            <!-- <tbody> -->
                                <tr>
                                    <td>[TSK#183#20182211]</td>
                                    <td>test des sim ipp en env</td>
                                    <td style="text-align: center;">11-7-2018 (-7j)</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td>Comment intégrer lex nouveaux forfaits, sans incident majeur.</td>
                                    <td>John Doe</td>
                                </tr>

                                <tr>
                                    <td>[TSK#183#20182211]</td>
                                    <td>test des sim ipp en env</td>
                                    <td style="text-align: center;">11-7-2018 (-7j)</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td>Comment intégrer lex nouveaux forfaits, sans incident majeur.</td>
                                    <td>Alexander Pierce</td>
                                </tr>

                                <tr>
                                    <td>[TSK#183#20182211]</td>
                                    <td>test des sim ipp en env</td>
                                    <td style="text-align: center;">11-7-2019 (-7j)</td>
                                    <td><span class="label label-primary">Approved</span></td>
                                    <td>Comment intégrer lex nouveaux forfaits, sans incident majeur.</td>
                                    <td>Bob Doe</td>
                                </tr>

                                <tr>
                                    <td>[TSK#183#20182211]</td>
                                    <td>test des sim ipp en env</td>
                                    <td style="text-align: center;">11-7-2018 (-7j)</td>
                                    <td><span class="label label-danger">Denied</span></td>
                                    <td>Comment intégrer lex nouveaux forfaits, sans incident majeur.</td>
                                    <td>Mike Doe</td>
                                </tr>
                            <!-- </tbody> -->
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

        <style>
            .project_caracteristics{
                color:#999; float:right; padding:7px; font-size:12px;
            }

            .project_tasks{
                color:#999; float:left; padding:7px; font-size:12px;
            }

            .project_caracteristics_item{
                margin-right: 10px;
            }

            .hr_before_project_caracteristics{
                margin-bottom: inherit;
            }
        </style>
        <div class="modal" id="modal-project">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Projects</h4>
                    </div>

                    <!-- <form action="New_task/create_new_project" method="POST"> -->
                        <div class="modal-body">
                            <div class="box box-info box-solid collapsed-box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Migration IN ver 8.1</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.box-tools -->
                                </div>

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div> 
                                        The body of the box
                                    </div>

                                    <hr class="hr_before_project_caracteristics">

                                    <div class="project_tasks">
                                        <span class=""><i class="fa fa-tasks"></i> <a href="#"> 25 tasks </a> </span>
                                    </div>
                                    <div class="project_caracteristics" style="">
                                        <span class="project_caracteristics_item"><i class="fa fa-folder"></i> Closed </span>
                                        <span class="project_caracteristics_item"><i class="fa fa-calendar"></i> 22-11-2018 <i class="fa fa-arrow-circle-right"></i> 22-01-2019 </span>
                                        <span class="project_caracteristics_item"><i class="fa fa-user"></i> Sidoine T </span>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>

                            <div class="box box-info box-solid collapsed-box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Virtualisation serveur DashOtarie</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.box-tools -->
                                </div>

                                <!-- /.box-header -->
                                <div class="box-body">
                                    The body of the box
                                    <hr class="hr_before_project_caracteristics">

                                    <div class="project_tasks">
                                        <span class=""><i class="fa fa-tasks"></i> <a href="#"> 25 tasks </a> </span>
                                    </div>

                                    <div class="project_caracteristics" style="color: #999; float: right;padding: 10px;font-size: 12px;">
                                        <span class="project_caracteristics_item"><i class="fa fa-folder-open-o"></i> Open</span>
                                        <span class="project_caracteristics_item"><i class="fa fa-calendar-minus-o"></i> 20-10-2018</span>
                                        <span class="project_caracteristics_item"><i class="fa fa-arrow-circle-right"></i></span>
                                        <span class="project_caracteristics_item"><i class="fa fa-calendar"></i> 22-01-2019</span>
                                        <span class="project_caracteristics_item"><i class="fa fa-user"></i> Martin Druz</span>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <!-- <button id="idBtn_save_project" type="button" class="btn btn-primary">Save Project</button> -->
                        </div>
                    <!-- </form> -->
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </section>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
