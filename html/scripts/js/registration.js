var phonePattern = $('#registration-form').data('phone-pattern');
var phonePatternX = $('#registration-form').data('phone-patternx');
$('#phone, #phoneAgain').mask($("#mobile-format").val()+phonePattern, {
  placeholder: $("#mobile-format").val()+phonePatternX}).focus(
  function(){
    setCaretToPos(this, 5);
});
$(".registration-step .comment").hide();
var currentStep = 'undefined';

var validationSteps = {
  "questionnaire": function() {

	  var Status = true;

		$.each($('.type-21.required'), function( index, value ) {

			if(!radioButtonsValidation( $("input:radio[name="+$(value).data('name')+"]") ))  {

				Status = false;
			}
		});
    $('.type-21.required input[type="radio"]').each(function(){
      if( this.checked==true && $(this).attr('data-correct')=='') {
        Status=false;
      }
    });

    if(Status) {
      $(".registration-step .comment").hide();
      return true;
    }

    if($('.registration-step[data-step="questionnaire"] .alert').length == 0)
      $('.registration-step[data-step="questionnaire"] button.btn-next').before(
        validationMessage("To continue please check answers above!")
      );
      $(".registration-step .comment").show();
    return false;
  },
  "disease": function() {

	var mailReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var phoneReg = /^([+]46)\s*(7\d{1})\s*(\d{4})\s*(\d{3})$/;

    var email = document.forms["registration-form"]["email"].value;
    var emailAgain = document.forms["registration-form"]["emailAgain"].value;
    var phone = document.forms["registration-form"]["phone"].value;
    var phoneAgain = document.forms["registration-form"]["phoneAgain"].value;

    var message = "";

    var result = true;



    if(!document.forms["registration-form"]["HavePrioritzedDiseases"].checked &&
      (document.forms["registration-form"]["selectedDiseases[]"] == null || document.forms["registration-form"]["selectedDiseases[]"].length == 0)) {

      if($('.registration-step[data-step="disease"] .alert').length == 0)
        $('.registration-step[data-step="disease"] button.btn-next').before(
          validationMessage("To continue please choes diseases!")
        );
      result = false;
    }

    if(!result)
      $('.registration-step[data-step="contact-information"] .alert').remove();
      $('.registration-step[data-step="contact-information"] button.btn-submit').before(function(){
        validationMessage(message)
        alert()
      });
      console.log(result);
    return result;



  },
  "contact-information": function() {}
};

$(document).ready(function() {
  

  currentStep = parseInt($('.registration-step.active').attr('data-step'));

  $('.combobox').combobox();

  $('.btn-next').click(function(evt) {

    evt.preventDefault();
    if(!$(this).is('.blocked'))
      nextStep();
  });

  $('.btn-submit').click(function(evt) {
    evt.preventDefault();

    finish();
  });

  $('#HavePrioritzedDiseases').change(function() {
      if (this.checked) {
        $('#diseasesListContainer').hide('slow');
      } else {
        $('#diseasesListContainer').show('slow');
      }
  });

  $('#addDiseaseButton').click(function(evt) {
    evt.preventDefault();

    var selectedDiseaseId = parseInt($('#diseasesListContainer .combobox-selected > input').attr('value'));
    var selectedOption = $('#diseasesListContainer select option[value="' + selectedDiseaseId + '"]');

    addDisease(selectedDiseaseId, selectedOption.text());

    selectedOption.prop( "disabled", true );

    $('#diseasesSelect').data('combobox').clearElement();
    $('#diseasesSelect').data('combobox').clearTarget();
    $('#diseasesSelect').data('combobox').refresh();
  });
});


$("#a ddNotListedDiseaseButton").click(function(e){
  e.preventDefault();
  if($(this).prev().find("input").val() != "") {
    var parentElelent = $("<div class='selected-disease'></div>");
    $(this).parent().clone().appendTo(parentElelent);
    parentElelent.find('input[type="text"]').attr('readonly' ,'').attr('name', 'selectedDiseases[]');
    parentElelent.find('button').remove();
    parentElelent.append('<button class="btn btn-link">');
    parentElelent.find('button').text('Delete');
    parentElelent.find('button').click(function(){
      $(this).parent().remove();
    });

    $("#selectedDiseasesContainer").append(parentElelent);
    $(this).prev().find('input').val("");
  }
});

