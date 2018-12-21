
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
                                    <input id="idInpt_project_name" type="text" class="form-control" placeholder="Enter project name...">
                                </div>

                                <div class="form-group">
                                    <label>Project Description</label>
                                    <textarea id="idTxta_project_description" class="form-control" rows="3" placeholder="Enter project description..."></textarea>
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

            <div class="modal modal-success" id="modal-project-creation-success">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Success</h4>
                        </div>

                        <!-- <form action="New_task/create_new_project" method="POST"> -->
                            <div class="modal-body">
                                 <p>Project created successfully</p>
                            </div>

                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
                                <button id="" type="button"  data-dismiss="modal" class="btn btn-primary">Ok</button>
                            </div>
                        <!-- </form> -->
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>