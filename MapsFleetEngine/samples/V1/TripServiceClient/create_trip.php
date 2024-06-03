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

// [START fleetengine_v1_generated_TripService_CreateTrip_sync]
use Google\ApiCore\ApiException;
use Google\Maps\FleetEngine\V1\Client\TripServiceClient;
use Google\Maps\FleetEngine\V1\CreateTripRequest;
use Google\Maps\FleetEngine\V1\Trip;

/**
 * Creates a trip in the Fleet Engine and returns the new trip.
 *
 * @param string $formattedParent Must be in the format `providers/{provider}`.
 *                                The provider must be the Project ID (for example, `sample-cloud-project`)
 *                                of the Google Cloud Project of which the service account making
 *                                this call is a member. Please see
 *                                {@see TripServiceClient::tripName()} for help formatting this field.
 * @param string $tripId          Unique Trip ID.
 *                                Subject to the following restrictions:
 *
 *                                * Must be a valid Unicode string.
 *                                * Limited to a maximum length of 64 characters.
 *                                * Normalized according to [Unicode Normalization Form C]
 *                                (http://www.unicode.org/reports/tr15/).
 *                                * May not contain any of the following ASCII characters: '/', ':', '?',
 *                                ',', or '#'.
 */
function create_trip_sample(string $formattedParent, string $tripId): void
{
    // Create a client.
    $tripServiceClient = new TripServiceClient();

    // Prepare the request message.
    $trip = new Trip();
    $request = (new CreateTripRequest())
        ->setParent($formattedParent)
        ->setTripId($tripId)
        ->setTrip($trip);

    // Call the API and handle any network failures.
    try {
        /** @var Trip $response */
        $response = $tripServiceClient->createTrip($request);
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
    $formattedParent = TripServiceClient::tripName('[PROVIDER]', '[TRIP]');
    $tripId = '[TRIP_ID]';

    create_trip_sample($formattedParent, $tripId);
}
// [END fleetengine_v1_generated_TripService_CreateTrip_sync]
