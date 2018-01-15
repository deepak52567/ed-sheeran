<?php
$id = "iKzRIweSBLA"; 
$content = file_get_contents("http://youtube.com/get_video_info?video_id=".$id);
parse_str($content, $ytarr);
echo $ytarr['title'];
?>