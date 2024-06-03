<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanager.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A taxonomy is a collection of hierarchical policy tags that classify data
 * along a common axis.
 * For example, a "data sensitivity" taxonomy might contain the following policy
 * tags:
 * ```
 * + PII
 *   + Account number
 *   + Age
 *   + SSN
 *   + Zipcode
 * + Financials
 *   + Revenue
 * ```
 * A "data origin" taxonomy might contain the following policy tags:
 * ```
 * + User data
 * + Employee data
 * + Partner data
 * + Public data
 * ```
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.Taxonomy</code>
 */
class Taxonomy extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Resource name of this taxonomy in URL format.
     * Note: Policy tag manager generates unique taxonomy IDs.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    private $name = '';
    /**
     * Required. User-defined name of this taxonomy.
     * The name can't start or end with spaces, must contain only Unicode letters,
     * numbers, underscores, dashes, and spaces, and be at most 200 bytes long
     * when encoded in UTF-8.
     * The taxonomy display name must be unique within an organization.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Optional. Description of this taxonomy. If not set, defaults to empty.
     * The description must contain only Unicode characters, tabs, newlines,
     * carriage returns, and page breaks, and be at most 2000 bytes long when
     * encoded in UTF-8.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Output only. Number of policy tags in this taxonomy.
     *
     * Generated from protobuf field <code>int32 policy_tag_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $policy_tag_count = 0;
    /**
     * Output only. Creation and modification timestamps of this taxonomy.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps taxonomy_timestamps = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $taxonomy_timestamps = null;
    /**
     * Optional. A list of policy types that are activated for this taxonomy. If
     * not set, defaults to an empty list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy.PolicyType activated_policy_types = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $activated_policy_types;
    /**
     * Output only. Identity of the service which owns the Taxonomy. This field is
     * only populated when the taxonomy is created by a Google Cloud service.
     * Currently only 'DATAPLEX' is supported.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy.Service service = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $service = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Resource name of this taxonomy in URL format.
     *           Note: Policy tag manager generates unique taxonomy IDs.
     *     @type string $display_name
     *           Required. User-defined name of this taxonomy.
     *           The name can't start or end with spaces, must contain only Unicode letters,
     *           numbers, underscores, dashes, and spaces, and be at most 200 bytes long
     *           when encoded in UTF-8.
     *           The taxonomy display name must be unique within an organization.
     *     @type string $description
     *           Optional. Description of this taxonomy. If not set, defaults to empty.
     *           The description must contain only Unicode characters, tabs, newlines,
     *           carriage returns, and page breaks, and be at most 2000 bytes long when
     *           encoded in UTF-8.
     *     @type int $policy_tag_count
     *           Output only. Number of policy tags in this taxonomy.
     *     @type \Google\Cloud\DataCatalog\V1\SystemTimestamps $taxonomy_timestamps
     *           Output only. Creation and modification timestamps of this taxonomy.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $activated_policy_types
     *           Optional. A list of policy types that are activated for this taxonomy. If
     *           not set, defaults to an empty list.
     *     @type \Google\Cloud\DataCatalog\V1\Taxonomy\Service $service
     *           Output only. Identity of the service which owns the Taxonomy. This field is
     *           only populated when the taxonomy is created by a Google Cloud service.
     *           Currently only 'DATAPLEX' is supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Resource name of this taxonomy in URL format.
     * Note: Policy tag manager generates unique taxonomy IDs.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Resource name of this taxonomy in URL format.
     * Note: Policy tag manager generates unique taxonomy IDs.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. User-defined name of this taxonomy.
     * The name can't start or end with spaces, must contain only Unicode letters,
     * numbers, underscores, dashes, and spaces, and be at most 200 bytes long
     * when encoded in UTF-8.
     * The taxonomy display name must be unique within an organization.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. User-defined name of this taxonomy.
     * The name can't start or end with spaces, must contain only Unicode letters,
     * numbers, underscores, dashes, and spaces, and be at most 200 bytes long
     * when encoded in UTF-8.
     * The taxonomy display name must be unique within an organization.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. Description of this taxonomy. If not set, defaults to empty.
     * The description must contain only Unicode characters, tabs, newlines,
     * carriage returns, and page breaks, and be at most 2000 bytes long when
     * encoded in UTF-8.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of this taxonomy. If not set, defaults to empty.
     * The description must contain only Unicode characters, tabs, newlines,
     * carriage returns, and page breaks, and be at most 2000 bytes long when
     * encoded in UTF-8.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Number of policy tags in this taxonomy.
     *
     * Generated from protobuf field <code>int32 policy_tag_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPolicyTagCount()
    {
        return $this->policy_tag_count;
    }

    /**
     * Output only. Number of policy tags in this taxonomy.
     *
     * Generated from protobuf field <code>int32 policy_tag_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPolicyTagCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->policy_tag_count = $var;

        return $this;
    }

    /**
     * Output only. Creation and modification timestamps of this taxonomy.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps taxonomy_timestamps = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DataCatalog\V1\SystemTimestamps|null
     */
    public function getTaxonomyTimestamps()
    {
        return $this->taxonomy_timestamps;
    }

    public function hasTaxonomyTimestamps()
    {
        return isset($this->taxonomy_timestamps);
    }

    public function clearTaxonomyTimestamps()
    {
        unset($this->taxonomy_timestamps);
    }

    /**
     * Output only. Creation and modification timestamps of this taxonomy.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SystemTimestamps taxonomy_timestamps = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DataCatalog\V1\SystemTimestamps $var
     * @return $this
     */
    public function setTaxonomyTimestamps($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\SystemTimestamps::class);
        $this->taxonomy_timestamps = $var;

        return $this;
    }

    /**
     * Optional. A list of policy types that are activated for this taxonomy. If
     * not set, defaults to an empty list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy.PolicyType activated_policy_types = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivatedPolicyTypes()
    {
        return $this->activated_policy_types;
    }

    /**
     * Optional. A list of policy types that are activated for this taxonomy. If
     * not set, defaults to an empty list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy.PolicyType activated_policy_types = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivatedPolicyTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\DataCatalog\V1\Taxonomy\PolicyType::class);
        $this->activated_policy_types = $arr;

        return $this;
    }

    /**
     * Output only. Identity of the service which owns the Taxonomy. This field is
     * only populated when the taxonomy is created by a Google Cloud service.
     * Currently only 'DATAPLEX' is supported.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy.Service service = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DataCatalog\V1\Taxonomy\Service|null
     */
    public function getService()
    {
        return $this->service;
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * Output only. Identity of the service which owns the Taxonomy. This field is
     * only populated when the taxonomy is created by a Google Cloud service.
     * Currently only 'DATAPLEX' is supported.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy.Service service = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DataCatalog\V1\Taxonomy\Service $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\Taxonomy\Service::class);
        $this->service = $var;

        return $this;
    }

}

