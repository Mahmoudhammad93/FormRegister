/*-- Global $, alert, console --*/

$(function(){

	'use strict';

	// Convert Pasword Field To Text Field

	var passField 	= $('.pass');

	$(document).on('click', '.fa-eye, .fa-eye-slash', function () {

		var parent = $(this).parents('.form-group');

		$('.fa-eye, .fa-eye-slash').toggleClass('show-pass');
		if ($(this).hasClass('show-pass')) {
			parent.find(passField).attr('type', 'text');
			parent.find('.fa-eye').addClass('fa-eye-slash').removeClass('fa-eye');
		}else{
			parent.find(passField).attr('type', 'password');
			parent.find('.fa-eye-slash').addClass('fa-eye').removeClass('fa-eye-slash');

		}

	});

  // BXSlider
  $(function(){
    $('#bxslider').bxSlider({
      mode: 'fade',
      captions: true,
      auto: true,
    });
  });
});

$('.label-img').hover(function(){
  console.log('yessssssssssssss');
  $('.label-img:before').css({'bottom': '0'});
});

// Validate google reCaptcha
var checkCaptcha;
function login_captcha()
  {
    console.log("captcha");
    $("#error-captcha").empty();
    //checkCaptcha = true;
    if(checkCaptcha) {
      $("#submitBtn").click();
      }
      else {
      console.log("insert captcha");
      $("#error-captcha").append('<div class="parsley-errors-list filled" id="parsley-id-5"><span class="parsley-type">Please Insert the Captcha.</span></div>');
    }
  }
function recaptchaCallback() {
//alert("callback working");
  checkCaptcha = true;
  $("#error-captcha").empty();
  };
  $(document).ready(function(){
  var checkCaptcha = false;
  $("#error-captcha").empty();
});