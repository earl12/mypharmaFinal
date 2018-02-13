<?php 
namespace App\Core\Api ; 


class InitializeChikka{
	
	public function messageReceiver (){ 
		try
		{
			$message_type = $_POST["message_type"];
		}
		catch (Exception $e)
		{
			echo "Error";
			exit(0);
		}

		if (strtoupper($message_type) == "INCOMING")
		{
			try
			{
				$message = $_POST["message"];
				$mobile_number = $_POST["mobile_number"];
				$shortcode = $_POST["shortcode"];
				$timestamp = $_POST["timestamp"];
				$request_id = $_POST["request_id"];

				echo "Accepted";
				exit(0);
			}
			catch (Exception $e)
			{
				echo "Error";
				exit(0);
			}
		}
		else
		{
			echo "Error";
			exit(0);
		}
	}


	public function messageSender($request){ 
		$arr_post_body = array(
			"message_type" => "SEND",
			"mobile_number" => $request->mobile_number
			"shortcode" => '29290 45485'
			"message_id" => uniqid(),
			"message" => urlencode("Your Parcel of Medicine is ready for delivery tomorrow!"),
			"client_id" => "63a07c71a6eabbb9bcd28321c1f5ccd08046be8dd6a6151c8663e5716ec17694",
			"secret_key" => "202ee4438b62ada004032b6ecf9c5d648118a4920707907d0817e0d01501514b"
		);

		$query_string = "";
		foreach($arr_post_body as $key => $frow)
		{
			$query_string .= '&'.$key.'='.$frow;
		}

		$URL = "https://post.chikka.com/smsapi/request";

		$curl_handler = curl_init();
		curl_setopt($curl_handler, CURLOPT_URL, $URL);
		curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
		curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $query_string);
		curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
		$response = curl_exec($curl_handler);
		curl_close($curl_handler);

		exit(0);

	}




	public function notificationReceiver(){
		try
		{
			$message_type = $_POST["message_type"];
		}
		catch (Exception $e)
		{
			echo "Error: ".$e->getMessage();
			exit(0);
		}

		if (strtoupper($message_type) == "OUTGOING")
		{
			try
			{
            // Retrieve the parameters from the body
				$message_id = $_POST["message_id"];
				$mobile_number = $_POST["mobile_number"];
				$shortcode = $_POST["shortcode"];
				$status = $_POST["status"];
				$timestamp = $_POST["timestamp"];
				$credits_cost = $_POST["credits_cost"];

				echo "Accepted";
				exit(0);
			}
			catch (Exception $e)
			{
				echo "Error";
				exit(0);
			}
		}
		else
		{
			echo "Error";
			exit(0);
		}
	}

}