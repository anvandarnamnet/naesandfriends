jQuery(document).ready(function(){

    jQuery("#contact-form").submit(function(e){

        e.preventDefault();

        var form = this;

        jQuery(form).addClass("loading");

        var formData = jQuery(this).serialize();

        var responseEl = jQuery("#form-response");

        jQuery.ajax({
            method: "POST",
            url: wpApiSettings.root + "qte/v1/contact",
            data: formData,
        })
        .done(function(data) {
            if(data.success){
                jQuery(responseEl).removeClass('error');
                jQuery(responseEl).addClass('success');
                jQuery(responseEl).html("<p>" + data.success_msg + "</p>");
                jQuery(form).find(".form-group").each(function(){
                    jQuery(this).remove();
                })

                jQuery(form).removeClass('loading');
            } else {
                jQuery(responseEl).addClass('error');
                jQuery(responseEl).html("<p>" + data.error_msg + "</p>");

                jQuery(form).removeClass('loading');
            }
        });

    })


})