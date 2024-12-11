<?php
//This code will be used when system is designed to get the number and message to be sent from the users
use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

//GET MESSAGE AND NUMBER
$number = $_POST["number"];
$message = $_POST["message"];


    $base_url = "8kr999.api.infobip.com";
    $api_key = "97873a4884b6989ecf279feb5c830cb6-80470472-e3a6-4113-9638-b6af47b372b8";

    $configuration = new Configuration(host: $base_url, apiKey: $api_key);

    $api = new SmsApi(config: $configuration);

    $destination = new SmsDestination(to: $number);

    
    $message = new SmsTextualMessage(
        destinations: [$destination],
        text: $message,
        from: "ServiceSMS"
    );

    $request = new SmsAdvancedTextualRequest(messages: [$message]);

    $response = $api->sendSmsMessage($request);
   
    echo "Message sent.";


   