<?php
/**
 * EnvelopeCallbackDTO
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
 * EnvelopeCallbackDTO Class Doc Comment
 *
 * @category Class
 * @description Envelope callback dto
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EnvelopeCallbackDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnvelopeCallbackDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'filter' => '\DocStudio\Client\Model\CallbackEnvelopeFilterDTO',
        'url' => 'string',
        'retries' => 'int',
        'timeout' => 'int',
        'success_code' => 'int',
        'auth_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'filter' => null,
        'url' => null,
        'retries' => 'int32',
        'timeout' => 'int32',
        'success_code' => 'int32',
        'auth_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'filter' => false,
        'url' => false,
        'retries' => false,
        'timeout' => false,
        'success_code' => false,
        'auth_type' => false
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
        'id' => 'id',
        'filter' => 'filter',
        'url' => 'url',
        'retries' => 'retries',
        'timeout' => 'timeout',
        'success_code' => 'successCode',
        'auth_type' => 'authType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'filter' => 'setFilter',
        'url' => 'setUrl',
        'retries' => 'setRetries',
        'timeout' => 'setTimeout',
        'success_code' => 'setSuccessCode',
        'auth_type' => 'setAuthType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'filter' => 'getFilter',
        'url' => 'getUrl',
        'retries' => 'getRetries',
        'timeout' => 'getTimeout',
        'success_code' => 'getSuccessCode',
        'auth_type' => 'getAuthType'
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

    public const AUTH_TYPE_NONE = 'NONE';
    public const AUTH_TYPE_BASIC = 'BASIC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_NONE,
            self::AUTH_TYPE_BASIC,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('filter', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('retries', $data ?? [], null);
        $this->setIfExists('timeout', $data ?? [], null);
        $this->setIfExists('success_code', $data ?? [], 200);
        $this->setIfExists('auth_type', $data ?? [], null);
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

        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($this->container['auth_type']) && !in_array($this->container['auth_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auth_type', must be one of '%s'",
                $this->container['auth_type'],
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Envelope callback ID
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \DocStudio\Client\Model\CallbackEnvelopeFilterDTO|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \DocStudio\Client\Model\CallbackEnvelopeFilterDTO|null $filter filter
     *
     * @return self
     */
    public function setFilter($filter)
    {
        if (is_null($filter)) {
            throw new \InvalidArgumentException('non-nullable filter cannot be null');
        }
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url Callback url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return int|null
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param int|null $retries Retries count, 0 < X <= 10
     *
     * @return self
     */
    public function setRetries($retries)
    {
        if (is_null($retries)) {
            throw new \InvalidArgumentException('non-nullable retries cannot be null');
        }
        $this->container['retries'] = $retries;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int|null $timeout Request timeout (ms), 100 < X < 60000
     *
     * @return self
     */
    public function setTimeout($timeout)
    {
        if (is_null($timeout)) {
            throw new \InvalidArgumentException('non-nullable timeout cannot be null');
        }
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets success_code
     *
     * @return int|null
     */
    public function getSuccessCode()
    {
        return $this->container['success_code'];
    }

    /**
     * Sets success_code
     *
     * @param int|null $success_code Http response success code
     *
     * @return self
     */
    public function setSuccessCode($success_code)
    {
        if (is_null($success_code)) {
            throw new \InvalidArgumentException('non-nullable success_code cannot be null');
        }
        $this->container['success_code'] = $success_code;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return string|null
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param string|null $auth_type Auth type
     *
     * @return self
     */
    public function setAuthType($auth_type)
    {
        if (is_null($auth_type)) {
            throw new \InvalidArgumentException('non-nullable auth_type cannot be null');
        }
        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!in_array($auth_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auth_type', must be one of '%s'",
                    $auth_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_type'] = $auth_type;

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


