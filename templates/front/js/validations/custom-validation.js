$(function() {
    $('#button1').click(function() {
        // validate and process form here  
        $("#form").validate({
            rules: {
                // Set rules for special fields (email/phone?)
            },

            // JQuery's awesome submit handler.
            submitHandler: function(form) {
                var  $form_data = new FormData( $("#form")[0] );

                $url = $("#form").attr('action');
                $.ajax({
                    url: $url,
                    type: "POST",
                    data: $form_data,
                    async : false,
                    cache: false,
                    contentType : false,
                    processData: false,
                    success: function(data) {
                        $(".result1").html(data);
                        $('#myTab a[href="#tab2"]').tab('show');
                        $('html, body').animate({ scrollTop: $('.main-content').position().top }, 'slow');
                    }
                });

                return false;
            }

        });

    });
    
    $('body').on('click','#button-update',function() {
       
                $st_id = $('input[name="st_id"]').val();
                var  $form_data = new FormData( $("#form2")[0] );
                $url = $("#form2").attr('action');

                $.ajax({
                    url: $url,
                    type: "POST",
                    data: $form_data,
                    async : false,
                    cache: false,
                    contentType : false,
                    processData: false,
                    beforeSend: function() {
                        $result = $('select[name="result"]').val();
                        $qaulification = $('select[name="qaulification"]').val();
                        $institute = $('input[name="institute"]').val();
                        $passingyear = $('input[name="passingyear"]').val();
                        $totalmarks = $('input[name="totalmarks"]').val();
                        $obtainedmarks = $('input[name="obtainedmarks"]').val();
                        $percentage = $('input[name="percentage"]').val();
                        $('input[type="file"]').val(null); 
                        $('#button2').css('display', 'block');
                        $('input[name="st_id"]').val('');
                        $('#button-update').css('display', 'none');
                        $('#form2 input[type="text"], #form2 input[type="number"]').val("");
                        $('#form2 select option[value="0"]').attr("selected", 'selected');
                    },
                    success: function(data) {
                   
                        $st_tt = jQuery.parseJSON(data);
                        $st_id = $st_tt.id;
                        $photo = $st_tt.photo;
                        $html = "<tr row-id='"+ $st_id +"'><td>" + $result + "</td><td>" + $qaulification + "</td><td>" + $institute + "</td><td>" + $passingyear + "</td>" +
                        "<td>" + $totalmarks + "</td><td>" + $obtainedmarks + "</td><td>" + $percentage + "</td><td><a href='http://localhost/uskt/uploads/certificates/"+  $photo +"' target='_blank'> "+  $photo +" </a></td>" +
                        '<td><a href="http://localhost/uskt/home/registration_form/acc_edit/' + $st_id + '" class="ac_edit" data-id="' + $st_id + '"><i class="fa fa-edit"></i></a> <a href="http://localhost/uskt/home/registration_form/acc_delete/' + $st_id + '" class="ac_delete" data-id="' + $st_id + '"><i class="fa fa-trash"></i></a></td></tr>';
                           $('.acca-table tbody tr[row-id="' + $st_id + '"]').replaceWith($html);
                    }
                });
                return false;

    });

    $('#button2').click(function() {
        // validate and process form here  
        $("#form2").validate({
            rules: {
                // Set rules for special fields (email/phone?)
            },

            // JQuery's awesome submit handler.
            submitHandler: function(form) {
           //     $form_data = $("#form2").serialize();
         
            var  $form_data = new FormData( $("#form2")[0] );
                $url = $("#form2").attr('action');
                $.ajax({
                    url: $url,
                    type: "POST",
                    data: $form_data,
                    async : false,
                    cache: false,
                    contentType : false,
                    processData: false,
                    beforeSend: function(data) {
                        $result = $('select[name="result"]').val();
                        $qaulification = $('select[name="qaulification"]').val();
                        $institute = $('input[name="institute"]').val();
                        $passingyear = $('input[name="passingyear"]').val();
                        $totalmarks = $('input[name="totalmarks"]').val();
                        $obtainedmarks = $('input[name="obtainedmarks"]').val();
                        $percentage = $('input[name="percentage"]').val();
                        $('input[type="file"]').val(null); 
                        $('#form2 input[type="text"], #form2 input[type="number"]').val("");
                        $('#form2 select option[value="0"]').attr("selected", 'selected');
                    },
                    success: function(data) {
                        $st_tt = jQuery.parseJSON(data);
                        $st_id = $st_tt.id;
                        $photo = $st_tt.photo;
                        $html = "<tr row-id='"+ $st_id +"'><td>" + $result + "</td><td>" + $qaulification + "</td><td>" + $institute + "</td><td>" + $passingyear + "</td>" +
                        "<td>" + $totalmarks + "</td><td>" + $obtainedmarks + "</td><td>" + $percentage + "</td><td><a href='http://localhost/uskt/uploads/certificates/"+  $photo +"' target='_blank'> "+  $photo +" </a></td>" +
                        '<td><a href="http://localhost/uskt/home/registration_form/acc_edit/' + $st_id + '" class="ac_edit" data-id="' + $st_id + '"><i class="fa fa-edit"></i></a> <a href="http://localhost/uskt/home/registration_form/acc_delete/' + $st_id + '" class="ac_delete" data-id="' + $st_id + '"><i class="fa fa-trash"></i></a></td></tr>';
                          $(".acca-table tbody").append($html);
                     
                    }
                });

                return false;
            }

        });


    });

   
    

    $("body").on('click', '.ac_edit', function() {
        $url = $(this).attr('href');
        $.ajax({
            url: $url,
            beforeSend: function() {

            },
            success: function(data) {
                $('#button-update').css('display', 'block');
                $('#button2').css('display', 'none');
                $fields_data = jQuery.parseJSON(data);
                console.log($fields_data);
                $('input[name="passingyear"]').val($fields_data[0].s_passing_year);
                $('input[name="totalmarks"]').val($fields_data[0].s_total_marks);
                $('input[name="obtainedmarks"]').val($fields_data[0].s_obtained_marks);
                $('input[name="percentage"]').val($fields_data[0].s_percentage + "%");
             $('#form2 select[name="result"] option[value="0"]').removeAttr('selected');
                $('#form2 select[name="qaulification"] option[value="0"]').removeAttr('selected');
                $('#form2 select[name="result"] option[value="' + $fields_data[0].s_result_status + '"]').prop('selected', 'selected');
                $('#form2 select[name="qaulification"] option[value="' + $fields_data[0].s_qaulification + '"]').prop('selected', 'selected');
                 $('#form2 input[name="institute"]').val($fields_data[0].s_institute);
                $('input[name="st_id"]').val($fields_data[0].acad_id);
                $('html, body').animate({ scrollTop: $('.main-content').position().top }, 'slow');

            }
        });
        return false;
    });
    $("body").on('click', '.ac_delete', function() {
        if (confirm('Are you sure?')) {
            $url = $(this).attr('href');

            $.ajax({
                url: $url,
                beforeSend: function() {

                },
                success: function(data) {
                    $('tr[row-id="' + data + '"]').remove();
                }
            });
        } else {

        }
        return false;

    });
    $('input[name="totalmarks"]').keyup(function() {
        $obt = $('input[name="obtainedmarks"]').val();
        $total = $(this).val();
        $percentage = $obt / $total * 100;
        if (!isNaN($percentage)) {
            $('input[name="percentage"]').val(Math.round($percentage) + "%");

        }
    });
    $('input[name="obtainedmarks"]').keyup(function() {
        $total = $('input[name="totalmarks"]').val();
        $obt = $(this).val();
        $percentage = $obt / $total * 100;
        if (!isNaN($percentage)) {
            $('input[name="percentage"]').val(Math.round($percentage) + "%");
        }
    });
    $('#btnSave2').click(function() {

        $('#myTab a[href="#tab3"]').tab('show');
        $('html, body').animate({ scrollTop: $('.main-content').position().top }, 'slow');
    });

// for submission of program

    $('#button_program').click(function() {
        // validate and process form here  
        $("#form3").validate({
            rules: {
                // Set rules for special fields (email/phone?)
            },

            // JQuery's awesome submit handler.
            submitHandler: function(form) {
                $form_data = $("#form3").serialize();

                $url = $("#form3").attr('action');
                $.ajax({
                    url: $url,
                    type: "POST",
                    data: $form_data,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $(".result1").html(data);
                        $('#myTab a[href="#tab4"]').tab('show');
                        $('html, body').animate({ scrollTop: $('.main-content').position().top }, 'slow');
                    }
                });

                return false;
            }

        });

    });
    $("#Faculty").on('change',function(){
    $f_id =  $(this).val();
    $url = "http://localhost/uskt/home/registration_form/fc_to_dep?fc_id="+ $f_id;
    $.ajax({
        url: $url,
        success: function(data) {
        $("#Department").html(data);
        }
    });
    });
    $("body").on('change',"#Department",function(){
        $f_id =  $(this).val();
        $url = "http://localhost/uskt/home/registration_form/dep_to_sp?fc_id="+ $f_id;
        $.ajax({
            url: $url,
            success: function(data) {
            $("#Program").html(data);
            $("#Program1").html(data);
            $("#Program2").html(data);
            }
        });
        });
        $(".nav-tabs a[data-toggle=tab]").on("click", function(e) {
            if ($(this).hasClass("disabled")) {
              e.preventDefault();
              return false;
            }
          });

          $("#contact_form").validate();

          $("#booking-form").validate();

          $("#job_apply_form").validate();

          $("#registration").validate();
          
          $("#student_login").validate();

          $("#login_teacher").validate();

        
});





