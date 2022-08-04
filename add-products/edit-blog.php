<?php 

session_start();

if(isset($_REQUEST['edit-blog'])){

	$products = simplexml_load_file("../files/store-website.xml");

	foreach($products->product as $product){

		if($product->product_id == $_POST['product-id']){

			$product->product_name = $_POST['product-name'];
			$product->product_date = $_POST['product-date'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents("../files/store-website.xml", $products->asXML());
	$_SESSION['message'] = "Blog Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select blog to edit first";
	header("location: index.php");
}

?>