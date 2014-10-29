<?php

/*
 * Authors: Doug Lawrie and Alan Glennon
 * Data: NOVA Campolide Campus, Portugal
 * Date: 19 November 2013
 * MIT License
 */
 
  // the files Dijkstra.php, network.php, pather.php, and PriorityQueue.php all go together.
 // run via pather.php?start=A&end=B
 // or something like that.
 
 
include 'oldfashioned.php';
require("Dijkstra.php");

function runTest() {
	$g = new Graph();
	// from - to nodes; distance in meters
	$g->addedge("A","H",275.4);
	$g->addedge("A","F",308.2);
	$g->addedge("A","C",189.9);
	$g->addedge("A","B",401.5);
	$g->addedge("A","J",307.1);
	$g->addedge("A","D",332.6);
	$g->addedge("A","I",98.3);
	$g->addedge("B","C",283.2);
	$g->addedge("B","D",108.6);
	$g->addedge("B","F",363.6);
	$g->addedge("B","H",197.3);
	$g->addedge("C","A",189.9);
	$g->addedge("C","B",283.2);
	$g->addedge("C","D",310.1);
	$g->addedge("C","F",117.3);
	$g->addedge("D","A",332.6);
	$g->addedge("D","B",108.6);
	$g->addedge("D","C",310.1);
	$g->addedge("D","F",390.6);
	$g->addedge("B","J",107.5);
	$g->addedge("B","I",313.1);
	$g->addedge("C","I",138.3);
	$g->addedge("C","J",285.2);
	$g->addedge("D","H",224.3);
	$g->addedge("D","I",241.7);
	$g->addedge("D","J",56.9);
	$g->addedge("E","F",72.8);
	$g->addedge("F","A",308.2);
	$g->addedge("F","B",363.6);
	$g->addedge("F","C",117.3);
	$g->addedge("F","D",390.6);
	$g->addedge("F","E",72.8);
	$g->addedge("F","G",60.6);
	$g->addedge("F","H",27.2);
	$g->addedge("F","I",256.6);
	$g->addedge("F","J",365.7);
	$g->addedge("G","F",60.6);
	$g->addedge("G","H",66.0);
	$g->addedge("H","A",275.4);
	$g->addedge("H","B",197.3);
	$g->addedge("H","C",107.3);
	$g->addedge("H","D",224.3);
	$g->addedge("H","F",27.2);
	$g->addedge("H","G",66.0);
	$g->addedge("H","I",223.8);
	$g->addedge("H","J",199.4);
	$g->addedge("I","A",98.3);
	$g->addedge("I","B",313.1);
	$g->addedge("I","C",138.3);
	$g->addedge("I","D",241.7);
	$g->addedge("I","F",256.6);
	$g->addedge("I","H",223.8);
	$g->addedge("I","J",226.3);
	$g->addedge("J","A",307.1);
	$g->addedge("J","B",107.5);
	$g->addedge("J","C",285.2);
	$g->addedge("J","D",56.9);
	$g->addedge("J","F",365.7);
	$g->addedge("J","H",199.4);
	$g->addedge("J","I",226.3);
	
	$startingplace = ($_GET["start"]);
	$endingplace = ($_GET["end"]);

	
	list($distances, $prev) = $g->paths_from($startingplace);
	
	
	$path = $g->paths_to($prev, $endingplace);
	
	return $path;


	
}


$newpath = runTest();

?>


<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>NOVA Campus Routing</title>
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.css' rel='stylesheet' />
<style>
  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }
</style>
</head>
<body>
<div id='map'></div>
<script>
L.mapbox.accessToken = 'add your own';
var geojson = [

{"geometry":{"coordinates":[-9.15960967540741,38.73336413693001],"type":"Point"},"properties":{"description":"","id":"marker-i1t019sc9","marker-color":"#1087bf","marker-size":"medium","marker-symbol":"c","title":""},"type":"Feature"},{"geometry":{"coordinates":[-9.161900281906128,38.73316327579383],"type":"Point"},"properties":{"description":"","id":"marker-i1sz0tft0","marker-color":"#1087bf","marker-size":"medium","marker-symbol":"d","title":""},"type":"Feature"},{"geometry":{"coordinates":[-9.160312414169312,38.73461113717905],"type":"Point"},"properties":{"description":"","id":"marker-i1sz2t331","marker-color":"#1087bf","marker-size":"medium","marker-symbol":"a","title":""},"type":"Feature"},{"geometry":{"coordinates":[-9.161664247512817,38.732569058292306],"type":"Point"},"properties":{"description":"","id":"marker-i1sz3a502","marker-color":"#1087bf","marker-size":"medium","marker-symbol":"b","title":""},"type":"Feature"},{"geometry":{"coordinates":[-9.159915447235107,38.73235982560103],"type":"Point"},"properties":{"description":"","id":"marker-i1sz3pxk3","marker-color":"#1087bf","marker-size":"medium","marker-symbol":"g","title":""},"type":"Feature"},{"geometry":{"coordinates":[-9.159314632415771,38.73276155182703],"type":"Point"},"properties":{"description":"","id":"marker-i1sz411y4","marker-color":"#1087bf","marker-size":"medium","marker-symbol":"e","title":""},"type":"Feature"},{"geometry":{"coordinates":[-9.160441160202025,38.73394997868446],"type":"Point"},"properties":{"description":"","id":"marker-i1sz4mah5","marker-color":"#1087bf","marker-size":"medium","marker-symbol":"i","title":""},"type":"Feature"},{"geometry":{"coordinates":[-9.161320924758911,38.73330555249031],"type":"Point"},"properties":{"description":"","id":"marker-i1sz4zfl6","marker-color":"#1087bf","marker-size":"medium","marker-symbol":"j","title":""},"type":"Feature"},{"geometry":{"coordinates":[-9.159979820251465,38.732815952079775],"type":"Point"},"properties":{"description":"","id":"marker-i1sz7jib7","marker-color":"#1087bf","marker-size":"medium","marker-symbol":"f","title":""},"type":"Feature"},


<?php

	$numberofvertices = count($newpath);
	// note, number of vertex-to-vertex paths will be this number minus 1
	
	$summation = 0;
	
	for ($i = 0; $i < ($numberofvertices-1); $i++) {
		// echo "reach: ".$newpath[$i].$newpath[($i+1)]." is ".$mynetwork[$newpath[$i].$newpath[($i+1)]]." meters<br />";
		$trythis = $newpath[$i].$newpath[($i+1)];
		$trythisnow = ${$trythis.$var};
		echo $trythisnow;
		if ($i < ($numberofvertices-2)) {
			echo ",";
		}
		// $summation = $summation + $mynetwork[$newpath[$i].$newpath[($i+1)]];
	}


?>

];


L.mapbox.map('map', 'add you own here too')
   .setView([38.7335, -9.160], 20)
   .featureLayer.setGeoJSON(geojson);



	

   


  
</script>
</body>
</html>