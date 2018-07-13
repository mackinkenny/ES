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

            $('#ajax-types').fadeOut(0,function () {
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
                                    "<div class='row col-12 p-sm-4 p-2 ml-1 mb-2 content-div fadeIn animated' style='background:#f9f9f9;'>" +
                                    "<div class='col-sm-4 col-3 text-script-2'>" +
                                    "<a href='/showproduct/" + product.id + "'><div class='img-prod' style='background-image: url(/../image/photo/" + product.img_path + ");'></div></a>" +
                                    "<img class='stamp-2' src='/image/main.png' style='position: absolute;top:-35px; left:-15%; width:70px; height:70px; transform: rotate(-20deg)' alt=''>" +
                                    "</div>" +
                                    "<div class='col-sm-8 col-9 text-script pad-0'>" +
                                    "<div class='col-12 text-script pad-0'>" +
                                    "<a href='/showproduct/" + product.id + "' class='main-text ml-sm-3'>" + product.name + "</a>" +
                                    "</div>" +
                                    "<div class='col-12 text-script'>" +
                                    "<span class='ml-sm-3 mr-sm-5 mr-4'>" + product.parent_name + "</span>" +
                                    "<span>" + product.created_at + "</span>" +
                                    "</div>" +
                                    "<div class='col-12 ml-sm-3 text-script'>" +
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                            else {
                                $('#ajax-types').append(
                                    "<div class='row col-12 p-sm-4 p-2 ml-1 mb-2 content-div fadeIn animated' style='background:#f9f9f9;'>" +
                                    "<div class='col-sm-4 col-3 text-script-2'>" +
                                    "<a href='/showproduct/" + product.id + "'><div class='img-prod' style='background-image: url(/../image/photo/" + product.img_path + ");'></div></a>" +
                                    "</div>" +
                                    "<div class='col-sm-8 col-9 text-script pad-0'>" +
                                    "<div class='col-12 text-script pad-0'>" +
                                    "<a href='/showproduct/" + product.id + "' class='main-text ml-sm-3'>" + product.name + "</a>" +
                                    "</div>" +
                                    "<div class='col-12 text-script'>" +
                                    "<span class='ml-sm-3 mr-sm-5 mr-4'>" + product.parent_name + "</span>" +
                                    "<span class='mr-5'>" + product.created_at + "</span>" +
                                    "</div>" +
                                    "<div class='col-12 ml-sm-3 text-script'>" +
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
                                    "<div class='row col-12 p-sm-4 p-2 ml-1 mb-2 content-div fadeIn animated' style='background:#f9f9f9;'>" +
                                    "<div class='col-12 text-script'>" +
                                    "<img class='stamp-2' src='/image/main.png' style='position: absolute;top:-35px; left:-5%; width:70px; height:70px; transform: rotate(-20deg)' alt=''>" +
                                    "<a href='/showproduct/" + product.id + "' class='main-text ml-sm-3'>" + product.name + "</a>" +
                                    "</div>" +
                                    "<div class='col-12 text-script'>" +
                                    "<span class='ml-sm-3 mr-sm-5 mr-4'>" + product.parent_name + "</span>" +
                                    "<span>" + product.created_at + "</span>" +
                                    "</div>" +
                                    "<div class='col-12 ml-sm-3 text-script'>" +
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                            else
                            {
                                $('#ajax-types').append(
                                "<div class='row col-12 p-sm-4 p-2 ml-1 mb-2 content-div fadeIn animated' style='background:#f9f9f9;'>" +
                                "<div class='col-12 text-script'>" +
                                "<a href='/showproduct/" + product.id + "' class='main-text ml-sm-3'>" + product.name + "</a>" +
                                "</div>" +
                                "<div class='col-12 text-script'>" +
                                "<span class='ml-sm-3 mr-sm-5 mr-4'>" + product.parent_name + "</span>" +
                                "<span>" + product.created_at + "</span>" +
                                "</div>" +
                                "<div class='col-12 ml-sm-3 text-script'>" +
                                "<span>" + product.info + "</span>" +
                                "</div>" +
                                "</div>"
                                );
                            }
                        }

                        $('#ajax-types').fadeIn(0);
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
            $('#ajax-types').fadeOut(0,function () {
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
                                    "<div class='row col-12 p-sm-4 p-2 ml-1 mb-2 content-div fadeIn animated' style='background:#f9f9f9;'>" +
                                    "<div class='col-sm-4 col-3 text-script-2'>" +
                                    "<a href='/showproduct/" + product.id + "'><div class='img-prod' style='background-image: url(/../image/photo/" + product.img_path + ");'></div></a>" +
                                    "<img class='stamp-2' src='/image/main.png' style='position: absolute;top:-35px; left:-15%; width:70px; height:70px; transform: rotate(-20deg)' alt=''>" +
                                    "</div>" +
                                    "<div class='col-sm-8 col-9 text-script pad-0'>" +
                                    "<div class='col-12 text-script pad-0'>" +
                                    "<a href='/showproduct/" + product.id + "' class='main-text ml-sm-3'>" + product.name + "</a>" +
                                    "</div>" +
                                    "<div class='col-12 text-script'>" +
                                    "<span class='ml-sm-3 mr-sm-5 mr-4'>" + product.parent_name + "</span>" +
                                    "<span>" + product.created_at + "</span>" +
                                    "</div>" +
                                    "<div class='col-12 ml-sm-3 text-script'>" +
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                            else {
                                $('#ajax-types').append(
                                    "<div class='row col-12 p-sm-4 p-2 ml-1 mb-2 content-div fadeIn animated' style='background:#f9f9f9;'>" +
                                    "<div class='col-sm-4 col-3 text-script-2'>" +
                                    "<a href='/showproduct/" + product.id + "'><div class='img-prod' style='background-image: url(/../image/photo/" + product.img_path + ");'></div></a>" +
                                    "</div>" +
                                    "<div class='col-sm-8 col-9 text-script pad-0'>" +
                                    "<div class='col-12 text-script pad-0'>" +
                                    "<a href='/showproduct/" + product.id + "' class='main-text ml-sm-3'>" + product.name + "</a>" +
                                    "</div>" +
                                    "<div class='col-12 text-script'>" +
                                    "<span class='ml-sm-3 mr-sm-5 mr-4'>" + product.parent_name + "</span>" +
                                    "<span class='mr-5'>" + product.created_at + "</span>" +
                                    "</div>" +
                                    "<div class='col-12 ml-sm-3 text-script'>" +
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
                                    "<div class='row col-12 p-sm-4 p-2 ml-1 mb-2 content-div fadeIn animated' style='background:#f9f9f9;'>" +
                                    "<div class='col-12 text-script'>" +
                                    "<img class='stamp-2' src='/image/main.png' style='position: absolute;top:-35px; left:-5%; width:70px; height:70px; transform: rotate(-20deg)' alt=''>" +
                                    "<a href='/showproduct/" + product.id + "' class='main-text ml-sm-3'>" + product.name + "</a>" +
                                    "</div>" +
                                    "<div class='col-12 text-script'>" +
                                    "<span class='ml-sm-3 mr-sm-5 mr-4'>" + product.parent_name + "</span>" +
                                    "<span>" + product.created_at + "</span>" +
                                    "</div>" +
                                    "<div class='col-12 ml-sm-3 text-script'>" +
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                            else
                            {
                                $('#ajax-types').append(
                                    "<div class='row col-12 p-sm-4 p-2 ml-1 mb-2 content-div fadeIn animated' style='background:#f9f9f9;'>" +
                                    "<div class='col-12 text-script'>" +
                                    "<a href='/showproduct/" + product.id + "' class='main-text ml-sm-3'>" + product.name + "</a>" +
                                    "</div>" +
                                    "<div class='col-12 text-script'>" +
                                    "<span class='ml-sm-3 mr-sm-5 mr-4'>" + product.parent_name + "</span>" +
                                    "<span>" + product.created_at + "</span>" +
                                    "</div>" +
                                    "<div class='col-12 ml-sm-3 text-script'>" +
                                    "<span>" + product.info + "</span>" +
                                    "</div>" +
                                    "</div>"
                                );
                            }
                        }

                        $('#ajax-types').fadeIn(0);
                    }
                }
            });


        }
    });

});