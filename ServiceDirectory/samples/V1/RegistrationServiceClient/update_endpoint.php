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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START servicedirectory_v1_generated_RegistrationService_UpdateEndpoint_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\ServiceDirectory\V1\Client\RegistrationServiceClient;
use Google\Cloud\ServiceDirectory\V1\Endpoint;
use Google\Cloud\ServiceDirectory\V1\UpdateEndpointRequest;
use Google\Protobuf\FieldMask;

/**
 * Updates an endpoint.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function update_endpoint_sample(): void
{
    // Create a client.
    $registrationServiceClient = new RegistrationServiceClient();

    // Prepare the request message.
    $endpoint = new Endpoint();
    $updateMask = new FieldMask();
    $request = (new UpdateEndpointRequest())
        ->setEndpoint($endpoint)
        ->setUpdateMask($updateMask);

    // Call the API and handle any network failures.
    try {
        /** @var Endpoint $response */
        $response = $registrationServiceClient->updateEndpoint($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}
// [END servicedirectory_v1_generated_RegistrationService_UpdateEndpoint_sync]
