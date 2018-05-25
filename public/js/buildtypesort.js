$(document).ready(function() {

    var flag;
    var a = null;
    var last = false;

    $('.buildtyper').click(function(e) {
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
            $('#ajax-buildtypes').empty();
            a = (this.id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/buildtype/' + a,
                success: function (data) {
                    console.log(data.builds);
                    for(var build of data.builds) {
                        $('#ajax-buildtypes').append(
                            "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                            "<div class='col-4'>" +
                            "<img class='w-100' src='/image/photo/" + build.img_path + "' alt=''>" +
                            "</div>" +
                            "<div class='col-8'>" +
                            "<div class='col-12'>" +
                            "<a href='/showbuild/" + build.id + "' class='text-a ml-3'>"+ build.name +"</a><hr>" +
                            "</div>" +
                            "<div class='col-12 text-script'>" +
                            "<span class='ml-3 mr-5'>"+ build.type_name +"</span>" +
                            "<span class='mr-5'>"+ build.address +"</span>" +
                            "<span class='mr-5'>"+ build.created_at +"</span>" +
                            "</div>" +
                            "<div class='col-12 ml-3 mt-2 text-script'>" +
                            "<span>"+ build.info +"</span>" +
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
        $('#ajax-buildtypes').empty();
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/buildtype',
            success: function (data) {
                for (var build of data.builds) {
                    $('#ajax-buildtypes').append(
                        "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                        "<div class='col-4'>" +
                        "<img class='w-100' src='/image/photo/" + build.img_path + "' alt=''>" +
                        "</div>" +
                        "<div class='col-8'>" +
                        "<div class='col-12'>" +
                        "<a href='/showbuild/" + build.id + "' class='text-a ml-3'>" + build.name + "</a><hr>" +
                        "</div>" +
                        "<div class='col-12 text-script'>" +
                        "<span class='ml-3 mr-5'>" + build.type_name + "</span>" +
                        "<span class='mr-5'>" + build.address + "</span>" +
                        "<span class='mr-5'>" + build.created_at + "</span>" +
                        "</div>" +
                        "<div class='col-12 ml-3 mt-2 text-script'>" +
                        "<span>" + build.info + "</span>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                    );
                }
            }
        });

    });

});