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

            $('#ajax-types').hide(100,function () {
                $('#ajax-types').empty();
            });
            a = (this.id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/type/' + a,
                success: function (data) {
                    for(var product of data.products.reverse()) {
                        if(product.info.length > 270) {
                            product.info = product.info.slice(0, 270) + "...";
                        }
                        if(product.name. length > 45)
                        {
                            product.name = product.name.slice(0, 45) + "...";
                        }
                        if(product.img_path != null) {
                            if(product.our == 1)
                            {
                                $('#ajax-types').append(
                                    "<div class='row col-12 p-4 ml-1 mb-2' style='background:#f9f9f9;'>" +
                                    "<div class='col-4'>" +
                                    "<a href='/showproduct/" + product.id + "'><div class='img-prod' style='background-image: url(/../image/photo/" + product.img_path + ");'></div></a>" +
                                    "<img src='/image/Almash.png' style='position: absolute;top:-35px; left:-15%; width:70px; height:70px; transform: rotate(-20deg)' alt=''>" +
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
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                            else {
                                $('#ajax-types').append(
                                    "<div class='row col-12 p-4 ml-1 mb-2' style='background:#f9f9f9;'>" +
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
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                        }
                        else
                        {
                            if(product.our == 1) {
                                $('#ajax-types').append(
                                    "<div class='row col-12 p-4 ml-1 mb-2' style='background:#f9f9f9;'>" +
                                    "<div class='col-12'>" +
                                    "<img src='/image/Almash.png' style='position: absolute;top:-35px; left:-5%; width:70px; height:70px; transform: rotate(-20deg)' alt=''>" +
                                    "<a href='/showproduct/" + product.id + "' class='main-text ml-3'>" + product.name + "</a><hr>" +
                                    "</div>" +
                                    "<div class='col-12 text-script'>" +
                                    "<span class='ml-3 mr-5'>" + product.parent_name + "</span>" +
                                    "<span class='mr-5'>" + product.created_at + "</span>" +
                                    "</div>" +
                                    "<div class='col-12 ml-3 mt-2 text-script'>" +
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                            else
                            {
                                $('#ajax-types').append(
                                "<div class='row col-12 p-4 ml-1 mb-2' style='background:#f9f9f9;'>" +
                                "<div class='col-12'>" +
                                "<a href='/showproduct/" + product.id + "' class='main-text ml-3'>" + product.name + "</a><hr>" +
                                "</div>" +
                                "<div class='col-12 text-script'>" +
                                "<span class='ml-3 mr-5'>" + product.parent_name + "</span>" +
                                "<span class='mr-5'>" + product.created_at + "</span>" +
                                "</div>" +
                                "<div class='col-12 ml-3 mt-2 text-script'>" +
                                "<span>" + product.info + "</span>" +
                                "</div>" +
                                "</div>"
                                );
                            }
                        }

                        $('#ajax-types').show(100);
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
            $('#ajax-types').hide(100,function () {
                $('#ajax-types').empty();
            });
            a = (this.id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/types/' + a,
                success: function (data) {

                    for(var product of data.products.reverse()) {
                        if(product.info.length > 270) {
                            product.info = product.info.slice(0, 270) + "...";
                        }
                        if(product.name. length > 45)
                        {
                            product.name = product.name.slice(0, 45) + "...";
                        }
                        if(product.img_path != null) {
                            if(product.our == 1)
                            {
                                $('#ajax-types').append(
                                    "<div class='row col-12 p-4 ml-1 mb-2' style='background:#f9f9f9;'>" +
                                    "<div class='col-4'>" +
                                    "<a href='/showproduct/" + product.id + "'><div class='img-prod' style='background-image: url(/../image/photo/" + product.img_path + ");'></div></a>" +
                                    "<img src='/image/Almash.png' style='position: absolute;top:-35px; left:-15%; width:70px; height:70px; transform: rotate(-20deg)' alt=''>" +
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
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                            else {
                                $('#ajax-types').append(
                                    "<div class='row col-12 p-4 ml-1 mb-2' style='background:#f9f9f9;'>" +
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
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                        }
                        else
                        {
                            if(product.our == 1) {
                                $('#ajax-types').append(
                                    "<div class='row col-12 p-4 ml-1 mb-2' style='background:#f9f9f9;'>" +
                                    "<div class='col-12'>" +
                                    "<img src='/image/Almash.png' style='position: absolute;top:-35px; left:-5%; width:70px; height:70px; transform: rotate(-20deg)' alt=''>" +
                                    "<a href='/showproduct/" + product.id + "' class='main-text ml-3'>" + product.name + "</a><hr>" +
                                    "</div>" +
                                    "<div class='col-12 text-script'>" +
                                    "<span class='ml-3 mr-5'>" + product.parent_name + "</span>" +
                                    "<span class='mr-5'>" + product.created_at + "</span>" +
                                    "</div>" +
                                    "<div class='col-12 ml-3 mt-2 text-script'>" +
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                            else
                            {
                                $('#ajax-types').append(
                                    "<div class='row col-12 p-4 ml-1 mb-2' style='background:#f9f9f9;'>" +
                                    "<div class='col-12'>" +
                                    "<a href='/showproduct/" + product.id + "' class='main-text ml-3'>" + product.name + "</a><hr>" +
                                    "</div>" +
                                    "<div class='col-12 text-script'>" +
                                    "<span class='ml-3 mr-5'>" + product.parent_name + "</span>" +
                                    "<span class='mr-5'>" + product.created_at + "</span>" +
                                    "</div>" +
                                    "<div class='col-12 ml-3 mt-2 text-script'>" +
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                        }

                        $('#ajax-types').show(100);
                    }
                }
            });


        }
    });

});