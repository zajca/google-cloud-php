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

// [START cloudfunctions_v2_generated_FunctionService_GenerateDownloadUrl_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Functions\V2\Client\FunctionServiceClient;
use Google\Cloud\Functions\V2\GenerateDownloadUrlRequest;
use Google\Cloud\Functions\V2\GenerateDownloadUrlResponse;

/**
 * Returns a signed URL for downloading deployed function source code.
 * The URL is only valid for a limited period and should be used within
 * 30 minutes of generation.
 * For more information about the signed URL usage see:
 * https://cloud.google.com/storage/docs/access-control/signed-urls
 *
 * @param string $formattedName The name of function for which source code Google Cloud Storage
 *                              signed URL should be generated. Please see
 *                              {@see FunctionServiceClient::functionName()} for help formatting this field.
 */
function generate_download_url_sample(string $formattedName): void
{
    // Create a client.
    $functionServiceClient = new FunctionServiceClient();

    // Prepare the request message.
    $request = (new GenerateDownloadUrlRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var GenerateDownloadUrlResponse $response */
        $response = $functionServiceClient->generateDownloadUrl($request);
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
    $formattedName = FunctionServiceClient::functionName('[PROJECT]', '[LOCATION]', '[FUNCTION]');

    generate_download_url_sample($formattedName);
}
// [END cloudfunctions_v2_generated_FunctionService_GenerateDownloadUrl_sync]
