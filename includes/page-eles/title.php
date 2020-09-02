<?php
$section = '-1';
if (isset($_GET['section'] )){
		$section = $_GET['section'];
}

if ($section == 'about'){
	$sec_title = 'About Flywing';
}else if ($section == 'pro'){
	$sec_title = 'Professional';
}else if ($section == 'art'){
	$sec_title = 'Art';
}else if ($section == 'print'){
	$sec_title = 'Print';
}else if ($section == 'contact'){
	$sec_title = 'Contact Us';
}else if ($section == 'cc'){
	$sec_title = 'Carolina Country Magazine';
}else{
	$sec_title = 'Home';
}

$site_title = 'Flywing Designs';
$title_separator = ': ';

echo $site_title.$title_separator.$sec_title;
