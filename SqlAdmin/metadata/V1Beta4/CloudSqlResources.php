<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace GPBMetadata\Google\Cloud\Sql\V1Beta4;

class CloudSqlResources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
2google/cloud/sql/v1beta4/cloud_sql_resources.protogoogle.cloud.sql.v1beta4google/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"o
AclEntry
value (	3
expiration_time (2.google.protobuf.Timestamp
name (	B�A
kind (	"�

ApiWarningD
code (26.google.cloud.sql.v1beta4.ApiWarning.SqlApiWarningCode
message (	
region (	"�
SqlApiWarningCode$
 SQL_API_WARNING_CODE_UNSPECIFIED 
REGION_UNREACHABLE
MAX_RESULTS_EXCEEDS_LIMIT
COMPROMISED_CREDENTIALS
INTERNAL_STATE_FAILURE"�
BackupRetentionSettingsW
retention_unit (2?.google.cloud.sql.v1beta4.BackupRetentionSettings.RetentionUnit5
retained_backups (2.google.protobuf.Int32Value":
RetentionUnit
RETENTION_UNIT_UNSPECIFIED 	
COUNT"�
BackupConfiguration

start_time (	+
enabled (2.google.protobuf.BoolValue
kind (	6
binary_log_enabled (2.google.protobuf.BoolValueE
!replication_log_archiving_enabled (2.google.protobuf.BoolValue
location (	B
point_in_time_recovery_enabled (2.google.protobuf.BoolValueC
transaction_log_retention_days	 (2.google.protobuf.Int32ValueT
backup_retention_settings
 (21.google.cloud.sql.v1beta4.BackupRetentionSettings"�
	BackupRun
kind (	<
status (2,.google.cloud.sql.v1beta4.SqlBackupRunStatus1
enqueued_time (2.google.protobuf.Timestamp

id (.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp7
error (2(.google.cloud.sql.v1beta4.OperationError8
type (2*.google.cloud.sql.v1beta4.SqlBackupRunType
description	 (	5
window_start_time
 (2.google.protobuf.Timestamp
instance (	
	self_link (	
location (	\\
disk_encryption_configuration (25.google.cloud.sql.v1beta4.DiskEncryptionConfigurationN
disk_encryption_status (2..google.cloud.sql.v1beta4.DiskEncryptionStatus<
backup_kind (2\'.google.cloud.sql.v1beta4.SqlBackupKind
	time_zone (	"s
BackupRunsListResponse
kind (	2
items (2#.google.cloud.sql.v1beta4.BackupRun
next_page_token (	"V
BinLogCoordinates
bin_log_file_name (	
bin_log_position (
kind (	"0
BackupContext
	backup_id (
kind (	"�
CloneContext
kind (	
pitr_timestamp_ms (!
destination_instance_name (	H
bin_log_coordinates (2+.google.cloud.sql.v1beta4.BinLogCoordinates1
point_in_time (2.google.protobuf.Timestamp
allocated_ip_range (	
database_names	 (	 
preferred_zone
 (	B�AH �B
_preferred_zone"�
Database
kind (	
charset (	
	collation (	
etag (	
name (	
instance (	
	self_link (	
project (	X
sqlserver_database_details	 (22.google.cloud.sql.v1beta4.SqlServerDatabaseDetailsH B
database_details"O
SqlServerDatabaseDetails
compatibility_level (
recovery_model (	",
DatabaseFlags
name (	
value (	"(
	SyncFlags
name (	
value (	"B
InstanceReference
name (	
region (	
project (	"�
DatabaseInstance
kind (	J
state (2;.google.cloud.sql.v1beta4.DatabaseInstance.SqlInstanceStateF
database_version (2,.google.cloud.sql.v1beta4.SqlDatabaseVersion4
settings (2".google.cloud.sql.v1beta4.Settings
etag (	W
failover_replica (2=.google.cloud.sql.v1beta4.DatabaseInstance.SqlFailoverReplica
master_instance_name (	
replica_names (	6
max_disk_size	 (2.google.protobuf.Int64ValueB:
current_disk_size
 (2.google.protobuf.Int64ValueB9
ip_addresses (2#.google.cloud.sql.v1beta4.IpMapping9
server_ca_cert (2!.google.cloud.sql.v1beta4.SslCert@
instance_type (2).google.cloud.sql.v1beta4.SqlInstanceType
project (	
ipv6_address (	B%
service_account_email_address (	T
on_premises_configuration (21.google.cloud.sql.v1beta4.OnPremisesConfigurationM
replica_configuration (2..google.cloud.sql.v1beta4.ReplicaConfiguration>
backend_type (2(.google.cloud.sql.v1beta4.SqlBackendType
	self_link (	H
suspension_reason (2-.google.cloud.sql.v1beta4.SqlSuspensionReason
connection_name (	
name (	
region (	
gce_zone (	
secondary_gce_zone" (	\\
disk_encryption_configuration (25.google.cloud.sql.v1beta4.DiskEncryptionConfigurationN
disk_encryption_status (2..google.cloud.sql.v1beta4.DiskEncryptionStatus
root_password (	a
scheduled_maintenance (2B.google.cloud.sql.v1beta4.DatabaseInstance.SqlScheduledMaintenance1
satisfies_pzs# (2.google.protobuf.BoolValue\'
database_installed_version( (	B�A^
out_of_disk_report& (2=.google.cloud.sql.v1beta4.DatabaseInstance.SqlOutOfDiskReportH �4
create_time\' (2.google.protobuf.TimestampB�A+
available_maintenance_versions) (	B�A
maintenance_version* (	h
sql_network_architecture/ (2A.google.cloud.sql.v1beta4.DatabaseInstance.SqlNetworkArchitectureH�-
psc_service_attachment_link0 (	B�AH�
dns_name1 (	B�AH�$
primary_dns_name3 (	B�AH� 
write_endpoint4 (	B�AH�Q
SqlFailoverReplica
name (	-
	available (2.google.protobuf.BoolValue�
SqlScheduledMaintenance.

start_time (2.google.protobuf.Timestamp
	can_defer (B
can_reschedule (?
schedule_deadline_time (2.google.protobuf.TimestampH �B
_schedule_deadline_time�
SqlOutOfDiskReports
sql_out_of_disk_state (2O.google.cloud.sql.v1beta4.DatabaseInstance.SqlOutOfDiskReport.SqlOutOfDiskStateH �1
$sql_min_recommended_increase_size_gb (H�"Y
SqlOutOfDiskState%
!SQL_OUT_OF_DISK_STATE_UNSPECIFIED 

NORMAL
SOFT_SHUTDOWNB
_sql_out_of_disk_stateB\'
%_sql_min_recommended_increase_size_gb"�
SqlInstanceState"
SQL_INSTANCE_STATE_UNSPECIFIED 
RUNNABLE
	SUSPENDED
PENDING_DELETE
PENDING_CREATE
MAINTENANCE

FAILED
ONLINE_MAINTENANCE"~
SqlNetworkArchitecture(
$SQL_NETWORK_ARCHITECTURE_UNSPECIFIED 
NEW_NETWORK_ARCHITECTURE
OLD_NETWORK_ARCHITECTUREB
_out_of_disk_reportB
_sql_network_architectureB
_psc_service_attachment_linkB
	_dns_nameB
_primary_dns_nameB
_write_endpoint"X
DatabasesListResponse
kind (	1
items (2".google.cloud.sql.v1beta4.Database"�
DemoteMasterConfiguration
kind (	d
mysql_replica_configuration (2?.google.cloud.sql.v1beta4.DemoteMasterMySqlReplicaConfiguration"�
DemoteMasterContext
kind (	;
verify_gtid_consistency (2.google.protobuf.BoolValue
master_instance_name (	R
replica_configuration (23.google.cloud.sql.v1beta4.DemoteMasterConfiguration
skip_replication_setup ("�
%DemoteMasterMySqlReplicaConfiguration
kind (	
username (	
password (	

client_key (	
client_certificate (	
ca_certificate (	"O
DemoteContext
kind (	0
#source_representative_instance_name (	B�A"�
ExportContext
uri (	
	databases (	
kind (	T
sql_export_options (28.google.cloud.sql.v1beta4.ExportContext.SqlExportOptionsW
csv_export_options (2;.google.cloud.sql.v1beta4.ExportContext.SqlCsvExportOptions8
	file_type (2%.google.cloud.sql.v1beta4.SqlFileType+
offload (2.google.protobuf.BoolValueW
bak_export_options	 (2;.google.cloud.sql.v1beta4.ExportContext.SqlBakExportOptions�
SqlCsvExportOptions
select_query (	
escape_character (	
quote_character (	
fields_terminated_by (	
lines_terminated_by (	�
SqlExportOptions
tables (	/
schema_only (2.google.protobuf.BoolValuei
mysql_export_options (2K.google.cloud.sql.v1beta4.ExportContext.SqlExportOptions.MysqlExportOptionsF
MysqlExportOptions0
master_data (2.google.protobuf.Int32Value�
SqlBakExportOptions+
striped (2.google.protobuf.BoolValue1
stripe_count (2.google.protobuf.Int32Value3
bak_type (2!.google.cloud.sql.v1beta4.BakType1
	copy_only (2.google.protobuf.BoolValueB5
differential_base (2.google.protobuf.BoolValue"9
FailoverContext
settings_version (
kind (	"�
Flag
name (	3
type (2%.google.cloud.sql.v1beta4.SqlFlagType@

applies_to (2,.google.cloud.sql.v1beta4.SqlDatabaseVersion
allowed_string_values (	.
	min_value (2.google.protobuf.Int64Value.
	max_value (2.google.protobuf.Int64Value4
requires_restart (2.google.protobuf.BoolValue
kind (	+
in_beta	 (2.google.protobuf.BoolValue
allowed_int_values
 ("P
FlagsListResponse
kind (	-
items (2.google.cloud.sql.v1beta4.Flag"�
ImportContext
uri (	
database (	
kind (	8
	file_type (2%.google.cloud.sql.v1beta4.SqlFileTypeW
csv_import_options (2;.google.cloud.sql.v1beta4.ImportContext.SqlCsvImportOptions
import_user (	W
bak_import_options (2;.google.cloud.sql.v1beta4.ImportContext.SqlBakImportOptions�
SqlCsvImportOptions
table (	
columns (	
escape_character (	
quote_character (	
fields_terminated_by (	
lines_terminated_by (	�
SqlBakImportOptionsi
encryption_options (2M.google.cloud.sql.v1beta4.ImportContext.SqlBakImportOptions.EncryptionOptions+
striped (2.google.protobuf.BoolValue/
no_recovery (2.google.protobuf.BoolValue1
recovery_only (2.google.protobuf.BoolValue3
bak_type (2!.google.cloud.sql.v1beta4.BakType0
stop_at (2.google.protobuf.TimestampB�A
stop_at_mark (	B�AN
EncryptionOptions
	cert_path (	
pvk_path (	
pvk_password (	"V
InstancesCloneRequest=
clone_context (2&.google.cloud.sql.v1beta4.CloneContext"l
InstancesDemoteMasterRequestL
demote_master_context (2-.google.cloud.sql.v1beta4.DemoteMasterContext"^
InstancesDemoteRequestD
demote_context (2\'.google.cloud.sql.v1beta4.DemoteContextB�A"Y
InstancesExportRequest?
export_context (2\'.google.cloud.sql.v1beta4.ExportContext"_
InstancesFailoverRequestC
failover_context (2).google.cloud.sql.v1beta4.FailoverContext"Y
InstancesImportRequest?
import_context (2\'.google.cloud.sql.v1beta4.ImportContext"R
MySqlSyncConfig?
initial_sync_flags (2#.google.cloud.sql.v1beta4.SyncFlags"�
InstancesListResponse
kind (	6
warnings (2$.google.cloud.sql.v1beta4.ApiWarning9
items (2*.google.cloud.sql.v1beta4.DatabaseInstance
next_page_token (	"x
InstancesListServerCasResponse0
certs (2!.google.cloud.sql.v1beta4.SslCert
active_version (	
kind (	"o
InstancesRestoreBackupRequestN
restore_backup_context (2..google.cloud.sql.v1beta4.RestoreBackupContext"s
InstancesRotateServerCaRequestQ
rotate_server_ca_context (2/.google.cloud.sql.v1beta4.RotateServerCaContext"i
InstancesTruncateLogRequestJ
truncate_log_context (2,.google.cloud.sql.v1beta4.TruncateLogContext"2
PerformDiskShrinkContext
target_size_gb ("h
\'SqlInstancesGetDiskShrinkConfigResponse
kind (	
minimal_target_size_gb (
message (	"�
.SqlInstancesVerifyExternalSyncSettingsResponse
kind (	E
errors (25.google.cloud.sql.v1beta4.SqlExternalSyncSettingErrorG
warnings (25.google.cloud.sql.v1beta4.SqlExternalSyncSettingError"�
SqlExternalSyncSettingError
kind (	c
type (2U.google.cloud.sql.v1beta4.SqlExternalSyncSettingError.SqlExternalSyncSettingErrorType
detail (	"�

SqlExternalSyncSettingErrorType4
0SQL_EXTERNAL_SYNC_SETTING_ERROR_TYPE_UNSPECIFIED 
CONNECTION_FAILURE
BINLOG_NOT_ENABLED!
INCOMPATIBLE_DATABASE_VERSION
REPLICA_ALREADY_SETUP
INSUFFICIENT_PRIVILEGE
UNSUPPORTED_MIGRATION_TYPE
NO_PGLOGICAL_INSTALLED!
PGLOGICAL_NODE_ALREADY_EXISTS
INVALID_WAL_LEVEL	"
INVALID_SHARED_PRELOAD_LIBRARY
&
"INSUFFICIENT_MAX_REPLICATION_SLOTS 
INSUFFICIENT_MAX_WAL_SENDERS%
!INSUFFICIENT_MAX_WORKER_PROCESSES
UNSUPPORTED_EXTENSIONS#
INVALID_RDS_LOGICAL_REPLICATION
INVALID_LOGGING_SETUP
INVALID_DB_PARAM
UNSUPPORTED_GTID_MODE
SQLSERVER_AGENT_NOT_RUNNING 
UNSUPPORTED_TABLE_DEFINITION
UNSUPPORTED_DEFINER!
SQLSERVER_SERVERNAME_MISMATCH
PRIMARY_ALREADY_SETUP
UNSUPPORTED_BINLOG_FORMAT
BINLOG_RETENTION_SETTING
UNSUPPORTED_STORAGE_ENGINE
LIMITED_SUPPORT_TABLES
EXISTING_DATA_IN_REPLICA
MISSING_OPTIONAL_PRIVILEGES 
RISKY_BACKUP_ADMIN_PRIVILEGE 
INSUFFICIENT_GCS_PERMISSIONS
INVALID_FILE_INFO !
UNSUPPORTED_DATABASE_SETTINGS!0
,MYSQL_PARALLEL_IMPORT_INSUFFICIENT_PRIVILEGE"
LOCAL_INFILE_OFF#
TURN_ON_PITR_AFTER_PROMOTE$\'
#INCOMPATIBLE_DATABASE_MINOR_VERSION%
SOURCE_MAX_SUBSCRIPTIONS&
UNABLE_TO_VERIFY_DEFINERS\'"�
IpConfiguration0
ipv4_enabled (2.google.protobuf.BoolValue
private_network (	/
require_ssl (2.google.protobuf.BoolValue?
authorized_networks (2".google.cloud.sql.v1beta4.AclEntry
allocated_ip_range (	Q
-enable_private_path_for_google_cloud_services (2.google.protobuf.BoolValueC
ssl_mode (21.google.cloud.sql.v1beta4.IpConfiguration.SslMode<

psc_config	 (2#.google.cloud.sql.v1beta4.PscConfigH �"�
SslMode
SSL_MODE_UNSPECIFIED #
ALLOW_UNENCRYPTED_AND_ENCRYPTED
ENCRYPTED_ONLY\'
#TRUSTED_CLIENT_CERTIFICATE_REQUIREDB
_psc_config"]
	PscConfig
psc_enabled (H �&
allowed_consumer_projects (	B�AB
_psc_enabled"�
	IpMapping8
type (2*.google.cloud.sql.v1beta4.SqlIpAddressType

ip_address (	2
time_to_retire (2.google.protobuf.Timestamp"l
LocationPreference"
follow_gae_application (	B
zone (	
secondary_zone (	
kind (	"�
MaintenanceWindow)
hour (2.google.protobuf.Int32Value(
day (2.google.protobuf.Int32Value>
update_track (2(.google.cloud.sql.v1beta4.SqlUpdateTrack
kind (	"K
DenyMaintenancePeriod

start_date (	
end_date (	
time (	"�
InsightsConfig
query_insights_enabled (
record_client_address (
record_application_tags (8
query_string_length (2.google.protobuf.Int32Value;
query_plans_per_minute (2.google.protobuf.Int32Value"�
MySqlReplicaConfiguration
dump_file_path (	
username (	
password (	;
connect_retry_interval (2.google.protobuf.Int32Value<
master_heartbeat_period (2.google.protobuf.Int64Value
ca_certificate (	
client_certificate (	

client_key (	

ssl_cipher	 (	=
verify_server_certificate
 (2.google.protobuf.BoolValue
kind (	"�
OnPremisesConfiguration
	host_port (	
kind (	
username (	
password (	
ca_certificate (	
client_certificate (	

client_key (	
dump_file_path (	D
source_instance (2+.google.cloud.sql.v1beta4.InstanceReference"A
DiskEncryptionConfiguration
kms_key_name (	
kind (	"B
DiskEncryptionStatus
kms_key_version_name (	
kind (	"�
	Operation
kind (	
target_link (	F
status (26.google.cloud.sql.v1beta4.Operation.SqlOperationStatus
user (	/
insert_time (2.google.protobuf.Timestamp.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp8
error (2).google.cloud.sql.v1beta4.OperationErrors9
api_warning (2$.google.cloud.sql.v1beta4.ApiWarningL
operation_type	 (24.google.cloud.sql.v1beta4.Operation.SqlOperationType?
import_context
 (2\'.google.cloud.sql.v1beta4.ImportContext?
export_context (2\'.google.cloud.sql.v1beta4.ExportContext?
backup_context (2\'.google.cloud.sql.v1beta4.BackupContext
name (	
	target_id (	
	self_link (	
target_project (	"�
SqlOperationType"
SQL_OPERATION_TYPE_UNSPECIFIED 

IMPORT

EXPORT

CREATE

UPDATE

DELETE
RESTART
BACKUP
SNAPSHOT
BACKUP_VOLUME	
DELETE_VOLUME

RESTORE_VOLUME
INJECT_USER	
CLONE
STOP_REPLICA
START_REPLICA
PROMOTE_REPLICA
CREATE_REPLICA
CREATE_USER
DELETE_USER
UPDATE_USER
CREATE_DATABASE
DELETE_DATABASE
UPDATE_DATABASE
FAILOVER
DELETE_BACKUP
RECREATE_REPLICA
TRUNCATE_LOG
DEMOTE_MASTER
MAINTENANCE
ENABLE_PRIVATE_IP
DEFER_MAINTENANCE 
CREATE_CLONE!
RESCHEDULE_MAINTENANCE"
START_EXTERNAL_SYNC#
LOG_CLEANUP$
AUTO_RESTART%
	REENCRYPT&

SWITCHOVER\'"^
SqlOperationStatus$
 SQL_OPERATION_STATUS_UNSPECIFIED 
PENDING
RUNNING
DONE"=
OperationError
kind (	
code (	
message (	"Y
OperationErrors
kind (	8
errors (2(.google.cloud.sql.v1beta4.OperationError"�
PasswordValidationPolicy/

min_length (2.google.protobuf.Int32ValueQ

complexity (2=.google.cloud.sql.v1beta4.PasswordValidationPolicy.Complexity3
reuse_interval (2.google.protobuf.Int32Value?
disallow_username_substring (2.google.protobuf.BoolValue;
password_change_interval (2.google.protobuf.Duration:
enable_password_policy (2.google.protobuf.BoolValueD
 disallow_compromised_credentials (2.google.protobuf.BoolValue"@

Complexity
COMPLEXITY_UNSPECIFIED 
COMPLEXITY_DEFAULT"s
OperationsListResponse
kind (	2
items (2#.google.cloud.sql.v1beta4.Operation
next_page_token (	"�
ReplicaConfiguration
kind (	X
mysql_replica_configuration (23.google.cloud.sql.v1beta4.MySqlReplicaConfiguration3
failover_target (2.google.protobuf.BoolValue;
cascadable_replica (2.google.protobuf.BoolValueB�A"a
RestoreBackupContext
kind (	
backup_run_id (
instance_id (	
project (	";
RotateServerCaContext
kind (	
next_version (	"-
DataCacheConfig
data_cache_enabled ("�
Settings5
settings_version (2.google.protobuf.Int64Value\'
authorized_gae_applications (	B
tier (	
kind (	G
user_labels (22.google.cloud.sql.v1beta4.Settings.UserLabelsEntryH
availability_type (2-.google.cloud.sql.v1beta4.SqlAvailabilityType>
pricing_plan (2(.google.cloud.sql.v1beta4.SqlPricingPlanJ
replication_type (2,.google.cloud.sql.v1beta4.SqlReplicationTypeB>
storage_auto_resize_limit	 (2.google.protobuf.Int64ValueQ
activation_policy
 (26.google.cloud.sql.v1beta4.Settings.SqlActivationPolicyC
ip_configuration (2).google.cloud.sql.v1beta4.IpConfiguration7
storage_auto_resize (2.google.protobuf.BoolValueI
location_preference (2,.google.cloud.sql.v1beta4.LocationPreference?
database_flags (2\'.google.cloud.sql.v1beta4.DatabaseFlagsA
data_disk_type (2).google.cloud.sql.v1beta4.SqlDataDiskTypeG
maintenance_window (2+.google.cloud.sql.v1beta4.MaintenanceWindowK
backup_configuration (2-.google.cloud.sql.v1beta4.BackupConfiguration@
database_replication_enabled (2.google.protobuf.BoolValueF
crash_safe_replication_enabled (2.google.protobuf.BoolValueB6
data_disk_size_gb (2.google.protobuf.Int64ValueS
active_directory_config (22.google.cloud.sql.v1beta4.SqlActiveDirectoryConfig
	collation (	Q
deny_maintenance_periods (2/.google.cloud.sql.v1beta4.DenyMaintenancePeriodA
insights_config (2(.google.cloud.sql.v1beta4.InsightsConfigV
password_validation_policy (22.google.cloud.sql.v1beta4.PasswordValidationPolicyO
sql_server_audit_config (2..google.cloud.sql.v1beta4.SqlServerAuditConfig@
edition& (2*.google.cloud.sql.v1beta4.Settings.EditionB�AV
connector_enforcement  (27.google.cloud.sql.v1beta4.Settings.ConnectorEnforcement?
deletion_protection_enabled! (2.google.protobuf.BoolValue
	time_zone" (	T
advanced_machine_features# (21.google.cloud.sql.v1beta4.AdvancedMachineFeaturesD
data_cache_config% (2).google.cloud.sql.v1beta4.DataCacheConfig1
UserLabelsEntry
key (	
value (	:8"f
SqlActivationPolicy%
!SQL_ACTIVATION_POLICY_UNSPECIFIED 

ALWAYS	
NEVER
	ON_DEMAND"G
Edition
EDITION_UNSPECIFIED 

ENTERPRISE
ENTERPRISE_PLUS"]
ConnectorEnforcement%
!CONNECTOR_ENFORCEMENT_UNSPECIFIED 
NOT_REQUIRED
REQUIRED"3
AdvancedMachineFeatures
threads_per_core ("�
SslCert
kind (	
cert_serial_number (	
cert (	/
create_time (2.google.protobuf.Timestamp
common_name (	3
expiration_time (2.google.protobuf.Timestamp
sha1_fingerprint (	
instance (	
	self_link	 (	"_
SslCertDetail4
	cert_info (2!.google.cloud.sql.v1beta4.SslCert
cert_private_key (	"J
SslCertsCreateEphemeralRequest

public_key (	
access_token (	",
SslCertsInsertRequest
common_name (	"�
,SqlInstancesRescheduleMaintenanceRequestBodye

reschedule (2Q.google.cloud.sql.v1beta4.SqlInstancesRescheduleMaintenanceRequestBody.Reschedule�

Reschedulen
reschedule_type (2U.google.cloud.sql.v1beta4.SqlInstancesRescheduleMaintenanceRequestBody.RescheduleType6
schedule_time (2.google.protobuf.TimestampB�A"n
RescheduleType
RESCHEDULE_TYPE_UNSPECIFIED 
	IMMEDIATE
NEXT_AVAILABLE_WINDOW
SPECIFIC_TIME"�
SslCertsInsertResponse
kind (	6
	operation (2#.google.cloud.sql.v1beta4.Operation9
server_ca_cert (2!.google.cloud.sql.v1beta4.SslCert<
client_cert (2\'.google.cloud.sql.v1beta4.SslCertDetail"V
SslCertsListResponse
kind (	0
items (2!.google.cloud.sql.v1beta4.SslCert"4
TruncateLogContext
kind (	
log_type (	"8
SqlActiveDirectoryConfig
kind (	
domain (	"�
SqlServerAuditConfig
kind (	
bucket (	5
retention_interval (2.google.protobuf.Duration2
upload_interval (2.google.protobuf.Duration*G
SqlFileType
SQL_FILE_TYPE_UNSPECIFIED 
SQL
CSV
BAK*A
BakType
BAK_TYPE_UNSPECIFIED 
FULL
DIFF
TLOG*�
SqlBackupRunStatus%
!SQL_BACKUP_RUN_STATUS_UNSPECIFIED 
ENQUEUED
OVERDUE
RUNNING

FAILED

SUCCESSFUL
SKIPPED
DELETION_PENDING
DELETION_FAILED
DELETED	*U
SqlBackupRunType#
SQL_BACKUP_RUN_TYPE_UNSPECIFIED 
	AUTOMATED
	ON_DEMAND*L
SqlBackupKind
SQL_BACKUP_KIND_UNSPECIFIED 
SNAPSHOT
PHYSICAL*c
SqlBackendType 
SQL_BACKEND_TYPE_UNSPECIFIED 
	FIRST_GEN

SECOND_GEN
EXTERNAL*u
SqlIpAddressType#
SQL_IP_ADDRESS_TYPE_UNSPECIFIED 
PRIMARY
OUTGOING
PRIVATE
MIGRATED_1ST_GEN*�
SqlInstanceType!
SQL_INSTANCE_TYPE_UNSPECIFIED 
CLOUD_SQL_INSTANCE
ON_PREMISES_INSTANCE
READ_REPLICA_INSTANCE*�
SqlDatabaseVersion$
 SQL_DATABASE_VERSION_UNSPECIFIED 
	MYSQL_5_1
	MYSQL_5_5
	MYSQL_5_6
	MYSQL_5_7
SQLSERVER_2017_STANDARD
SQLSERVER_2017_ENTERPRISE
SQLSERVER_2017_EXPRESS
SQLSERVER_2017_WEB
POSTGRES_9_6	
POSTGRES_10
POSTGRES_11

POSTGRES_12
POSTGRES_13
POSTGRES_14n
POSTGRES_15�
	MYSQL_8_0
MYSQL_8_0_18)
MYSQL_8_0_26U
MYSQL_8_0_27o
MYSQL_8_0_28�
MYSQL_8_0_29�
MYSQL_8_0_30�
MYSQL_8_0_31�
MYSQL_8_0_32�
MYSQL_8_0_33�
MYSQL_8_0_34�
MYSQL_8_0_35�
MYSQL_8_0_36�
SQLSERVER_2019_STANDARD
SQLSERVER_2019_ENTERPRISE
SQLSERVER_2019_EXPRESS
SQLSERVER_2019_WEB
SQLSERVER_2022_STANDARD�
SQLSERVER_2022_ENTERPRISE�
SQLSERVER_2022_EXPRESS�
SQLSERVER_2022_WEB�*�
SqlSuspensionReason%
!SQL_SUSPENSION_REASON_UNSPECIFIED 
BILLING_ISSUE
LEGAL_ISSUE
OPERATIONAL_ISSUE
KMS_KEY_ISSUE*L
SqlPricingPlan 
SQL_PRICING_PLAN_UNSPECIFIED 
PACKAGE
PER_USE*]
SqlReplicationType$
 SQL_REPLICATION_TYPE_UNSPECIFIED 
SYNCHRONOUS
ASYNCHRONOUS*i
SqlDataDiskType"
SQL_DATA_DISK_TYPE_UNSPECIFIED 

PD_SSD

PD_HDD
OBSOLETE_LOCAL_SSD*U
SqlAvailabilityType%
!SQL_AVAILABILITY_TYPE_UNSPECIFIED 	
ZONAL
REGIONAL*U
SqlUpdateTrack 
SQL_UPDATE_TRACK_UNSPECIFIED 

canary

stable	
week5*�
SqlFlagType
SQL_FLAG_TYPE_UNSPECIFIED 
BOOLEAN

STRING
INTEGER
NONE
MYSQL_TIMEZONE_OFFSET	
FLOAT
REPEATED_STRINGBh
com.google.cloud.sql.v1beta4BCloudSqlResourcesProtoPZ.cloud.google.com/go/sql/apiv1beta4/sqlpb;sqlpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

