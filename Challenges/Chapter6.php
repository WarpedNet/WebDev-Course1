<?php
	// Array copy and pasted from chptr 5
	$subscriptionData = array(
	    "id" => "sub_1NiGuB2eZ",
	    "object" => "subscription",
	    "items" => array(
	        "object" => "list",
	        "data" => array(
	            array(
	                "id" => "si_OVHTBQE",
	                "object" => "subscription_item",
	                "price" => array(
	                    "id" => "plan_OUwcmF6",
	                    "object" => "price",
	                    "amount" => 24.99,
	                    "currency" => "USD",
	                ),
	            ),
	        ),
	    ),
	);

	echo json_encode($subscriptionData);
?>