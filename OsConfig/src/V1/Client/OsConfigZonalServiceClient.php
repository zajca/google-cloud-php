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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/osconfig/v1/osconfig_zonal_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\OsConfig\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\OsConfig\V1\CreateOSPolicyAssignmentRequest;
use Google\Cloud\OsConfig\V1\DeleteOSPolicyAssignmentRequest;
use Google\Cloud\OsConfig\V1\GetInventoryRequest;
use Google\Cloud\OsConfig\V1\GetOSPolicyAssignmentReportRequest;
use Google\Cloud\OsConfig\V1\GetOSPolicyAssignmentRequest;
use Google\Cloud\OsConfig\V1\GetVulnerabilityReportRequest;
use Google\Cloud\OsConfig\V1\Inventory;
use Google\Cloud\OsConfig\V1\ListInventoriesRequest;
use Google\Cloud\OsConfig\V1\ListOSPolicyAssignmentReportsRequest;
use Google\Cloud\OsConfig\V1\ListOSPolicyAssignmentRevisionsRequest;
use Google\Cloud\OsConfig\V1\ListOSPolicyAssignmentsRequest;
use Google\Cloud\OsConfig\V1\ListVulnerabilityReportsRequest;
use Google\Cloud\OsConfig\V1\OSPolicyAssignment;
use Google\Cloud\OsConfig\V1\OSPolicyAssignmentReport;
use Google\Cloud\OsConfig\V1\UpdateOSPolicyAssignmentRequest;
use Google\Cloud\OsConfig\V1\VulnerabilityReport;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Zonal OS Config API
 *
 * The OS Config service is the server-side component that allows users to
 * manage package installations and patch jobs for Compute Engine VM instances.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createOSPolicyAssignmentAsync(CreateOSPolicyAssignmentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteOSPolicyAssignmentAsync(DeleteOSPolicyAssignmentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getInventoryAsync(GetInventoryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getOSPolicyAssignmentAsync(GetOSPolicyAssignmentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getOSPolicyAssignmentReportAsync(GetOSPolicyAssignmentReportRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getVulnerabilityReportAsync(GetVulnerabilityReportRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listInventoriesAsync(ListInventoriesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listOSPolicyAssignmentReportsAsync(ListOSPolicyAssignmentReportsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listOSPolicyAssignmentRevisionsAsync(ListOSPolicyAssignmentRevisionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listOSPolicyAssignmentsAsync(ListOSPolicyAssignmentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listVulnerabilityReportsAsync(ListVulnerabilityReportsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateOSPolicyAssignmentAsync(UpdateOSPolicyAssignmentRequest $request, array $optionalArgs = [])
 */
class OsConfigZonalServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.osconfig.v1.OsConfigZonalService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'osconfig.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'osconfig.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/os_config_zonal_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/os_config_zonal_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/os_config_zonal_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/os_config_zonal_service_rest_client_config.php',
                ],
            ],
        ];
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
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a instance
     * resource.
     *
     * @param string $project
     * @param string $zone
     * @param string $instance
     *
     * @return string The formatted instance resource.
     */
    public static function instanceName(string $project, string $zone, string $instance): string
    {
        return self::getPathTemplate('instance')->render([
            'project' => $project,
            'zone' => $zone,
            'instance' => $instance,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * instance_os_policy_assignment resource.
     *
     * @param string $project
     * @param string $location
     * @param string $instance
     * @param string $assignment
     *
     * @return string The formatted instance_os_policy_assignment resource.
     */
    public static function instanceOSPolicyAssignmentName(string $project, string $location, string $instance, string $assignment): string
    {
        return self::getPathTemplate('instanceOSPolicyAssignment')->render([
            'project' => $project,
            'location' => $location,
            'instance' => $instance,
            'assignment' => $assignment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a inventory
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $instance
     *
     * @return string The formatted inventory resource.
     */
    public static function inventoryName(string $project, string $location, string $instance): string
    {
        return self::getPathTemplate('inventory')->render([
            'project' => $project,
            'location' => $location,
            'instance' => $instance,
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
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * os_policy_assignment resource.
     *
     * @param string $project
     * @param string $location
     * @param string $osPolicyAssignment
     *
     * @return string The formatted os_policy_assignment resource.
     */
    public static function oSPolicyAssignmentName(string $project, string $location, string $osPolicyAssignment): string
    {
        return self::getPathTemplate('oSPolicyAssignment')->render([
            'project' => $project,
            'location' => $location,
            'os_policy_assignment' => $osPolicyAssignment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * os_policy_assignment_report resource.
     *
     * @param string $project
     * @param string $location
     * @param string $instance
     * @param string $assignment
     *
     * @return string The formatted os_policy_assignment_report resource.
     */
    public static function oSPolicyAssignmentReportName(string $project, string $location, string $instance, string $assignment): string
    {
        return self::getPathTemplate('oSPolicyAssignmentReport')->render([
            'project' => $project,
            'location' => $location,
            'instance' => $instance,
            'assignment' => $assignment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_instance resource.
     *
     * @param string $project
     * @param string $location
     * @param string $instance
     *
     * @return string The formatted project_location_instance resource.
     */
    public static function projectLocationInstanceName(string $project, string $location, string $instance): string
    {
        return self::getPathTemplate('projectLocationInstance')->render([
            'project' => $project,
            'location' => $location,
            'instance' => $instance,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_zone_instance resource.
     *
     * @param string $project
     * @param string $zone
     * @param string $instance
     *
     * @return string The formatted project_zone_instance resource.
     */
    public static function projectZoneInstanceName(string $project, string $zone, string $instance): string
    {
        return self::getPathTemplate('projectZoneInstance')->render([
            'project' => $project,
            'zone' => $zone,
            'instance' => $instance,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * vulnerability_report resource.
     *
     * @param string $project
     * @param string $location
     * @param string $instance
     *
     * @return string The formatted vulnerability_report resource.
     */
    public static function vulnerabilityReportName(string $project, string $location, string $instance): string
    {
        return self::getPathTemplate('vulnerabilityReport')->render([
            'project' => $project,
            'location' => $location,
            'instance' => $instance,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - instance: projects/{project}/zones/{zone}/instances/{instance}
     * - instanceOSPolicyAssignment: projects/{project}/locations/{location}/instances/{instance}/osPolicyAssignments/{assignment}
     * - inventory: projects/{project}/locations/{location}/instances/{instance}/inventory
     * - location: projects/{project}/locations/{location}
     * - oSPolicyAssignment: projects/{project}/locations/{location}/osPolicyAssignments/{os_policy_assignment}
     * - oSPolicyAssignmentReport: projects/{project}/locations/{location}/instances/{instance}/osPolicyAssignments/{assignment}/report
     * - projectLocationInstance: projects/{project}/locations/{location}/instances/{instance}
     * - projectZoneInstance: projects/{project}/zones/{zone}/instances/{instance}
     * - vulnerabilityReport: projects/{project}/locations/{location}/instances/{instance}/vulnerabilityReport
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
     *           as "<uri>:<port>". Default 'osconfig.googleapis.com:443'.
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
     * Create an OS policy assignment.
     *
     * This method also creates the first revision of the OS policy assignment.
     *
     * This method returns a long running operation (LRO) that contains the
     * rollout details. The rollout can be cancelled by cancelling the LRO.
     *
     * For more information, see [Method:
     * projects.locations.osPolicyAssignments.operations.cancel](https://cloud.google.com/compute/docs/osconfig/rest/v1/projects.locations.osPolicyAssignments.operations/cancel).
     *
     * The async variant is
     * {@see OsConfigZonalServiceClient::createOSPolicyAssignmentAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/create_os_policy_assignment.php
     *
     * @param CreateOSPolicyAssignmentRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createOSPolicyAssignment(CreateOSPolicyAssignmentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateOSPolicyAssignment', $request, $callOptions)->wait();
    }

    /**
     * Delete the OS policy assignment.
     *
     * This method creates a new revision of the OS policy assignment.
     *
     * This method returns a long running operation (LRO) that contains the
     * rollout details. The rollout can be cancelled by cancelling the LRO.
     *
     * If the LRO completes and is not cancelled, all revisions associated with
     * the OS policy assignment are deleted.
     *
     * For more information, see [Method:
     * projects.locations.osPolicyAssignments.operations.cancel](https://cloud.google.com/compute/docs/osconfig/rest/v1/projects.locations.osPolicyAssignments.operations/cancel).
     *
     * The async variant is
     * {@see OsConfigZonalServiceClient::deleteOSPolicyAssignmentAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/delete_os_policy_assignment.php
     *
     * @param DeleteOSPolicyAssignmentRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteOSPolicyAssignment(DeleteOSPolicyAssignmentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteOSPolicyAssignment', $request, $callOptions)->wait();
    }

    /**
     * Get inventory data for the specified VM instance. If the VM has no
     * associated inventory, the message `NOT_FOUND` is returned.
     *
     * The async variant is {@see OsConfigZonalServiceClient::getInventoryAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/get_inventory.php
     *
     * @param GetInventoryRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Inventory
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getInventory(GetInventoryRequest $request, array $callOptions = []): Inventory
    {
        return $this->startApiCall('GetInventory', $request, $callOptions)->wait();
    }

    /**
     * Retrieve an existing OS policy assignment.
     *
     * This method always returns the latest revision. In order to retrieve a
     * previous revision of the assignment, also provide the revision ID in the
     * `name` parameter.
     *
     * The async variant is
     * {@see OsConfigZonalServiceClient::getOSPolicyAssignmentAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/get_os_policy_assignment.php
     *
     * @param GetOSPolicyAssignmentRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OSPolicyAssignment
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getOSPolicyAssignment(GetOSPolicyAssignmentRequest $request, array $callOptions = []): OSPolicyAssignment
    {
        return $this->startApiCall('GetOSPolicyAssignment', $request, $callOptions)->wait();
    }

    /**
     * Get the OS policy asssignment report for the specified Compute Engine VM
     * instance.
     *
     * The async variant is
     * {@see OsConfigZonalServiceClient::getOSPolicyAssignmentReportAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/get_os_policy_assignment_report.php
     *
     * @param GetOSPolicyAssignmentReportRequest $request     A request to house fields associated with the call.
     * @param array                              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OSPolicyAssignmentReport
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getOSPolicyAssignmentReport(GetOSPolicyAssignmentReportRequest $request, array $callOptions = []): OSPolicyAssignmentReport
    {
        return $this->startApiCall('GetOSPolicyAssignmentReport', $request, $callOptions)->wait();
    }

    /**
     * Gets the vulnerability report for the specified VM instance. Only VMs with
     * inventory data have vulnerability reports associated with them.
     *
     * The async variant is
     * {@see OsConfigZonalServiceClient::getVulnerabilityReportAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/get_vulnerability_report.php
     *
     * @param GetVulnerabilityReportRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return VulnerabilityReport
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getVulnerabilityReport(GetVulnerabilityReportRequest $request, array $callOptions = []): VulnerabilityReport
    {
        return $this->startApiCall('GetVulnerabilityReport', $request, $callOptions)->wait();
    }

    /**
     * List inventory data for all VM instances in the specified zone.
     *
     * The async variant is {@see OsConfigZonalServiceClient::listInventoriesAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/list_inventories.php
     *
     * @param ListInventoriesRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function listInventories(ListInventoriesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListInventories', $request, $callOptions);
    }

    /**
     * List OS policy asssignment reports for all Compute Engine VM instances in
     * the specified zone.
     *
     * The async variant is
     * {@see OsConfigZonalServiceClient::listOSPolicyAssignmentReportsAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/list_os_policy_assignment_reports.php
     *
     * @param ListOSPolicyAssignmentReportsRequest $request     A request to house fields associated with the call.
     * @param array                                $callOptions {
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
    public function listOSPolicyAssignmentReports(ListOSPolicyAssignmentReportsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListOSPolicyAssignmentReports', $request, $callOptions);
    }

    /**
     * List the OS policy assignment revisions for a given OS policy assignment.
     *
     * The async variant is
     * {@see OsConfigZonalServiceClient::listOSPolicyAssignmentRevisionsAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/list_os_policy_assignment_revisions.php
     *
     * @param ListOSPolicyAssignmentRevisionsRequest $request     A request to house fields associated with the call.
     * @param array                                  $callOptions {
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
    public function listOSPolicyAssignmentRevisions(ListOSPolicyAssignmentRevisionsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListOSPolicyAssignmentRevisions', $request, $callOptions);
    }

    /**
     * List the OS policy assignments under the parent resource.
     *
     * For each OS policy assignment, the latest revision is returned.
     *
     * The async variant is
     * {@see OsConfigZonalServiceClient::listOSPolicyAssignmentsAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/list_os_policy_assignments.php
     *
     * @param ListOSPolicyAssignmentsRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
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
    public function listOSPolicyAssignments(ListOSPolicyAssignmentsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListOSPolicyAssignments', $request, $callOptions);
    }

    /**
     * List vulnerability reports for all VM instances in the specified zone.
     *
     * The async variant is
     * {@see OsConfigZonalServiceClient::listVulnerabilityReportsAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/list_vulnerability_reports.php
     *
     * @param ListVulnerabilityReportsRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
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
    public function listVulnerabilityReports(ListVulnerabilityReportsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListVulnerabilityReports', $request, $callOptions);
    }

    /**
     * Update an existing OS policy assignment.
     *
     * This method creates a new revision of the OS policy assignment.
     *
     * This method returns a long running operation (LRO) that contains the
     * rollout details. The rollout can be cancelled by cancelling the LRO.
     *
     * For more information, see [Method:
     * projects.locations.osPolicyAssignments.operations.cancel](https://cloud.google.com/compute/docs/osconfig/rest/v1/projects.locations.osPolicyAssignments.operations/cancel).
     *
     * The async variant is
     * {@see OsConfigZonalServiceClient::updateOSPolicyAssignmentAsync()} .
     *
     * @example samples/V1/OsConfigZonalServiceClient/update_os_policy_assignment.php
     *
     * @param UpdateOSPolicyAssignmentRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateOSPolicyAssignment(UpdateOSPolicyAssignmentRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateOSPolicyAssignment', $request, $callOptions)->wait();
    }
}
