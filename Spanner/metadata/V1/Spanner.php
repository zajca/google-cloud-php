<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace GPBMetadata\Google\Spanner\V1;

class Spanner
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
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Spanner\V1\CommitResponse::initOnce();
        \GPBMetadata\Google\Spanner\V1\Keys::initOnce();
        \GPBMetadata\Google\Spanner\V1\Mutation::initOnce();
        \GPBMetadata\Google\Spanner\V1\ResultSet::initOnce();
        \GPBMetadata\Google\Spanner\V1\Transaction::initOnce();
        \GPBMetadata\Google\Spanner\V1\Type::initOnce();
        $pool->internalAddGeneratedFile(
            '
�F
google/spanner/v1/spanner.protogoogle.spanner.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto\'google/spanner/v1/commit_response.protogoogle/spanner/v1/keys.proto google/spanner/v1/mutation.proto"google/spanner/v1/result_set.proto#google/spanner/v1/transaction.protogoogle/spanner/v1/type.proto"�
CreateSessionRequest9
database (	B\'�A�A!
spanner.googleapis.com/Database0
session (2.google.spanner.v1.SessionB�A"�
BatchCreateSessionsRequest9
database (	B\'�A�A!
spanner.googleapis.com/Database4
session_template (2.google.spanner.v1.Session
session_count (B�A"J
BatchCreateSessionsResponse+
session (2.google.spanner.v1.Session"�
Session
name (	B�A6
labels (2&.google.spanner.v1.Session.LabelsEntry4
create_time (2.google.protobuf.TimestampB�AB
approximate_last_use_time (2.google.protobuf.TimestampB�A
creator_role (	-
LabelsEntry
key (	
value (	:8:t�Aq
spanner.googleapis.com/SessionOprojects/{project}/instances/{instance}/databases/{database}/sessions/{session}"I
GetSessionRequest4
name (	B&�A�A 
spanner.googleapis.com/Session"�
ListSessionsRequest9
database (	B\'�A�A!
spanner.googleapis.com/Database
	page_size (

page_token (	
filter (	"]
ListSessionsResponse,
sessions (2.google.spanner.v1.Session
next_page_token (	"L
DeleteSessionRequest4
name (	B&�A�A 
spanner.googleapis.com/Session"�
RequestOptions<
priority (2*.google.spanner.v1.RequestOptions.Priority
request_tag (	
transaction_tag (	"^
Priority
PRIORITY_UNSPECIFIED 
PRIORITY_LOW
PRIORITY_MEDIUM
PRIORITY_HIGH"�
ExecuteSqlRequest7
session (	B&�A�A 
spanner.googleapis.com/Session;
transaction (2&.google.spanner.v1.TransactionSelector
sql (	B�A\'
params (2.google.protobuf.StructI
param_types (24.google.spanner.v1.ExecuteSqlRequest.ParamTypesEntry
resume_token (B

query_mode (2..google.spanner.v1.ExecuteSqlRequest.QueryMode
partition_token (
seqno	 (H
query_options
 (21.google.spanner.v1.ExecuteSqlRequest.QueryOptions:
request_options (2!.google.spanner.v1.RequestOptions
data_boost_enabled (O
QueryOptions
optimizer_version (	$
optimizer_statistics_package (	J
ParamTypesEntry
key (	&
value (2.google.spanner.v1.Type:8".
	QueryMode

NORMAL 
PLAN
PROFILE"�
ExecuteBatchDmlRequest7
session (	B&�A�A 
spanner.googleapis.com/Session@
transaction (2&.google.spanner.v1.TransactionSelectorB�AL

statements (23.google.spanner.v1.ExecuteBatchDmlRequest.StatementB�A
seqno (B�A:
request_options (2!.google.spanner.v1.RequestOptions�
	Statement
sql (	B�A\'
params (2.google.protobuf.StructX
param_types (2C.google.spanner.v1.ExecuteBatchDmlRequest.Statement.ParamTypesEntryJ
ParamTypesEntry
key (	&
value (2.google.spanner.v1.Type:8"p
ExecuteBatchDmlResponse1
result_sets (2.google.spanner.v1.ResultSet"
status (2.google.rpc.Status"H
PartitionOptions
partition_size_bytes (
max_partitions ("�
PartitionQueryRequest7
session (	B&�A�A 
spanner.googleapis.com/Session;
transaction (2&.google.spanner.v1.TransactionSelector
sql (	B�A\'
params (2.google.protobuf.StructM
param_types (28.google.spanner.v1.PartitionQueryRequest.ParamTypesEntry>
partition_options (2#.google.spanner.v1.PartitionOptionsJ
ParamTypesEntry
key (	&
value (2.google.spanner.v1.Type:8"�
PartitionReadRequest7
session (	B&�A�A 
spanner.googleapis.com/Session;
transaction (2&.google.spanner.v1.TransactionSelector
table (	B�A
index (	
columns (	/
key_set (2.google.spanner.v1.KeySetB�A>
partition_options	 (2#.google.spanner.v1.PartitionOptions"$
	Partition
partition_token ("z
PartitionResponse0

partitions (2.google.spanner.v1.Partition3
transaction (2.google.spanner.v1.Transaction"�
ReadRequest7
session (	B&�A�A 
spanner.googleapis.com/Session;
transaction (2&.google.spanner.v1.TransactionSelector
table (	B�A
index (	
columns (	B�A/
key_set (2.google.spanner.v1.KeySetB�A
limit (
resume_token	 (
partition_token
 (:
request_options (2!.google.spanner.v1.RequestOptions
data_boost_enabled ("�
BeginTransactionRequest7
session (	B&�A�A 
spanner.googleapis.com/Session;
options (2%.google.spanner.v1.TransactionOptionsB�A:
request_options (2!.google.spanner.v1.RequestOptions"�
CommitRequest7
session (	B&�A�A 
spanner.googleapis.com/Session
transaction_id (H G
single_use_transaction (2%.google.spanner.v1.TransactionOptionsH .
	mutations (2.google.spanner.v1.Mutation
return_commit_stats (:
request_options (2!.google.spanner.v1.RequestOptionsB
transaction"g
RollbackRequest7
session (	B&�A�A 
spanner.googleapis.com/Session
transaction_id (B�A"�
BatchWriteRequest7
session (	B&�A�A 
spanner.googleapis.com/Session:
request_options (2!.google.spanner.v1.RequestOptionsP
mutation_groups (22.google.spanner.v1.BatchWriteRequest.MutationGroupB�AD
MutationGroup3
	mutations (2.google.spanner.v1.MutationB�A"
BatchWriteResponse
indexes ("
status (2.google.rpc.Status4
commit_timestamp (2.google.protobuf.Timestamp2�
Spanner�
CreateSession\'.google.spanner.v1.CreateSessionRequest.google.spanner.v1.Session"P���?":/v1/{database=projects/*/instances/*/databases/*}/sessions:*�Adatabase�
BatchCreateSessions-.google.spanner.v1.BatchCreateSessionsRequest..google.spanner.v1.BatchCreateSessionsResponse"j���K"F/v1/{database=projects/*/instances/*/databases/*}/sessions:batchCreate:*�Adatabase,session_count�

GetSession$.google.spanner.v1.GetSessionRequest.google.spanner.v1.Session"G���:8/v1/{name=projects/*/instances/*/databases/*/sessions/*}�Aname�
ListSessions&.google.spanner.v1.ListSessionsRequest\'.google.spanner.v1.ListSessionsResponse"M���<:/v1/{database=projects/*/instances/*/databases/*}/sessions�Adatabase�
DeleteSession\'.google.spanner.v1.DeleteSessionRequest.google.protobuf.Empty"G���:*8/v1/{name=projects/*/instances/*/databases/*/sessions/*}�Aname�

ExecuteSql$.google.spanner.v1.ExecuteSqlRequest.google.spanner.v1.ResultSet"Q���K"F/v1/{session=projects/*/instances/*/databases/*/sessions/*}:executeSql:*�
ExecuteStreamingSql$.google.spanner.v1.ExecuteSqlRequest#.google.spanner.v1.PartialResultSet"Z���T"O/v1/{session=projects/*/instances/*/databases/*/sessions/*}:executeStreamingSql:*0�
ExecuteBatchDml).google.spanner.v1.ExecuteBatchDmlRequest*.google.spanner.v1.ExecuteBatchDmlResponse"V���P"K/v1/{session=projects/*/instances/*/databases/*/sessions/*}:executeBatchDml:*�
Read.google.spanner.v1.ReadRequest.google.spanner.v1.ResultSet"K���E"@/v1/{session=projects/*/instances/*/databases/*/sessions/*}:read:*�
StreamingRead.google.spanner.v1.ReadRequest#.google.spanner.v1.PartialResultSet"T���N"I/v1/{session=projects/*/instances/*/databases/*/sessions/*}:streamingRead:*0�
BeginTransaction*.google.spanner.v1.BeginTransactionRequest.google.spanner.v1.Transaction"i���Q"L/v1/{session=projects/*/instances/*/databases/*/sessions/*}:beginTransaction:*�Asession,options�
Commit .google.spanner.v1.CommitRequest!.google.spanner.v1.CommitResponse"����G"B/v1/{session=projects/*/instances/*/databases/*/sessions/*}:commit:*�A session,transaction_id,mutations�A(session,single_use_transaction,mutations�
Rollback".google.spanner.v1.RollbackRequest.google.protobuf.Empty"h���I"D/v1/{session=projects/*/instances/*/databases/*/sessions/*}:rollback:*�Asession,transaction_id�
PartitionQuery(.google.spanner.v1.PartitionQueryRequest$.google.spanner.v1.PartitionResponse"U���O"J/v1/{session=projects/*/instances/*/databases/*/sessions/*}:partitionQuery:*�
PartitionRead\'.google.spanner.v1.PartitionReadRequest$.google.spanner.v1.PartitionResponse"T���N"I/v1/{session=projects/*/instances/*/databases/*/sessions/*}:partitionRead:*�

BatchWrite$.google.spanner.v1.BatchWriteRequest%.google.spanner.v1.BatchWriteResponse"k���K"F/v1/{session=projects/*/instances/*/databases/*/sessions/*}:batchWrite:*�Asession,mutation_groups0w�Aspanner.googleapis.com�A[https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/spanner.dataB�
com.google.spanner.v1BSpannerProtoPZ5cloud.google.com/go/spanner/apiv1/spannerpb;spannerpb�Google.Cloud.Spanner.V1�Google\\Cloud\\Spanner\\V1�Google::Cloud::Spanner::V1�A_
spanner.googleapis.com/Database<projects/{project}/instances/{instance}/databases/{database}Pbproto3'
        , true);

        static::$is_initialized = true;
    }
}

