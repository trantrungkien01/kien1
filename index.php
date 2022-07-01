<?php
include("includes/config.php");
include("includes/function.php");
include("modules/header/header.php");
include("modules/left/left.php");
if (isset($_GET['mod'])) {
	$module = $_GET['mod'];
	switch ($module) {
		case "news":
			include("modules/news/news.php");
			break;
		case "about":
			include("modules/about/about.php");
			break;
		case "product":
			include("modules/product/product.php");
			break;
		case "contact":
			include("modules/contact/contact.php");
			break;
		case "search":
			include("modules/search/search.php");
			break;
		default:
			include("modules/home/home.php");
			break;
	}
} else {
	include("modules/home/home.php");
}
include("modules/right/right.php");
include("modules/footer/footer.php");