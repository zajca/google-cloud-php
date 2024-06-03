<?php
/*
 * Copyright 2022 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/batch/v1/batch.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Batch\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Batch\V1\CreateJobRequest;
use Google\Cloud\Batch\V1\DeleteJobRequest;
use Google\Cloud\Batch\V1\GetJobRequest;
use Google\Cloud\Batch\V1\GetTaskRequest;
use Google\Cloud\Batch\V1\Job;
use Google\Cloud\Batch\V1\ListJobsRequest;
use Google\Cloud\Batch\V1\ListJobsResponse;
use Google\Cloud\Batch\V1\ListTasksRequest;
use Google\Cloud\Batch\V1\ListTasksResponse;
use Google\Cloud\Batch\V1\Task;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\ListLocationsResponse;
use Google\Cloud\Location\Location;
use Google\LongRunning\Operation;

/**
 * Service Description: Google Batch Service.
 * The service manages user submitted batch jobs and allocates Google Compute
 * Engine VM instances to run the jobs.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $batchServiceClient = new BatchServiceClient();
 * try {
 *     $formattedParent = $batchServiceClient->locationName('[PROJECT]', '[LOCATION]');
 *     $job = new Job();
 *     $response = $batchServiceClient->createJob($formattedParent, $job);
 * } finally {
 *     $batchServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @deprecated Please use the new service client {@see \Google\Cloud\Batch\V1\Client\BatchServiceClient}.
 */
class BatchServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.batch.v1.BatchService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    const SERVICE_ADDRESS = 'batch.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'batch.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $jobNameTemplate;

    private static $locationNameTemplate;

    private static $taskNameTemplate;

    private static $taskGroupNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ . '/../resources/batch_service_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ . '/../resources/batch_service_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ . '/../resources/batch_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/batch_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getJobNameTemplate()
    {
        if (self::$jobNameTemplate == null) {
            self::$jobNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}/jobs/{job}'
            );
        }

        return self::$jobNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (self::$locationNameTemplate == null) {
            self::$locationNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}'
            );
        }

        return self::$locationNameTemplate;
    }

    private static function getTaskNameTemplate()
    {
        if (self::$taskNameTemplate == null) {
            self::$taskNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}/jobs/{job}/taskGroups/{task_group}/tasks/{task}'
            );
        }

        return self::$taskNameTemplate;
    }

    private static function getTaskGroupNameTemplate()
    {
        if (self::$taskGroupNameTemplate == null) {
            self::$taskGroupNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}/jobs/{job}/taskGroups/{task_group}'
            );
        }

        return self::$taskGroupNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'job' => self::getJobNameTemplate(),
                'location' => self::getLocationNameTemplate(),
                'task' => self::getTaskNameTemplate(),
                'taskGroup' => self::getTaskGroupNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a job
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $job
     *
     * @return string The formatted job resource.
     */
    public static function jobName($project, $location, $job)
    {
        return self::getJobNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'job' => $job,
        ]);
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
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a task
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $job
     * @param string $taskGroup
     * @param string $task
     *
     * @return string The formatted task resource.
     */
    public static function taskName(
        $project,
        $location,
        $job,
        $taskGroup,
        $task
    ) {
        return self::getTaskNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'job' => $job,
            'task_group' => $taskGroup,
            'task' => $task,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a task_group
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $job
     * @param string $taskGroup
     *
     * @return string The formatted task_group resource.
     */
    public static function taskGroupName($project, $location, $job, $taskGroup)
    {
        return self::getTaskGroupNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'job' => $job,
            'task_group' => $taskGroup,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - job: projects/{project}/locations/{location}/jobs/{job}
     * - location: projects/{project}/locations/{location}
     * - task: projects/{project}/locations/{location}/jobs/{job}/taskGroups/{task_group}/tasks/{task}
     * - taskGroup: projects/{project}/locations/{location}/jobs/{job}/taskGroups/{task_group}
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
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException(
                    "Template name $template does not exist"
                );
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException(
            "Input did not match any known format. Input: $formattedName"
        );
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse(
            $operationName,
            $this->getOperationsClient(),
            $options
        );
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'batch.googleapis.com:443'.
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
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Create a Job.
     *
     * Sample code:
     * ```
     * $batchServiceClient = new BatchServiceClient();
     * try {
     *     $formattedParent = $batchServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $job = new Job();
     *     $response = $batchServiceClient->createJob($formattedParent, $job);
     * } finally {
     *     $batchServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource name where the Job will be created.
     *                             Pattern: "projects/{project}/locations/{location}"
     * @param Job    $job          Required. The Job to create.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $jobId
     *           ID used to uniquely identify the Job within its parent scope.
     *           This field should contain at most 63 characters and must start with
     *           lowercase characters.
     *           Only lowercase characters, numbers and '-' are accepted.
     *           The '-' character cannot be the first or the last one.
     *           A system generated ID will be used if the field is not set.
     *
     *           The job.name field in the request will be ignored and the created resource
     *           name of the Job will be "{parent}/jobs/{job_id}".
     *     @type string $requestId
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Batch\V1\Job
     *
     * @throws ApiException if the remote call fails
     */
    public function createJob($parent, $job, array $optionalArgs = [])
    {
        $request = new CreateJobRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setJob($job);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['jobId'])) {
            $request->setJobId($optionalArgs['jobId']);
        }

        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'CreateJob',
            Job::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Delete a Job.
     *
     * Sample code:
     * ```
     * $batchServiceClient = new BatchServiceClient();
     * try {
     *     $operationResponse = $batchServiceClient->deleteJob();
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $batchServiceClient->deleteJob();
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $batchServiceClient->resumeOperation($operationName, 'deleteJob');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $batchServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Job name.
     *     @type string $reason
     *           Optional. Reason for this deletion.
     *     @type string $requestId
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes after the first request.
     *
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteJob(array $optionalArgs = [])
    {
        $request = new DeleteJobRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['reason'])) {
            $request->setReason($optionalArgs['reason']);
        }

        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startOperationsCall(
            'DeleteJob',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Get a Job specified by its resource name.
     *
     * Sample code:
     * ```
     * $batchServiceClient = new BatchServiceClient();
     * try {
     *     $formattedName = $batchServiceClient->jobName('[PROJECT]', '[LOCATION]', '[JOB]');
     *     $response = $batchServiceClient->getJob($formattedName);
     * } finally {
     *     $batchServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Job name.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Batch\V1\Job
     *
     * @throws ApiException if the remote call fails
     */
    public function getJob($name, array $optionalArgs = [])
    {
        $request = new GetJobRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetJob',
            Job::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Return a single Task.
     *
     * Sample code:
     * ```
     * $batchServiceClient = new BatchServiceClient();
     * try {
     *     $formattedName = $batchServiceClient->taskName('[PROJECT]', '[LOCATION]', '[JOB]', '[TASK_GROUP]', '[TASK]');
     *     $response = $batchServiceClient->getTask($formattedName);
     * } finally {
     *     $batchServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Task name.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Batch\V1\Task
     *
     * @throws ApiException if the remote call fails
     */
    public function getTask($name, array $optionalArgs = [])
    {
        $request = new GetTaskRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetTask',
            Task::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * List all Jobs for a project within a region.
     *
     * Sample code:
     * ```
     * $batchServiceClient = new BatchServiceClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $batchServiceClient->listJobs();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $batchServiceClient->listJobs();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $batchServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $parent
     *           Parent path.
     *     @type string $filter
     *           List filter.
     *     @type string $orderBy
     *           Optional. Sort results. Supported are "name", "name desc", "create_time",
     *           and "create_time desc".
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listJobs(array $optionalArgs = [])
    {
        $request = new ListJobsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['parent'])) {
            $request->setParent($optionalArgs['parent']);
            $requestParamHeaders['parent'] = $optionalArgs['parent'];
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListJobs',
            $optionalArgs,
            ListJobsResponse::class,
            $request
        );
    }

    /**
     * List Tasks associated with a job.
     *
     * Sample code:
     * ```
     * $batchServiceClient = new BatchServiceClient();
     * try {
     *     $formattedParent = $batchServiceClient->taskGroupName('[PROJECT]', '[LOCATION]', '[JOB]', '[TASK_GROUP]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $batchServiceClient->listTasks($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $batchServiceClient->listTasks($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $batchServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Name of a TaskGroup from which Tasks are being requested.
     *                             Pattern:
     *                             "projects/{project}/locations/{location}/jobs/{job}/taskGroups/{task_group}"
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $filter
     *           Task filter, null filter matches all Tasks.
     *           Filter string should be of the format State=TaskStatus.State e.g.
     *           State=RUNNING
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listTasks($parent, array $optionalArgs = [])
    {
        $request = new ListTasksRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListTasks',
            $optionalArgs,
            ListTasksResponse::class,
            $request
        );
    }

    /**
     * Gets information about a location.
     *
     * Sample code:
     * ```
     * $batchServiceClient = new BatchServiceClient();
     * try {
     *     $response = $batchServiceClient->getLocation();
     * } finally {
     *     $batchServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Resource name for the location.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Location\Location
     *
     * @throws ApiException if the remote call fails
     */
    public function getLocation(array $optionalArgs = [])
    {
        $request = new GetLocationRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetLocation',
            Location::class,
            $optionalArgs,
            $request,
            Call::UNARY_CALL,
            'google.cloud.location.Locations'
        )->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * Sample code:
     * ```
     * $batchServiceClient = new BatchServiceClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $batchServiceClient->listLocations();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $batchServiceClient->listLocations();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $batchServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           The resource that owns the locations collection, if applicable.
     *     @type string $filter
     *           The standard list filter.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listLocations(array $optionalArgs = [])
    {
        $request = new ListLocationsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListLocations',
            $optionalArgs,
            ListLocationsResponse::class,
            $request,
            'google.cloud.location.Locations'
        );
    }
}
