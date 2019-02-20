$(document).ready(function() {
	$('.item-block').on('click', '.enable', function() {
		var id = $(this).attr("data-id");
		var ac = $(this).text();
		alert(id+' '+ac);
		var url = '/brands/enable.php';
		$.get(url+'?id='+id, function(data){

		});
	});

	$('.item-block').on('click', '.disable', function() {
		var id = $(this).attr("data-id");
		var ac = $(this).text();
		alert(id+' '+ac);
		var url = '/brands/disable.php';
		$.get(url+'?id='+id, function(data){

		});
	});

	// if ('[data-status="1"]') {
	// 	$(".wrapper-brands .results .item-block").removeClass("status-disable");
	// 	$(".wrapper-brands .results .item-block").addClass("status-enable");
	// }
	// if ('[data-status="0"]') {
	// 	$(".wrapper-brands .results .item-block").removeClass("status-enable");
	// 	$(".wrapper-brands .results .item-block").addClass("status-disable");
	// }

	// function bgDisable() {
	// 	if ('.wrapper-brands .results .item-block[data-status="0"]') {
	// 			$(this).removeClass("status-enable");
	// 			$(this).addClass("status-disable");
	// 	}
	// }
	// bgDisable();

	// function bgEnable() {
	// 	if ('.wrapper-brands .results .item-block[data-status="1"]') {
	// 			$(this).removeClass("status-disable");
	// 			$(this).addClass("status-enable");
	// 		}
	// 	}
	// bgEnable();


	// var disable = $(".wrapper-brands .results .item-block").data("status", "0");
	// if ((disable).length) {
	// 	$(this).addClass("status-disable")
	// 	console.log("status = 0");
	// }


	$(".wrapper-brands .results .item-block .enable").on("click", function(){
		if (".wrapper-brands .results .item-block.status-enable") {
			$(this).removeClass("status-enable");
		}
		$(this).parent(".wrapper-brands .results").find(".item-block").removeClass("status-disable");
		$(this).parent().addClass("status-enable");
	});

	$(".wrapper-brands .results .item-block .disable").on("click", function(){
		if (".wrapper-brands .results .item-block.status-disable") {
			$(this).removeClass("status-disable");
		}
		$(this).parent(".wrapper-brands .results").find(".item-block").removeClass("status-enable");
		$(this).parent().addClass("status-disable");
	});




});