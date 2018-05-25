$(document).ready(function() {

    var flag;
    var a = null;
    var last = false;

    $('.autotyper').click(function(e) {
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
            $('#ajax-autotypes').empty();
            a = (this.id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/autotype/' + a,
                success: function (data) {
                    for(var auto of data.autos) {
                        $('#ajax-autotypes').append(
                            "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                            "<div class='col-4'>" +
                            "<a href='/showauto/" + auto.id + "'><img class='w-75' src='/image/photo/" + auto.img_path + "' alt=''></a>" +
                            "</div>" +
                            "<div class='col-8'>" +
                            "<div class='col-12'>" +
                            "<a href='/showauto/" + auto.id + "' class='text-a ml-3'>" + auto.name + "</a><hr>" +
                            "</div>" +
                            "<div class='col-12 text-script'>" +
                            "<span class='ml-3 mr-5'>" + auto.type_name + "</span>" +
                            "<span class='mr-5'>" + auto.address + "</span>" +
                            "<span class='mr-5'>" + auto.created_at + "</span>" +
                            "</div>" +
                            "<div class='col-12 ml-3 mt-2 text-script'>" +
                            "<span>" + auto.info +"</span>" +
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
            $('#ajax-autotypes').empty();
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/autotype',
                success: function (data) {
                    for (var auto of data.autos) {
                        $('#ajax-autotypes').append(
                            "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                            "<div class='col-4'>" +
                            "<a href='/showauto/" + auto.id + "'><img class='w-75' src='/image/photo/" + auto.img_path + "' alt=''></a>" +
                            "</div>" +
                            "<div class='col-8'>" +
                            "<div class='col-12'>" +
                            "<a href='/showauto/" + auto.id + "' class='text-a ml-3'>" + auto.name + "</a><hr>" +
                            "</div>" +
                            "<div class='col-12 text-script'>" +
                            "<span class='ml-3 mr-5'>" + auto.type_name + "</span>" +
                            "<span class='mr-5'>" + auto.address + "</span>" +
                            "<span class='mr-5'>" + auto.created_at + "</span>" +
                            "</div>" +
                            "<div class='col-12 ml-3 mt-2 text-script'>" +
                            "<span>" + auto.info + "</span>" +
                            "</div>" +
                            "</div>" +
                            "</div>"
                        );
                    }
                }
            });

    });

});