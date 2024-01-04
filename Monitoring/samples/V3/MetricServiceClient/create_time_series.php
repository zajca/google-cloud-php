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

// [START monitoring_v3_generated_MetricService_CreateTimeSeries_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Monitoring\V3\Client\MetricServiceClient;
use Google\Cloud\Monitoring\V3\CreateTimeSeriesRequest;
use Google\Cloud\Monitoring\V3\TimeSeries;

/**
 * Creates or adds data to one or more time series.
 * The response is empty if all time series in the request were written.
 * If any time series could not be written, a corresponding failure message is
 * included in the error response.
 *
 * @param string $formattedName The [project](https://cloud.google.com/monitoring/api/v3#project_name) on
 *                              which to execute the request. The format is:
 *
 *                              projects/[PROJECT_ID_OR_NUMBER]
 *                              Please see {@see MetricServiceClient::projectName()} for help formatting this field.
 */
function create_time_series_sample(string $formattedName): void
{
    // Create a client.
    $metricServiceClient = new MetricServiceClient();

    // Prepare the request message.
    $timeSeries = [new TimeSeries()];
    $request = (new CreateTimeSeriesRequest())
        ->setName($formattedName)
        ->setTimeSeries($timeSeries);

    // Call the API and handle any network failures.
    try {
        $metricServiceClient->createTimeSeries($request);
        printf('Call completed successfully.' . PHP_EOL);
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
    $formattedName = MetricServiceClient::projectName('[PROJECT]');

    create_time_series_sample($formattedName);
}
// [END monitoring_v3_generated_MetricService_CreateTimeSeries_sync]
