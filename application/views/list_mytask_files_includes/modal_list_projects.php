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
                        <h4 class="modal-title">My Projects</h4>
                    </div>

                    <!-- <form action="New_task/create_new_project" method="POST"> -->
                        <div class="modal-body">
                            <?php foreach ($all_projects as $each_project): ?>
                                <div class="box box-<?php if($each_project->Project_status == 'closed') echo'default';else echo 'info'; ?> box-solid collapsed-box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><?= $each_project->Project_name; ?></h3>

                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                        <!-- /.box-tools -->
                                    </div>

                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div> 
                                            <?= $each_project->Project_description; ?>
                                        </div>

                                        <hr class="hr_before_project_caracteristics">

                                        <div class="project_tasks">
                                            <span class=""><i class="fa fa-tasks"></i> <a href="#"> <?php if($each_project->Project_tasks_id_list == null) echo'0 task';else echo 'calculating...'; ?> </a> </span>
                                        </div>
                                        <div class="project_caracteristics" style="">
                                            <span class="project_caracteristics_item"><i class="fa fa-folder"></i> <?= $each_project->Project_status; ?> </span>
                                            <span class="project_caracteristics_item"><i class="fa fa-calendar"></i> 22-11-2018 <i class="fa fa-arrow-circle-right"></i> 22-01-2019 </span>
                                            <span class="project_caracteristics_item"><i class="fa fa-user"></i> <?= $each_project->Project_user_initiator_email; ?> </span>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>

                            <?php endforeach; ?>
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