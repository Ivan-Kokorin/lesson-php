<?php
function create_thumbnail($path, $destination_path){
	$info = getimagesize($path);
	$oldwidth = $info[0];
	$oldheight = $info[1];
	$newheight = $info[1] / 3;
	$newwidth = $info[0] / 3;
	
	if ($info['mime'] == 'image/png') {
		$src = imagecreatefrompng($path);
		$destination_resource = imagecreatetruecolor($newwidth, $newheight);
		imagealphablending($destination_resource, false);
		imagesavealpha($destination_resource, true);
		imagecopyresampled($destination_resource, $src, 0, 0, 0, 0, $newwidth, $newheight, $oldwidth, $oldheight);
		return imagepng($destination_resource, $destination_path);
	}elseif ($info["mime"] == 'image/jpeg' || $info['mime'] == 'image/jpg') {
		$src = imagecreatefromjpeg($path);
		$destination_resource = imagecreatetruecolor($newwidth, $newheight);
		imagecopyresampled($destination_resource, $src, 0, 0, 0, 0, $newwidth, $newheight, $oldwidth, $oldheight);
		return imagejpeg($destination_resource, $destination_path);
	}elseif ($info["mime"] == 'image/gif'){
		$src = imagecreatefromgif($path);
		$destination_resource = imagecreatetruecolor($newwidth, $newheight);
		$transparent_source_index=imagecolortransparent($src);
		if($transparent_source_index!==-1){
			$transparent_color=imagecolorsforindex($src, $transparent_source_index);
			$transparent_destination_index=imagecolorallocate($destination_resource, $transparent_color['red'], $transparent_color['green'], $transparent_color['blue']);
			imagecolortransparent($destination_resource, $transparent_destination_index);
			imagefill($destination_resource, 0, 0, $transparent_destination_index);
		}
		imagecopyresampled($destination_resource, $src, 0, 0, 0, 0, $newwidth, $newheight, $oldwidth, $oldheight);
		return imagegif($destination_resource, $destination_path);
	}
}
?>