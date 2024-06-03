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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START cloudchannel_v1_generated_CloudChannelService_DeleteCustomer_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Channel\V1\Client\CloudChannelServiceClient;
use Google\Cloud\Channel\V1\DeleteCustomerRequest;

/**
 * Deletes the given [Customer][google.cloud.channel.v1.Customer] permanently.
 *
 * Possible error codes:
 *
 * * PERMISSION_DENIED: The account making the request does not own
 * this customer.
 * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
 * * FAILED_PRECONDITION: The customer has existing entitlements.
 * * NOT_FOUND: No [Customer][google.cloud.channel.v1.Customer] resource found
 * for the name in the request.
 *
 * @param string $formattedName The resource name of the customer to delete. Please see
 *                              {@see CloudChannelServiceClient::customerName()} for help formatting this field.
 */
function delete_customer_sample(string $formattedName): void
{
    // Create a client.
    $cloudChannelServiceClient = new CloudChannelServiceClient();

    // Prepare the request message.
    $request = (new DeleteCustomerRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        $cloudChannelServiceClient->deleteCustomer($request);
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
    $formattedName = CloudChannelServiceClient::customerName('[ACCOUNT]', '[CUSTOMER]');

    delete_customer_sample($formattedName);
}
// [END cloudchannel_v1_generated_CloudChannelService_DeleteCustomer_sync]
