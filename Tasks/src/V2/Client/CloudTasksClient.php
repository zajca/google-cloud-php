<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/tasks/v2/cloudtasks.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Tasks\V2\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\Cloud\Tasks\V2\CreateQueueRequest;
use Google\Cloud\Tasks\V2\CreateTaskRequest;
use Google\Cloud\Tasks\V2\DeleteQueueRequest;
use Google\Cloud\Tasks\V2\DeleteTaskRequest;
use Google\Cloud\Tasks\V2\GetQueueRequest;
use Google\Cloud\Tasks\V2\GetTaskRequest;
use Google\Cloud\Tasks\V2\ListQueuesRequest;
use Google\Cloud\Tasks\V2\ListTasksRequest;
use Google\Cloud\Tasks\V2\PauseQueueRequest;
use Google\Cloud\Tasks\V2\PurgeQueueRequest;
use Google\Cloud\Tasks\V2\Queue;
use Google\Cloud\Tasks\V2\ResumeQueueRequest;
use Google\Cloud\Tasks\V2\RunTaskRequest;
use Google\Cloud\Tasks\V2\Task;
use Google\Cloud\Tasks\V2\UpdateQueueRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Cloud Tasks allows developers to manage the execution of background
 * work in their applications.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createQueueAsync(CreateQueueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createTaskAsync(CreateTaskRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteQueueAsync(DeleteQueueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteTaskAsync(DeleteTaskRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getQueueAsync(GetQueueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getTaskAsync(GetTaskRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listQueuesAsync(ListQueuesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listTasksAsync(ListTasksRequest $request, array $optionalArgs = [])
 * @method PromiseInterface pauseQueueAsync(PauseQueueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface purgeQueueAsync(PurgeQueueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface resumeQueueAsync(ResumeQueueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface runTaskAsync(RunTaskRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateQueueAsync(UpdateQueueRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class CloudTasksClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.tasks.v2.CloudTasks';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'cloudtasks.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'cloudtasks.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/cloud_tasks_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/cloud_tasks_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/cloud_tasks_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/cloud_tasks_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a queue
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $queue
     *
     * @return string The formatted queue resource.
     */
    public static function queueName(string $project, string $location, string $queue): string
    {
        return self::getPathTemplate('queue')->render([
            'project' => $project,
            'location' => $location,
            'queue' => $queue,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a task
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $queue
     * @param string $task
     *
     * @return string The formatted task resource.
     */
    public static function taskName(string $project, string $location, string $queue, string $task): string
    {
        return self::getPathTemplate('task')->render([
            'project' => $project,
            'location' => $location,
            'queue' => $queue,
            'task' => $task,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: projects/{project}/locations/{location}
     * - queue: projects/{project}/locations/{location}/queues/{queue}
     * - task: projects/{project}/locations/{location}/queues/{queue}/tasks/{task}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudtasks.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a queue.
     *
     * Queues created with this method allow tasks to live for a maximum of 31
     * days. After a task is 31 days old, the task will be deleted regardless of
     * whether it was dispatched or not.
     *
     * WARNING: Using this method may have unintended side effects if you are
     * using an App Engine `queue.yaml` or `queue.xml` file to manage your queues.
     * Read
     * [Overview of Queue Management and
     * queue.yaml](https://cloud.google.com/tasks/docs/queue-yaml) before using
     * this method.
     *
     * The async variant is {@see CloudTasksClient::createQueueAsync()} .
     *
     * @example samples/V2/CloudTasksClient/create_queue.php
     *
     * @param CreateQueueRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Queue
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createQueue(CreateQueueRequest $request, array $callOptions = []): Queue
    {
        return $this->startApiCall('CreateQueue', $request, $callOptions)->wait();
    }

    /**
     * Creates a task and adds it to a queue.
     *
     * Tasks cannot be updated after creation; there is no UpdateTask command.
     *
     * * The maximum task size is 100KB.
     *
     * The async variant is {@see CloudTasksClient::createTaskAsync()} .
     *
     * @example samples/V2/CloudTasksClient/create_task.php
     *
     * @param CreateTaskRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Task
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createTask(CreateTaskRequest $request, array $callOptions = []): Task
    {
        return $this->startApiCall('CreateTask', $request, $callOptions)->wait();
    }

    /**
     * Deletes a queue.
     *
     * This command will delete the queue even if it has tasks in it.
     *
     * Note: If you delete a queue, a queue with the same name can't be created
     * for 7 days.
     *
     * WARNING: Using this method may have unintended side effects if you are
     * using an App Engine `queue.yaml` or `queue.xml` file to manage your queues.
     * Read
     * [Overview of Queue Management and
     * queue.yaml](https://cloud.google.com/tasks/docs/queue-yaml) before using
     * this method.
     *
     * The async variant is {@see CloudTasksClient::deleteQueueAsync()} .
     *
     * @example samples/V2/CloudTasksClient/delete_queue.php
     *
     * @param DeleteQueueRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteQueue(DeleteQueueRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteQueue', $request, $callOptions)->wait();
    }

    /**
     * Deletes a task.
     *
     * A task can be deleted if it is scheduled or dispatched. A task
     * cannot be deleted if it has executed successfully or permanently
     * failed.
     *
     * The async variant is {@see CloudTasksClient::deleteTaskAsync()} .
     *
     * @example samples/V2/CloudTasksClient/delete_task.php
     *
     * @param DeleteTaskRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteTask(DeleteTaskRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteTask', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a [Queue][google.cloud.tasks.v2.Queue].
     * Returns an empty policy if the resource exists and does not have a policy
     * set.
     *
     * Authorization requires the following
     * [Google IAM](https://cloud.google.com/iam) permission on the specified
     * resource parent:
     *
     * * `cloudtasks.queues.getIamPolicy`
     *
     * The async variant is {@see CloudTasksClient::getIamPolicyAsync()} .
     *
     * @example samples/V2/CloudTasksClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Gets a queue.
     *
     * The async variant is {@see CloudTasksClient::getQueueAsync()} .
     *
     * @example samples/V2/CloudTasksClient/get_queue.php
     *
     * @param GetQueueRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Queue
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getQueue(GetQueueRequest $request, array $callOptions = []): Queue
    {
        return $this->startApiCall('GetQueue', $request, $callOptions)->wait();
    }

    /**
     * Gets a task.
     *
     * The async variant is {@see CloudTasksClient::getTaskAsync()} .
     *
     * @example samples/V2/CloudTasksClient/get_task.php
     *
     * @param GetTaskRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Task
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTask(GetTaskRequest $request, array $callOptions = []): Task
    {
        return $this->startApiCall('GetTask', $request, $callOptions)->wait();
    }

    /**
     * Lists queues.
     *
     * Queues are returned in lexicographical order.
     *
     * The async variant is {@see CloudTasksClient::listQueuesAsync()} .
     *
     * @example samples/V2/CloudTasksClient/list_queues.php
     *
     * @param ListQueuesRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listQueues(ListQueuesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListQueues', $request, $callOptions);
    }

    /**
     * Lists the tasks in a queue.
     *
     * By default, only the [BASIC][google.cloud.tasks.v2.Task.View.BASIC] view is
     * retrieved due to performance considerations;
     * [response_view][google.cloud.tasks.v2.ListTasksRequest.response_view]
     * controls the subset of information which is returned.
     *
     * The tasks may be returned in any order. The ordering may change at any
     * time.
     *
     * The async variant is {@see CloudTasksClient::listTasksAsync()} .
     *
     * @example samples/V2/CloudTasksClient/list_tasks.php
     *
     * @param ListTasksRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listTasks(ListTasksRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTasks', $request, $callOptions);
    }

    /**
     * Pauses the queue.
     *
     * If a queue is paused then the system will stop dispatching tasks
     * until the queue is resumed via
     * [ResumeQueue][google.cloud.tasks.v2.CloudTasks.ResumeQueue]. Tasks can
     * still be added when the queue is paused. A queue is paused if its
     * [state][google.cloud.tasks.v2.Queue.state] is
     * [PAUSED][google.cloud.tasks.v2.Queue.State.PAUSED].
     *
     * The async variant is {@see CloudTasksClient::pauseQueueAsync()} .
     *
     * @example samples/V2/CloudTasksClient/pause_queue.php
     *
     * @param PauseQueueRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Queue
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function pauseQueue(PauseQueueRequest $request, array $callOptions = []): Queue
    {
        return $this->startApiCall('PauseQueue', $request, $callOptions)->wait();
    }

    /**
     * Purges a queue by deleting all of its tasks.
     *
     * All tasks created before this method is called are permanently deleted.
     *
     * Purge operations can take up to one minute to take effect. Tasks
     * might be dispatched before the purge takes effect. A purge is irreversible.
     *
     * The async variant is {@see CloudTasksClient::purgeQueueAsync()} .
     *
     * @example samples/V2/CloudTasksClient/purge_queue.php
     *
     * @param PurgeQueueRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Queue
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function purgeQueue(PurgeQueueRequest $request, array $callOptions = []): Queue
    {
        return $this->startApiCall('PurgeQueue', $request, $callOptions)->wait();
    }

    /**
     * Resume a queue.
     *
     * This method resumes a queue after it has been
     * [PAUSED][google.cloud.tasks.v2.Queue.State.PAUSED] or
     * [DISABLED][google.cloud.tasks.v2.Queue.State.DISABLED]. The state of a
     * queue is stored in the queue's [state][google.cloud.tasks.v2.Queue.state];
     * after calling this method it will be set to
     * [RUNNING][google.cloud.tasks.v2.Queue.State.RUNNING].
     *
     * WARNING: Resuming many high-QPS queues at the same time can
     * lead to target overloading. If you are resuming high-QPS
     * queues, follow the 500/50/5 pattern described in
     * [Managing Cloud Tasks Scaling
     * Risks](https://cloud.google.com/tasks/docs/manage-cloud-task-scaling).
     *
     * The async variant is {@see CloudTasksClient::resumeQueueAsync()} .
     *
     * @example samples/V2/CloudTasksClient/resume_queue.php
     *
     * @param ResumeQueueRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Queue
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function resumeQueue(ResumeQueueRequest $request, array $callOptions = []): Queue
    {
        return $this->startApiCall('ResumeQueue', $request, $callOptions)->wait();
    }

    /**
     * Forces a task to run now.
     *
     * When this method is called, Cloud Tasks will dispatch the task, even if
     * the task is already running, the queue has reached its
     * [RateLimits][google.cloud.tasks.v2.RateLimits] or is
     * [PAUSED][google.cloud.tasks.v2.Queue.State.PAUSED].
     *
     * This command is meant to be used for manual debugging. For
     * example, [RunTask][google.cloud.tasks.v2.CloudTasks.RunTask] can be used to
     * retry a failed task after a fix has been made or to manually force a task
     * to be dispatched now.
     *
     * The dispatched task is returned. That is, the task that is returned
     * contains the [status][Task.status] after the task is dispatched but
     * before the task is received by its target.
     *
     * If Cloud Tasks receives a successful response from the task's
     * target, then the task will be deleted; otherwise the task's
     * [schedule_time][google.cloud.tasks.v2.Task.schedule_time] will be reset to
     * the time that [RunTask][google.cloud.tasks.v2.CloudTasks.RunTask] was
     * called plus the retry delay specified in the queue's
     * [RetryConfig][google.cloud.tasks.v2.RetryConfig].
     *
     * [RunTask][google.cloud.tasks.v2.CloudTasks.RunTask] returns
     * [NOT_FOUND][google.rpc.Code.NOT_FOUND] when it is called on a
     * task that has already succeeded or permanently failed.
     *
     * The async variant is {@see CloudTasksClient::runTaskAsync()} .
     *
     * @example samples/V2/CloudTasksClient/run_task.php
     *
     * @param RunTaskRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Task
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function runTask(RunTaskRequest $request, array $callOptions = []): Task
    {
        return $this->startApiCall('RunTask', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy for a [Queue][google.cloud.tasks.v2.Queue].
     * Replaces any existing policy.
     *
     * Note: The Cloud Console does not check queue-level IAM permissions yet.
     * Project-level permissions are required to use the Cloud Console.
     *
     * Authorization requires the following
     * [Google IAM](https://cloud.google.com/iam) permission on the specified
     * resource parent:
     *
     * * `cloudtasks.queues.setIamPolicy`
     *
     * The async variant is {@see CloudTasksClient::setIamPolicyAsync()} .
     *
     * @example samples/V2/CloudTasksClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on a
     * [Queue][google.cloud.tasks.v2.Queue]. If the resource does not exist, this
     * will return an empty set of permissions, not a
     * [NOT_FOUND][google.rpc.Code.NOT_FOUND] error.
     *
     * Note: This operation is designed to be used for building permission-aware
     * UIs and command-line tools, not for authorization checking. This operation
     * may "fail open" without warning.
     *
     * The async variant is {@see CloudTasksClient::testIamPermissionsAsync()} .
     *
     * @example samples/V2/CloudTasksClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }

    /**
     * Updates a queue.
     *
     * This method creates the queue if it does not exist and updates
     * the queue if it does exist.
     *
     * Queues created with this method allow tasks to live for a maximum of 31
     * days. After a task is 31 days old, the task will be deleted regardless of
     * whether it was dispatched or not.
     *
     * WARNING: Using this method may have unintended side effects if you are
     * using an App Engine `queue.yaml` or `queue.xml` file to manage your queues.
     * Read
     * [Overview of Queue Management and
     * queue.yaml](https://cloud.google.com/tasks/docs/queue-yaml) before using
     * this method.
     *
     * The async variant is {@see CloudTasksClient::updateQueueAsync()} .
     *
     * @example samples/V2/CloudTasksClient/update_queue.php
     *
     * @param UpdateQueueRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Queue
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateQueue(UpdateQueueRequest $request, array $callOptions = []): Queue
    {
        return $this->startApiCall('UpdateQueue', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see CloudTasksClient::getLocationAsync()} .
     *
     * @example samples/V2/CloudTasksClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see CloudTasksClient::listLocationsAsync()} .
     *
     * @example samples/V2/CloudTasksClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}
