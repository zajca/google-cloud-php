<?php
/*
 * Copyright 2024 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/discoveryengine/v1beta/data_store_service.proto
 * Updates to the above are reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\DiscoveryEngine\V1beta\Client;

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
use Google\Cloud\DiscoveryEngine\V1beta\CreateDataStoreRequest;
use Google\Cloud\DiscoveryEngine\V1beta\DataStore;
use Google\Cloud\DiscoveryEngine\V1beta\DeleteDataStoreRequest;
use Google\Cloud\DiscoveryEngine\V1beta\GetDataStoreRequest;
use Google\Cloud\DiscoveryEngine\V1beta\ListDataStoresRequest;
use Google\Cloud\DiscoveryEngine\V1beta\UpdateDataStoreRequest;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for managing
 * [DataStore][google.cloud.discoveryengine.v1beta.DataStore] configuration.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @experimental
 *
 * @method PromiseInterface createDataStoreAsync(CreateDataStoreRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteDataStoreAsync(DeleteDataStoreRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDataStoreAsync(GetDataStoreRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDataStoresAsync(ListDataStoresRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDataStoreAsync(UpdateDataStoreRequest $request, array $optionalArgs = [])
 */
final class DataStoreServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.discoveryengine.v1beta.DataStoreService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'discoveryengine.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'discoveryengine.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/data_store_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/data_store_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/data_store_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/data_store_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     *
     * @experimental
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
     *
     * @experimental
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a collection
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $collection
     *
     * @return string The formatted collection resource.
     *
     * @experimental
     */
    public static function collectionName(string $project, string $location, string $collection): string
    {
        return self::getPathTemplate('collection')->render([
            'project' => $project,
            'location' => $location,
            'collection' => $collection,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a data_store
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     *
     * @return string The formatted data_store resource.
     *
     * @experimental
     */
    public static function dataStoreName(string $project, string $location, string $dataStore): string
    {
        return self::getPathTemplate('dataStore')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_collection_data_store resource.
     *
     * @param string $project
     * @param string $location
     * @param string $collection
     * @param string $dataStore
     *
     * @return string The formatted project_location_collection_data_store resource.
     *
     * @experimental
     */
    public static function projectLocationCollectionDataStoreName(
        string $project,
        string $location,
        string $collection,
        string $dataStore
    ): string {
        return self::getPathTemplate('projectLocationCollectionDataStore')->render([
            'project' => $project,
            'location' => $location,
            'collection' => $collection,
            'data_store' => $dataStore,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_data_store resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     *
     * @return string The formatted project_location_data_store resource.
     *
     * @experimental
     */
    public static function projectLocationDataStoreName(string $project, string $location, string $dataStore): string
    {
        return self::getPathTemplate('projectLocationDataStore')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - collection: projects/{project}/locations/{location}/collections/{collection}
     * - dataStore: projects/{project}/locations/{location}/dataStores/{data_store}
     * - projectLocationCollectionDataStore: projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}
     * - projectLocationDataStore: projects/{project}/locations/{location}/dataStores/{data_store}
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
     *
     * @experimental
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
     *           as "<uri>:<port>". Default 'discoveryengine.googleapis.com:443'.
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
     *
     * @experimental
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
     * Creates a [DataStore][google.cloud.discoveryengine.v1beta.DataStore].
     *
     * DataStore is for storing
     * [Documents][google.cloud.discoveryengine.v1beta.Document]. To serve these
     * documents for Search, or Recommendation use case, an
     * [Engine][google.cloud.discoveryengine.v1beta.Engine] needs to be created
     * separately.
     *
     * The async variant is {@see DataStoreServiceClient::createDataStoreAsync()} .
     *
     * @example samples/V1beta/DataStoreServiceClient/create_data_store.php
     *
     * @param CreateDataStoreRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
     *
     * @experimental
     */
    public function createDataStore(CreateDataStoreRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateDataStore', $request, $callOptions)->wait();
    }

    /**
     * Deletes a [DataStore][google.cloud.discoveryengine.v1beta.DataStore].
     *
     * The async variant is {@see DataStoreServiceClient::deleteDataStoreAsync()} .
     *
     * @example samples/V1beta/DataStoreServiceClient/delete_data_store.php
     *
     * @param DeleteDataStoreRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
     *
     * @experimental
     */
    public function deleteDataStore(DeleteDataStoreRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteDataStore', $request, $callOptions)->wait();
    }

    /**
     * Gets a [DataStore][google.cloud.discoveryengine.v1beta.DataStore].
     *
     * The async variant is {@see DataStoreServiceClient::getDataStoreAsync()} .
     *
     * @example samples/V1beta/DataStoreServiceClient/get_data_store.php
     *
     * @param GetDataStoreRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DataStore
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getDataStore(GetDataStoreRequest $request, array $callOptions = []): DataStore
    {
        return $this->startApiCall('GetDataStore', $request, $callOptions)->wait();
    }

    /**
     * Lists all the [DataStore][google.cloud.discoveryengine.v1beta.DataStore]s
     * associated with the project.
     *
     * The async variant is {@see DataStoreServiceClient::listDataStoresAsync()} .
     *
     * @example samples/V1beta/DataStoreServiceClient/list_data_stores.php
     *
     * @param ListDataStoresRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
     *
     * @experimental
     */
    public function listDataStores(ListDataStoresRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDataStores', $request, $callOptions);
    }

    /**
     * Updates a [DataStore][google.cloud.discoveryengine.v1beta.DataStore]
     *
     * The async variant is {@see DataStoreServiceClient::updateDataStoreAsync()} .
     *
     * @example samples/V1beta/DataStoreServiceClient/update_data_store.php
     *
     * @param UpdateDataStoreRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DataStore
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function updateDataStore(UpdateDataStoreRequest $request, array $callOptions = []): DataStore
    {
        return $this->startApiCall('UpdateDataStore', $request, $callOptions)->wait();
    }
}
