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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START secretmanager_v1beta2_generated_SecretManagerService_AddSecretVersion_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\SecretManager\V1beta2\AddSecretVersionRequest;
use Google\Cloud\SecretManager\V1beta2\Client\SecretManagerServiceClient;
use Google\Cloud\SecretManager\V1beta2\SecretPayload;
use Google\Cloud\SecretManager\V1beta2\SecretVersion;

/**
 * Creates a new
 * [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion]
 * containing secret data and attaches it to an existing
 * [Secret][google.cloud.secretmanager.v1beta2.Secret].
 *
 * @param string $formattedParent The resource name of the
 *                                [Secret][google.cloud.secretmanager.v1beta2.Secret] to associate with the
 *                                [SecretVersion][google.cloud.secretmanager.v1beta2.SecretVersion] in the
 *                                format `projects/&#42;/secrets/*` or `projects/&#42;/locations/&#42;/secrets/*`. Please see
 *                                {@see SecretManagerServiceClient::secretName()} for help formatting this field.
 */
function add_secret_version_sample(string $formattedParent): void
{
    // Create a client.
    $secretManagerServiceClient = new SecretManagerServiceClient();

    // Prepare the request message.
    $payload = new SecretPayload();
    $request = (new AddSecretVersionRequest())
        ->setParent($formattedParent)
        ->setPayload($payload);

    // Call the API and handle any network failures.
    try {
        /** @var SecretVersion $response */
        $response = $secretManagerServiceClient->addSecretVersion($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = SecretManagerServiceClient::secretName('[PROJECT]', '[SECRET]');

    add_secret_version_sample($formattedParent);
}
// [END secretmanager_v1beta2_generated_SecretManagerService_AddSecretVersion_sync]
