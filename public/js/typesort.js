$(document).ready(function() {

    var flag;
    var a = null;
    var last = false;

    $('.typer').click(function(e) {
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
            $('#ajax-types').empty();
            a = (this.id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/type/' + a,
                success: function (data) {
                    for(var product of data.products) {
                        if(product.info.length > 270) {
                            product.info = product.info.slice(0, 270) + "...";
                        }
                        if(product.name. length > 45)
                        {
                            product.name = product.name.slice(0, 45) + "...";
                        }
                        $('#ajax-types').append(
                            "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                            "<div class='col-4'>" +
                            "<a href='/showproduct/" + product.id + "'><div class='img-prod' style='background-image: url(/../image/photo/" + product.img_path + ");'></div></a>" +
                            "</div>" +
                            "<div class='col-8'>" +
                            "<div class='col-12'>" +
                            "<a href='/showproduct/" + product.id + "' class='main-text ml-3'>" + product.name + "</a><hr>" +
                            "</div>" +
                            "<div class='col-12 text-script'>" +
                            "<span class='ml-3 mr-5'>" + product.parent_name + "</span>" +
                            "<span class='mr-5'>" + product.created_at + "</span>" +
                            "</div>" +
                            "<div class='col-12 ml-3 mt-2 text-script'>" +
                            "<span>" + product.info  + "</span>" +
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
            $('#ajax-types').empty();
            a = (this.id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/types/' + a,
                success: function (data) {
                    for(var product of data.products) {
                        if(product.info.length > 270) {
                            product.info = product.info.slice(0, 270) + "...";
                        }
                        if(product.name. length > 45)
                        {
                            product.name = product.name.slice(0, 45) + "...";
                        }
                        $('#ajax-types').append(
                            "<div class='row col-12 p-4 ml-1 mb-2' style='background:#e9ecef;'>" +
                            "<div class='col-4'>" +
                            "<a href='/showproduct/" + product.id + "'><div class='img-prod' style='background-image: url(/../image/photo/" + product.img_path + ");'></div></a>" +
                            "</div>" +
                            "<div class='col-8'>" +
                            "<div class='col-12'>" +
                            "<a href='/showproduct/" + product.id + "' class='main-text ml-3'>" + product.name + "</a><hr>" +
                            "</div>" +
                            "<div class='col-12 text-script'>" +
                            "<span class='ml-3 mr-5'>" + product.parent_name + "</span>" +
                            "<span class='mr-5'>" + product.created_at + "</span>" +
                            "</div>" +
                            "<div class='col-12 ml-3 mt-2 text-script'>" +
                            "<span>" + product.info  + "</span>" +
                            "</div>" +
                            "</div>" +
                            "</div>"
                        );
                    }
                }
            });


        }
    });

});