$(function () {
	var kb_term = ["one_w","two_w","three_w","four_w","five_w",
					"six_w","seven_w","eight_w","nine_w","ten_w",
					"eleven_w","twelve_w","thirteen_w","fourteen_w","fifteen_w",
					"sixteen_w","seventeen_w","eighteen_w","nineteen_w","twenty_w"];
	
	for(i=0;i<kb_term.length;i++){
		$('#week div').get(i).setAttribute('value' , kb_term[i]);
	}



	$('#week div').click(function(){
		var value = $(this).attr('value');
		$('caption h1').html("第"+$(this).html()+"周空课表");
		$.ajax({
			url : "dbFind.php",
			type : "POST",
			cache : false,
			data : {kb_term : value},
			success : function (data) {
				var arr = data.split('<br>');
				arr.pop();
				for(i=0;i<arr.length;i++){
				var r = i%4;
				var c = Math.floor(i/4)+1;
				$('#table_main').get(0).tBodies[0].rows[r].cells[c].innerHTML = arr[i];
				}
			}
		});
	});
	
});