function finish() {
  if(currentStep != null) {
    if(validationSteps[currentStep] != null && !validationSteps[currentStep]()) return;

    //submit form

    var questcheck = true;
    var questions = $("div.type-21 input[type='radio']:checked");

    $(questions).each(function(i,el){

      if($(el).attr('data-correct') != '1') {
        questcheck = false;
        $(el).next().css('color', 'red');
      }
    });

    $("div[data-step='questionnaire'] input[type='radio']:checked").each(function(){
      if($(this).attr('data-correct') != '1') {
        questcheck = false;
        $(this).next().css('color', 'red');
      }
    });

    if($("div.type-21").length != questions.length || !questcheck) {
      $('html, body').animate({
        scrollTop: $("div[data-step='questionnaire']").offset().top
      });
      $('<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+ $('div[data-step="questionnaire"]').attr('data-error') +'</div>').insertAfter($("div[data-step='questionnaire'] h1"));
      return false;
    }

    if(!validationSteps.questionnaire()) {
      $('html, body').animate({
        scrollTop: $("div[data-step='questionnaire']").offset().top
      });

      return false;
    }

    if(!checkStuff()) {
      return false;
    }

    $("div[data-step='disease'] .alert").remove();
    if(!validationSteps.disease()) {
      $('html, body').animate({
        scrollTop: $("div[data-step='disease']").offset().top
      });
      $(validationMessage('Please choose disease')).insertAfter($("div[data-step='disease'] h1").eq(1));
      return false;
    }

    // $('.registration-step.active').removeClass('active');
    if($("#nemid").val() == '')
    {alert()
      var new_window = window.open('nemid/logon.php', '', "width=250,height=300");
      new_window.onbeforeunload = function(){
        var pid = $(new_window.document.getElementById("pid")).val();
        if(pid != '') {
          $("#nemid").val(pid);
        }

        if($('#nemid').val() != '') {
          $('#registration-form').submit();

        }
        else {
          $('form .alert-danger').remove();
          $(validationMessage('Please verify nemid')).insertBefore('.btn-submit');
        }
      }
    } else {
      $('#registration-form').submit();

    }

    // if(pid !== false) {
    //   $('#registration-form').submit();
    // }
    // else {
    //   validationMessage('Login to nemid');
    // }
  }
}


// check questionnaire
$('#checkReg').click(function(e){
    var questcheck = true;
    var questions = $("div.type-21 input[type='radio']:checked");

    $(questions).each(function(i,el){

      if($(el).attr('data-correct') != '1') {
        questcheck = false;
        $(el).next().css('color', 'red');
      }
    });
    
    $('html, body').animate({
        scrollTop: $("div[data-step='questionnaire']").offset().top
    });
    
    if($("div.type-21").length != questions.length || !questcheck) {     

      if($('div[data-step="questionnaire"]').find('.alert-warning').length == 0){
        $('div[data-step="questionnaire"]').find('.alert-success').remove();
        $('<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+ $('div[data-step="questionnaire"]').attr('data-error') +'</div>').insertAfter($("div[data-step='questionnaire'] h1"));
      }
      return false;
    
    } else {

      if($('div[data-step="questionnaire"]').find('.alert-success').length == 0){
        $('div[data-step="questionnaire"]').find('.alert-warning').remove();
        $('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+ $('div[data-step="questionnaire"]').attr('data-success') +'</div>').insertAfter($("div[data-step='questionnaire'] h1"));
      }
    }
});


function nextStep() {
  if(currentStep != null) {
    if(validationSteps[currentStep] != null && !validationSteps[currentStep]()) return;

    if(currentStep!=6)
      currentStep = $(".registration-step.active").next().attr('data-step');
    window.location.hash=currentStep;
  }
}

function prevStep() {
	if($(".registration-step.active").prev().length != 0) {
		currentStep = $(".registration-step.active").prev().attr('data-step');
		window.location.hash=currentStep;
		return false;
	}
}


	$('#contact_info').change(function(){
		$('#contact-info-optional').toggle('slow');
	});

function addDisease(id, name) {
  if(!isNaN(id) && $('#selected' + id).length == 0) {

    var selectedDisease = $('<div class="selected-disease" id="selected' + id + '"><div class="form-group"><div class="input-group">' +
                '<input class="form-control" type="text" value="' + name + '" readonly/>' +
                '<input type="hidden" name="selectedDiseases[]" value="' + id + '" readonly/>' +
                '</div><button onclick="removeSelectedDisease(this, event);" class="btn btn-link">Delete</button>' +
                '</div></div>');
    $('#selectedDiseasesContainer').append(selectedDisease);
  }
}

function removeSelectedDisease(element, evt) {
  evt.preventDefault();
  var container = $(element).closest(".selected-disease");
  var id = container.find('input:hidden').attr("value");

  container.remove();

  $('#diseasesListContainer select option[value="' + id + '"]').prop( "disabled", false );
  $('#diseasesSelect').data('combobox').refresh();
}

function validationMessage(message) {
  if(message == '' || message == null) {
    return '';
  }

  return '<div class="alert alert-danger">' +
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
            message +
          '</div>';
}

function radioButtonsValidation(radios) {
  for (i = 0; i < radios.length; ++ i) {
    if (radios[i].checked) return true;
  }
  return false;
}

function setCaretToPos(input, pos) {
  setSelectionRange(input, pos, pos);
}

function setSelectionRange(input, selectionStart, selectionEnd) {
  if (input.setSelectionRange) {
    input.focus();
    input.setSelectionRange(selectionStart, selectionEnd);
  } else if (input.createTextRange) {
    var range = input.createTextRange();
    range.collapse(true);
    range.moveEnd('character', selectionEnd);
    range.moveStart('character', selectionStart);
    range.select();
  }
}

$('#registration-form').submit(function(e) {
  e.preventDefault();
  $(".btn-submit").prepend("<i class='fa fa-spinner fa-spin '></i>");
  $(".btn-submit").attr("disabled",'');
  $(this).find('.alert-danger').remove();
  // console.log("kk");
  $.ajax({
          type:    "POST",
          url:     "",
          data:    $('#registration-form').serialize(),
          success: function(data){
            if(data == null) {
              alert("there was an error on server try again later");
              return;
            }
            if(data.error == false) {
              window.location.hash="final";
            }
            else if(data.error.questionary != null){
              window.location.hash="errors";
            } else if(data == true){
              window.location.hash="1";
            } else {
              for (var prop in data.error) {
                // console.log(data.error);
                // skip loop if the property is from prototype
                if(!data.error.hasOwnProperty(prop)) continue;
                $(validationMessage(data.error[prop])).insertBefore('.btn-submit');
              }

              $(".btn-submit i").remove();
              $(".btn-submit").removeAttr("disabled");
            }

            // console.log(data);
          },
          // vvv---- This is the new bit
          error:   function(jqXHR, textStatus, errorThrown) {
                $(validationMessage("There was an error try again later")).insertBefore('.btn-submit');
                $(".btn-submit i").remove();
                $(".btn-submit").removeAttr("disabled");
                // console.log(jqXHR);
                // console.log(textStatus);
                // console.log(errorThrown);
          }
        });
});



$(".btn-restart").click(function(e){
  e.preventDefault();
  $("#registration-form").find("input[type=text], textarea").val("");
  $("#registration-form").find("input[type=checkbox]").each(function(){
    this.checked=false;
  });
  $("#registration-form").find("input[type=radio]").each(function(){
    this.checked=false;
  });
  $('#diseasesListContainer').show();
  
  currentStep=1;
  window.location.hash=currentStep;
});

window.location.hash=1;

window.onhashchange = function() {
  currentStep=window.location.href.split('#')[1];
  var returnTo1 = false;
  // var currentEl = $('.registration-step[data-step="'+currentStep+'"]');
  // if(currentEl.prev().length != 0) {
  //   var allPrevEl=currentEl.prevAll();
  //   allPrevEl.each(function(){
  //     if(typeof validationSteps[$(this).attr('data-step')] != 'undefined') {
  //         if(!validationSteps[$(this).attr('data-step')]()) {
  //           returnTo1=true;
  //         }
  //     }
  //
  //     console.log(typeof validationSteps[$(this).attr('data-step')]);
  //   });
  // }
  // if(returnTo1) {
  //   window.location.hash=1;
  // } else {
  //   $('.registration-step.active').removeClass('active');
  //   $('.registration-step[data-step="' + currentStep + '"]').addClass('active');
  // }

  if(currentStep == 'final') {
    $('.registration-step').hide();
    $('div[data-step="final"]').show();
  }
}

var checkStuff = function() {
  var error = [];
  if($("input[name=contactinfo_optional]").val() == 0) {
    console.log(0);
    return true;
  }

  if($("input[name=contactinfo_optional]").val() == 1 && $("#contact_info").is(":checked")) {
    console.log(1);
    return true;
  }

  if($("#email").val() == "") {
    error.push($("#email").attr('data-error'));
  }
  else if($("#email").val() != $("#emailAgain").val()){
    error.push($("#emailAgain").attr('data-error'));
  }

  if($("#phone").val() == "") {
    error.push($("#phone").attr('data-error'));
  }
  else if($("#phone").val() != $("#phoneAgain").val()){
    error.push($("#phoneAgain").attr('data-error'));
  }

  if(error.length == 0) {
    return true;
  }

  $el=$("<div class='alert alert-danger'>").append("<div>").append('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>');
  for(var i =0; i< error.length; i++) {
    $el.find('div').append($("<div>").text(error[i]));
  }

  $el.insertAfter($("div[data-step='disease'] h1").eq(1));
  return false;
}