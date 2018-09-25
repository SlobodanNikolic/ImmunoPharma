(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');

  var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        else{

        }
      }, false);
    });


  }, false);
})();


function checkValidity(){
	var nameField = $("#firstName");
	var lastNameField = $("#lastName");
	// var emailField = $("#email");
	var phone = $("#phone");
	var city = $("#city");
	var adress = $("#adress");
	var postal = $("#postal");
	var robot = $("#captcha");


	return areEmpty(nameField, lastNameField, city, adress, postal, phone, robot);

}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(String(email.val()).toLowerCase())){
    	email.parent().find(".invalid-feedback").hide();
		email.parent().find(".valid-feedback").show();
		return true;
    }
    else{
    	email.parent().find(".invalid-feedback").show();
		email.parent().find(".valid-feedback").hide();
		return false;
    }
}

function emptyCart(){
	
}

function areEmpty(name, lastName, city, adress, postal, phone, robot){

	var ok = true;

	var reAlpha = /^([a-zA-Z\s])+$/;
	var reNum = /^([0-9\s\/\-\+])+$/;
	var reAlphaNum = /^([a-zA-Z0-9\s\/\-\+\,])+$/;
	var tags = /<|>|(\.js)/;
	var reURL = /www|http|https|script|javascript|php|;/;

	if(grecaptcha.getResponse().length == 0){
		robot.html("Molim Vas, štiklirajte ovo polje");
		ok = false;
	}
	else{
		robot.html("");
	}

	if(!reAlpha.test(String(name.val())) || (reURL.test(String(name.val()))) || (tags.test(String(name.val())))){
		name.parent().find(".invalid-feedback").show();
		name.parent().find(".valid-feedback").hide();
		ok = false;
	}else{
		name.parent().find(".invalid-feedback").hide();
		name.parent().find(".valid-feedback").show();
	}

	if(!reAlpha.test(String(lastName.val())) || (reURL.test(String(lastName.val()))) || (tags.test(String(lastName.val())))){
		ok = false;
		lastName.parent().find(".invalid-feedback").show();
		lastName.parent().find(".valid-feedback").hide();
	}else{
		lastName.parent().find(".invalid-feedback").hide();
		lastName.parent().find(".valid-feedback").show();

	}

	if(!reNum.test(String(phone.val())) || (reURL.test(String(phone.val()))) || (tags.test(String(phone.val())))){
		ok = false;
		phone.parent().find(".invalid-feedback").show();
		phone.parent().find(".valid-feedback").hide();
	}
	else{
		phone.parent().find(".invalid-feedback").hide();
		phone.parent().find(".valid-feedback").show();
	}

	if(!reAlpha.test(String(city.val())) || (reURL.test(String(city.val()))) || (tags.test(String(city.val())))){
		ok = false;
		city.parent().find(".invalid-feedback").show();
		city.parent().find(".valid-feedback").hide();
	}
	else{
		city.parent().find(".invalid-feedback").hide();
		city.parent().find(".valid-feedback").show();
	}

	if(!reAlphaNum.test(String(adress.val())) || (reURL.test(String(adress.val()))) || (tags.test(String(adress.val())))){
		ok = false;
		adress.parent().find(".invalid-feedback").show();
		adress.parent().find(".valid-feedback").hide();
	}
	else{
		adress.parent().find(".invalid-feedback").hide();
		adress.parent().find(".valid-feedback").show();
	}

	if(!reNum.test(String(postal.val())) || (reURL.test(String(postal.val()))) || (tags.test(String(postal.val())))){
		ok = false;
		postal.parent().find(".invalid-feedback").show();
		postal.parent().find(".valid-feedback").hide();
	}
	else{
		postal.parent().find(".invalid-feedback").hide();
		postal.parent().find(".valid-feedback").show();
	}

	

	return ok;
}