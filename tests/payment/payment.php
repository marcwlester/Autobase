<?php
define('APPLICATION_ENV','staging');
include_once '../../bin/test.php';

$payment = Zend_Registry::get('Bz_Payment');

$card = new Bz_Payment_Request_Card(array(
	'name' => 'Test Tester',
	'number' => '5100000010001004',
	'cvv' => '123',
	'month' => 10,
	'year' => 2014,
	'id' => 'TESTTRNS-' . date('YmdGis'),
	));
$address = new Bz_Payment_Request_Address(array(
	'email' => 'marc@biz-zone.com',
	'firstName' => 'Marc',
	'lastName' => 'Lester',
	'phone' => '905-927-0015',
	'address1' => '2243 Stouffville Rd.',
	'city' => 'Gormley',
	'province' => 'ON',
	'postal' => 'L0H 1G0',
	'country' => 'CA',
	));

$result = $payment->sale(100.00, $card, array($address));

if ($result->isApproved()) {
	echo "passed\n";
} else {
	echo "failed\n";
	echo $result->getMessage() . "\n";
}
