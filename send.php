<?php
// Reference taken from: https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-sns-2010-03-31.html#publish
// Additional Reference:
require 'vendor/autoload.php';
use Aws\Sns\SnsClient;
// Instantiate the client with your AWS access keys
// Create a new Amazon SNS client
// Make sure the region you enter does have support for sending SMS text messages directly
$sns = SnsClient::factory(array(
    'region' => 'AWS_REGION',
    'version' => 'latest',
    'credentials' => [
        'key'    => 'AWS_KEY',
        'secret' => 'AWS_SECRET'
    ]
    ));

//this variable to be used for attributes with each message that youd want to send out
$msgattributes = [
    'AWS.SNS.SMS.SenderID' => [
        'DataType' => 'String',
        'StringValue' => 'mySenderID',
    ],
    'AWS.SNS.SMS.SMSType' => [
        'DataType' => 'String',
        'StringValue' => 'Transactional',
    ]
];

$payload = array(
	'Message' => 'AWS SNS Send Message directly to mobile phone',
	'PhoneNumber' => '+91xxxxxxxxxx',
	'MessageAttributes' => $msgattributes
);

var_dump($payload);
try {
    echo "\nConfiguration Response:\n";

    echo "\nPublish Response:\n";

    $result=$sns->publish($payload);

	var_dump($result);

    echo "\nMessage Published Succesfully !! Check your mobile device for the message\n";
	
} catch ( Exception $e ) {
    echo "Send Failed!\n" . $e->getMessage();
}
?>
