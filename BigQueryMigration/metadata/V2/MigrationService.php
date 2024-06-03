<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/migration_service.proto

namespace GPBMetadata\Google\Cloud\Bigquery\Migration\V2;

class MigrationService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\MigrationEntities::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/cloud/bigquery/migration/v2/migration_service.proto"google.cloud.bigquery.migration.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto;google/cloud/bigquery/migration/v2/migration_entities.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreateMigrationWorkflowRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationV
migration_workflow (25.google.cloud.bigquery.migration.v2.MigrationWorkflowB�A"�
GetMigrationWorkflowRequestH
name (	B:�A�A4
2bigquerymigration.googleapis.com/MigrationWorkflow-
	read_mask (2.google.protobuf.FieldMask"�
ListMigrationWorkflowsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location-
	read_mask (2.google.protobuf.FieldMask
	page_size (

page_token (	"�
ListMigrationWorkflowsResponseR
migration_workflows (25.google.cloud.bigquery.migration.v2.MigrationWorkflow
next_page_token (	"j
DeleteMigrationWorkflowRequestH
name (	B:�A�A4
2bigquerymigration.googleapis.com/MigrationWorkflow"i
StartMigrationWorkflowRequestH
name (	B:�A�A4
2bigquerymigration.googleapis.com/MigrationWorkflow"�
GetMigrationSubtaskRequestG
name (	B9�A�A3
1bigquerymigration.googleapis.com/MigrationSubtask2
	read_mask (2.google.protobuf.FieldMaskB�A"�
ListMigrationSubtasksRequestJ
parent (	B:�A�A4
2bigquerymigration.googleapis.com/MigrationWorkflow2
	read_mask (2.google.protobuf.FieldMaskB�A
	page_size (B�A

page_token (	B�A
filter (	B�A"�
ListMigrationSubtasksResponseP
migration_subtasks (24.google.cloud.bigquery.migration.v2.MigrationSubtask
next_page_token (	2�
MigrationService�
CreateMigrationWorkflowB.google.cloud.bigquery.migration.v2.CreateMigrationWorkflowRequest5.google.cloud.bigquery.migration.v2.MigrationWorkflow"e�Aparent,migration_workflow���C"-/v2/{parent=projects/*/locations/*}/workflows:migration_workflow�
GetMigrationWorkflow?.google.cloud.bigquery.migration.v2.GetMigrationWorkflowRequest5.google.cloud.bigquery.migration.v2.MigrationWorkflow"<�Aname���/-/v2/{name=projects/*/locations/*/workflows/*}�
ListMigrationWorkflowsA.google.cloud.bigquery.migration.v2.ListMigrationWorkflowsRequestB.google.cloud.bigquery.migration.v2.ListMigrationWorkflowsResponse">�Aparent���/-/v2/{parent=projects/*/locations/*}/workflows�
DeleteMigrationWorkflowB.google.cloud.bigquery.migration.v2.DeleteMigrationWorkflowRequest.google.protobuf.Empty"<�Aname���/*-/v2/{name=projects/*/locations/*/workflows/*}�
StartMigrationWorkflowA.google.cloud.bigquery.migration.v2.StartMigrationWorkflowRequest.google.protobuf.Empty"E�Aname���8"3/v2/{name=projects/*/locations/*/workflows/*}:start:*�
GetMigrationSubtask>.google.cloud.bigquery.migration.v2.GetMigrationSubtaskRequest4.google.cloud.bigquery.migration.v2.MigrationSubtask"G�Aname���:8/v2/{name=projects/*/locations/*/workflows/*/subtasks/*}�
ListMigrationSubtasks@.google.cloud.bigquery.migration.v2.ListMigrationSubtasksRequestA.google.cloud.bigquery.migration.v2.ListMigrationSubtasksResponse"I�Aparent���:8/v2/{parent=projects/*/locations/*/workflows/*}/subtasksT�A bigquerymigration.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
&com.google.cloud.bigquery.migration.v2BMigrationServiceProtoPZDcloud.google.com/go/bigquery/migration/apiv2/migrationpb;migrationpb�"Google.Cloud.BigQuery.Migration.V2�"Google\\Cloud\\BigQuery\\Migration\\V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

