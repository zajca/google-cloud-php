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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/language/v1/language_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Language\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Language\V1\AnalyzeEntitiesRequest;
use Google\Cloud\Language\V1\AnalyzeEntitiesResponse;
use Google\Cloud\Language\V1\AnalyzeEntitySentimentRequest;
use Google\Cloud\Language\V1\AnalyzeEntitySentimentResponse;
use Google\Cloud\Language\V1\AnalyzeSentimentRequest;
use Google\Cloud\Language\V1\AnalyzeSentimentResponse;
use Google\Cloud\Language\V1\AnalyzeSyntaxRequest;
use Google\Cloud\Language\V1\AnalyzeSyntaxResponse;
use Google\Cloud\Language\V1\AnnotateTextRequest;
use Google\Cloud\Language\V1\AnnotateTextResponse;
use Google\Cloud\Language\V1\ClassifyTextRequest;
use Google\Cloud\Language\V1\ClassifyTextResponse;
use Google\Cloud\Language\V1\ModerateTextRequest;
use Google\Cloud\Language\V1\ModerateTextResponse;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Provides text analysis operations such as sentiment analysis and entity
 * recognition.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * @method PromiseInterface analyzeEntitiesAsync(AnalyzeEntitiesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface analyzeEntitySentimentAsync(AnalyzeEntitySentimentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface analyzeSentimentAsync(AnalyzeSentimentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface analyzeSyntaxAsync(AnalyzeSyntaxRequest $request, array $optionalArgs = [])
 * @method PromiseInterface annotateTextAsync(AnnotateTextRequest $request, array $optionalArgs = [])
 * @method PromiseInterface classifyTextAsync(ClassifyTextRequest $request, array $optionalArgs = [])
 * @method PromiseInterface moderateTextAsync(ModerateTextRequest $request, array $optionalArgs = [])
 */
final class LanguageServiceClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.language.v1.LanguageService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'language.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'language.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-language',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/language_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/language_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/language_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/language_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'language.googleapis.com:443'.
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
     * Finds named entities (currently proper names and common nouns) in the text
     * along with entity types, salience, mentions for each entity, and
     * other properties.
     *
     * The async variant is {@see LanguageServiceClient::analyzeEntitiesAsync()} .
     *
     * @example samples/V1/LanguageServiceClient/analyze_entities.php
     *
     * @param AnalyzeEntitiesRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AnalyzeEntitiesResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function analyzeEntities(AnalyzeEntitiesRequest $request, array $callOptions = []): AnalyzeEntitiesResponse
    {
        return $this->startApiCall('AnalyzeEntities', $request, $callOptions)->wait();
    }

    /**
     * Finds entities, similar to
     * [AnalyzeEntities][google.cloud.language.v1.LanguageService.AnalyzeEntities]
     * in the text and analyzes sentiment associated with each entity and its
     * mentions.
     *
     * The async variant is {@see LanguageServiceClient::analyzeEntitySentimentAsync()}
     * .
     *
     * @example samples/V1/LanguageServiceClient/analyze_entity_sentiment.php
     *
     * @param AnalyzeEntitySentimentRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AnalyzeEntitySentimentResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function analyzeEntitySentiment(AnalyzeEntitySentimentRequest $request, array $callOptions = []): AnalyzeEntitySentimentResponse
    {
        return $this->startApiCall('AnalyzeEntitySentiment', $request, $callOptions)->wait();
    }

    /**
     * Analyzes the sentiment of the provided text.
     *
     * The async variant is {@see LanguageServiceClient::analyzeSentimentAsync()} .
     *
     * @example samples/V1/LanguageServiceClient/analyze_sentiment.php
     *
     * @param AnalyzeSentimentRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AnalyzeSentimentResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function analyzeSentiment(AnalyzeSentimentRequest $request, array $callOptions = []): AnalyzeSentimentResponse
    {
        return $this->startApiCall('AnalyzeSentiment', $request, $callOptions)->wait();
    }

    /**
     * Analyzes the syntax of the text and provides sentence boundaries and
     * tokenization along with part of speech tags, dependency trees, and other
     * properties.
     *
     * The async variant is {@see LanguageServiceClient::analyzeSyntaxAsync()} .
     *
     * @example samples/V1/LanguageServiceClient/analyze_syntax.php
     *
     * @param AnalyzeSyntaxRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AnalyzeSyntaxResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function analyzeSyntax(AnalyzeSyntaxRequest $request, array $callOptions = []): AnalyzeSyntaxResponse
    {
        return $this->startApiCall('AnalyzeSyntax', $request, $callOptions)->wait();
    }

    /**
     * A convenience method that provides all the features that analyzeSentiment,
     * analyzeEntities, and analyzeSyntax provide in one call.
     *
     * The async variant is {@see LanguageServiceClient::annotateTextAsync()} .
     *
     * @example samples/V1/LanguageServiceClient/annotate_text.php
     *
     * @param AnnotateTextRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AnnotateTextResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function annotateText(AnnotateTextRequest $request, array $callOptions = []): AnnotateTextResponse
    {
        return $this->startApiCall('AnnotateText', $request, $callOptions)->wait();
    }

    /**
     * Classifies a document into categories.
     *
     * The async variant is {@see LanguageServiceClient::classifyTextAsync()} .
     *
     * @example samples/V1/LanguageServiceClient/classify_text.php
     *
     * @param ClassifyTextRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ClassifyTextResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function classifyText(ClassifyTextRequest $request, array $callOptions = []): ClassifyTextResponse
    {
        return $this->startApiCall('ClassifyText', $request, $callOptions)->wait();
    }

    /**
     * Moderates a document for harmful and sensitive categories.
     *
     * The async variant is {@see LanguageServiceClient::moderateTextAsync()} .
     *
     * @example samples/V1/LanguageServiceClient/moderate_text.php
     *
     * @param ModerateTextRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ModerateTextResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function moderateText(ModerateTextRequest $request, array $callOptions = []): ModerateTextResponse
    {
        return $this->startApiCall('ModerateText', $request, $callOptions)->wait();
    }
}
