<?php
function create_thumbnail($path, $destination_path){
	$info = getimagesize($path);
	$oldwidth = $info[0];
	$oldheight = $info[1];
	$newwidth = $info[0] / 3;
	$newheight = $info[1] / 3;
	if ($info['mime'] == 'image/png') {
		$src = imagecreatefrompng($path);
		$destination_resource=imagecreatetruecolor($newwidth, $newheight);
		imagealphablending($destination_resource, false);
		imagesavealpha($destination_resource, true);
		imagecopyresampled($destination_resource, $src, 0, 0, 0, 0, $newwidth, $newheight, $oldwidth, $oldheight);
		imagepng($destination_resource, $destination_path);
	}
}
?>