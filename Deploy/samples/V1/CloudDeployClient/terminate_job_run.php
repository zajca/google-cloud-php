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

// [START clouddeploy_v1_generated_CloudDeploy_TerminateJobRun_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Deploy\V1\Client\CloudDeployClient;
use Google\Cloud\Deploy\V1\TerminateJobRunRequest;
use Google\Cloud\Deploy\V1\TerminateJobRunResponse;

/**
 * Terminates a Job Run in a given project and location.
 *
 * @param string $formattedName Name of the `JobRun`. Format must be
 *                              projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/
 *                              releases/{release}/rollouts/{rollout}/jobRuns/{jobRun}. Please see
 *                              {@see CloudDeployClient::jobRunName()} for help formatting this field.
 */
function terminate_job_run_sample(string $formattedName): void
{
    // Create a client.
    $cloudDeployClient = new CloudDeployClient();

    // Prepare the request message.
    $request = (new TerminateJobRunRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var TerminateJobRunResponse $response */
        $response = $cloudDeployClient->terminateJobRun($request);
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
    $formattedName = CloudDeployClient::jobRunName(
        '[PROJECT]',
        '[LOCATION]',
        '[DELIVERY_PIPELINE]',
        '[RELEASE]',
        '[ROLLOUT]',
        '[JOB_RUN]'
    );

    terminate_job_run_sample($formattedName);
}
// [END clouddeploy_v1_generated_CloudDeploy_TerminateJobRun_sync]
