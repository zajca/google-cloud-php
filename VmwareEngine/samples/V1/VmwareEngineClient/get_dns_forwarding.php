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

// [START vmwareengine_v1_generated_VmwareEngine_GetDnsForwarding_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\VmwareEngine\V1\Client\VmwareEngineClient;
use Google\Cloud\VmwareEngine\V1\DnsForwarding;
use Google\Cloud\VmwareEngine\V1\GetDnsForwardingRequest;

/**
 * Gets details of the `DnsForwarding` config.
 *
 * @param string $formattedName The resource name of a `DnsForwarding` to retrieve.
 *                              Resource names are schemeless URIs that follow the conventions in
 *                              https://cloud.google.com/apis/design/resource_names.
 *                              For example:
 *                              `projects/my-project/locations/us-central1-a/privateClouds/my-cloud/dnsForwarding`
 *                              Please see {@see VmwareEngineClient::dnsForwardingName()} for help formatting this field.
 */
function get_dns_forwarding_sample(string $formattedName): void
{
    // Create a client.
    $vmwareEngineClient = new VmwareEngineClient();

    // Prepare the request message.
    $request = (new GetDnsForwardingRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var DnsForwarding $response */
        $response = $vmwareEngineClient->getDnsForwarding($request);
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
    $formattedName = VmwareEngineClient::dnsForwardingName(
        '[PROJECT]',
        '[LOCATION]',
        '[PRIVATE_CLOUD]'
    );

    get_dns_forwarding_sample($formattedName);
}
// [END vmwareengine_v1_generated_VmwareEngine_GetDnsForwarding_sync]
