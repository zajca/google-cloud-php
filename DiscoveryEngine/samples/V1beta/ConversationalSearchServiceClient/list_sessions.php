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

// [START discoveryengine_v1beta_generated_ConversationalSearchService_ListSessions_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\DiscoveryEngine\V1beta\Client\ConversationalSearchServiceClient;
use Google\Cloud\DiscoveryEngine\V1beta\ListSessionsRequest;
use Google\Cloud\DiscoveryEngine\V1beta\Session;

/**
 * Lists all Sessions by their parent
 * [DataStore][google.cloud.discoveryengine.v1beta.DataStore].
 *
 * @param string $formattedParent The data store resource name. Format:
 *                                `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
 *                                Please see {@see ConversationalSearchServiceClient::dataStoreName()} for help formatting this field.
 */
function list_sessions_sample(string $formattedParent): void
{
    // Create a client.
    $conversationalSearchServiceClient = new ConversationalSearchServiceClient();

    // Prepare the request message.
    $request = (new ListSessionsRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $conversationalSearchServiceClient->listSessions($request);

        /** @var Session $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
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
    $formattedParent = ConversationalSearchServiceClient::dataStoreName(
        '[PROJECT]',
        '[LOCATION]',
        '[DATA_STORE]'
    );

    list_sessions_sample($formattedParent);
}
// [END discoveryengine_v1beta_generated_ConversationalSearchService_ListSessions_sync]
