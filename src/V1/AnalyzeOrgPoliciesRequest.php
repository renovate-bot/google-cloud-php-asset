<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for
 * [AssetService.AnalyzeOrgPolicies][google.cloud.asset.v1.AssetService.AnalyzeOrgPolicies].
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.AnalyzeOrgPoliciesRequest</code>
 */
class AnalyzeOrgPoliciesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The organization to scope the request. Only organization
     * policies within the scope will be analyzed.
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $scope = '';
    /**
     * Required. The name of the constraint to analyze organization policies for.
     * The response only contains analyzed organization policies for the provided
     * constraint.
     *
     * Generated from protobuf field <code>string constraint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $constraint = '';
    /**
     * The expression to filter
     * [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results].
     * Filtering is currently available for bare literal values and the following
     * fields:
     * * consolidated_policy.attached_resource
     * * consolidated_policy.rules.enforce
     * When filtering by a specific field, the only supported operator is `=`.
     * For example, filtering by
     * consolidated_policy.attached_resource="//cloudresourcemanager.googleapis.com/folders/001"
     * will return all the Organization Policy results attached to "folders/001".
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    protected $filter = '';
    /**
     * The maximum number of items to return per page. If unspecified,
     * [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results]
     * will contain 20 items with a maximum of 200.
     *
     * Generated from protobuf field <code>optional int32 page_size = 4;</code>
     */
    protected $page_size = null;
    /**
     * The pagination token to retrieve the next page.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     */
    protected $page_token = '';

    /**
     * @param string $scope      Required. The organization to scope the request. Only organization
     *                           policies within the scope will be analyzed.
     *
     *                           * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     * @param string $constraint Required. The name of the constraint to analyze organization policies for.
     *                           The response only contains analyzed organization policies for the provided
     *                           constraint.
     * @param string $filter     The expression to filter
     *                           [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results].
     *                           Filtering is currently available for bare literal values and the following
     *                           fields:
     *                           * consolidated_policy.attached_resource
     *                           * consolidated_policy.rules.enforce
     *
     *                           When filtering by a specific field, the only supported operator is `=`.
     *                           For example, filtering by
     *                           consolidated_policy.attached_resource="//cloudresourcemanager.googleapis.com/folders/001"
     *                           will return all the Organization Policy results attached to "folders/001".
     *
     * @return \Google\Cloud\Asset\V1\AnalyzeOrgPoliciesRequest
     *
     * @experimental
     */
    public static function build(string $scope, string $constraint, string $filter): self
    {
        return (new self())
            ->setScope($scope)
            ->setConstraint($constraint)
            ->setFilter($filter);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scope
     *           Required. The organization to scope the request. Only organization
     *           policies within the scope will be analyzed.
     *           * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *     @type string $constraint
     *           Required. The name of the constraint to analyze organization policies for.
     *           The response only contains analyzed organization policies for the provided
     *           constraint.
     *     @type string $filter
     *           The expression to filter
     *           [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results].
     *           Filtering is currently available for bare literal values and the following
     *           fields:
     *           * consolidated_policy.attached_resource
     *           * consolidated_policy.rules.enforce
     *           When filtering by a specific field, the only supported operator is `=`.
     *           For example, filtering by
     *           consolidated_policy.attached_resource="//cloudresourcemanager.googleapis.com/folders/001"
     *           will return all the Organization Policy results attached to "folders/001".
     *     @type int $page_size
     *           The maximum number of items to return per page. If unspecified,
     *           [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results]
     *           will contain 20 items with a maximum of 200.
     *     @type string $page_token
     *           The pagination token to retrieve the next page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The organization to scope the request. Only organization
     * policies within the scope will be analyzed.
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Required. The organization to scope the request. Only organization
     * policies within the scope will be analyzed.
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * Required. The name of the constraint to analyze organization policies for.
     * The response only contains analyzed organization policies for the provided
     * constraint.
     *
     * Generated from protobuf field <code>string constraint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * Required. The name of the constraint to analyze organization policies for.
     * The response only contains analyzed organization policies for the provided
     * constraint.
     *
     * Generated from protobuf field <code>string constraint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setConstraint($var)
    {
        GPBUtil::checkString($var, True);
        $this->constraint = $var;

        return $this;
    }

    /**
     * The expression to filter
     * [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results].
     * Filtering is currently available for bare literal values and the following
     * fields:
     * * consolidated_policy.attached_resource
     * * consolidated_policy.rules.enforce
     * When filtering by a specific field, the only supported operator is `=`.
     * For example, filtering by
     * consolidated_policy.attached_resource="//cloudresourcemanager.googleapis.com/folders/001"
     * will return all the Organization Policy results attached to "folders/001".
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The expression to filter
     * [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results].
     * Filtering is currently available for bare literal values and the following
     * fields:
     * * consolidated_policy.attached_resource
     * * consolidated_policy.rules.enforce
     * When filtering by a specific field, the only supported operator is `=`.
     * For example, filtering by
     * consolidated_policy.attached_resource="//cloudresourcemanager.googleapis.com/folders/001"
     * will return all the Organization Policy results attached to "folders/001".
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The maximum number of items to return per page. If unspecified,
     * [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results]
     * will contain 20 items with a maximum of 200.
     *
     * Generated from protobuf field <code>optional int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return isset($this->page_size) ? $this->page_size : 0;
    }

    public function hasPageSize()
    {
        return isset($this->page_size);
    }

    public function clearPageSize()
    {
        unset($this->page_size);
    }

    /**
     * The maximum number of items to return per page. If unspecified,
     * [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results]
     * will contain 20 items with a maximum of 200.
     *
     * Generated from protobuf field <code>optional int32 page_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The pagination token to retrieve the next page.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The pagination token to retrieve the next page.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

