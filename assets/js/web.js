$(document).ready(function(){
    var bodyOb = $('body');
    
    bodyOb.on("click", ".login-signup-link", function(){
        $('#loginbox').hide();
        $('#signupbox').fadeIn({duration : 500, queue : false});
    });
    
    bodyOb.on("click", ".signin-link", function(){
        $('#signupbox').hide();
        $('#loginbox').fadeIn({duration : 500, queue : false});
    });
    bodyOb.on("keypress", "#per_password", function(e){
        if(e.which == 13) {
            loginSubmit($(this).closest("form"));
        }
    });
    //--------------------------------------------------------------------------
    bodyOb.on("click", ".loginSubmit", function(){
        loginSubmit($(this).closest("form"));
    });
    //--------------------------------------------------------------------------
    bodyOb.on("click", "#btn-signup", function(){
        var form = $(this).closest("form");
        $.ajax({
            type: 'POST',
            data: form.serialize(),
            url: ci_base_url+"index.php/index/xregister",
            cache: false,
            success: function(response){
                if(response.code == 1){
                    document.location = ci_base_url+"index.php/index/xhome";
                }else{
                    messageModal(response.title, response.message);
                }
            }
        });
    });
});

function loginSubmit(form){
    $.ajax({
        type: 'POST',
        data: form.serialize(),
        url: ci_base_url+"index.php/index/xlogin",
        cache: false,
        success: function(response){
            if(response.code == 1){
                document.location = ci_base_url+"index.php/index/xhome";
            }else{
                messageModal(response.title, response.message);
            }
        }
    });
}