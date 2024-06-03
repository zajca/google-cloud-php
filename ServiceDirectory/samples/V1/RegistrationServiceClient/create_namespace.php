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

// [START servicedirectory_v1_generated_RegistrationService_CreateNamespace_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\ServiceDirectory\V1\Client\RegistrationServiceClient;
use Google\Cloud\ServiceDirectory\V1\CreateNamespaceRequest;
use Google\Cloud\ServiceDirectory\V1\PBNamespace;

/**
 * Creates a namespace, and returns the new namespace.
 *
 * @param string $formattedParent The resource name of the project and location the namespace
 *                                will be created in. Please see
 *                                {@see RegistrationServiceClient::locationName()} for help formatting this field.
 * @param string $namespaceId     The Resource ID must be 1-63 characters long, and comply with
 *                                <a href="https://www.ietf.org/rfc/rfc1035.txt" target="_blank">RFC1035</a>.
 *                                Specifically, the name must be 1-63 characters long and match the regular
 *                                expression `[a-z](?:[-a-z0-9]{0,61}[a-z0-9])?` which means the first
 *                                character must be a lowercase letter, and all following characters must
 *                                be a dash, lowercase letter, or digit, except the last character, which
 *                                cannot be a dash.
 */
function create_namespace_sample(string $formattedParent, string $namespaceId): void
{
    // Create a client.
    $registrationServiceClient = new RegistrationServiceClient();

    // Prepare the request message.
    $namespace = new PBNamespace();
    $request = (new CreateNamespaceRequest())
        ->setParent($formattedParent)
        ->setNamespaceId($namespaceId)
        ->setNamespace($namespace);

    // Call the API and handle any network failures.
    try {
        /** @var PBNamespace $response */
        $response = $registrationServiceClient->createNamespace($request);
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
    $formattedParent = RegistrationServiceClient::locationName('[PROJECT]', '[LOCATION]');
    $namespaceId = '[NAMESPACE_ID]';

    create_namespace_sample($formattedParent, $namespaceId);
}
// [END servicedirectory_v1_generated_RegistrationService_CreateNamespace_sync]
