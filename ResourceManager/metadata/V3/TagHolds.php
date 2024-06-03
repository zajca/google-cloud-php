<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_holds.proto

namespace GPBMetadata\Google\Cloud\Resourcemanager\V3;

class TagHolds
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/resourcemanager/v3/tag_holds.protogoogle.cloud.resourcemanager.v3google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.proto"�
TagHold
name (	B�A
holder (	B�A
origin (	B�A
	help_link (	B�A4
create_time (2.google.protobuf.TimestampB�A:[�AX
+cloudresourcemanager.googleapis.com/TagHold)tagValues/{tag_value}/tagHolds/{tag_hold}"�
CreateTagHoldRequestC
parent (	B3�A�A-+cloudresourcemanager.googleapis.com/TagHold?
tag_hold (2(.google.cloud.resourcemanager.v3.TagHoldB�A
validate_only (B�A"
CreateTagHoldMetadata"u
DeleteTagHoldRequestA
name (	B3�A�A-
+cloudresourcemanager.googleapis.com/TagHold
validate_only (B�A"
DeleteTagHoldMetadata"�
ListTagHoldsRequestC
parent (	B3�A�A-+cloudresourcemanager.googleapis.com/TagHold
	page_size (B�A

page_token (	B�A
filter (	B�A"l
ListTagHoldsResponse;
	tag_holds (2(.google.cloud.resourcemanager.v3.TagHold
next_page_token (	2�
TagHolds�
CreateTagHold5.google.cloud.resourcemanager.v3.CreateTagHoldRequest.google.longrunning.Operation"h�A 
TagHoldCreateTagHoldMetadata�Aparent,tag_hold���-"!/v3/{parent=tagValues/*}/tagHolds:tag_hold�
DeleteTagHold5.google.cloud.resourcemanager.v3.DeleteTagHoldRequest.google.longrunning.Operation"a�A.
google.protobuf.EmptyDeleteTagHoldMetadata�Aname���#*!/v3/{name=tagValues/*/tagHolds/*}�
ListTagHolds4.google.cloud.resourcemanager.v3.ListTagHoldsRequest5.google.cloud.resourcemanager.v3.ListTagHoldsResponse"2�Aparent���#!/v3/{parent=tagValues/*}/tagHolds��A#cloudresourcemanager.googleapis.com�Aghttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-onlyB�
#com.google.cloud.resourcemanager.v3BTagHoldsProtoPZMcloud.google.com/go/resourcemanager/apiv3/resourcemanagerpb;resourcemanagerpb�Google.Cloud.ResourceManager.V3�Google\\Cloud\\ResourceManager\\V3�"Google::Cloud::ResourceManager::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

