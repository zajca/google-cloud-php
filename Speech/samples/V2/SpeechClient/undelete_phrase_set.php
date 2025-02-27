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

// [START speech_v2_generated_Speech_UndeletePhraseSet_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Speech\V2\PhraseSet;
use Google\Cloud\Speech\V2\SpeechClient;
use Google\Rpc\Status;

/**
 * Undeletes the [PhraseSet][google.cloud.speech.v2.PhraseSet].
 *
 * @param string $formattedName The name of the PhraseSet to undelete.
 *                              Format: `projects/{project}/locations/{location}/phraseSets/{phrase_set}`
 *                              Please see {@see SpeechClient::phraseSetName()} for help formatting this field.
 */
function undelete_phrase_set_sample(string $formattedName): void
{
    // Create a client.
    $speechClient = new SpeechClient();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $speechClient->undeletePhraseSet($formattedName);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var PhraseSet $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
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
    $formattedName = SpeechClient::phraseSetName('[PROJECT]', '[LOCATION]', '[PHRASE_SET]');

    undelete_phrase_set_sample($formattedName);
}
// [END speech_v2_generated_Speech_UndeletePhraseSet_sync]
