$(document).ready(function() {

    var flag;
    var a = null;
    var last = false;

    $('.othertyper').click(function(e) {
        e.preventDefault(e);
        if($(this.id) !== $(last.id)) {
            console.log(this.id);
            console.log(last.id);
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
            $('#ajax-othertypes').empty();
            a = (this.id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/othertype/' + a,
                success: function (data) {
                    for(var other of data.others) {
                        $('#ajax-othertypes').append(
                            "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                            "<div class='col-4'>" +
                            "<a href='/showother/" + other.id + "'><img class='w-75' src='/image/photo/" + other.img_path + "' alt=''></a>" +
                            "</div>" +
                            "<div class='col-8'>" +
                            "<div class='col-12'>" +
                            "<a href='/showother/" + other.id + "' class='text-a ml-3'>" + other.name + "</a><hr>" +
                            "</div>" +
                            "<div class='col-12 text-script'>" +
                            "<span class='ml-3 mr-5'>" + other.type_name + "</span>" +
                            "<span class='mr-5'>" + other.created_at + "</span>" +
                            "</div>" +
                            "<div class='col-12 ml-3 mt-2 text-script'>" +
                            "<span>" + other.info +"</span>" +
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
        $('#ajax-othertypes').empty();
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/othertype',
            success: function (data) {
                for (var other of data.others) {
                    $('#ajax-othertypes').append(
                        "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                        "<div class='col-4'>" +
                        "<a href='/showother/" + other.id + "'><img class='w-75' src='/image/photo/" + other.img_path + "' alt=''></a>" +
                        "</div>" +
                        "<div class='col-8'>" +
                        "<div class='col-12'>" +
                        "<a href='/showother/" + other.id + "' class='text-a ml-3'>" + other.name + "</a><hr>" +
                        "</div>" +
                        "<div class='col-12 text-script'>" +
                        "<span class='ml-3 mr-5'>" + other.type_name + "</span>" +
                        "<span class='mr-5'>" + other.created_at + "</span>" +
                        "</div>" +
                        "<div class='col-12 ml-3 mt-2 text-script'>" +
                        "<span>" + other.info + "</span>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                    );
                }
            }
        });

    });

});