(function() {
  'use strict';
  window.addEventListener('load', function() {
  	console.log("Page loaded");
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
   
  //   $("#questionForm").submit(function(event){
	 //    console.log("On submit"); 
		// event.preventDefault();  
	    
  //   });  

  var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (checkValidity() === false) {
        	console.log("form not valid");
          event.preventDefault();
          event.stopPropagation();
        }
        else{
        	console.log("The form is valid");
        	// alert("Vaše porudžbina je uspešno poslata. Osoba zadužena za Vašu porudžbinu će Vas pozvati u roku od jednog radnog dana, radi potvrde. Hvala na poverenju.");
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
	var robot = $("#roboCheck");


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

	console.log("Check validity");
	console.log(name.val());

	var reAlpha = /^([a-zA-Z\s])+$/;
	var reNum = /^([0-9\s\/\-\+])+$/;
	var reAlphaNum = /^([a-zA-Z0-9\s\/\-\+\,])+$/;
	var tags = /<|>|(\.js)/;

	if(!reAlpha.test(String(name.val())) || (tags.test(String(name.val())))){
		name.parent().find(".invalid-feedback").show();
		console.log(name.parent());
		name.parent().find(".valid-feedback").hide();
		ok = false;
	}else{
		name.parent().find(".invalid-feedback").hide();
		name.parent().find(".valid-feedback").show();
	}

	if(!reAlpha.test(String(lastName.val())) || (tags.test(String(name.val())))){
		ok = false;
		lastName.parent().find(".invalid-feedback").show();
		lastName.parent().find(".valid-feedback").hide();
	}else{
		lastName.parent().find(".invalid-feedback").hide();
		lastName.parent().find(".valid-feedback").show();

	}

	if(!reNum.test(String(phone.val())) || (tags.test(String(name.val())))){
		ok = false;
		phone.parent().find(".invalid-feedback").show();
		phone.parent().find(".valid-feedback").hide();
	}
	else{
		phone.parent().find(".invalid-feedback").hide();
		phone.parent().find(".valid-feedback").show();
	}

	if(!reAlpha.test(String(city.val())) || (tags.test(String(name.val())))){
		ok = false;
		city.parent().find(".invalid-feedback").show();
		city.parent().find(".valid-feedback").hide();
	}
	else{
		city.parent().find(".invalid-feedback").hide();
		city.parent().find(".valid-feedback").show();
	}

	if(!reAlphaNum.test(String(adress.val())) || (tags.test(String(name.val())))){
		ok = false;
		adress.parent().find(".invalid-feedback").show();
		adress.parent().find(".valid-feedback").hide();
	}
	else{
		adress.parent().find(".invalid-feedback").hide();
		adress.parent().find(".valid-feedback").show();
	}

	if(!reNum.test(String(postal.val())) || (tags.test(String(name.val())))){
		ok = false;
		postal.parent().find(".invalid-feedback").show();
		postal.parent().find(".valid-feedback").hide();
		console.log(postal);
	}
	else{
		postal.parent().find(".invalid-feedback").hide();
		postal.parent().find(".valid-feedback").show();
	}

	console.log(robot);

	if(!robot.is(':checked')){
		ok = false;
		robot.parent().find(".invalid-feedback").show();
		robot.parent().find(".valid-feedback").hide();
	}
	else{
		robot.parent().find(".invalid-feedback").hide();
		robot.parent().find(".valid-feedback").show();
	}

	return ok;
}