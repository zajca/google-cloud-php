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

// [START jobs_v4_generated_JobService_ListJobs_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Talent\V4\Client\JobServiceClient;
use Google\Cloud\Talent\V4\Job;
use Google\Cloud\Talent\V4\ListJobsRequest;

/**
 * Lists jobs by filter.
 *
 * @param string $formattedParent The resource name of the tenant under which the job is created.
 *
 *                                The format is "projects/{project_id}/tenants/{tenant_id}". For example,
 *                                "projects/foo/tenants/bar". Please see
 *                                {@see JobServiceClient::tenantName()} for help formatting this field.
 * @param string $filter          The filter string specifies the jobs to be enumerated.
 *
 *                                Supported operator: =, AND
 *
 *                                The fields eligible for filtering are:
 *
 *                                * `companyName`
 *                                * `requisitionId`
 *                                * `status` Available values: OPEN, EXPIRED, ALL. Defaults to
 *                                OPEN if no value is specified.
 *
 *                                At least one of `companyName` and `requisitionId` must present or an
 *                                INVALID_ARGUMENT error is thrown.
 *
 *                                Sample Query:
 *
 *                                * companyName = "projects/foo/tenants/bar/companies/baz"
 *                                * companyName = "projects/foo/tenants/bar/companies/baz" AND
 *                                requisitionId = "req-1"
 *                                * companyName = "projects/foo/tenants/bar/companies/baz" AND
 *                                status = "EXPIRED"
 *                                * requisitionId = "req-1"
 *                                * requisitionId = "req-1" AND status = "EXPIRED"
 */
function list_jobs_sample(string $formattedParent, string $filter): void
{
    // Create a client.
    $jobServiceClient = new JobServiceClient();

    // Prepare the request message.
    $request = (new ListJobsRequest())
        ->setParent($formattedParent)
        ->setFilter($filter);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $jobServiceClient->listJobs($request);

        /** @var Job $element */
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
    $formattedParent = JobServiceClient::tenantName('[PROJECT]', '[TENANT]');
    $filter = '[FILTER]';

    list_jobs_sample($formattedParent, $filter);
}
// [END jobs_v4_generated_JobService_ListJobs_sync]
