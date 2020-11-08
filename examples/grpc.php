<?php

use Grpc\ChannelCredentials;
use Temporal\Api\Common\V1\WorkflowType;
use Temporal\Api\Taskqueue\V1\TaskQueue;
use Temporal\Api\Workflowservice\V1\GetClusterInfoRequest;
use Temporal\Api\Workflowservice\V1\ListNamespacesRequest;
use Temporal\Api\Workflowservice\V1\StartWorkflowExecutionRequest;
use Temporal\Api\WorkflowServiceClient;

require dirname(__DIR__).'/vendor/autoload.php';

$client = new WorkflowServiceClient('127.0.0.1:7233', [
    'credentials' => ChannelCredentials::createInsecure(),
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

echo 'Starting workflow : '.$client->StartWorkflowExecution($request)->wait()[0]->getRunId();
