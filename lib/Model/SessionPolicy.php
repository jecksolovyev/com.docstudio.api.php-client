<?php
/**
 * SessionPolicy
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
 * SessionPolicy Class Doc Comment
 *
 * @category Class
 * @description Session policy
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SessionPolicy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SessionPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'session_hours' => 'int',
        'single_session' => 'bool',
        'single_ip_session' => 'bool',
        'max_login_attempts' => 'int',
        'max_attempts_timeout_minutes' => 'int',
        'allowed_ips' => 'string[]',
        'blocked_ips' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'session_hours' => 'int32',
        'single_session' => null,
        'single_ip_session' => null,
        'max_login_attempts' => 'int32',
        'max_attempts_timeout_minutes' => 'int32',
        'allowed_ips' => null,
        'blocked_ips' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'session_hours' => false,
        'single_session' => false,
        'single_ip_session' => false,
        'max_login_attempts' => false,
        'max_attempts_timeout_minutes' => false,
        'allowed_ips' => false,
        'blocked_ips' => false
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
        'session_hours' => 'sessionHours',
        'single_session' => 'singleSession',
        'single_ip_session' => 'singleIpSession',
        'max_login_attempts' => 'maxLoginAttempts',
        'max_attempts_timeout_minutes' => 'maxAttemptsTimeoutMinutes',
        'allowed_ips' => 'allowedIps',
        'blocked_ips' => 'blockedIps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'session_hours' => 'setSessionHours',
        'single_session' => 'setSingleSession',
        'single_ip_session' => 'setSingleIpSession',
        'max_login_attempts' => 'setMaxLoginAttempts',
        'max_attempts_timeout_minutes' => 'setMaxAttemptsTimeoutMinutes',
        'allowed_ips' => 'setAllowedIps',
        'blocked_ips' => 'setBlockedIps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'session_hours' => 'getSessionHours',
        'single_session' => 'getSingleSession',
        'single_ip_session' => 'getSingleIpSession',
        'max_login_attempts' => 'getMaxLoginAttempts',
        'max_attempts_timeout_minutes' => 'getMaxAttemptsTimeoutMinutes',
        'allowed_ips' => 'getAllowedIps',
        'blocked_ips' => 'getBlockedIps'
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
        $this->setIfExists('session_hours', $data ?? [], null);
        $this->setIfExists('single_session', $data ?? [], null);
        $this->setIfExists('single_ip_session', $data ?? [], null);
        $this->setIfExists('max_login_attempts', $data ?? [], null);
        $this->setIfExists('max_attempts_timeout_minutes', $data ?? [], null);
        $this->setIfExists('allowed_ips', $data ?? [], null);
        $this->setIfExists('blocked_ips', $data ?? [], null);
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
     * Gets session_hours
     *
     * @return int|null
     */
    public function getSessionHours()
    {
        return $this->container['session_hours'];
    }

    /**
     * Sets session_hours
     *
     * @param int|null $session_hours session_hours
     *
     * @return self
     */
    public function setSessionHours($session_hours)
    {
        if (is_null($session_hours)) {
            throw new \InvalidArgumentException('non-nullable session_hours cannot be null');
        }
        $this->container['session_hours'] = $session_hours;

        return $this;
    }

    /**
     * Gets single_session
     *
     * @return bool|null
     */
    public function getSingleSession()
    {
        return $this->container['single_session'];
    }

    /**
     * Sets single_session
     *
     * @param bool|null $single_session single_session
     *
     * @return self
     */
    public function setSingleSession($single_session)
    {
        if (is_null($single_session)) {
            throw new \InvalidArgumentException('non-nullable single_session cannot be null');
        }
        $this->container['single_session'] = $single_session;

        return $this;
    }

    /**
     * Gets single_ip_session
     *
     * @return bool|null
     */
    public function getSingleIpSession()
    {
        return $this->container['single_ip_session'];
    }

    /**
     * Sets single_ip_session
     *
     * @param bool|null $single_ip_session single_ip_session
     *
     * @return self
     */
    public function setSingleIpSession($single_ip_session)
    {
        if (is_null($single_ip_session)) {
            throw new \InvalidArgumentException('non-nullable single_ip_session cannot be null');
        }
        $this->container['single_ip_session'] = $single_ip_session;

        return $this;
    }

    /**
     * Gets max_login_attempts
     *
     * @return int|null
     */
    public function getMaxLoginAttempts()
    {
        return $this->container['max_login_attempts'];
    }

    /**
     * Sets max_login_attempts
     *
     * @param int|null $max_login_attempts max_login_attempts
     *
     * @return self
     */
    public function setMaxLoginAttempts($max_login_attempts)
    {
        if (is_null($max_login_attempts)) {
            throw new \InvalidArgumentException('non-nullable max_login_attempts cannot be null');
        }
        $this->container['max_login_attempts'] = $max_login_attempts;

        return $this;
    }

    /**
     * Gets max_attempts_timeout_minutes
     *
     * @return int|null
     */
    public function getMaxAttemptsTimeoutMinutes()
    {
        return $this->container['max_attempts_timeout_minutes'];
    }

    /**
     * Sets max_attempts_timeout_minutes
     *
     * @param int|null $max_attempts_timeout_minutes max_attempts_timeout_minutes
     *
     * @return self
     */
    public function setMaxAttemptsTimeoutMinutes($max_attempts_timeout_minutes)
    {
        if (is_null($max_attempts_timeout_minutes)) {
            throw new \InvalidArgumentException('non-nullable max_attempts_timeout_minutes cannot be null');
        }
        $this->container['max_attempts_timeout_minutes'] = $max_attempts_timeout_minutes;

        return $this;
    }

    /**
     * Gets allowed_ips
     *
     * @return string[]|null
     */
    public function getAllowedIps()
    {
        return $this->container['allowed_ips'];
    }

    /**
     * Sets allowed_ips
     *
     * @param string[]|null $allowed_ips allowed_ips
     *
     * @return self
     */
    public function setAllowedIps($allowed_ips)
    {
        if (is_null($allowed_ips)) {
            throw new \InvalidArgumentException('non-nullable allowed_ips cannot be null');
        }


        $this->container['allowed_ips'] = $allowed_ips;

        return $this;
    }

    /**
     * Gets blocked_ips
     *
     * @return string[]|null
     */
    public function getBlockedIps()
    {
        return $this->container['blocked_ips'];
    }

    /**
     * Sets blocked_ips
     *
     * @param string[]|null $blocked_ips blocked_ips
     *
     * @return self
     */
    public function setBlockedIps($blocked_ips)
    {
        if (is_null($blocked_ips)) {
            throw new \InvalidArgumentException('non-nullable blocked_ips cannot be null');
        }


        $this->container['blocked_ips'] = $blocked_ips;

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


