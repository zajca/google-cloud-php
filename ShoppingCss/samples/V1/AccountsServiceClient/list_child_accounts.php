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

// [START css_v1_generated_AccountsService_ListChildAccounts_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Shopping\Css\V1\Account;
use Google\Shopping\Css\V1\Client\AccountsServiceClient;
use Google\Shopping\Css\V1\ListChildAccountsRequest;

/**
 * Lists all the accounts under the specified CSS account ID, and
 * optionally filters by label ID and account name.
 *
 * @param string $formattedParent The parent account. Must be a CSS group or domain.
 *                                Format: accounts/{account}
 *                                Please see {@see AccountsServiceClient::accountName()} for help formatting this field.
 */
function list_child_accounts_sample(string $formattedParent): void
{
    // Create a client.
    $accountsServiceClient = new AccountsServiceClient();

    // Prepare the request message.
    $request = (new ListChildAccountsRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $accountsServiceClient->listChildAccounts($request);

        /** @var Account $element */
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
    $formattedParent = AccountsServiceClient::accountName('[ACCOUNT]');

    list_child_accounts_sample($formattedParent);
}
// [END css_v1_generated_AccountsService_ListChildAccounts_sync]
