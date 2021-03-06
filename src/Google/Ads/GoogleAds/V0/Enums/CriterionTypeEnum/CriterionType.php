<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/criterion_type.proto

namespace Google\Ads\GoogleAds\V0\Enums\CriterionTypeEnum;

/**
 * Enum describing possible criterion types.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.CriterionTypeEnum.CriterionType</code>
 */
class CriterionType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Keyword. e.g. 'mars cruise'.
     *
     * Generated from protobuf enum <code>KEYWORD = 2;</code>
     */
    const KEYWORD = 2;
    /**
     * Devices to target.
     *
     * Generated from protobuf enum <code>DEVICE = 6;</code>
     */
    const DEVICE = 6;
    /**
     * Locations to target.
     *
     * Generated from protobuf enum <code>LOCATION = 7;</code>
     */
    const LOCATION = 7;
    /**
     * Listing groups to target.
     *
     * Generated from protobuf enum <code>LISTING_GROUP = 8;</code>
     */
    const LISTING_GROUP = 8;
    /**
     * Ad Schedule.
     *
     * Generated from protobuf enum <code>AD_SCHEDULE = 9;</code>
     */
    const AD_SCHEDULE = 9;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CriterionType::class, \Google\Ads\GoogleAds\V0\Enums\CriterionTypeEnum_CriterionType::class);

