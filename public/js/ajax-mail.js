$(function() {

    // Get the form.
    var form = $('#contact-form');

    // Get the messages div.
    var formMessages = $('.form-messege');

    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST'
        });

        // Submit the form using AJAX.
        $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function(response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                // Set the message text.
                //$(formMessages).text(response);
                $(formMessages).text('Thank you for your feedback!');

                console.dir(response);

                // Clear the form.
                $('#contact-form input,#contact-form textarea').val('');
            })
            .fail(function(data) {
                // Make sure that the formMessages div has the 'error' class.

                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                $(formMessages).text('Oops! An error occured and your message could not be sent.');

                console.dir('Oops! An error occured and your message could not be sent.');
                //console.dir(response);

                // Set the message text.
                /*if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }*/
            });
    });

});

$(function() {

    // Get the form.
    var form = $('#review-form');

    // Get the messages div.
    var formMessages = $('.form-messege');

    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();

        var rating = '';
        switch($('input[name=star]:checked').attr('id')) {
            case "star1":
                rating = 5;
                break;
            case "star2":
                rating = 4;
                break;
            case "star3":
                rating = 3;
                break;
            case "star4":
                rating = 2;
                break;
            case "star5":
                rating = 1;
                break;
            default:
                rating = 0;
        }

        // Serialize the form data.
        var formData = $(form).serializeArray();
        formData.push({'name': 'rating', 'value': rating});

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST'
        });

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
            .done(function(response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                // Set the message text.
                $(formMessages).text('Thank you for your review!');

                console.dir(response);

                // Clear the form.
                $('#review-form input,#review-form textarea').val('');
                document.location.reload(true);
            })
            .fail(function(data) {
                // Make sure that the formMessages div has the 'error' class.

                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                $(formMessages).text('Oops! An error occured and your message could not be sent.');
                console.dir(data);
                console.dir('Oops! An error occured and your message could not be sent.');
                //console.dir(response);

                // Set the message text.
                /*if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }*/
            });
    });

});

$(function() {

    /*Объектный литерал*/
    /*Объектный литерал*/
    var fx = {
        "initModal" : function () {
            if($('.modal-window').length ==0)
            {
                $('<div>').attr('id', 'jquery-overlay').appendTo('body');
                return $('<div>').addClass('modal-window').appendTo('body');
                /*return $('<div>').addClass('modal-window').insertAfter($('body'));*/
            }else{
                return $('.modal-window');
            }
        }
    };

    $('.quickModalBtn').click(function () {
        //console.dir('THIS');
        /*var data = $(this).attr('data-id');
        var data2 = $(this).attr('data-question-id');*/
        var data = $(this).attr('data-id');
        var modal = fx.initModal();

        $('.modal-window, .modal-backdrop').fadeIn('fast');

        $('<a>').attr('href','#').addClass('modal-close-btn').html('&times;').click(function (e) {
            e.preventDefault();
            $('.modal-window').remove();
            $('#jquery-overlay').remove();
            $('.modal-window, .modal-backdrop').fadeOut('fast');
            document.location.reload(true);
        }).appendTo(modal);

        /*console.dir(data);
        return  -1;*/

        /*$('.modal-window, .modal-backdrop').fadeIn('fast');

        $('<a>').attr('href','#').addClass('modal-close-btn').html('<img src="/data_img/cross.svg">').click(function (e) {
            e.preventDefault();
            $('.modal-window').remove();
            $('#jquery-overlay').remove();
            $('.modal-window, .modal-backdrop').fadeOut('fast');
        }).appendTo(modal);*/

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST'
        });

        $.ajax({
            url: "/ajax/product-detail",
            type: "POST",
            data: "id="+data,
            success: function (data) {
                //console.log("ok");
                /*console.dir(data);*/
                /*$.fancybox.open(data);*/
                modal.append(data);
            },
            error: function (msg) {
                console.log(msg);
            }
        });
    });

});

/* 10. Mailchimp Ajax */

/*!
Mailchimp Ajax Submit
jQuery Plugin
Author: Siddharth Doshi
*/
(function($) {
    "use strict";
    $.ajaxChimp = {
        responses: {
            "We have sent you a confirmation email": 0,
            "Please enter a value": 1,
            "An email address must contain a single @": 2,
            "The domain portion of the email address is invalid (the portion after the @: )": 3,
            "The username portion of the email address is invalid (the portion before the @: )": 4,
            "This email address looks fake or invalid. Please enter a real email address": 5
        },
        translations: {
            en: null
        },
        init: function(selector, options) {
            $(selector).ajaxChimp(options)
        }
    };
    $.fn.ajaxChimp = function(options) {
        $(this).each(function(i, elem) {
            var form = $(elem);
            var email = form.find("input[type=email]");
            var label = form.find("label[for=" + email.attr("id") + "]");
            var settings = $.extend({
                url: form.attr("action"),
                language: "en"
            }, options);
            var url = settings.url.replace("/post?", "/post-json?").concat("&c=?");
            form.attr("novalidate", "true");
            email.attr("name", "EMAIL");
            form.submit(function() {
                var msg;

                function successCallback(resp) {
                    if (resp.result === "success") {
                        msg = "We have sent you a confirmation email";
                        label.removeClass("error").addClass("valid");
                        email.removeClass("error").addClass("valid")
                    } else {
                        email.removeClass("valid").addClass("error");
                        label.removeClass("valid").addClass("error");
                        var index = -1;
                        try {
                            var parts = resp.msg.split(" - ", 2);
                            if (parts[1] === undefined) {
                                msg = resp.msg
                            } else {
                                var i = parseInt(parts[0], 10);
                                if (i.toString() === parts[0]) {
                                    index = parts[0];
                                    msg = parts[1]
                                } else {
                                    index = -1;
                                    msg = resp.msg
                                }
                            }
                        } catch (e) {
                            index = -1;
                            msg = resp.msg
                        }
                    }
                    if (settings.language !== "en" && $.ajaxChimp.responses[msg] !== undefined && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]) {
                        msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]
                    }
                    label.html(msg);
                    label.show(2e3);
                    if (settings.callback) {
                        settings.callback(resp)
                    }
                }
                var data = {};
                var dataArray = form.serializeArray();
                $.each(dataArray, function(index, item) {
                    data[item.name] = item.value
                });
                $.ajax({
                    url: url,
                    data: data,
                    success: successCallback,
                    dataType: "jsonp",
                    error: function(resp, text) {
                        console.log("mailchimp ajax submit error: " + text)
                    }
                });
                var submitMsg = "Submitting...";
                if (settings.language !== "en" && $.ajaxChimp.translations && $.ajaxChimp.translations[settings.language] && $.ajaxChimp.translations[settings.language]["submit"]) {
                    submitMsg = $.ajaxChimp.translations[settings.language]["submit"]
                }
                label.html(submitMsg).show(2e3);
                return false
            })
        });
        return this
    }
})(jQuery);
