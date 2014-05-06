<?php
/**
 * Created by PhpStorm.
 * User: mielke
 * Date: 30.04.14
 * Time: 13:42
 */

$client = new SoapClient("https://www.hsw-elearning.de/webservice/soap/server.php?wsdl");
$sid = $client->login('baw_06','','');

$xml = '<?xml version="1.0" encoding="UTF-8"?> <Mail><To name="" /><Cc name="" /><Bcc name="" /><Subject>Hallo</Subject><Message><P>...</P></Message></Mail>';

$client->distributeMails($sid ,$xml);