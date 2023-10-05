<?php
// echo '<a href="/">home</a>';
//test
if ( is_page('bread-list') ) {
	include 'bread-list.php';
}


if ( is_singular("bread") ) {
	include 'bread-detail.php';
}