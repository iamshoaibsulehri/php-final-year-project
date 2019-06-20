$(function() {
    $('#button1').click(function() {
        // validate and process form here  
        $("#form").validate({
            rules: {
                // Set rules for special fields (email/phone?)
            },

            // JQuery's awesome submit handler.
            submitHandler: function(form) {
                $form_data = $("#form").serialize();

                $url = $("#form").attr('action');
                $.ajax({
                    url: $url,
                    type: "POST",
                    data: $form_data,
                    cache: false,
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

    $('#button2').click(function() {
        // validate and process form here  
        $("#form2").validate({
            rules: {
                // Set rules for special fields (email/phone?)
            },

            // JQuery's awesome submit handler.
            submitHandler: function(form) {
                $form_data = $("#form2").serialize();

                $url = $("#form2").attr('action');
                $.ajax({
                    url: $url,
                    type: "POST",
                    data: $form_data,

                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $result = $('select[name="result"]').val();
                        $qaulification = $('select[name="qaulification"]').val();
                        $institute = $('select[name="institute"]').val();
                        $passingyear = $('input[name="passingyear"]').val();
                        $totalmarks = $('input[name="totalmarks"]').val();
                        $obtainedmarks = $('input[name="obtainedmarks"]').val();
                        $percentage = $('input[name="percentage"]').val();
                        $html = "<tr><td>" + $result + "</td><td>" + $qaulification + "</td><td>" + $institute + "</td><td>" + $passingyear + "</td>" +
                            "<td>" + $totalmarks + "</td><td>" + $obtainedmarks + "</td><td>" + $percentage + "</td><td></td></tr>"
                        $(".acca-table tbody").append($html);
                        $('#form2 input[type="text"], #form2 input[type="number"]').val("");
                        $('#form2 select option[value="0"]').attr("selected", 'selected');
                    },
                    success: function(data) {

                    }
                });

                return false;
            }

        });


    });
    $('#button-update').click(function() {

        // validate and process form here  
        $("#form2").validate({
            rules: {
                // Set rules for special fields (email/phone?)
            },

            // JQuery's awesome submit handler.
            submitHandler: function(form) {
                $form_data = $("#form2").serialize();
                $st_id = $('input[name="st_id"]').val();
                $url = $("#form2").attr('action');

                $.ajax({
                    url: $url,
                    type: "POST",
                    data: $form_data,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $result = $('select[name="result"]').val();
                        $qaulification = $('select[name="qaulification"]').val();
                        $institute = $('select[name="institute"]').val();
                        $passingyear = $('input[name="passingyear"]').val();
                        $totalmarks = $('input[name="totalmarks"]').val();
                        $obtainedmarks = $('input[name="obtainedmarks"]').val();
                        $percentage = $('input[name="percentage"]').val();
                        $html = "<tr><td>" + $result + "</td><td>" + $qaulification + "</td><td>" + $institute + "</td><td>" + $passingyear + "</td>" +
                            "<td>" + $totalmarks + "</td><td>" + $obtainedmarks + "</td><td>" + $percentage + "</td><td></td>" +
                            '<td><a href="http://localhost/uskt/home/registration_form/acc_edit/' + $st_id + '" class="ac_edit" data-id="' + $st_id + '"><i class="fa fa-edit"></i></a> <a href="#" class="ac_delete" data-id="' + $st_id + '"><i class="fa fa-trash"></i></a></td></tr>';
                        $('.acca-table tbody tr[row-id="' + $st_id + '"]').replaceWith($html);
                        $('#button2').css('display', 'block');
                        $('input[name="st_id"]').val('');
                        $('#button-update').css('display', 'none');
                        $('#form2 input[type="text"], #form2 input[type="number"]').val("");
                        $('#form2 select option[value="0"]').attr("selected", 'selected');
                    },
                    success: function(data) {

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
                $('input[name="passingyear"]').val($fields_data[0].s_passing_year);
                $('input[name="totalmarks"]').val($fields_data[0].s_total_marks);
                $('input[name="obtainedmarks"]').val($fields_data[0].s_obtained_marks);
                $('input[name="percentage"]').val($fields_data[0].s_percentage);
                $('#form2 select[name="result"] option[value="' + $fields_data[0].s_result_status + '"]').attr("selected", 'selected');
                $('#form2 select[name="qaulification"] option[value="' + $fields_data[0].s_qaulification + '"]').attr("selected", 'selected');
                $('#form2 select[name="institute"] option[value="' + $fields_data[0].s_institute + '"]').attr("selected", 'selected');
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
});