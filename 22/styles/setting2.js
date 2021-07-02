$(document).ready(function(){
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    
	var percent =  parseFloat(document.getElementById("Ultra").value); 
	var minMoney 	= [10,501,1001,2001,5001,10001,50001 ];
	var maxMoney	= [500,1000,2000,5000,10000,50000,100000 ];
	$("#money").val(minMoney[0]);
	console.log($("#money").val(minMoney[0]));
	
	//Calculator
	function calc(){
		var money = parseFloat($("#money").val());
		switch (percent) {
		    case 0:
		        if( (money >= 10 && money <= 500)){
		        	var profitDaily = money / 100 * 145;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 501 && money <= 1000) {
		        	var profitDaily = money / 100 * 145;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 1001 && money <= 2000) {
		        	var profitDaily = money / 100 * 145;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 2001 && money <= 5000) {
		        	var profitDaily = money / 100 * 145;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 5001 && money <= 10000) {
		        	var profitDaily = money / 100 * 145;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10001 && money <= 50000) {
		        	var profitDaily = money / 100 * 145;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }  if (money >= 50001 && money <= 1000000) {
		        	var profitDaily = money / 100 * 145;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } 
		        break;
			case 1:
		        if( (money >= 10 && money <= 500)){
		        	var profitDaily = money / 100 * 300;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 501 && money <= 1000) {
		        	var profitDaily = money / 100 * 300.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 1001 && money <= 2000) {
		        	var profitDaily = money / 100 * 300.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 2001 && money <= 5000) {
		        	var profitDaily = money / 100 * 300.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 5001 && money <= 10000) {
		        	var profitDaily = money / 100 * 300.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10001 && money <= 50000) {
		        	var profitDaily = money / 100 * 300.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }  if (money >= 50001 && money <= 1000000) {
		        	var profitDaily = money / 100 * 300.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } 
		        break;
		    case 2:
		    	if( (money >= 10 && money <= 500)){
		        	var profitDaily = money / 100 * 550.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 501 && money <= 1000) {
		        	var profitDaily = money / 100 * 550.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 1001 && money <= 2000) {
		        	var profitDaily = money / 100 * 550.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 2001 && money <= 5000) {
		        	var profitDaily = money / 100 * 550.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 5001 && money <= 10000) {
		        	var profitDaily = money / 100 * 550.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10001 && money <= 50000) {
		        	var profitDaily = money / 100 * 550.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }  if (money >= 50001 && money <= 1000000) {
		        	var profitDaily = money / 100 * 550.00;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } 
		        break;
		    case 3:
		    	if( (money >= 10 && money <= 500)){
		        	var profitDaily = money / 100 *  950;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 501 && money <= 1000) {
		        	var profitDaily = money / 100 * 950;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 1001 && money <= 2000) {
		        	var profitDaily = money / 100 * 950;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 2001 && money <= 5000) {
		        	var profitDaily = money / 100 * 950;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 5001 && money <= 10000) {
		        	var profitDaily = money / 100 * 950;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10001 && money <= 50000) {
		        	var profitDaily = money / 100 * 950;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }  if (money >= 50001 && money <= 1000000) {
		        	var profitDaily = money / 100 *  950;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } 
		        break;
		    case 4:
		    	if( (money >= 10 && money <= 500)){
		        	var profitDaily = money / 100 *  1700;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10 && money <= 1000) {
		        	var profitDaily = money / 100 * 1700;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10 && money <= 2000) {
		        	var profitDaily = money / 100 * 1700;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10 && money <= 5000) {
		        	var profitDaily = money / 100 * 1700;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10 && money <= 10000) {
		        	var profitDaily = money / 100 * 1700;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } if (money >= 10 && money <= 50000) {
		        	var profitDaily = money / 100 * 1700;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }  if (money >= 10 && money <= 1000000) {
		        	var profitDaily = money / 100 *  1700;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        } 
		        break;
		    case 5:
		    	if( (money >= 10 && money <= 10000)){
		        	var profitDaily = money / 100 *  1500;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }
		        break;
		    case 6:
		    	if( (money >= 10 && money <= 25000)){
		        	var profitDaily = money / 100 *  2500;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }
		        break;
		    case 7:
		    	if( (money >= 10 && money <= 100000)){
		        	var profitDaily = money / 100 *  3500;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
		        }
		        break;
		}
	}
	if($("#money").length){
		calc();
	}
	$("#money").keyup(function(){
		calc();
	});

	$("#Ultra").on('change', function() {
		percent = parseFloat(this.value);
		calc();
	})
});
