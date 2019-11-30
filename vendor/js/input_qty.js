// Quantity buttons
	function qtySum(){
    var arr = document.getElementsByName('qtyInput');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseInt(arr[i].value))
            tot += parseInt(arr[i].value);
    }

	var cardQty = document.querySelector(".qtyTotal");
	var total   = document.getElementById("total");
    cardQty.innerHTML 	= tot;
    total.innerHTML 	= tot;
	} 
	qtySum();

	$(function() {

	   $(".qtyButtons input").after('<div class="qtyInc"></div>');
	   $(".qtyButtons input").before('<div class="qtyDec"></div>');
	   $(".qtyDec, .qtyInc").on("click", function() {

		  var $tombol = $(this);
		  var nilaiLama = $tombol.parent().find("input").val();

		  if ($tombol.hasClass('qtyInc')) {
			 var newVal = parseFloat(nilaiLama) + 1;
		  } else {
			 // don't allow decrementing below zero
			 if (nilaiLama > 0) {
				var newVal = parseFloat(nilaiLama) - 1;
			 } else {
				newVal = 0;
			 }
		  }

		  $tombol.parent().find("input").val(newVal);
		  qtySum();


	   });


	   const counter = document.querySelector(".qtyTotal");
	//    const counter = 

	});