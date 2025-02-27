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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/run/v2/execution.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Run\V2\Gapic;

use Google\ApiCore\ApiException;
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
use Google\Cloud\Run\V2\CancelExecutionRequest;
use Google\Cloud\Run\V2\DeleteExecutionRequest;
use Google\Cloud\Run\V2\Execution;
use Google\Cloud\Run\V2\GetExecutionRequest;
use Google\Cloud\Run\V2\ListExecutionsRequest;
use Google\Cloud\Run\V2\ListExecutionsResponse;
use Google\LongRunning\Operation;

/**
 * Service Description: Cloud Run Execution Control Plane API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $executionsClient = new ExecutionsClient();
 * try {
 *     $formattedName = $executionsClient->executionName('[PROJECT]', '[LOCATION]', '[JOB]', '[EXECUTION]');
 *     $operationResponse = $executionsClient->cancelExecution($formattedName);
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *         // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *     // Alternatively:
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $executionsClient->cancelExecution($formattedName);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $executionsClient->resumeOperation($operationName, 'cancelExecution');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *         $result = $newOperationResponse->getResult();
 *         // doSomethingWith($result)
 *     } else {
 *         $error = $newOperationResponse->getError();
 *         // handleError($error)
 *     }
 * } finally {
 *     $executionsClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This service has a new (beta) implementation. See {@see
 * \Google\Cloud\Run\V2\Client\ExecutionsClient} to use the new surface.
 */
class ExecutionsGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.run.v2.Executions';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'run.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $executionNameTemplate;

    private static $jobNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ . '/../resources/executions_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ . '/../resources/executions_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ . '/../resources/executions_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/executions_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getExecutionNameTemplate()
    {
        if (self::$executionNameTemplate == null) {
            self::$executionNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}/jobs/{job}/executions/{execution}'
            );
        }

        return self::$executionNameTemplate;
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

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'execution' => self::getExecutionNameTemplate(),
                'job' => self::getJobNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a execution
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $job
     * @param string $execution
     *
     * @return string The formatted execution resource.
     */
    public static function executionName($project, $location, $job, $execution)
    {
        return self::getExecutionNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'job' => $job,
            'execution' => $execution,
        ]);
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
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - execution: projects/{project}/locations/{location}/jobs/{job}/executions/{execution}
     * - job: projects/{project}/locations/{location}/jobs/{job}
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
     *           as "<uri>:<port>". Default 'run.googleapis.com:443'.
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
     * Cancels an Execution.
     *
     * Sample code:
     * ```
     * $executionsClient = new ExecutionsClient();
     * try {
     *     $formattedName = $executionsClient->executionName('[PROJECT]', '[LOCATION]', '[JOB]', '[EXECUTION]');
     *     $operationResponse = $executionsClient->cancelExecution($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $executionsClient->cancelExecution($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $executionsClient->resumeOperation($operationName, 'cancelExecution');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $executionsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the Execution to cancel.
     *                             Format:
     *                             `projects/{project}/locations/{location}/jobs/{job}/executions/{execution}`,
     *                             where `{project}` can be project id or number.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type bool $validateOnly
     *           Indicates that the request should be validated without actually
     *           cancelling any resources.
     *     @type string $etag
     *           A system-generated fingerprint for this version of the resource.
     *           This may be used to detect modification conflict during updates.
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
    public function cancelExecution($name, array $optionalArgs = [])
    {
        $request = new CancelExecutionRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        if (isset($optionalArgs['etag'])) {
            $request->setEtag($optionalArgs['etag']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startOperationsCall(
            'CancelExecution',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes an Execution.
     *
     * Sample code:
     * ```
     * $executionsClient = new ExecutionsClient();
     * try {
     *     $formattedName = $executionsClient->executionName('[PROJECT]', '[LOCATION]', '[JOB]', '[EXECUTION]');
     *     $operationResponse = $executionsClient->deleteExecution($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $executionsClient->deleteExecution($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $executionsClient->resumeOperation($operationName, 'deleteExecution');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         $result = $newOperationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $executionsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the Execution to delete.
     *                             Format:
     *                             `projects/{project}/locations/{location}/jobs/{job}/executions/{execution}`,
     *                             where `{project}` can be project id or number.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type bool $validateOnly
     *           Indicates that the request should be validated without actually
     *           deleting any resources.
     *     @type string $etag
     *           A system-generated fingerprint for this version of the resource.
     *           This may be used to detect modification conflict during updates.
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
    public function deleteExecution($name, array $optionalArgs = [])
    {
        $request = new DeleteExecutionRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        if (isset($optionalArgs['etag'])) {
            $request->setEtag($optionalArgs['etag']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startOperationsCall(
            'DeleteExecution',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Gets information about an Execution.
     *
     * Sample code:
     * ```
     * $executionsClient = new ExecutionsClient();
     * try {
     *     $formattedName = $executionsClient->executionName('[PROJECT]', '[LOCATION]', '[JOB]', '[EXECUTION]');
     *     $response = $executionsClient->getExecution($formattedName);
     * } finally {
     *     $executionsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The full name of the Execution.
     *                             Format:
     *                             `projects/{project}/locations/{location}/jobs/{job}/executions/{execution}`,
     *                             where `{project}` can be project id or number.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Run\V2\Execution
     *
     * @throws ApiException if the remote call fails
     */
    public function getExecution($name, array $optionalArgs = [])
    {
        $request = new GetExecutionRequest();
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
            'GetExecution',
            Execution::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists Executions from a Job.
     *
     * Sample code:
     * ```
     * $executionsClient = new ExecutionsClient();
     * try {
     *     $formattedParent = $executionsClient->jobName('[PROJECT]', '[LOCATION]', '[JOB]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $executionsClient->listExecutions($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $executionsClient->listExecutions($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $executionsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The Execution from which the Executions should be listed.
     *                             To list all Executions across Jobs, use "-" instead of Job name.
     *                             Format: `projects/{project}/locations/{location}/jobs/{job}`, where
     *                             `{project}` can be project id or number.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type bool $showDeleted
     *           If true, returns deleted (but unexpired) resources along with active ones.
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
    public function listExecutions($parent, array $optionalArgs = [])
    {
        $request = new ListExecutionsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['showDeleted'])) {
            $request->setShowDeleted($optionalArgs['showDeleted']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListExecutions',
            $optionalArgs,
            ListExecutionsResponse::class,
            $request
        );
    }
}
