<?php 

session_start();

if (isset($_REQUEST['publishProduct'])){

    $products = simplexml_load_file('../files/store-website.xml');

    $product = $products->addChild('product');

	$product->addChild('product_id', $_REQUEST['product-id']);
	$product->addChild('product_name', $_REQUEST['product-name']);
	$product->addChild('product_date', $_REQUEST['product-date']);

    $dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($products->asXML());
	$dom->save('../files/store-website.xml');

    $_SESSION['message'] = "Blog Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}

?>















