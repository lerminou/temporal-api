<?php

/*
 * Copyright (C) 2020-2021 Nehs-Digital
 *
 * This file is part of Nexus-Platform package.
 *
 * This software and source code is the confidential and proprietary
 * information of Nehs Digital ("Confidential Information").  You shall not
 * disclose such Confidential Information and shall use it only in
 * accordance with the terms of the license agreement you entered
 * into with Nehs Digital.
 *
 * This software and source code is provided as is and Nehs Digital is not
 * liable of any damage that might occur by using this software.
 */

// source: temporal/api/workflowservice/v1/service.proto

namespace Temporal\Api\Workflowservice\V1;

/**
 * WorkflowService API is exposed to provide support for long running applications.  Application is expected to call
 *  StartWorkflowExecution to create an instance for each instance of long running workflow.  Such applications are expected
 *  to have a worker which regularly polls for WorkflowTask and ActivityTask from the WorkflowService.  For each
 *  WorkflowTask, application is expected to process the history of events for that session and respond back with next
 *  commands.  For each ActivityTask, application is expected to execute the actual logic for that task and respond back
 *  with completion or failure.  Worker is expected to regularly heartbeat while activity task is running.
 */
final class WorkflowServiceServiceStub implements WorkflowServiceService
{
    use \Lv\Grpc\CurlStubTrait;

    /**
     * RegisterNamespace creates a new namespace which can be used as a container for all resources.  Namespace is a top level
     *  entity within Temporal, used as a container for all resources like workflow executions, task queues, etc.  Namespace
     *  acts as a sandbox and provides isolation for all resources within the namespace.  All resources belongs to exactly one
     *  namespace.
     */
    public function RegisterNamespace(\Temporal\Api\Workflowservice\V1\RegisterNamespaceRequest $request): \Temporal\Api\Workflowservice\V1\RegisterNamespaceResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RegisterNamespaceResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RegisterNamespace', $request, $reply);

