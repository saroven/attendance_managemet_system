
function nav_highlight(mother_id, child_id){
	$(".nav").removeClass('active');
	$("#"+mother_id).addClass('active');
	$("#"+child_id).addClass('active');
}


function nav_highlight_fn(father_id, mother_id, child_id){
	$(".nav").removeClass('active');
	$("#"+father_id).addClass('active');
	$("#"+mother_id).addClass('active');
	$("#"+child_id).addClass('active');
}