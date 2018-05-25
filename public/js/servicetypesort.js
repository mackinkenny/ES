$(document).ready(function() {

    var flag;
    var a = null;
    var last = false;

    $('.servicetyper').click(function(e) {
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
            $('#ajax-servicetypes').empty();
            a = (this.id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/servicetype/' + a,
                success: function (data) {
                    console.log(data.services);
                    for(var service of data.services) {
                        $('#ajax-servicetypes').append(
                            "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                            "<div class='col-4'>" +
                            "<img class='w-100' src='/image/photo/" + service.img_path + "' alt=''>" +
                            "</div>" +
                            "<div class='col-8'>" +
                            "<div class='col-12'>" +
                            "<a href='/showservice/" + service.id + "' class='text-a ml-3'>"+ service.name +"</a><hr>" +
                            "</div>" +
                            "<div class='col-12 text-script'>" +
                            "<span class='ml-3 mr-5'>"+ service.type_name +"</span>" +
                            "<span class='mr-5'>"+ service.address +"</span>" +
                            "<span class='mr-5'>"+ service.created_at +"</span>" +
                            "</div>" +
                            "<div class='col-12 ml-3 mt-2 text-script'>" +
                            "<span>"+ service.info +"</span>" +
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
        $('#ajax-servicetypes').empty();
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/servicetype',
            success: function (data) {
                for (var service of data.services) {
                    $('#ajax-servicetypes').append(
                        "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                        "<div class='col-4'>" +
                        "<img class='w-100' src='/image/photo/" + service.img_path + "' alt=''>" +
                        "</div>" +
                        "<div class='col-8'>" +
                        "<div class='col-12'>" +
                        "<a href='/showservice/" + service.id + "' class='text-a ml-3'>" + service.name + "</a><hr>" +
                        "</div>" +
                        "<div class='col-12 text-script'>" +
                        "<span class='ml-3 mr-5'>" + service.type_name + "</span>" +
                        "<span class='mr-5'>" + service.address + "</span>" +
                        "<span class='mr-5'>" + service.created_at + "</span>" +
                        "</div>" +
                        "<div class='col-12 ml-3 mt-2 text-script'>" +
                        "<span>" + service.info + "</span>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                    );
                }
            }
        });

    });

});