<?php
/**
 * BillingEventType
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
 * The version of the OpenAPI document: R125.4
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DocStudio\Client\Model;
use \DocStudio\Client\ObjectSerializer;

/**
 * BillingEventType Class Doc Comment
 *
 * @category Class
 * @description Billing event
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BillingEventType
{
    /**
     * Possible values of this enum
     */
    public const NEW_CORP_USER = 'new-corp-user';

    public const NEW_ACCOUNT_INVITE = 'new-account-invite';

    public const INCOME_ENVELOPE = 'income-envelope';

    public const SENT_ENVELOPE = 'sent-envelope';

    public const ARCHIVE_ENVELOPE = 'archive-envelope';

    public const UNARCHIVE_ENVELOPE = 'unarchive-envelope';

    public const DELETE_ENVELOPE = 'delete-envelope';

    public const RESTORE_ENVELOPE = 'restore-envelope';

    public const ACCOUNT_MAILBOX = 'account-mailbox';

    public const DIG_SIGN_ENVELOPE = 'dig-sign-envelope';

    public const ACCOUNT_DOMAIN = 'account-domain';

    public const INTEGRATION_RULE = 'integration-rule';

    public const ENVELOPE_SCENARIO = 'envelope-scenario';

    public const CLOUD_SIGNATURE = 'cloud-signature';

    public const ENVELOPE_APPROVAL = 'envelope-approval';

    public const PASSWORD_POLICY = 'password-policy';

    public const CALLBACK_SENT = 'callback-sent';

    public const CREATE_TEMPLATE = 'create-template';

    public const DELETE_TEMPLATE = 'delete-template';

    public const ALLOW_TEMPLATE = 'allow-template';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NEW_CORP_USER,
            self::NEW_ACCOUNT_INVITE,
            self::INCOME_ENVELOPE,
            self::SENT_ENVELOPE,
            self::ARCHIVE_ENVELOPE,
            self::UNARCHIVE_ENVELOPE,
            self::DELETE_ENVELOPE,
            self::RESTORE_ENVELOPE,
            self::ACCOUNT_MAILBOX,
            self::DIG_SIGN_ENVELOPE,
            self::ACCOUNT_DOMAIN,
            self::INTEGRATION_RULE,
            self::ENVELOPE_SCENARIO,
            self::CLOUD_SIGNATURE,
            self::ENVELOPE_APPROVAL,
            self::PASSWORD_POLICY,
            self::CALLBACK_SENT,
            self::CREATE_TEMPLATE,
            self::DELETE_TEMPLATE,
            self::ALLOW_TEMPLATE
        ];
    }
}


