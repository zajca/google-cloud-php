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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dataplex/v1/data_taxonomy.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dataplex\V1\Client;

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
use Google\Cloud\Dataplex\V1\CreateDataAttributeBindingRequest;
use Google\Cloud\Dataplex\V1\CreateDataAttributeRequest;
use Google\Cloud\Dataplex\V1\CreateDataTaxonomyRequest;
use Google\Cloud\Dataplex\V1\DataAttribute;
use Google\Cloud\Dataplex\V1\DataAttributeBinding;
use Google\Cloud\Dataplex\V1\DataTaxonomy;
use Google\Cloud\Dataplex\V1\DeleteDataAttributeBindingRequest;
use Google\Cloud\Dataplex\V1\DeleteDataAttributeRequest;
use Google\Cloud\Dataplex\V1\DeleteDataTaxonomyRequest;
use Google\Cloud\Dataplex\V1\GetDataAttributeBindingRequest;
use Google\Cloud\Dataplex\V1\GetDataAttributeRequest;
use Google\Cloud\Dataplex\V1\GetDataTaxonomyRequest;
use Google\Cloud\Dataplex\V1\ListDataAttributeBindingsRequest;
use Google\Cloud\Dataplex\V1\ListDataAttributesRequest;
use Google\Cloud\Dataplex\V1\ListDataTaxonomiesRequest;
use Google\Cloud\Dataplex\V1\UpdateDataAttributeBindingRequest;
use Google\Cloud\Dataplex\V1\UpdateDataAttributeRequest;
use Google\Cloud\Dataplex\V1\UpdateDataTaxonomyRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: DataTaxonomyService enables attribute-based governance. The resources
 * currently offered include DataTaxonomy and DataAttribute.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createDataAttributeAsync(CreateDataAttributeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createDataAttributeBindingAsync(CreateDataAttributeBindingRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createDataTaxonomyAsync(CreateDataTaxonomyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteDataAttributeAsync(DeleteDataAttributeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteDataAttributeBindingAsync(DeleteDataAttributeBindingRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteDataTaxonomyAsync(DeleteDataTaxonomyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDataAttributeAsync(GetDataAttributeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDataAttributeBindingAsync(GetDataAttributeBindingRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDataTaxonomyAsync(GetDataTaxonomyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDataAttributeBindingsAsync(ListDataAttributeBindingsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDataAttributesAsync(ListDataAttributesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDataTaxonomiesAsync(ListDataTaxonomiesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDataAttributeAsync(UpdateDataAttributeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDataAttributeBindingAsync(UpdateDataAttributeBindingRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDataTaxonomyAsync(UpdateDataTaxonomyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class DataTaxonomyServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dataplex.v1.DataTaxonomyService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'dataplex.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dataplex.UNIVERSE_DOMAIN';

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
            'clientConfig' => __DIR__ . '/../resources/data_taxonomy_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/data_taxonomy_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/data_taxonomy_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/data_taxonomy_service_rest_client_config.php',
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
     * Formats a string containing the fully-qualified path to represent a
     * data_attribute resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataTaxonomy
     * @param string $dataAttributeId
     *
     * @return string The formatted data_attribute resource.
     */
    public static function dataAttributeName(string $project, string $location, string $dataTaxonomy, string $dataAttributeId): string
    {
        return self::getPathTemplate('dataAttribute')->render([
            'project' => $project,
            'location' => $location,
            'dataTaxonomy' => $dataTaxonomy,
            'data_attribute_id' => $dataAttributeId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * data_attribute_binding resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataAttributeBindingId
     *
     * @return string The formatted data_attribute_binding resource.
     */
    public static function dataAttributeBindingName(string $project, string $location, string $dataAttributeBindingId): string
    {
        return self::getPathTemplate('dataAttributeBinding')->render([
            'project' => $project,
            'location' => $location,
            'data_attribute_binding_id' => $dataAttributeBindingId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * data_taxonomy resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataTaxonomyId
     *
     * @return string The formatted data_taxonomy resource.
     */
    public static function dataTaxonomyName(string $project, string $location, string $dataTaxonomyId): string
    {
        return self::getPathTemplate('dataTaxonomy')->render([
            'project' => $project,
            'location' => $location,
            'data_taxonomy_id' => $dataTaxonomyId,
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
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - dataAttribute: projects/{project}/locations/{location}/dataTaxonomies/{dataTaxonomy}/attributes/{data_attribute_id}
     * - dataAttributeBinding: projects/{project}/locations/{location}/dataAttributeBindings/{data_attribute_binding_id}
     * - dataTaxonomy: projects/{project}/locations/{location}/dataTaxonomies/{data_taxonomy_id}
     * - location: projects/{project}/locations/{location}
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
     *           as "<uri>:<port>". Default 'dataplex.googleapis.com:443'.
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
     * Create a DataAttribute resource.
     *
     * The async variant is
     * {@see DataTaxonomyServiceClient::createDataAttributeAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/create_data_attribute.php
     *
     * @param CreateDataAttributeRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
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
    public function createDataAttribute(CreateDataAttributeRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateDataAttribute', $request, $callOptions)->wait();
    }

    /**
     * Create a DataAttributeBinding resource.
     *
     * The async variant is
     * {@see DataTaxonomyServiceClient::createDataAttributeBindingAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/create_data_attribute_binding.php
     *
     * @param CreateDataAttributeBindingRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
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
    public function createDataAttributeBinding(CreateDataAttributeBindingRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateDataAttributeBinding', $request, $callOptions)->wait();
    }

    /**
     * Create a DataTaxonomy resource.
     *
     * The async variant is {@see DataTaxonomyServiceClient::createDataTaxonomyAsync()}
     * .
     *
     * @example samples/V1/DataTaxonomyServiceClient/create_data_taxonomy.php
     *
     * @param CreateDataTaxonomyRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
    public function createDataTaxonomy(CreateDataTaxonomyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateDataTaxonomy', $request, $callOptions)->wait();
    }

    /**
     * Deletes a Data Attribute resource.
     *
     * The async variant is
     * {@see DataTaxonomyServiceClient::deleteDataAttributeAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/delete_data_attribute.php
     *
     * @param DeleteDataAttributeRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
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
    public function deleteDataAttribute(DeleteDataAttributeRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteDataAttribute', $request, $callOptions)->wait();
    }

    /**
     * Deletes a DataAttributeBinding resource. All attributes within the
     * DataAttributeBinding must be deleted before the DataAttributeBinding can be
     * deleted.
     *
     * The async variant is
     * {@see DataTaxonomyServiceClient::deleteDataAttributeBindingAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/delete_data_attribute_binding.php
     *
     * @param DeleteDataAttributeBindingRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
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
    public function deleteDataAttributeBinding(DeleteDataAttributeBindingRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteDataAttributeBinding', $request, $callOptions)->wait();
    }

    /**
     * Deletes a DataTaxonomy resource. All attributes within the DataTaxonomy
     * must be deleted before the DataTaxonomy can be deleted.
     *
     * The async variant is {@see DataTaxonomyServiceClient::deleteDataTaxonomyAsync()}
     * .
     *
     * @example samples/V1/DataTaxonomyServiceClient/delete_data_taxonomy.php
     *
     * @param DeleteDataTaxonomyRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
    public function deleteDataTaxonomy(DeleteDataTaxonomyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteDataTaxonomy', $request, $callOptions)->wait();
    }

    /**
     * Retrieves a Data Attribute resource.
     *
     * The async variant is {@see DataTaxonomyServiceClient::getDataAttributeAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/get_data_attribute.php
     *
     * @param GetDataAttributeRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DataAttribute
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDataAttribute(GetDataAttributeRequest $request, array $callOptions = []): DataAttribute
    {
        return $this->startApiCall('GetDataAttribute', $request, $callOptions)->wait();
    }

    /**
     * Retrieves a DataAttributeBinding resource.
     *
     * The async variant is
     * {@see DataTaxonomyServiceClient::getDataAttributeBindingAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/get_data_attribute_binding.php
     *
     * @param GetDataAttributeBindingRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DataAttributeBinding
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDataAttributeBinding(GetDataAttributeBindingRequest $request, array $callOptions = []): DataAttributeBinding
    {
        return $this->startApiCall('GetDataAttributeBinding', $request, $callOptions)->wait();
    }

    /**
     * Retrieves a DataTaxonomy resource.
     *
     * The async variant is {@see DataTaxonomyServiceClient::getDataTaxonomyAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/get_data_taxonomy.php
     *
     * @param GetDataTaxonomyRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DataTaxonomy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDataTaxonomy(GetDataTaxonomyRequest $request, array $callOptions = []): DataTaxonomy
    {
        return $this->startApiCall('GetDataTaxonomy', $request, $callOptions)->wait();
    }

    /**
     * Lists DataAttributeBinding resources in a project and location.
     *
     * The async variant is
     * {@see DataTaxonomyServiceClient::listDataAttributeBindingsAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/list_data_attribute_bindings.php
     *
     * @param ListDataAttributeBindingsRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
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
    public function listDataAttributeBindings(ListDataAttributeBindingsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDataAttributeBindings', $request, $callOptions);
    }

    /**
     * Lists Data Attribute resources in a DataTaxonomy.
     *
     * The async variant is {@see DataTaxonomyServiceClient::listDataAttributesAsync()}
     * .
     *
     * @example samples/V1/DataTaxonomyServiceClient/list_data_attributes.php
     *
     * @param ListDataAttributesRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
    public function listDataAttributes(ListDataAttributesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDataAttributes', $request, $callOptions);
    }

    /**
     * Lists DataTaxonomy resources in a project and location.
     *
     * The async variant is {@see DataTaxonomyServiceClient::listDataTaxonomiesAsync()}
     * .
     *
     * @example samples/V1/DataTaxonomyServiceClient/list_data_taxonomies.php
     *
     * @param ListDataTaxonomiesRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
    public function listDataTaxonomies(ListDataTaxonomiesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDataTaxonomies', $request, $callOptions);
    }

    /**
     * Updates a DataAttribute resource.
     *
     * The async variant is
     * {@see DataTaxonomyServiceClient::updateDataAttributeAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/update_data_attribute.php
     *
     * @param UpdateDataAttributeRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
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
    public function updateDataAttribute(UpdateDataAttributeRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateDataAttribute', $request, $callOptions)->wait();
    }

    /**
     * Updates a DataAttributeBinding resource.
     *
     * The async variant is
     * {@see DataTaxonomyServiceClient::updateDataAttributeBindingAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/update_data_attribute_binding.php
     *
     * @param UpdateDataAttributeBindingRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
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
    public function updateDataAttributeBinding(UpdateDataAttributeBindingRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateDataAttributeBinding', $request, $callOptions)->wait();
    }

    /**
     * Updates a DataTaxonomy resource.
     *
     * The async variant is {@see DataTaxonomyServiceClient::updateDataTaxonomyAsync()}
     * .
     *
     * @example samples/V1/DataTaxonomyServiceClient/update_data_taxonomy.php
     *
     * @param UpdateDataTaxonomyRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
    public function updateDataTaxonomy(UpdateDataTaxonomyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateDataTaxonomy', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see DataTaxonomyServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/get_iam_policy.php
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
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see DataTaxonomyServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/set_iam_policy.php
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
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see DataTaxonomyServiceClient::testIamPermissionsAsync()}
     * .
     *
     * @example samples/V1/DataTaxonomyServiceClient/test_iam_permissions.php
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
     * Gets information about a location.
     *
     * The async variant is {@see DataTaxonomyServiceClient::getLocationAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/get_location.php
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
     * The async variant is {@see DataTaxonomyServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1/DataTaxonomyServiceClient/list_locations.php
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
