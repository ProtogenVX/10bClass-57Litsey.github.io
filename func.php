<?php
$images=array(
array("file"=>"images/gallery/img (2).jpg", "desc"=>""),
array("file"=>"images/gallery/img (3).jpg", "desc"=>""),
array("file"=>"images/gallery/img (4).jpg", "desc"=>""),
array("file"=>"images/gallery/img (5).jpg", "desc"=>""),
array("file"=>"images/gallery/img (6).jpg", "desc"=>""),
array("file"=>"images/gallery/img (7).jpg", "desc"=>""),
array("file"=>"images/gallery/img (8).jpg", "desc"=>""),
array("file"=>"images/gallery/img (9).jpg", "desc"=>""),
array("file"=>"images/gallery/img (10).jpg", "desc"=>""),
array("file"=>"images/gallery/img (11).jpg", "desc"=>""),
array("file"=>"images/gallery/img (12).jpg", "desc"=>""),
array("file"=>"images/gallery/img (13).jpg", "desc"=>""),
array("file"=>"images/gallery/img (14).jpg", "desc"=>""),
array("file"=>"images/gallery/img (15).jpg", "desc"=>""),
array("file"=>"images/gallery/img (16).jpg", "desc"=>""),
array("file"=>"images/gallery/img (17).jpg", "desc"=>""),
array("file"=>"images/gallery/img (18).jpg", "desc"=>""),
array("file"=>"images/gallery/img (19).jpg", "desc"=>""),
array("file"=>"images/gallery/img (20).jpg", "desc"=>""),
array("file"=>"images/gallery/img (21).jpg", "desc"=>""),
array("file"=>"images/gallery/img (22).jpg", "desc"=>""),
array("file"=>"images/gallery/img (23).jpg", "desc"=>""),
array("file"=>"images/gallery/img (24).jpg", "desc"=>""),
array("file"=>"images/gallery/img (25).jpg", "desc"=>""),
array("file"=>"images/gallery/img (26).jpg", "desc"=>""),
array("file"=>"images/gallery/img (27).jpg", "desc"=>""),
array("file"=>"images/gallery/img (28).jpg", "desc"=>""),
array("file"=>"images/gallery/img (29).jpg", "desc"=>""),
array("file"=>"images/gallery/img (30).jpg", "desc"=>""),
array("file"=>"images/gallery/img (31).jpg", "desc"=>""),
array("file"=>"images/gallery/img (32).jpg", "desc"=>""),
array("file"=>"images/gallery/img (33).jpg", "desc"=>""),
array("file"=>"images/gallery/img (34).jpg", "desc"=>""),
array("file"=>"images/gallery/img (35).jpg", "desc"=>""),
array("file"=>"images/gallery/img (36).jpg", "desc"=>""),
array("file"=>"images/gallery/img (37).jpg", "desc"=>""),
array("file"=>"images/gallery/img (38).jpg", "desc"=>""),
array("file"=>"images/gallery/img (39).jpg", "desc"=>""),
array("file"=>"images/gallery/img (40).jpg", "desc"=>""),
array("file"=>"images/gallery/img (41).jpg", "desc"=>""),
array("file"=>"images/gallery/img (42).jpg", "desc"=>"")
 );
$items="";
$gallery_item_tpl=file_get_contents("templates\gallery.item.tpl");
$search=array("[%item.file%]", "[%item.text%]");
for($i=0; $i<count($images); $i++) {
$replace=array($images[$i]['file'], $images[$i]['desc']);
$items=str_replace($search, $replace, $gallery_item_tpl);
$gallery_tpl=file_get_contents("templates\gallery.tpl");
$gallery=str_replace("{%items%}", $items, $gallery_tpl);
echo($gallery);}
?>