$(document).ready(function(){
    
   $('.login-box').hide();
    
    $('.login-toggle').click(function() {
        $('.login-box').slideToggle();
    });
    
    $('.register').hide();
    
    $('.register-toggle').click(function() {
        $('.register').slideToggle();
    });
    
});