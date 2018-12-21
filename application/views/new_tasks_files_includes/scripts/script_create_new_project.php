<script>
    $(function () {
        //Initialize Select2 Elements
        $('#idBtn_save_project').on('click', function () {
            var site_url = $('#idInpt_site_url').val();
            var project_name = $('#idInpt_project_name').val();
            var project_description = $('#idTxta_project_description').val();

            $.ajax({
                url: site_url+"Project/create_new_project",
                method: "POST",
                data:{
                    //site_url: site_url,
                    project_name: project_name,
                    project_description: project_description
                },
                success: function(data){
                    // location.reload(true);
                    console.log(data);
                    $('#slct_all_projects_list').html(data); //refreshing projects list

                    $('#idInpt_project_name').val(''); //emptying the inputs 
                    $('#idTxta_project_description').val('');

                    $('#modal-project').modal('hide');
                    $('#modal-project-creation-success').modal();
                },error: function(){
                    console.log('error');
                }
            });
        });

    });
</script>