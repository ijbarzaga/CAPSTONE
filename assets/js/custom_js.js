$(document).ready(function () {
  updateTotalPrice();

  $(document).on('click', '.inc-btn', function (e) {
    e.preventDefault();

    var qty = $(this).closest('.product-data').find('.p-qty').val();
    
    var value = parseInt(qty, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
      value++;
      $(this).closest('.product-data').find('.p-qty').val(value);
    }
  });

  $(document).on('click', '.dec-btn', function (e) {
    e.preventDefault();

    var qty = $(this).closest('.product-data').find('.p-qty').val();
    
    var value = parseInt(qty, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
      value--;
      $(this).closest('.product-data').find('.p-qty').val(value);
    }
  });

  $(document).on('click', '.cartAdd', function () {
    var prod_qty = $(this).closest('.product-data').find('.p-qty').val();
    var product_id = $(this).val();
    var size_id = $(this).closest('.product-data').find('#size_id').val();
    var flavor_id = $(this).closest('.product-data').find('#flavor_id').val();
    var topper_id = $(this).closest('.product-data').find('#topper_id').val();
    var writings = $(this).closest('.product-data').find('#writings').val();

    $.ajax({
        method: "POST",
        url: "functions/cart_handling.php",
        data: {
            "product_id": product_id,
            "prod_qty": prod_qty,
            "size_id": size_id,
            "flavor_id": flavor_id,
            "topper_id": topper_id,
            "writings": writings,
            "scope": "add"
        },
        success: function (response) {
            if (response === "existing") {
                alertify.warning('Product is already in cart.');
            } else if (response === "200") {
                alertify.warning('Product is added to cart.');
            } else if (response === "401") {
                alertify.warning('Login to continue.');
            } else if (response === "500") {
                alertify.warning('Something went wrong.');
            } else {
                alert(response); // Handle unexpected responses for debugging
            }
        }
    });
  });

  $(document).on('click','.update-qty',function () {

    var qty = $(this).closest('.product-data').find('.p-qty').val();
    var productID = $(this).closest('.product-data').find('.productID').val();

    // alert(qty);
    $.ajax({
      method: "POST",
      url: "functions/cart_handling.php",
      data: {
        "product_id" : productID,
        "prod_qty" : qty,
        "scope" : "update"
      },
      success: function (response) {
        // After updating the quantity, reload the cart to reflect the changes
        if (response == 200) {
          alertify.warning('Product quantity updated.');
          $('#usercart').load(location.href + " #usercart", function () {
            // After reloading the cart, update the total price
            updateTotalPrice();
          });
        }
      }
      
    });
  });

  $(document).on('click', '.removeItem', function () {
    var cart_id = $(this).val();
    // alert("hi");

    $.ajax({
      method: "POST",
      url: "functions/cart_handling.php",
      data: {
        "cart_id" : cart_id,
        "scope" : "delete"
      },
      success: function (response) {
        if(response == 200){
          alertify.warning('Product is removed from cart.');
          $('#usercart').load(location.href + " #usercart");
        }
        else{
          alertify.warning(response);
        }
        // else if(response == 401){
        //   alertify.warning('Login to continue.');
        // }
        // else if(response == 500){
        //   alertify.warning('Something went wrong.');
        // }
        // alert(response);
      }
    });
  });

  function updateTotalPrice() {
    // Calculate the total price based on the updated quantities
    var totalPrice = 0;
  
    $('.product-data').each(function () {
      var qty = $(this).find('.p-qty').val();
      var sizePrice = parseFloat($(this).find('.size-price').val());
      var topperPrice = parseFloat($(this).find('.topper-price').val());
  
      // Ensure the values are valid numbers
      qty = isNaN(qty) ? 0 : parseInt(qty);
      sizePrice = isNaN(sizePrice) ? 0 : sizePrice;
      topperPrice = isNaN(topperPrice) ? 0 : topperPrice;
  
      // Calculate the product price and add to the total
      var productPrice = (sizePrice + topperPrice) * qty;
      totalPrice += productPrice;
    });
  
    // Update the total price display on your page
    $('.total-price').text('$' + totalPrice.toFixed(2));
  }

});