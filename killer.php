<?php
function get_copyright()
{
	return "Copyright © \033[32m" . date('Y') . "\033[0m by \033[32mDope Creator\033[0m. All Rights Reserved!";
}
echo "\n\033[96mPHP cPanel Killer [ACCURATE MASS CPANEL TOOLS]\033[0m\n\n\033[41mTools List:\033[0m\n\n1. Mass cPanel Checker\n2. Mass cPanel To Shell\n3. Mass cPanel To WHM Checker [ROOT]\n4. Mass cPanel To WHM Checker [RESELLER]\n\n\033[44mNote:\033[0m Insert Tool Number To Run The Tool\n\n";
echo get_copyright()."\n\n";
$pok=readline('Enter Tools Number: ');
if ($pok=='1') {
	include 'inc/H8uYYn';
}
if ($pok=='2') {
	include 'inc/uC47kC';
}
if ($pok=='3') {
	include 'inc/EA7kEe';
}
if ($pok=='4') {
	include 'inc/FyG3s3';
}
?>