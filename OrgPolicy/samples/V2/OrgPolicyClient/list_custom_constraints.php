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

// [START orgpolicy_v2_generated_OrgPolicy_ListCustomConstraints_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\OrgPolicy\V2\Client\OrgPolicyClient;
use Google\Cloud\OrgPolicy\V2\CustomConstraint;
use Google\Cloud\OrgPolicy\V2\ListCustomConstraintsRequest;

/**
 * Retrieves all of the custom constraints that exist on a particular
 * organization resource.
 *
 * @param string $formattedParent The target Google Cloud resource that parents the set of custom
 *                                constraints that will be returned from this call. Must be in one of the
 *                                following forms:
 *
 *                                * `organizations/{organization_id}`
 *                                Please see {@see OrgPolicyClient::organizationName()} for help formatting this field.
 */
function list_custom_constraints_sample(string $formattedParent): void
{
    // Create a client.
    $orgPolicyClient = new OrgPolicyClient();

    // Prepare the request message.
    $request = (new ListCustomConstraintsRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $orgPolicyClient->listCustomConstraints($request);

        /** @var CustomConstraint $element */
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
    $formattedParent = OrgPolicyClient::organizationName('[ORGANIZATION]');

    list_custom_constraints_sample($formattedParent);
}
// [END orgpolicy_v2_generated_OrgPolicy_ListCustomConstraints_sync]
