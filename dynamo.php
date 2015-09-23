<?php

require_once('aws.phar');

use Aws\Common\Aws;
//use Aws\DynamoDb\DynamoDbClient;
//use Aws\DynamoDb\Exception\DynamoDbException;

//作成済みのconfig.phpを使って$clientの生成
$aws = Aws::factory('config.php');
$client = $aws->get('dynamodb');
$result = $client->listTables();

var_export($result);
