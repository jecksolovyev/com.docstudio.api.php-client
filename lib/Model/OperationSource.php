<?php
/**
 * OperationSource
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DocStudio Api Documentation
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: R110.5
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DocStudio\Client\Model;
use \DocStudio\Client\ObjectSerializer;

/**
 * OperationSource Class Doc Comment
 *
 * @category Class
 * @description Source of activity
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OperationSource
{
    /**
     * Possible values of this enum
     */
    public const WEB = 'WEB';

    public const API = 'API';

    public const JOB = 'JOB';

    public const INTEGRATION = 'INTEGRATION';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEB,
            self::API,
            self::JOB,
            self::INTEGRATION
        ];
    }
}


