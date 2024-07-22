<?php
/**
 * ProfileDTO
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
 * The version of the OpenAPI document: R110.4
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DocStudio\Client\Model;

use \ArrayAccess;
use \DocStudio\Client\ObjectSerializer;

/**
 * ProfileDTO Class Doc Comment
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProfileDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProfileDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'status' => 'string',
        'date_locale' => 'string',
        'locale' => 'string',
        'timezone' => 'string',
        'corporate_user' => 'bool',
        'sso_enabled' => 'bool',
        'auto_deposit_mailbox_uuid' => 'string',
        'phone' => 'string',
        'display_exact_date' => 'bool',
        'signature' => 'string',
        'accounts' => '\DocStudio\Client\Model\User2AccountWithMailboxesDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uuid' => 'uuid',
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'status' => null,
        'date_locale' => null,
        'locale' => null,
        'timezone' => null,
        'corporate_user' => null,
        'sso_enabled' => null,
        'auto_deposit_mailbox_uuid' => 'uuid',
        'phone' => null,
        'display_exact_date' => null,
        'signature' => null,
        'accounts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'uuid' => false,
        'email' => false,
        'first_name' => false,
        'last_name' => false,
        'status' => false,
        'date_locale' => false,
        'locale' => false,
        'timezone' => false,
        'corporate_user' => false,
        'sso_enabled' => false,
        'auto_deposit_mailbox_uuid' => false,
        'phone' => false,
        'display_exact_date' => false,
        'signature' => false,
        'accounts' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uuid' => 'uuid',
        'email' => 'email',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'status' => 'status',
        'date_locale' => 'dateLocale',
        'locale' => 'locale',
        'timezone' => 'timezone',
        'corporate_user' => 'corporateUser',
        'sso_enabled' => 'ssoEnabled',
        'auto_deposit_mailbox_uuid' => 'autoDepositMailboxUuid',
        'phone' => 'phone',
        'display_exact_date' => 'displayExactDate',
        'signature' => 'signature',
        'accounts' => 'accounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'status' => 'setStatus',
        'date_locale' => 'setDateLocale',
        'locale' => 'setLocale',
        'timezone' => 'setTimezone',
        'corporate_user' => 'setCorporateUser',
        'sso_enabled' => 'setSsoEnabled',
        'auto_deposit_mailbox_uuid' => 'setAutoDepositMailboxUuid',
        'phone' => 'setPhone',
        'display_exact_date' => 'setDisplayExactDate',
        'signature' => 'setSignature',
        'accounts' => 'setAccounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'status' => 'getStatus',
        'date_locale' => 'getDateLocale',
        'locale' => 'getLocale',
        'timezone' => 'getTimezone',
        'corporate_user' => 'getCorporateUser',
        'sso_enabled' => 'getSsoEnabled',
        'auto_deposit_mailbox_uuid' => 'getAutoDepositMailboxUuid',
        'phone' => 'getPhone',
        'display_exact_date' => 'getDisplayExactDate',
        'signature' => 'getSignature',
        'accounts' => 'getAccounts'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const STATUS_PENDING_INVITE = 'PENDING_INVITE';
    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_BLOCKED = 'BLOCKED';
    public const STATUS_PENDING_PASSWORD = 'PENDING_PASSWORD';
    public const STATUS_DELETED = 'DELETED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_INVITE,
            self::STATUS_ACTIVE,
            self::STATUS_BLOCKED,
            self::STATUS_PENDING_PASSWORD,
            self::STATUS_DELETED,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('date_locale', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('corporate_user', $data ?? [], null);
        $this->setIfExists('sso_enabled', $data ?? [], null);
        $this->setIfExists('auto_deposit_mailbox_uuid', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('display_exact_date', $data ?? [], null);
        $this->setIfExists('signature', $data ?? [], null);
        $this->setIfExists('accounts', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid User uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email User email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name User first name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name User last name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status User status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets date_locale
     *
     * @return string|null
     */
    public function getDateLocale()
    {
        return $this->container['date_locale'];
    }

    /**
     * Sets date_locale
     *
     * @param string|null $date_locale User locale for dates
     *
     * @return self
     */
    public function setDateLocale($date_locale)
    {
        if (is_null($date_locale)) {
            throw new \InvalidArgumentException('non-nullable date_locale cannot be null');
        }
        $this->container['date_locale'] = $date_locale;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale User locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone User timezone
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets corporate_user
     *
     * @return bool|null
     */
    public function getCorporateUser()
    {
        return $this->container['corporate_user'];
    }

    /**
     * Sets corporate_user
     *
     * @param bool|null $corporate_user Is corporate user
     *
     * @return self
     */
    public function setCorporateUser($corporate_user)
    {
        if (is_null($corporate_user)) {
            throw new \InvalidArgumentException('non-nullable corporate_user cannot be null');
        }
        $this->container['corporate_user'] = $corporate_user;

        return $this;
    }

    /**
     * Gets sso_enabled
     *
     * @return bool|null
     */
    public function getSsoEnabled()
    {
        return $this->container['sso_enabled'];
    }

    /**
     * Sets sso_enabled
     *
     * @param bool|null $sso_enabled Is SSO enabled for user
     *
     * @return self
     */
    public function setSsoEnabled($sso_enabled)
    {
        if (is_null($sso_enabled)) {
            throw new \InvalidArgumentException('non-nullable sso_enabled cannot be null');
        }
        $this->container['sso_enabled'] = $sso_enabled;

        return $this;
    }

    /**
     * Gets auto_deposit_mailbox_uuid
     *
     * @return string|null
     */
    public function getAutoDepositMailboxUuid()
    {
        return $this->container['auto_deposit_mailbox_uuid'];
    }

    /**
     * Sets auto_deposit_mailbox_uuid
     *
     * @param string|null $auto_deposit_mailbox_uuid Auto Deposit Mailbox UUID
     *
     * @return self
     */
    public function setAutoDepositMailboxUuid($auto_deposit_mailbox_uuid)
    {
        if (is_null($auto_deposit_mailbox_uuid)) {
            throw new \InvalidArgumentException('non-nullable auto_deposit_mailbox_uuid cannot be null');
        }
        $this->container['auto_deposit_mailbox_uuid'] = $auto_deposit_mailbox_uuid;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone User phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets display_exact_date
     *
     * @return bool|null
     */
    public function getDisplayExactDate()
    {
        return $this->container['display_exact_date'];
    }

    /**
     * Sets display_exact_date
     *
     * @param bool|null $display_exact_date Display exact date instead of relative
     *
     * @return self
     */
    public function setDisplayExactDate($display_exact_date)
    {
        if (is_null($display_exact_date)) {
            throw new \InvalidArgumentException('non-nullable display_exact_date cannot be null');
        }
        $this->container['display_exact_date'] = $display_exact_date;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string|null
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string|null $signature Saved eInk signature
     *
     * @return self
     */
    public function setSignature($signature)
    {
        if (is_null($signature)) {
            throw new \InvalidArgumentException('non-nullable signature cannot be null');
        }
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return \DocStudio\Client\Model\User2AccountWithMailboxesDTO[]|null
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \DocStudio\Client\Model\User2AccountWithMailboxesDTO[]|null $accounts User accounts belongs to
     *
     * @return self
     */
    public function setAccounts($accounts)
    {
        if (is_null($accounts)) {
            throw new \InvalidArgumentException('non-nullable accounts cannot be null');
        }
        $this->container['accounts'] = $accounts;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


