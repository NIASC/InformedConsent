$( document ).ready(function() {
	
	$('.fancybox').fancybox();
});

$('.email-check').change(function(){
	var email = $('#'+$(this).data('attach')).val();
	var aCont = $('#'+$(this).data('attach')).parents('.form-group');
	var container = $(this).parents('.form-group');
	var val = $(this).val();
	
	if(!isEmail(val)) {
		$(container).addClass('error');
		return true;
	} else {
		$(container).removeClass('error');
	}
	
	if(val != email && (email != '' && val != '')){
		$(container).addClass('error');
	} else {
		$(container).removeClass('error');
		$(aCont).removeClass('error');
	}
});

$('.phone-check').change(function(){
	var phone = $('#'+$(this).data('attach')).val();
	var aCont = $('#'+$(this).data('attach')).parents('.form-group');
	var container = $(this).parents('.form-group');
	var val = $(this).val();
	
	if(val != phone && (phone != '' && val != '')){
		$(container).addClass('error');
	} else {
		$(container).removeClass('error');
		$(aCont).removeClass('error');
	}
});

$('.fancy_trigger').click(function(){
	$('.fancy:first-child').trigger('click');
});

function isEmail(email) { 
    return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(email);
} 


$('form').submit(function(e){
	if(!isEmail($('input[name="email"]').val())) {
		var msg = $('input[name="email"]').data('error');
		e.preventDefault();
		e.stopPropagation();
	  $(this).prepend('<div class="alert alert-danger">'+msg+'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>');
 	  return false;
	} else return true;
});
