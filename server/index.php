<?php
Get a list of all the images in the subdirectory 'images/'
$images = glob('images/*.png');
// select one
$name = $images[rand(0, count($images) - 1)];

// open the image
$fp = fopen($name, 'rb');

// send the relevant headers
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

// dump the  contents of the file and stop the script
fpassthru($fp);
exit;
?>
