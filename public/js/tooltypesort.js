$(document).ready(function() {

    var flag;
    var a = null;
    var last = false;

    $('.tooltyper').click(function(e) {
        e.preventDefault(e);
        if($(this.id) !== $(last.id)) {
            flag = true;
            if (flag === true) {
                last = $(this);
            }
        }
        else{
            last = false;
            flag = false;
        }
        if (flag === true) {
            $('#ajax-tooltypes').empty();
            a = (this.id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/tooltype/' + a,
                success: function (data) {
                    console.log(data.tools);
                    for(var tool of data.tools) {
                        $('#ajax-tooltypes').append(
                            "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                            "<div class='col-4'>" +
                            "<img class='w-100' src='/image/photo/" + tool.img_path + "' alt=''>" +
                            "</div>" +
                            "<div class='col-8'>" +
                            "<div class='col-12'>" +
                            "<a href='/showtool/" + tool.id + "' class='text-a ml-3'>"+ tool.name +"</a><hr>" +
                            "</div>" +
                            "<div class='col-12 text-script'>" +
                            "<span class='ml-3 mr-5'>"+ tool.type_name +"</span>" +
                            "<span class='mr-5'>"+ tool.address +"</span>" +
                            "<span class='mr-5'>"+ tool.created_at +"</span>" +
                            "</div>" +
                            "<div class='col-12 ml-3 mt-2 text-script'>" +
                            "<span>"+ tool.info +"</span>" +
                            "</div>" +
                            "</div>" +
                            "</div>"
                        );
                    }
                }
            });


        }
    });

    $('.all').click(function(e) {
        e.preventDefault(e);
        $('#ajax-tooltypes').empty();
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/tooltype',
            success: function (data) {
                for (var tool of data.tools) {
                    $('#ajax-tooltypes').append(
                        "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                        "<div class='col-4'>" +
                        "<img class='w-100' src='/image/photo/" + tool.img_path + "' alt=''>" +
                        "</div>" +
                        "<div class='col-8'>" +
                        "<div class='col-12'>" +
                        "<a href='/showtool/" + tool.id + "' class='text-a ml-3'>" + tool.name + "</a><hr>" +
                        "</div>" +
                        "<div class='col-12 text-script'>" +
                        "<span class='ml-3 mr-5'>" + tool.type_name + "</span>" +
                        "<span class='mr-5'>" + tool.address + "</span>" +
                        "<span class='mr-5'>" + tool.created_at + "</span>" +
                        "</div>" +
                        "<div class='col-12 ml-3 mt-2 text-script'>" +
                        "<span>" + tool.info + "</span>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                    );
                }
            }
        });

    });

});