/* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;

function showAlert() {
  alert('show this message');
}

/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});


function continueShopping(){
  console.log("continue button clicked");
  var selected = $("#choose-payment input[type='radio']:checked");
  if(selected.attr('id') == "courier"){
    data();
    // location.assign("couriercheckout.php");
  }
  else if(selected.attr('id') == "card"){
        location.assign("cardcheckout.php");
  }
  else alert("The developer of this website did not do a good job."
  + " Please send him an email at namek@gmail.com and tell him he sucks.");
 

}

function data(){

  var request = $.ajax({
      url: "data.php",
      type: "post",
      data: {
        ig500 : localStorage.getItem("immunoG500"),
        ig100 : localStorage.getItem("immunoG100"),
        holex : localStorage.getItem("holex"),
        acidex : localStorage.getItem("acidex"),
        q10 : localStorage.getItem("q10")
      }
  });

  // Callback handler that will be called on success
  request.done(function (response, textStatus, jqXHR){
      location.assign("couriercheckout.php");

  });

  // Callback handler that will be called on failure
  request.fail(function (jqXHR, textStatus, errorThrown){
      // Log the error to the console
      console.error(
          "The following error occurred: "+
          textStatus, errorThrown
      );
      alert("Došlo je do greške pri obradi porudžbine. Obaveštenje nadležnoj službi je poslato i greška će biti ispravljena u što kraćem roku. Molimo Vas, pokušajte kasnije.");
  });

}

/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  console.log("change");
  alert("change");
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();

  var reNum2 = /^([0-9]*)+$/;
  if(!reNum2.test(quantity)){
    alert("Pogrešno unešena vrednost u polje za količinu proizvoda.");
    return;
  }

  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}













