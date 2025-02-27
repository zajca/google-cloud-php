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

// [START cloudscheduler_v1_generated_CloudScheduler_PauseJob_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Scheduler\V1\CloudSchedulerClient;
use Google\Cloud\Scheduler\V1\Job;

/**
 * Pauses a job.
 *
 * If a job is paused then the system will stop executing the job
 * until it is re-enabled via
 * [ResumeJob][google.cloud.scheduler.v1.CloudScheduler.ResumeJob]. The state
 * of the job is stored in [state][google.cloud.scheduler.v1.Job.state]; if
 * paused it will be set to
 * [Job.State.PAUSED][google.cloud.scheduler.v1.Job.State.PAUSED]. A job must
 * be in [Job.State.ENABLED][google.cloud.scheduler.v1.Job.State.ENABLED] to
 * be paused.
 *
 * @param string $formattedName The job name. For example:
 *                              `projects/PROJECT_ID/locations/LOCATION_ID/jobs/JOB_ID`. Please see
 *                              {@see CloudSchedulerClient::jobName()} for help formatting this field.
 */
function pause_job_sample(string $formattedName): void
{
    // Create a client.
    $cloudSchedulerClient = new CloudSchedulerClient();

    // Call the API and handle any network failures.
    try {
        /** @var Job $response */
        $response = $cloudSchedulerClient->pauseJob($formattedName);
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
    $formattedName = CloudSchedulerClient::jobName('[PROJECT]', '[LOCATION]', '[JOB]');

    pause_job_sample($formattedName);
}
// [END cloudscheduler_v1_generated_CloudScheduler_PauseJob_sync]
