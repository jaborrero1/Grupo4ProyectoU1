<?php session_start();

$action_type = $_GET['action_type'];
if($action_type=='add_item')
{
	$id = $_GET['id'];
	$product_name = $_GET['product_name']; # nombre del producto
	$quantity = $_GET['quantity']; #cantidad 
	$price = $_GET['price'];

	$product_arr = array(
		'id'=>$id,
		'product_name'=>$product_name,
		'quantity'=>$quantity,
		'price'=>$price,
	);

	if(!empty($_SESSION['cart']))
	{
		$product_ids = array_column($_SESSION['cart'], 'id');
		if(in_array($id, $product_ids))
		{
			foreach($_SESSION['cart'] as $key => $val)
			{
				if($_SESSION['cart'][$key]['id']==$id)
				{
					$_SESSION['cart'][$key]['quantity'] = $_SESSION['cart'][$key]['quantity'] + $quantity;
				}
				
			}
			
		}
		else
		{
			$_SESSION['cart'][] = $product_arr;
		}
	}
	else
	{
		$_SESSION['cart'][] = $product_arr;
	}
	header("location:index.php");

}
if($action_type=='remove_item')
{
	$index = $_GET['index'];
	if(isset($_SESSION['cart']))
	{
		unset($_SESSION['cart'][$index]);
		header("location:index.php");
	}

}


?>