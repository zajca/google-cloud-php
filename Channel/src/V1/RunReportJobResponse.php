<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/reports_service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [CloudChannelReportsService.RunReportJob][google.cloud.channel.v1.CloudChannelReportsService.RunReportJob].
 *
 * @deprecated
 * Generated from protobuf message <code>google.cloud.channel.v1.RunReportJobResponse</code>
 */
class RunReportJobResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Pass `report_job.name` to
     * [FetchReportResultsRequest.report_job][google.cloud.channel.v1.FetchReportResultsRequest.report_job]
     * to retrieve the report's results.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ReportJob report_job = 1;</code>
     */
    private $report_job = null;
    /**
     * The metadata for the report's results (display name, columns, row count,
     * and date range). If you view this before the operation finishes,
     * you may see incomplete data.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ReportResultsMetadata report_metadata = 2;</code>
     */
    private $report_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Channel\V1\ReportJob $report_job
     *           Pass `report_job.name` to
     *           [FetchReportResultsRequest.report_job][google.cloud.channel.v1.FetchReportResultsRequest.report_job]
     *           to retrieve the report's results.
     *     @type \Google\Cloud\Channel\V1\ReportResultsMetadata $report_metadata
     *           The metadata for the report's results (display name, columns, row count,
     *           and date range). If you view this before the operation finishes,
     *           you may see incomplete data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\ReportsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Pass `report_job.name` to
     * [FetchReportResultsRequest.report_job][google.cloud.channel.v1.FetchReportResultsRequest.report_job]
     * to retrieve the report's results.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ReportJob report_job = 1;</code>
     * @return \Google\Cloud\Channel\V1\ReportJob|null
     */
    public function getReportJob()
    {
        return $this->report_job;
    }

    public function hasReportJob()
    {
        return isset($this->report_job);
    }

    public function clearReportJob()
    {
        unset($this->report_job);
    }

    /**
     * Pass `report_job.name` to
     * [FetchReportResultsRequest.report_job][google.cloud.channel.v1.FetchReportResultsRequest.report_job]
     * to retrieve the report's results.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ReportJob report_job = 1;</code>
     * @param \Google\Cloud\Channel\V1\ReportJob $var
     * @return $this
     */
    public function setReportJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\ReportJob::class);
        $this->report_job = $var;

        return $this;
    }

    /**
     * The metadata for the report's results (display name, columns, row count,
     * and date range). If you view this before the operation finishes,
     * you may see incomplete data.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ReportResultsMetadata report_metadata = 2;</code>
     * @return \Google\Cloud\Channel\V1\ReportResultsMetadata|null
     */
    public function getReportMetadata()
    {
        return $this->report_metadata;
    }

    public function hasReportMetadata()
    {
        return isset($this->report_metadata);
    }

    public function clearReportMetadata()
    {
        unset($this->report_metadata);
    }

    /**
     * The metadata for the report's results (display name, columns, row count,
     * and date range). If you view this before the operation finishes,
     * you may see incomplete data.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ReportResultsMetadata report_metadata = 2;</code>
     * @param \Google\Cloud\Channel\V1\ReportResultsMetadata $var
     * @return $this
     */
    public function setReportMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\ReportResultsMetadata::class);
        $this->report_metadata = $var;

        return $this;
    }

}

