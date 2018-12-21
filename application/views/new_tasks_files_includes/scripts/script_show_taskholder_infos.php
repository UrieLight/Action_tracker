<script>
    $(function () {
        //Initialize Select2 Elements
        $('#btn_check_holderInfos').on('click', function () {
            var site_url = $('#idInpt_site_url').val();
            var holder_email = $('#ipt_holderEmail').val();
            //console.log('dzaaa');
            $.ajax({
                url: site_url+"Employee_GetInfo/checkInput_getEmpInfos",
                method: "POST",
                data:{
                    //site_url: site_url,
                    holder_email: holder_email
                },
                success: function(data){
                    // location.reload(true);
                    // console.log(data);
                    if(data === "Invalid email"){

                        $('#employee_infos').html("Invalid email ! Please check entered email and try again.");
                        $('#employee_infos').removeClass('callout-success');
                        $('#employee_infos').removeClass('callout-danger');
                        $('#employee_infos').addClass('callout-warning');
                    }else if(data === "Empty field"){

                        $('#employee_infos').html("No email sent ! Please type an email and try again.");
                        $('#employee_infos').removeClass('callout-danger');
                        $('#employee_infos').addClass('callout-warning');
                    }else if(data === "Empty field"){

                        $('#employee_infos').html("No data found for this email ! Please try another one.");
                        $('#employee_infos').removeClass('callout-success');
                        $('#employee_infos').removeClass('callout-warning');
                        $('#employee_infos').addClass('callout-danger');
                    }else{

                        $('#employee_infos').removeClass('callout-danger');
                        $('#employee_infos').removeClass('callout-warning');
                        $('#employee_infos').addClass('callout-success');

                        $('#employee_infos').html(data);
                        $('#modal-show_holderInfos').modal();
                    }
                },error: function(){
                    console.log('error');
                }
            });
        });

    });
</script>