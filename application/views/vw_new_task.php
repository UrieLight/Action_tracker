<div class="content-wrapper">
    <input id="idInpt_site_url" type="hidden" value="<?= $site_url; ?>"" />

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> New Task
        <small> Add</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <!-- <div class="form-group">
                    <a class="btn btn-primary" href="<php echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Create Project </a>
                </div> -->
                <div class="btn-group">
                    <button type="button" disabled class="btn btn-warning btn-flat">Create</button>
                    
                    <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" data-toggle="modal" data-target="#modal-project">Project</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#modal-problem">Problem</a></li>
                    </ul>
                </div>
            </div>

            <div class="modal" id="modal-project">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Create New Project</h4>
                        </div>

                        <!-- <form action="New_task/create_new_project" method="POST"> -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Project name</label>
                                    <input id="idInpt_project_name" type="text" class="form-control" placeholder="Enter ...">
                                </div>

                                <div class="form-group">
                                    <label>Project Description</label>
                                    <textarea id="idTxta_project_description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button id="idBtn_save_project" type="button" class="btn btn-primary">Save Project</button>
                            </div>
                        <!-- </form> -->
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>


            <div class="modal" id="modal-problem">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Create New Problem</h4>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                                <label>Problem name</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <label>Problem Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save Problem</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                     <div class="box box-info" style="box-shadow: none;">
                        <div class="box-header with-border">
                            <h3 class="box-title">Task informations</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="New_task/create_new_task" method="POST">
                            <div class="box-body">
                                <!-- Action name -->
                                <div class="form-group">
                                    <label for="input_task_name" class="col-sm-2 control-label">Task name</label>

                                    <div class="col-sm-9 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-tag"></i>
                                        </div>

                                        <input name="input_task_name" require type="text" autofocus class="form-control" id="input_task_name" placeholder="Write the short name of the task..." />
                                    </div>
                                </div>
                                <br>

                                <!-- Action details -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Task Details</label>

                                    <div class="col-sm-9 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>

                                        <textarea class="form-control" rows="3" style="resize: none;" placeholder="Tell something about the task..."></textarea>
                                    </div>
                                </div>
                                <br>

                                <!-- Priority -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Priority level</label>

                                    <div class="col-sm-2 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-sort-amount-asc"></i>
                                        </div>

                                        <select class="form-control">
                                            <option>4- Low</option>
                                            <option style="color: brown;">3- Normal</option>
                                            <option style="color: orange;">2- Medium</option>
                                            <option style="color: red;">1- High</option>
                                        </select>
                                    </div>
                                </div>
                                <br>

                                <!-- Start date and Deadline -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Start & End date</label>

                                    <div class="col-sm-9 input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>

                                        <input type="text" class="form-control pull-right" id="reservation">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <br>

                                <!-- Radio button pour le choix du domaine du porteur (externe ou local)
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-9">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Local holder
                                            </label>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- Holder email -->
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Holder email</label>

                                    <div class="col-sm-9 input-group">
                                        <div class="input-group-addon btn btn-primary" style="cursor: pointer;">
                                            <i class="fa fa-check"></i>
                                        </div>

                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Type the email of the one to make it, then check it..." />
                                    </div>

                                    <!-- Gestion des partenaires externes plutard (dans une fenetre modale, je pense)
                                    <div class="col-sm-3">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="" />
                                    </div>

                                    <div class="col-sm-2">
                                        <select class="form-control">
                                            <option>Ericsson</option>
                                            <option>GNOC</option>
                                            <option>Nokia</option>
                                            <option>Huawei</option>
                                            <option>IHS</option>
                                            <option>ZTE</option>
                                        </select> -->
                                    </div>
                                </div>
                                <br>

                                <!-- Link Task to a Project -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Add task to a Project</label>

                                    <div class="col-sm-9 input-group">
                                        <div class="input-group-addon btn btn-success" id="btn-check-holders-email">
                                            <i class="fa fa-refresh"></i>
                                        </div>

                                        <style>
                                            .select2-container--default .select2-selection--single {
                                                /*background-color: #fff;*/
                                                border: 1px solid #d2d6de;
                                                border-radius: unset;
                                            }
                                        </style>

                                        <select class="form-control select2" style="">
                                            <option selected="selected">None</option>
                                            <!-- <option><button class="form-control btn btn-primary">Create Project</button></option> -->
                                            <option>[PRJ#20180612#02] Migration IN vers 8.1</option>
                                            <option>[PRJ#20180612#089] Swap routeur PE1 Ngoaekele</option>
                                            <option>[PRJ#20180612#084] Paiement marchant OMUR</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                
                                <!-- Link Task to a Problem -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Add task to a Problem</label>

                                    <div class="col-sm-9 input-group">
                                        <div class="input-group-addon btn btn-success" id="btn-check-holders-email">
                                            <i class="fa fa-refresh"></i>
                                        </div>

                                        <select class="form-control select2" style="">
                                            <option selected="selected">None</option>
                                            <!-- <option><button class="form-control btn btn-primary">Create Project</button></option> -->
                                            <option>[PB#20180612#02] Migration IN vers 8.1</option>
                                            <option>[PB#20180612#089] Swap routeur PE1 Ngoaekele</option>
                                            <option>[PB#20180612#084] Paiement marchant OMUR</option>
                                        </select>
                                    </div>
                                </div>
                                <br>

                                <!-- Join file -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="exampleInputFile">Join a File</label>

                                    <div class="col-sm-9 input-group">
                                        <!-- <div class="input-group-addon">
                                            <i class="fa fa-file"></i>
                                        </div> -->
                                        
                                        <input class="col-sm-9" type="file" id="exampleInputFile">
                                    </div>
                                </div>
                            </div>

                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Terminate</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
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

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();

        //Initialize Daterange Elements
        $('#reservation').daterangepicker();

    });
</script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('#idBtn_save_project').on('click', function () {
            var site_url = $('#idInpt_site_url').val();
            var project_name = $('#idInpt_project_name').val();

            $.ajax({
                url: site_url+"New_task/create_new_project",
                method: "POST",
                data:{
                    site_url: site_url,
                    project_name: project_name
                },
                success: function(data){
                    console.log(data);

                },error: function(){
                    console.log('error');
                }
            });
        });

    });
</script>
