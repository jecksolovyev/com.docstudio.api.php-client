<?php
/**
 * UserProperties
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

use \ArrayAccess;
use \DocStudio\Client\ObjectSerializer;

/**
 * UserProperties Class Doc Comment
 *
 * @category Class
 * @description User settings
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'profile_phone' => 'bool',
        'password_policy' => '\DocStudio\Client\Model\PasswordPolicy',
        'session_policy' => '\DocStudio\Client\Model\SessionPolicy',
        'measurement_system' => 'string',
        'allow_self_deletion' => 'bool',
        'allow_user_application_tokens' => 'bool',
        'allow_users_to_register' => 'bool',
        'allow_auto_deposite' => 'bool',
        'allow_manage_notification' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'profile_phone' => null,
        'password_policy' => null,
        'session_policy' => null,
        'measurement_system' => null,
        'allow_self_deletion' => null,
        'allow_user_application_tokens' => null,
        'allow_users_to_register' => null,
        'allow_auto_deposite' => null,
        'allow_manage_notification' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'profile_phone' => false,
        'password_policy' => false,
        'session_policy' => false,
        'measurement_system' => false,
        'allow_self_deletion' => false,
        'allow_user_application_tokens' => false,
        'allow_users_to_register' => false,
        'allow_auto_deposite' => false,
        'allow_manage_notification' => false
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
        'profile_phone' => 'profilePhone',
        'password_policy' => 'passwordPolicy',
        'session_policy' => 'sessionPolicy',
        'measurement_system' => 'measurementSystem',
        'allow_self_deletion' => 'allowSelfDeletion',
        'allow_user_application_tokens' => 'allowUserApplicationTokens',
        'allow_users_to_register' => 'allowUsersToRegister',
        'allow_auto_deposite' => 'allowAutoDeposite',
        'allow_manage_notification' => 'allowManageNotification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'profile_phone' => 'setProfilePhone',
        'password_policy' => 'setPasswordPolicy',
        'session_policy' => 'setSessionPolicy',
        'measurement_system' => 'setMeasurementSystem',
        'allow_self_deletion' => 'setAllowSelfDeletion',
        'allow_user_application_tokens' => 'setAllowUserApplicationTokens',
        'allow_users_to_register' => 'setAllowUsersToRegister',
        'allow_auto_deposite' => 'setAllowAutoDeposite',
        'allow_manage_notification' => 'setAllowManageNotification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'profile_phone' => 'getProfilePhone',
        'password_policy' => 'getPasswordPolicy',
        'session_policy' => 'getSessionPolicy',
        'measurement_system' => 'getMeasurementSystem',
        'allow_self_deletion' => 'getAllowSelfDeletion',
        'allow_user_application_tokens' => 'getAllowUserApplicationTokens',
        'allow_users_to_register' => 'getAllowUsersToRegister',
        'allow_auto_deposite' => 'getAllowAutoDeposite',
        'allow_manage_notification' => 'getAllowManageNotification'
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

    public const MEASUREMENT_SYSTEM_METRIC = 'METRIC';
    public const MEASUREMENT_SYSTEM_IMPERIAL = 'IMPERIAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMeasurementSystemAllowableValues()
    {
        return [
            self::MEASUREMENT_SYSTEM_METRIC,
            self::MEASUREMENT_SYSTEM_IMPERIAL,
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('profile_phone', $data ?? [], null);
        $this->setIfExists('password_policy', $data ?? [], null);
        $this->setIfExists('session_policy', $data ?? [], null);
        $this->setIfExists('measurement_system', $data ?? [], null);
        $this->setIfExists('allow_self_deletion', $data ?? [], null);
        $this->setIfExists('allow_user_application_tokens', $data ?? [], null);
        $this->setIfExists('allow_users_to_register', $data ?? [], null);
        $this->setIfExists('allow_auto_deposite', $data ?? [], null);
        $this->setIfExists('allow_manage_notification', $data ?? [], null);
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

        $allowedValues = $this->getMeasurementSystemAllowableValues();
        if (!is_null($this->container['measurement_system']) && !in_array($this->container['measurement_system'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'measurement_system', must be one of '%s'",
                $this->container['measurement_system'],
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
     * Gets profile_phone
     *
     * @return bool|null
     */
    public function getProfilePhone()
    {
        return $this->container['profile_phone'];
    }

    /**
     * Sets profile_phone
     *
     * @param bool|null $profile_phone profile_phone
     *
     * @return self
     */
    public function setProfilePhone($profile_phone)
    {
        if (is_null($profile_phone)) {
            throw new \InvalidArgumentException('non-nullable profile_phone cannot be null');
        }
        $this->container['profile_phone'] = $profile_phone;

        return $this;
    }

    /**
     * Gets password_policy
     *
     * @return \DocStudio\Client\Model\PasswordPolicy|null
     */
    public function getPasswordPolicy()
    {
        return $this->container['password_policy'];
    }

    /**
     * Sets password_policy
     *
     * @param \DocStudio\Client\Model\PasswordPolicy|null $password_policy password_policy
     *
     * @return self
     */
    public function setPasswordPolicy($password_policy)
    {
        if (is_null($password_policy)) {
            throw new \InvalidArgumentException('non-nullable password_policy cannot be null');
        }
        $this->container['password_policy'] = $password_policy;

        return $this;
    }

    /**
     * Gets session_policy
     *
     * @return \DocStudio\Client\Model\SessionPolicy|null
     */
    public function getSessionPolicy()
    {
        return $this->container['session_policy'];
    }

    /**
     * Sets session_policy
     *
     * @param \DocStudio\Client\Model\SessionPolicy|null $session_policy session_policy
     *
     * @return self
     */
    public function setSessionPolicy($session_policy)
    {
        if (is_null($session_policy)) {
            throw new \InvalidArgumentException('non-nullable session_policy cannot be null');
        }
        $this->container['session_policy'] = $session_policy;

        return $this;
    }

    /**
     * Gets measurement_system
     *
     * @return string|null
     */
    public function getMeasurementSystem()
    {
        return $this->container['measurement_system'];
    }

    /**
     * Sets measurement_system
     *
     * @param string|null $measurement_system measurement_system
     *
     * @return self
     */
    public function setMeasurementSystem($measurement_system)
    {
        if (is_null($measurement_system)) {
            throw new \InvalidArgumentException('non-nullable measurement_system cannot be null');
        }
        $allowedValues = $this->getMeasurementSystemAllowableValues();
        if (!in_array($measurement_system, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'measurement_system', must be one of '%s'",
                    $measurement_system,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['measurement_system'] = $measurement_system;

        return $this;
    }

    /**
     * Gets allow_self_deletion
     *
     * @return bool|null
     */
    public function getAllowSelfDeletion()
    {
        return $this->container['allow_self_deletion'];
    }

    /**
     * Sets allow_self_deletion
     *
     * @param bool|null $allow_self_deletion allow_self_deletion
     *
     * @return self
     */
    public function setAllowSelfDeletion($allow_self_deletion)
    {
        if (is_null($allow_self_deletion)) {
            throw new \InvalidArgumentException('non-nullable allow_self_deletion cannot be null');
        }
        $this->container['allow_self_deletion'] = $allow_self_deletion;

        return $this;
    }

    /**
     * Gets allow_user_application_tokens
     *
     * @return bool|null
     */
    public function getAllowUserApplicationTokens()
    {
        return $this->container['allow_user_application_tokens'];
    }

    /**
     * Sets allow_user_application_tokens
     *
     * @param bool|null $allow_user_application_tokens Allow or deny user application tokens
     *
     * @return self
     */
    public function setAllowUserApplicationTokens($allow_user_application_tokens)
    {
        if (is_null($allow_user_application_tokens)) {
            throw new \InvalidArgumentException('non-nullable allow_user_application_tokens cannot be null');
        }
        $this->container['allow_user_application_tokens'] = $allow_user_application_tokens;

        return $this;
    }

    /**
     * Gets allow_users_to_register
     *
     * @return bool|null
     */
    public function getAllowUsersToRegister()
    {
        return $this->container['allow_users_to_register'];
    }

    /**
     * Sets allow_users_to_register
     *
     * @param bool|null $allow_users_to_register Allow or deny users to register
     *
     * @return self
     */
    public function setAllowUsersToRegister($allow_users_to_register)
    {
        if (is_null($allow_users_to_register)) {
            throw new \InvalidArgumentException('non-nullable allow_users_to_register cannot be null');
        }
        $this->container['allow_users_to_register'] = $allow_users_to_register;

        return $this;
    }

    /**
     * Gets allow_auto_deposite
     *
     * @return bool|null
     */
    public function getAllowAutoDeposite()
    {
        return $this->container['allow_auto_deposite'];
    }

    /**
     * Sets allow_auto_deposite
     *
     * @param bool|null $allow_auto_deposite Allow or deny users to set Auto Deposit Mailbox
     *
     * @return self
     */
    public function setAllowAutoDeposite($allow_auto_deposite)
    {
        if (is_null($allow_auto_deposite)) {
            throw new \InvalidArgumentException('non-nullable allow_auto_deposite cannot be null');
        }
        $this->container['allow_auto_deposite'] = $allow_auto_deposite;

        return $this;
    }

    /**
     * Gets allow_manage_notification
     *
     * @return bool|null
     */
    public function getAllowManageNotification()
    {
        return $this->container['allow_manage_notification'];
    }

    /**
     * Sets allow_manage_notification
     *
     * @param bool|null $allow_manage_notification Allow or deny users to manage notifications
     *
     * @return self
     */
    public function setAllowManageNotification($allow_manage_notification)
    {
        if (is_null($allow_manage_notification)) {
            throw new \InvalidArgumentException('non-nullable allow_manage_notification cannot be null');
        }
        $this->container['allow_manage_notification'] = $allow_manage_notification;

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


