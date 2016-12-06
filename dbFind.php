<?php
$mongo = new MongoClient();
$db = $mongo->wyd;
$collection = $db->test2;

/*$kb_term = ["one_w","two_w","three_w","four_w","five_w",
			"six_w","seven_w","eight_w","nine_w","ten_w",
			"eleven_w","twelve_w","thirteen_w","fourteen_w","fifteen_w",
			"sixteen_w","seventeen_w","eighteen_w","nineteen_w","twenty_w"];*/
$kb_term = $_POST['kb_term'];
$kb_week = ["Mon","Tues","Wed","Thur","Fri"];

$kb_class = ["first","second","thrid","fourth"];

$cursor = $collection -> find();

for($i=0;$i<count($kb_week);$i++){
	for($j=0;$j<count($kb_class);$j++){
		foreach($cursor as $document){
			if($document[$kb_term][$kb_week[$i]][$kb_class[$j]]){
				echo $document["name"]." ";
			}
		}
		echo "<br>";
	}
}
