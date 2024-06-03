<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_tuning_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1Beta;

class SearchTuningService
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
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\CustomTuningModel::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ImportConfig::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/cloud/discoveryengine/v1beta/search_tuning_service.proto#google.cloud.discoveryengine.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto=google/cloud/discoveryengine/v1beta/custom_tuning_model.proto7google/cloud/discoveryengine/v1beta/import_config.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"_
ListCustomModelsRequestD

data_store (	B0�A�A*
(discoveryengine.googleapis.com/DataStore"b
ListCustomModelsResponseF
models (26.google.cloud.discoveryengine.v1beta.CustomTuningModel"�
TrainCustomModelRequestk
gcs_training_input (2M.google.cloud.discoveryengine.v1beta.TrainCustomModelRequest.GcsTrainingInputH D

data_store (	B0�A�A*
(discoveryengine.googleapis.com/DataStore

model_type (	L
error_config (26.google.cloud.discoveryengine.v1beta.ImportErrorConfig
model_id (	v
GcsTrainingInput
corpus_data_path (	
query_data_path (	
train_data_path (	
test_data_path (	B
training_input"�
TrainCustomModelResponse)
error_samples (2.google.rpc.StatusL
error_config (26.google.cloud.discoveryengine.v1beta.ImportErrorConfig
model_status (	[
metrics (2J.google.cloud.discoveryengine.v1beta.TrainCustomModelResponse.MetricsEntry

model_name (	.
MetricsEntry
key (	
value (:8"|
TrainCustomModelMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp2�
SearchTuningService�
TrainCustomModel<.google.cloud.discoveryengine.v1beta.TrainCustomModelRequest.google.longrunning.Operation"��A|
<google.cloud.discoveryengine.v1beta.TrainCustomModelResponse<google.cloud.discoveryengine.v1beta.TrainCustomModelMetadata���\\"W/v1beta/{data_store=projects/*/locations/*/collections/*/dataStores/*}:trainCustomModel:*�
ListCustomModels<.google.cloud.discoveryengine.v1beta.ListCustomModelsRequest=.google.cloud.discoveryengine.v1beta.ListCustomModelsResponse"[���US/v1beta/{data_store=projects/*/locations/*/collections/*/dataStores/*}/customModelsR�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
\'com.google.cloud.discoveryengine.v1betaBSearchTuningServiceProtoPZQcloud.google.com/go/discoveryengine/apiv1beta/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�#Google.Cloud.DiscoveryEngine.V1Beta�#Google\\Cloud\\DiscoveryEngine\\V1beta�&Google::Cloud::DiscoveryEngine::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

