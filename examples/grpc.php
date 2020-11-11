<?php

use Grpc\ChannelCredentials;
use Temporal\Api\Common\V1\WorkflowType;
use Temporal\Api\Taskqueue\V1\TaskQueue;
use Temporal\Api\Workflowservice\V1\GetClusterInfoRequest;
use Temporal\Api\Workflowservice\V1\ListNamespacesRequest;
use Temporal\Api\Workflowservice\V1\StartWorkflowExecutionRequest;
use Temporal\Api\WorkflowServiceClient;


require dirname(__DIR__).'/vendor/autoload.php';

//$pemPrivateKey = <<<EOF
//-----BEGIN PRIVATE KEY-----
//MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCzXHcqf0Z89tRZ
//uALlfH3HMdHk1PMMZWcz7ZE=
//-----END PRIVATE KEY-----
//EOF;

$client = new WorkflowServiceClient('127.0.0.1:7233', [
    'credentials' => ChannelCredentials::createInsecure(),
    // or if your server is secure
    // 'credentials' => ChannelCredentials::createSsl(null, $pemPrivateKey, $pemPublicKey),
]);

echo "Let's call Temporal server\n";

echo 'temporal Server version is : '.$client->GetClusterInfo(new GetClusterInfoRequest())->wait()[0]->getServerVersion().PHP_EOL;

foreach ($client->ListNamespaces(new ListNamespacesRequest())->wait()[0]->getNamespaces()->getIterator() as $v) {
    echo 'listing namespace: '.$v->getNamespaceInfo()->getName().PHP_EOL;
}

$request = new StartWorkflowExecutionRequest();
$request
    ->setRequestId('requestId')
    ->setWorkflowId('workflowId')
    ->setTaskQueue((new TaskQueue())->setName('taskQueue'))
    ->setNamespace('default')
    ->setWorkflowType((new WorkflowType())->setName('workflowTypeName'));

// set input if workflow has some.
// Temporal input must have a metadata header 'encoding'
// Temporal inputs are ordered from the workflow, be sure to set the right input order.
// Temporal json inputs are automatically decoded into the class object if needed
//
//$payloads = new \Temporal\Api\Common\V1\Payloads();
//$payloads->setPayloads([
//    (new \Temporal\Api\Common\V1\Payload())->setMetadata(["encoding" => "json/plain"])->setData('{"id": "value"}'),
//]);
//$request->setInput($payloads);

echo 'Starting workflow : '.$client->StartWorkflowExecution($request)->wait()[0]->getRunId();
