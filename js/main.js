// $('.enable[data-id="'+id+'"]').click(function() {
// 	console.log("hi");
//     $.get('../brands/enable.php', function(data){
//        $('body').append(data);
//     });
// });



// $('.disable[data-id="'+id+'"]').click(function(){
// 	console.log("hi");
//     $.get('../brands/disable.php', function(data){
//        $('body').append(data);
//     })
// });



// $(".enable[data-id='+id+']").on("click", function(){
// 	console.log("hi");
// 	$.get('../brands/enable.php', function(data){
// 	   // $('body').append(data);
// 	});
// });

// $(".disable[data-id]").on("click", function(){
// 	console.log("hi");
// 	$.get('../brands/enable.php', function(data){
// 	   // $('body').append(data);
// 	});
// });

$('.item-block').on('click', '.enable', function() {
	var id = $(this).attr("data-id");
	var ac = $(this).text();
	alert(id+' '+ac);
	var url = '/brands/disable.php';
	$.get('/brands/enable.php', function(data){
	 	
	});
});


$('.item-block').on('click', '.disable', function() {
	var id = $(this).attr("data-id");
	var ac = $(this).text();
	alert(id+' '+ac);
	var url = '/brands/disable.php';
	// var get = "?$_GET['id']";
	$.get(url+'?id='+id, function(data){

	});
});