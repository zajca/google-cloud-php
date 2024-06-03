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

// [START servicehealth_v1_generated_ServiceHealth_ListEvents_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\ServiceHealth\V1\Client\ServiceHealthClient;
use Google\Cloud\ServiceHealth\V1\Event;
use Google\Cloud\ServiceHealth\V1\ListEventsRequest;

/**
 * Lists events under a given project and location.
 *
 * @param string $formattedParent Parent value using the form
 *                                `projects/{project_id}/locations/{location}/events`.
 *
 *                                `project_id` - ID of the project for which to list service health
 *                                events.
 *                                `location` - The location to get the service health events from.
 *                                To retrieve service health events of category = INCIDENT, use `location` =
 *                                `global`. Please see
 *                                {@see ServiceHealthClient::locationName()} for help formatting this field.
 */
function list_events_sample(string $formattedParent): void
{
    // Create a client.
    $serviceHealthClient = new ServiceHealthClient();

    // Prepare the request message.
    $request = (new ListEventsRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $serviceHealthClient->listEvents($request);

        /** @var Event $element */
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
    $formattedParent = ServiceHealthClient::locationName('[PROJECT]', '[LOCATION]');

    list_events_sample($formattedParent);
}
// [END servicehealth_v1_generated_ServiceHealth_ListEvents_sync]
