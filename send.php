<?php
use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

if (isset($_GET["submit"]) && $_GET["submit"] == "true") {
   //message to be sent
    $message = "Someone just applied for a job through the company's website. Be sure to check out whether they're a good fit for the role they are applying for.";
    
    //numbers of the recipients
    $recipients = [
        "+254706852085",
       "+254796811747",
       "+254724177517",
       "254705121813",
    ];

    $base_url = "8kr999.api.infobip.com";
    $api_key = "97873a4884b6989ecf279feb5c830cb6-80470472-e3a6-4113-9638-b6af47b372b8";

    $configuration = new Configuration(host: $base_url, apiKey: $api_key);
    $api = new SmsApi(config: $configuration);

    $destinations = [];
    foreach ($recipients as $recipient) {
        $destinations[] = new SmsDestination(to: $recipient);
    }

    $smsMessage = new SmsTextualMessage(
        destinations: $destinations,
        text: $message,
        from: "ServiceSMS"
    );

    $request = new SmsAdvancedTextualRequest(messages: [$smsMessage]);

    try {
        $response = $api->sendSmsMessage($request);
        echo "Thank you for applying. Your application has been received. Expect feedback within the next 2 business days!";
    } catch (Exception $e) {
        echo "Error sending message: " . $e->getMessage();
    }
}
?>
