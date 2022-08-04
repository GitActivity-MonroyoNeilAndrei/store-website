<?php 

session_start();
$id = $_REQUEST['product_id'];

$products = simplexml_load_file('../files/store-website.xml');

//create an iterator
$index = 0;
$i = 0;

foreach($products->product as $product){

//remove if the ID matches
	if($product->product_id = $id){
		$index = $i;
		break;
	}
	$i++;
}


unset($products->product[$index]);
file_put_contents('../files/store-website.xml',$products->asXML());

$_SESSION['message'] = 'Blog Successfully Deleted';
header("location:index.php");

?>