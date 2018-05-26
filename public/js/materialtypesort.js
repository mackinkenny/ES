$(document).ready(function() {

    var flag;
    var a = null;
    var last = false;

    $('.materialtyper').click(function(e) {
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
            $('#ajax-materialtypes').empty();
            a = (this.id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/materialtype/' + a,
                success: function (data) {
                    console.log(data.materials);
                    for(var material of data.materials) {
                        $('#ajax-materialtypes').append(
                            "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                            "<div class='col-4'>" +
                            "<img class='w-100' src='/image/photo/" + material.img_path + "' alt=''>" +
                            "</div>" +
                            "<div class='col-8'>" +
                            "<div class='col-12'>" +
                            "<a href='/showmaterial/" + material.id + "' class='text-a ml-3'>"+ material.name +"</a><hr>" +
                            "</div>" +
                            "<div class='col-12 text-script'>" +
                            "<span class='ml-3 mr-5'>"+ material.type_name +"</span>" +
                            "<span class='mr-5'>"+ material.created_at +"</span>" +
                            "</div>" +
                            "<div class='col-12 ml-3 mt-2 text-script'>" +
                            "<span>"+ material.info +"</span>" +
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
        $('#ajax-materialtypes').empty();
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/materialtype',
            success: function (data) {
                for (var material of data.materials) {
                    $('#ajax-materialtypes').append(
                        "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                        "<div class='col-4'>" +
                        "<img class='w-100' src='/image/photo/" + material.img_path + "' alt=''>" +
                        "</div>" +
                        "<div class='col-8'>" +
                        "<div class='col-12'>" +
                        "<a href='/showmaterial/" + material.id + "' class='text-a ml-3'>" + material.name + "</a><hr>" +
                        "</div>" +
                        "<div class='col-12 text-script'>" +
                        "<span class='ml-3 mr-5'>" + material.type_name + "</span>" +
                        "<span class='mr-5'>" + material.created_at + "</span>" +
                        "</div>" +
                        "<div class='col-12 ml-3 mt-2 text-script'>" +
                        "<span>" + material.info + "</span>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                    );
                }
            }
        });

    });

});