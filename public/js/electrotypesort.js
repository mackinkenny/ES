$(document).ready(function() {

    var flag;
    var a = null;
    var last = false;

    $('.electrotyper').click(function(e) {
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
            $('#ajax-electrotypes').empty();
            a = (this.id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/electrotype/' + a,
                success: function (data) {
                    console.log(data.electros);
                    for(var electro of data.electros) {
                        $('#ajax-electrotypes').append(
                            "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                            "<div class='col-4'>" +
                            "<img class='w-100' src='/image/photo/" + electro.img_path + "' alt=''>" +
                            "</div>" +
                            "<div class='col-8'>" +
                            "<div class='col-12'>" +
                            "<a href='/showelectro/" + electro.id + "' class='text-a ml-3'>"+ electro.name +"</a><hr>" +
                            "</div>" +
                            "<div class='col-12 text-script'>" +
                            "<span class='ml-3 mr-5'>"+ electro.type_name +"</span>" +
                            "<span class='mr-5'>"+ electro.created_at +"</span>" +
                            "</div>" +
                            "<div class='col-12 ml-3 mt-2 text-script'>" +
                            "<span>"+ electro.info +"</span>" +
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
        $('#ajax-electrotypes').empty();
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/electrotype',
            success: function (data) {
                for (var electro of data.electros) {
                    $('#ajax-electrotypes').append(
                        "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                        "<div class='col-4'>" +
                        "<img class='w-100' src='/image/photo/" + electro.img_path + "' alt=''>" +
                        "</div>" +
                        "<div class='col-8'>" +
                        "<div class='col-12'>" +
                        "<a href='/showelectro/" + electro.id + "' class='text-a ml-3'>" + electro.name + "</a><hr>" +
                        "</div>" +
                        "<div class='col-12 text-script'>" +
                        "<span class='ml-3 mr-5'>" + electro.type_name + "</span>" +
                        "<span class='mr-5'>" + electro.created_at + "</span>" +
                        "</div>" +
                        "<div class='col-12 ml-3 mt-2 text-script'>" +
                        "<span>" + electro.info + "</span>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                    );
                }
            }
        });

    });

});