

function addEvent(obj, evt, fn) {
    if (obj.addEventListener) {
        obj.addEventListener(evt, fn, false);
    }
    else if (obj.attachEvent) {
        obj.attachEvent("on" + evt, fn);
    }
}

function addToCart(product){
	var productName = product.name;
	var quantity = product.parentNode.children[1].value;

	var reNum2 = /^([0-9\s\/\-\+])+$/;
	if(!reNum2.test(quantity)){
		alert("Pogrešno unešena vrednost u polje za količinu proizvoda.");
		return;
	}

	var quantityInt = 0;
	// console.log(productName + " : " + quantity);
	var currentQuantity = localStorage.getItem(productName);
	if(currentQuantity == null){
		localStorage.setItem(productName, quantity);
	}
	else{
		quantityInt = parseInt(currentQuantity);
		quantityInt += parseInt(quantity);
		localStorage.setItem(productName, quantityInt);
	}

	alert("Proizvod je dodat u korpu.")
	// console.log(localStorage.getItem(productName));
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
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
        	alert("Vaše pitanje je uspešno poslato, neko od naših lekara će Vam odgovoriti, u što kraćem roku.");
        }
      }, false);
    });


  }, false);

	

})();


function checkValidity(){
	var nameField = $("#firstName");
	var lastNameField = $("#lastName");
	var emailField = $("#emailField");
	var question = $("#question");
	var robot = $("#roboCheck");

	return areEmpty(nameField, lastNameField, emailField, question, robot);

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

function areEmpty(name, lastName, email, question, robot){

	var ok = true;
	var reURL = /www|http|https/;

	var reAlpha = /^([a-zA-Z\s])+$/;
	var reNum = /^([0-9\s\/\-\+])+$/;
	var reAlphaNum = /^([a-zA-Z0-9\s\/\-\+\,])+$/;
	var tags = /<|>|(\.js)/;

	console.log("Check validity");
	console.log(name.val());

	if(name.val() == "" || (reURL.test(String(name.val()))) || (tags.test(String(name.val()))) || !reAlpha.test(String(name.val()))){
		console.log("name field is empty");
		name.parent().find(".invalid-feedback").show();
		console.log(name.parent());
		name.parent().find(".valid-feedback").hide();
		ok = false;
	}else{
		name.parent().find(".invalid-feedback").hide();
		name.parent().find(".valid-feedback").show();
	}

	if(lastName.val()=="" || (reURL.test(String(lastName.val()))) || (tags.test(String(lastName.val()))) || !reAlpha.test(String(lastName.val()))){
		ok = false;
		lastName.parent().find(".invalid-feedback").show();
		lastName.parent().find(".valid-feedback").hide();
	}else{
		lastName.parent().find(".invalid-feedback").hide();
		lastName.parent().find(".valid-feedback").show();

	}

	if(question.val()=="" || (tags.test(String(question.val()))) || (reURL.test(String(question.val())))){
		ok = false;
		question.parent().find(".invalid-feedback").show();
		question.parent().find(".valid-feedback").hide();
	}
	else{
		question.parent().find(".invalid-feedback").hide();
		question.parent().find(".valid-feedback").show();
	}

	if(email.val()==""){
		ok = false;
		email.parent().find(".invalid-feedback").show();
		email.parent().find(".valid-feedback").hide();
	}else{
		if(!validateEmail(email)){
			ok = false;
		}
	}


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






