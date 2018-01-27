$(document).ready(function () {
    
    var bodyOb = $('body');
    /* to toggle the sidebar, just switch the CSS classes */
    bodyOb.on('click', ".sidebar-btn", function(){
        if (!$("#sidebar").hasClass("in")) {
            $('.sidebar-form-wrapper').removeClass("hidden");
        } else {
            $('.sidebar-form-wrapper').addClass("hidden");
            $('.contactField').val('');
        }
    });
    //----------------------------------------------------------------------
    bodyOb.on('click', ".formSubmit", function(){
        showLoader();
        $.ajax({
            type: "POST",
            url: '../index/xcontact',
            data: $('#'+$(this).attr("target")).serialize(),
            success: function () {},
            complete: function () {
                hideLoader();
                setTimeout(function(){
                    system.browser.message('Contact Us', 'Thank you for contacting us. <br>One of our friendly consultants will be in contact with you soon.');
                }, 500);
            },
        });
    });
    //----------------------------------------------------------------------
    bodyOb.on('click', ".sidebarFormSubmitBtn", function(){
        $('.sidebar-btn').click();
    });
    //----------------------------------------------------------------------
});

//--------------------------------------------------------------------------
function showLoader(message, time){
    $(".__loader-message").text(message);
    system.fadeIn('.__overlay', time ? time : 500);
}
//--------------------------------------------------------------------------
function hideLoader(time){
   $(document).ready(function(){
        $(".__loader-message").text("");
        system.fadeOut('.__overlay', time ? time : 500);
   });
}
//------------------------------------------------------------------------------