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

        <?php include('list_mytask_files_includes/modal_list_projects.php') ?>       
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
