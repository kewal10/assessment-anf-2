

/*jslint browser:true, devel:true, white:true, vars:true */
/*global $:false */
/* jshint strict: false, -W117 */




$(function() {
    
    $.validator.setDefaults({
       errorClass: 'help-block',
       highlight: function(element) {
           $(element)
           .closest('.form-group')
           .addClass('has-error');
       },
        unhighlight: function(element) {
           $(element)
           .closest('.form-group')
           .removeClass('has-error');
       }
    });
    
    
   $("#userForm").validate({
       rules: {
           email: {
               required: true,
               email: true
           },
           password: "required",
           password2: {
               required: true,
               equalTo: "#password"
           },
           fullName: {
               required: true
           },
           your_message: {
               required: true
           },
           
       },
       messages: {
           email: {
               required: 'Please enter a email address.',
               email: 'Please enter a <em>valid</em> address'
           },
          fullName: {
              required: 'Please Enter your Full Name'
          },
          password: {
              required: 'Please Enter your passowrd'
          },
        your_message: {
              required: 'Please Enter your Message'
          }
       }
   }); 
});

$(document).on('click',function(){
	$('.collapse').collapse('hide');
})

$(document).ready(function() {      
   $('.carousel').carousel('pause');
});

$('.carousel').carousel({
    pause: true,
    interval: false
});

$('.carousel').carousel({
    interval: false
}); 

var $affectedElements = $("h1, h2, h3, h4, h5, p");


$affectedElements.each( function(){
  var $this = $(this);
  $this.data("orig-size", $this.css("font-size") );
});

$("#btn-increase").click(function(){
  changeFontSize(5);
});

$("#btn-decrease").click(function(){
  changeFontSize(-5);
});

$("#btn-orig").click(function(){
  $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , $this.data("orig-size") );
   });
});

function changeFontSize(direction){
    $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , parseInt($this.css("font-size"))+direction );
    });
};