        return $reply;
    }

    /**
     * DescribeNamespace returns the information and configuration for a registered namespace.
     */
    public function DescribeNamespace(\Temporal\Api\Workflowservice\V1\DescribeNamespaceRequest $request): \Temporal\Api\Workflowservice\V1\DescribeNamespaceResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\DescribeNamespaceResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/DescribeNamespace', $request, $reply);

        return $reply;
    }

    /**
     * ListNamespaces returns the information and configuration for all namespaces.
     */
    public function ListNamespaces(\Temporal\Api\Workflowservice\V1\ListNamespacesRequest $request): \Temporal\Api\Workflowservice\V1\ListNamespacesResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\ListNamespacesResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/ListNamespaces', $request, $reply);

        return $reply;
    }

    /**
     * (-- api-linter: core::0134::method-signature=disabled
     *      aip.dev/not-precedent: UpdateNamespace RPC doesn't follow Google API format. --)
     *  (-- api-linter: core::0134::response-message-name=disabled
     *      aip.dev/not-precedent: UpdateNamespace RPC doesn't follow Google API format. --)
     *  UpdateNamespace is used to update the information and configuration for a registered namespace.
     */
    public function UpdateNamespace(\Temporal\Api\Workflowservice\V1\UpdateNamespaceRequest $request): \Temporal\Api\Workflowservice\V1\UpdateNamespaceResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\UpdateNamespaceResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/UpdateNamespace', $request, $reply);

        return $reply;
    }

    /**
     * DeprecateNamespace is used to update state of a registered namespace to DEPRECATED.  Once the namespace is deprecated
     *  it cannot be used to start new workflow executions.  Existing workflow executions will continue to run on
     *  deprecated namespaces.
     */
    public function DeprecateNamespace(\Temporal\Api\Workflowservice\V1\DeprecateNamespaceRequest $request): \Temporal\Api\Workflowservice\V1\DeprecateNamespaceResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\DeprecateNamespaceResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/DeprecateNamespace', $request, $reply);

        return $reply;
    }

    /**
     * StartWorkflowExecution starts a new long running workflow instance.  It will create the instance with
     *  'WorkflowExecutionStarted' event in history and also schedule the first WorkflowTask for the worker to make the
     *  first command for this instance.  It will return 'WorkflowExecutionAlreadyStartedFailure', if an instance already
     *  exists with same workflowId.
     */
    public function StartWorkflowExecution(\Temporal\Api\Workflowservice\V1\StartWorkflowExecutionRequest $request): \Temporal\Api\Workflowservice\V1\StartWorkflowExecutionResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\StartWorkflowExecutionResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/StartWorkflowExecution', $request, $reply);

        return $reply;
    }

    /**
     * GetWorkflowExecutionHistory returns the history of specified workflow execution.  It fails with 'NotFoundFailure' if specified workflow
     *  execution in unknown to the service.
     */
    public function GetWorkflowExecutionHistory(\Temporal\Api\Workflowservice\V1\GetWorkflowExecutionHistoryRequest $request): \Temporal\Api\Workflowservice\V1\GetWorkflowExecutionHistoryResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\GetWorkflowExecutionHistoryResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/GetWorkflowExecutionHistory', $request, $reply);

        return $reply;
    }

    /**
     * PollWorkflowTaskQueue is called by application worker to process WorkflowTask from a specific task queue.  A
     *  WorkflowTask is dispatched to callers for active workflow executions, with pending workflow tasks.
     *  Application is then expected to call 'RespondWorkflowTaskCompleted' API when it is done processing the WorkflowTask.
     *  It will also create a 'WorkflowTaskStarted' event in the history for that session before handing off WorkflowTask to
     *  application worker.
     */
    public function PollWorkflowTaskQueue(\Temporal\Api\Workflowservice\V1\PollWorkflowTaskQueueRequest $request): \Temporal\Api\Workflowservice\V1\PollWorkflowTaskQueueResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\PollWorkflowTaskQueueResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/PollWorkflowTaskQueue', $request, $reply);

        return $reply;
    }

    /**
     * RespondWorkflowTaskCompleted is called by application worker to complete a WorkflowTask handed as a result of
     *  'PollWorkflowTaskQueue' API call.  Completing a WorkflowTask will result in new events for the workflow execution and
     *  potentially new ActivityTask being created for corresponding commands.  It will also create a WorkflowTaskCompleted
     *  event in the history for that session.  Use the 'taskToken' provided as response of PollWorkflowTaskQueue API call
     *  for completing the WorkflowTask.
     *  The response could contain a new workflow task if there is one or if the request asking for one.
     */
    public function RespondWorkflowTaskCompleted(\Temporal\Api\Workflowservice\V1\RespondWorkflowTaskCompletedRequest $request): \Temporal\Api\Workflowservice\V1\RespondWorkflowTaskCompletedResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RespondWorkflowTaskCompletedResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RespondWorkflowTaskCompleted', $request, $reply);

        return $reply;
    }

    /**
     * RespondWorkflowTaskFailed is called by application worker to indicate failure.  This results in
     *  WorkflowTaskFailedEvent written to the history and a new WorkflowTask created.  This API can be used by client to
     *  either clear sticky task queue or report any panics during WorkflowTask processing.  Temporal will only append first
     *  WorkflowTaskFailed event to the history of workflow execution for consecutive failures.
     */
    public function RespondWorkflowTaskFailed(\Temporal\Api\Workflowservice\V1\RespondWorkflowTaskFailedRequest $request): \Temporal\Api\Workflowservice\V1\RespondWorkflowTaskFailedResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RespondWorkflowTaskFailedResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RespondWorkflowTaskFailed', $request, $reply);

        return $reply;
    }

    /**
     * PollActivityTaskQueue is called by application worker to process ActivityTask from a specific task queue.  ActivityTask
     *  is dispatched to callers whenever a ScheduleTask command is made for a workflow execution.
     *  Application is expected to call 'RespondActivityTaskCompleted' or 'RespondActivityTaskFailed' once it is done
     *  processing the task.
     *  Application also needs to call 'RecordActivityTaskHeartbeat' API within 'heartbeatTimeoutSeconds' interval to
     *  prevent the task from getting timed out.  An event 'ActivityTaskStarted' event is also written to workflow execution
     *  history before the ActivityTask is dispatched to application worker.
     */
    public function PollActivityTaskQueue(\Temporal\Api\Workflowservice\V1\PollActivityTaskQueueRequest $request): \Temporal\Api\Workflowservice\V1\PollActivityTaskQueueResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\PollActivityTaskQueueResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/PollActivityTaskQueue', $request, $reply);

        return $reply;
    }

    /**
     * RecordActivityTaskHeartbeat is called by application worker while it is processing an ActivityTask.  If worker fails
     *  to heartbeat within 'heartbeatTimeoutSeconds' interval for the ActivityTask, then it will be marked as timedout and
     *  'ActivityTaskTimedOut' event will be written to the workflow history.  Calling 'RecordActivityTaskHeartbeat' will
     *  fail with 'NotFoundFailure' in such situations.  Use the 'taskToken' provided as response of
     *  PollActivityTaskQueue API call for heart beating.
     */
    public function RecordActivityTaskHeartbeat(\Temporal\Api\Workflowservice\V1\RecordActivityTaskHeartbeatRequest $request): \Temporal\Api\Workflowservice\V1\RecordActivityTaskHeartbeatResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RecordActivityTaskHeartbeatResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RecordActivityTaskHeartbeat', $request, $reply);

        return $reply;
    }

    /**
     * (-- api-linter: core::0136::prepositions=disabled
     *      aip.dev/not-precedent: "By" is used to indicate request type. --)
     *  RecordActivityTaskHeartbeatById is called by application worker while it is processing an ActivityTask.  If worker fails
     *  to heartbeat within 'heartbeatTimeoutSeconds' interval for the ActivityTask, then it will be marked as timed out and
     *  'ActivityTaskTimedOut' event will be written to the workflow history.  Calling 'RecordActivityTaskHeartbeatById' will
     *  fail with 'NotFoundFailure' in such situations.  Instead of using 'taskToken' like in RecordActivityTaskHeartbeat,
     *  use Namespace, WorkflowId and ActivityId
     */
    public function RecordActivityTaskHeartbeatById(\Temporal\Api\Workflowservice\V1\RecordActivityTaskHeartbeatByIdRequest $request): \Temporal\Api\Workflowservice\V1\RecordActivityTaskHeartbeatByIdResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RecordActivityTaskHeartbeatByIdResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RecordActivityTaskHeartbeatById', $request, $reply);

        return $reply;
    }

    /**
     * RespondActivityTaskCompleted is called by application worker when it is done processing an ActivityTask.  It will
     *  result in a new 'ActivityTaskCompleted' event being written to the workflow history and a new WorkflowTask
     *  created for the workflow so new commands could be made.  Use the 'taskToken' provided as response of
     *  PollActivityTaskQueue API call for completion. It fails with 'NotFoundFailure' if the taskToken is not valid
     *  anymore due to activity timeout.
     */
    public function RespondActivityTaskCompleted(\Temporal\Api\Workflowservice\V1\RespondActivityTaskCompletedRequest $request): \Temporal\Api\Workflowservice\V1\RespondActivityTaskCompletedResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RespondActivityTaskCompletedResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RespondActivityTaskCompleted', $request, $reply);

        return $reply;
    }

    /**
     * (-- api-linter: core::0136::prepositions=disabled
     *      aip.dev/not-precedent: "By" is used to indicate request type. --)
     *  RespondActivityTaskCompletedById is called by application worker when it is done processing an ActivityTask.
     *  It will result in a new 'ActivityTaskCompleted' event being written to the workflow history and a new WorkflowTask
     *  created for the workflow so new commands could be made.  Similar to RespondActivityTaskCompleted but use Namespace,
     *  WorkflowId and ActivityId instead of 'taskToken' for completion. It fails with 'NotFoundFailure'
     *  if the these Ids are not valid anymore due to activity timeout.
     */
    public function RespondActivityTaskCompletedById(\Temporal\Api\Workflowservice\V1\RespondActivityTaskCompletedByIdRequest $request): \Temporal\Api\Workflowservice\V1\RespondActivityTaskCompletedByIdResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RespondActivityTaskCompletedByIdResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RespondActivityTaskCompletedById', $request, $reply);

        return $reply;
    }

    /**
     * RespondActivityTaskFailed is called by application worker when it is done processing an ActivityTask.  It will
     *  result in a new 'ActivityTaskFailed' event being written to the workflow history and a new WorkflowTask
     *  created for the workflow instance so new commands could be made.  Use the 'taskToken' provided as response of
     *  PollActivityTaskQueue API call for completion. It fails with 'NotFoundFailure' if the taskToken is not valid
     *  anymore due to activity timeout.
     */
    public function RespondActivityTaskFailed(\Temporal\Api\Workflowservice\V1\RespondActivityTaskFailedRequest $request): \Temporal\Api\Workflowservice\V1\RespondActivityTaskFailedResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RespondActivityTaskFailedResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RespondActivityTaskFailed', $request, $reply);

        return $reply;
    }

    /**
     * (-- api-linter: core::0136::prepositions=disabled
     *      aip.dev/not-precedent: "By" is used to indicate request type. --)
     *  RespondActivityTaskFailedById is called by application worker when it is done processing an ActivityTask.
     *  It will result in a new 'ActivityTaskFailed' event being written to the workflow history and a new WorkflowTask
     *  created for the workflow instance so new commands could be made.  Similar to RespondActivityTaskFailed but use
     *  Namespace, WorkflowId and ActivityId instead of 'taskToken' for completion. It fails with 'NotFoundFailure'
     *  if the these Ids are not valid anymore due to activity timeout.
     */
    public function RespondActivityTaskFailedById(\Temporal\Api\Workflowservice\V1\RespondActivityTaskFailedByIdRequest $request): \Temporal\Api\Workflowservice\V1\RespondActivityTaskFailedByIdResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RespondActivityTaskFailedByIdResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RespondActivityTaskFailedById', $request, $reply);

        return $reply;
    }

    /**
     * RespondActivityTaskCanceled is called by application worker when it is successfully canceled an ActivityTask.  It will
     *  result in a new 'ActivityTaskCanceled' event being written to the workflow history and a new WorkflowTask
     *  created for the workflow instance so new commands could be made.  Use the 'taskToken' provided as response of
     *  PollActivityTaskQueue API call for completion. It fails with 'NotFoundFailure' if the taskToken is not valid
     *  anymore due to activity timeout.
     */
    public function RespondActivityTaskCanceled(\Temporal\Api\Workflowservice\V1\RespondActivityTaskCanceledRequest $request): \Temporal\Api\Workflowservice\V1\RespondActivityTaskCanceledResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RespondActivityTaskCanceledResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RespondActivityTaskCanceled', $request, $reply);

        return $reply;
    }

    /**
     * (-- api-linter: core::0136::prepositions=disabled
     *      aip.dev/not-precedent: "By" is used to indicate request type. --)
     *  RespondActivityTaskCanceledById is called by application worker when it is successfully canceled an ActivityTask.
     *  It will result in a new 'ActivityTaskCanceled' event being written to the workflow history and a new WorkflowTask
     *  created for the workflow instance so new commands could be made.  Similar to RespondActivityTaskCanceled but use
     *  Namespace, WorkflowId and ActivityId instead of 'taskToken' for completion. It fails with 'NotFoundFailure'
     *  if the these Ids are not valid anymore due to activity timeout.
     */
    public function RespondActivityTaskCanceledById(\Temporal\Api\Workflowservice\V1\RespondActivityTaskCanceledByIdRequest $request): \Temporal\Api\Workflowservice\V1\RespondActivityTaskCanceledByIdResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RespondActivityTaskCanceledByIdResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RespondActivityTaskCanceledById', $request, $reply);

        return $reply;
    }

    /**
     * RequestCancelWorkflowExecution is called by application worker when it wants to request cancellation of a workflow instance.
     *  It will result in a new 'WorkflowExecutionCancelRequested' event being written to the workflow history and a new WorkflowTask
     *  created for the workflow instance so new commands could be made. It fails with 'NotFoundFailure' if the workflow is not valid
     *  anymore due to completion or doesn't exist.
     */
    public function RequestCancelWorkflowExecution(\Temporal\Api\Workflowservice\V1\RequestCancelWorkflowExecutionRequest $request): \Temporal\Api\Workflowservice\V1\RequestCancelWorkflowExecutionResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RequestCancelWorkflowExecutionResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RequestCancelWorkflowExecution', $request, $reply);

        return $reply;
    }

    /**
     * SignalWorkflowExecution is used to send a signal event to running workflow execution.  This results in
     *  WorkflowExecutionSignaled event recorded in the history and a workflow task being created for the execution.
     */
    public function SignalWorkflowExecution(\Temporal\Api\Workflowservice\V1\SignalWorkflowExecutionRequest $request): \Temporal\Api\Workflowservice\V1\SignalWorkflowExecutionResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\SignalWorkflowExecutionResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/SignalWorkflowExecution', $request, $reply);

        return $reply;
    }

    /**
     * (-- api-linter: core::0136::prepositions=disabled
     *      aip.dev/not-precedent: "With" is used to indicate combined operation. --)
     *  SignalWithStartWorkflowExecution is used to ensure sending signal to a workflow.
     *  If the workflow is running, this results in WorkflowExecutionSignaled event being recorded in the history
     *  and a workflow task being created for the execution.
     *  If the workflow is not running or not found, this results in WorkflowExecutionStarted and WorkflowExecutionSignaled
     *  events being recorded in history, and a workflow task being created for the execution
     */
    public function SignalWithStartWorkflowExecution(\Temporal\Api\Workflowservice\V1\SignalWithStartWorkflowExecutionRequest $request): \Temporal\Api\Workflowservice\V1\SignalWithStartWorkflowExecutionResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\SignalWithStartWorkflowExecutionResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/SignalWithStartWorkflowExecution', $request, $reply);

        return $reply;
    }

    /**
     * ResetWorkflowExecution reset an existing workflow execution to WorkflowTaskCompleted event(exclusive).
     *  And it will immediately terminating the current execution instance.
     */
    public function ResetWorkflowExecution(\Temporal\Api\Workflowservice\V1\ResetWorkflowExecutionRequest $request): \Temporal\Api\Workflowservice\V1\ResetWorkflowExecutionResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\ResetWorkflowExecutionResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/ResetWorkflowExecution', $request, $reply);

        return $reply;
    }

    /**
     * TerminateWorkflowExecution terminates an existing workflow execution by recording WorkflowExecutionTerminated event
     *  in the history and immediately terminating the execution instance.
     */
    public function TerminateWorkflowExecution(\Temporal\Api\Workflowservice\V1\TerminateWorkflowExecutionRequest $request): \Temporal\Api\Workflowservice\V1\TerminateWorkflowExecutionResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\TerminateWorkflowExecutionResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/TerminateWorkflowExecution', $request, $reply);

        return $reply;
    }

    /**
     * ListOpenWorkflowExecutions is a visibility API to list the open executions in a specific namespace.
     */
    public function ListOpenWorkflowExecutions(\Temporal\Api\Workflowservice\V1\ListOpenWorkflowExecutionsRequest $request): \Temporal\Api\Workflowservice\V1\ListOpenWorkflowExecutionsResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\ListOpenWorkflowExecutionsResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/ListOpenWorkflowExecutions', $request, $reply);

        return $reply;
    }

    /**
     * ListClosedWorkflowExecutions is a visibility API to list the closed executions in a specific namespace.
     */
    public function ListClosedWorkflowExecutions(\Temporal\Api\Workflowservice\V1\ListClosedWorkflowExecutionsRequest $request): \Temporal\Api\Workflowservice\V1\ListClosedWorkflowExecutionsResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\ListClosedWorkflowExecutionsResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/ListClosedWorkflowExecutions', $request, $reply);

        return $reply;
    }

    /**
     * ListWorkflowExecutions is a visibility API to list workflow executions in a specific namespace.
     */
    public function ListWorkflowExecutions(\Temporal\Api\Workflowservice\V1\ListWorkflowExecutionsRequest $request): \Temporal\Api\Workflowservice\V1\ListWorkflowExecutionsResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\ListWorkflowExecutionsResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/ListWorkflowExecutions', $request, $reply);

        return $reply;
    }

    /**
     * ListArchivedWorkflowExecutions is a visibility API to list archived workflow executions in a specific namespace.
     */
    public function ListArchivedWorkflowExecutions(\Temporal\Api\Workflowservice\V1\ListArchivedWorkflowExecutionsRequest $request): \Temporal\Api\Workflowservice\V1\ListArchivedWorkflowExecutionsResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\ListArchivedWorkflowExecutionsResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/ListArchivedWorkflowExecutions', $request, $reply);

        return $reply;
    }

    /**
     * ScanWorkflowExecutions is a visibility API to list large amount of workflow executions in a specific namespace without order.
     */
    public function ScanWorkflowExecutions(\Temporal\Api\Workflowservice\V1\ScanWorkflowExecutionsRequest $request): \Temporal\Api\Workflowservice\V1\ScanWorkflowExecutionsResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\ScanWorkflowExecutionsResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/ScanWorkflowExecutions', $request, $reply);

        return $reply;
    }

    /**
     * CountWorkflowExecutions is a visibility API to count of workflow executions in a specific namespace.
     */
    public function CountWorkflowExecutions(\Temporal\Api\Workflowservice\V1\CountWorkflowExecutionsRequest $request): \Temporal\Api\Workflowservice\V1\CountWorkflowExecutionsResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\CountWorkflowExecutionsResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/CountWorkflowExecutions', $request, $reply);

        return $reply;
    }

    /**
     * GetSearchAttributes is a visibility API to get all legal keys that could be used in list APIs
     */
    public function GetSearchAttributes(\Temporal\Api\Workflowservice\V1\GetSearchAttributesRequest $request): \Temporal\Api\Workflowservice\V1\GetSearchAttributesResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\GetSearchAttributesResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/GetSearchAttributes', $request, $reply);

        return $reply;
    }

    /**
     * RespondQueryTaskCompleted is called by application worker to complete a QueryTask (which is a WorkflowTask for query)
     *  as a result of 'PollWorkflowTaskQueue' API call. Completing a QueryTask will unblock the client call to 'QueryWorkflow'
     *  API and return the query result to client as a response to 'QueryWorkflow' API call.
     */
    public function RespondQueryTaskCompleted(\Temporal\Api\Workflowservice\V1\RespondQueryTaskCompletedRequest $request): \Temporal\Api\Workflowservice\V1\RespondQueryTaskCompletedResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\RespondQueryTaskCompletedResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/RespondQueryTaskCompleted', $request, $reply);

        return $reply;
    }

    /**
     * ResetStickyTaskQueue resets the sticky task queue related information in mutable state of a given workflow.
     *  Things cleared are:
     *  1. StickyTaskQueue
     *  2. StickyScheduleToStartTimeout
     */
    public function ResetStickyTaskQueue(\Temporal\Api\Workflowservice\V1\ResetStickyTaskQueueRequest $request): \Temporal\Api\Workflowservice\V1\ResetStickyTaskQueueResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\ResetStickyTaskQueueResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/ResetStickyTaskQueue', $request, $reply);

        return $reply;
    }

    /**
     * QueryWorkflow returns query result for a specified workflow execution
     */
    public function QueryWorkflow(\Temporal\Api\Workflowservice\V1\QueryWorkflowRequest $request): \Temporal\Api\Workflowservice\V1\QueryWorkflowResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\QueryWorkflowResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/QueryWorkflow', $request, $reply);

        return $reply;
    }

    /**
     * DescribeWorkflowExecution returns information about the specified workflow execution.
     */
    public function DescribeWorkflowExecution(\Temporal\Api\Workflowservice\V1\DescribeWorkflowExecutionRequest $request): \Temporal\Api\Workflowservice\V1\DescribeWorkflowExecutionResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\DescribeWorkflowExecutionResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/DescribeWorkflowExecution', $request, $reply);

        return $reply;
    }

    /**
     * DescribeTaskQueue returns information about the target task queue, right now this API returns the
     *  pollers which polled this task queue in last few minutes.
     */
    public function DescribeTaskQueue(\Temporal\Api\Workflowservice\V1\DescribeTaskQueueRequest $request): \Temporal\Api\Workflowservice\V1\DescribeTaskQueueResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\DescribeTaskQueueResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/DescribeTaskQueue', $request, $reply);

        return $reply;
    }

    /**
     * GetClusterInfo returns information about temporal cluster
     */
    public function GetClusterInfo(\Temporal\Api\Workflowservice\V1\GetClusterInfoRequest $request): \Temporal\Api\Workflowservice\V1\GetClusterInfoResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\GetClusterInfoResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/GetClusterInfo', $request, $reply);

        return $reply;
    }

    public function ListTaskQueuePartitions(\Temporal\Api\Workflowservice\V1\ListTaskQueuePartitionsRequest $request): \Temporal\Api\Workflowservice\V1\ListTaskQueuePartitionsResponse
    {
        $reply = new \Temporal\Api\Workflowservice\V1\ListTaskQueuePartitionsResponse();

        $this->send('/temporal.api.workflowservice.v1.WorkflowService/ListTaskQueuePartitions', $request, $reply);

        return $reply;
    }
}
