<?php
/**
 * EmailProperties
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
 * EmailProperties Class Doc Comment
 *
 * @category Class
 * @description E-mails for support
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sales_support_email' => 'string',
        'help_center_title_key' => 'string',
        'address_title_key' => 'string',
        'contacts' => 'array<string,string[]>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sales_support_email' => null,
        'help_center_title_key' => null,
        'address_title_key' => null,
        'contacts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sales_support_email' => false,
        'help_center_title_key' => false,
        'address_title_key' => false,
        'contacts' => false
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
        'sales_support_email' => 'salesSupportEmail',
        'help_center_title_key' => 'helpCenterTitleKey',
        'address_title_key' => 'addressTitleKey',
        'contacts' => 'contacts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales_support_email' => 'setSalesSupportEmail',
        'help_center_title_key' => 'setHelpCenterTitleKey',
        'address_title_key' => 'setAddressTitleKey',
        'contacts' => 'setContacts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales_support_email' => 'getSalesSupportEmail',
        'help_center_title_key' => 'getHelpCenterTitleKey',
        'address_title_key' => 'getAddressTitleKey',
        'contacts' => 'getContacts'
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
        $this->setIfExists('sales_support_email', $data ?? [], null);
        $this->setIfExists('help_center_title_key', $data ?? [], null);
        $this->setIfExists('address_title_key', $data ?? [], null);
        $this->setIfExists('contacts', $data ?? [], null);
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
     * Gets sales_support_email
     *
     * @return string|null
     */
    public function getSalesSupportEmail()
    {
        return $this->container['sales_support_email'];
    }

    /**
     * Sets sales_support_email
     *
     * @param string|null $sales_support_email sales_support_email
     *
     * @return self
     */
    public function setSalesSupportEmail($sales_support_email)
    {
        if (is_null($sales_support_email)) {
            throw new \InvalidArgumentException('non-nullable sales_support_email cannot be null');
        }
        $this->container['sales_support_email'] = $sales_support_email;

        return $this;
    }

    /**
     * Gets help_center_title_key
     *
     * @return string|null
     */
    public function getHelpCenterTitleKey()
    {
        return $this->container['help_center_title_key'];
    }

    /**
     * Sets help_center_title_key
     *
     * @param string|null $help_center_title_key help_center_title_key
     *
     * @return self
     */
    public function setHelpCenterTitleKey($help_center_title_key)
    {
        if (is_null($help_center_title_key)) {
            throw new \InvalidArgumentException('non-nullable help_center_title_key cannot be null');
        }
        $this->container['help_center_title_key'] = $help_center_title_key;

        return $this;
    }

    /**
     * Gets address_title_key
     *
     * @return string|null
     */
    public function getAddressTitleKey()
    {
        return $this->container['address_title_key'];
    }

    /**
     * Sets address_title_key
     *
     * @param string|null $address_title_key address_title_key
     *
     * @return self
     */
    public function setAddressTitleKey($address_title_key)
    {
        if (is_null($address_title_key)) {
            throw new \InvalidArgumentException('non-nullable address_title_key cannot be null');
        }
        $this->container['address_title_key'] = $address_title_key;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return array<string,string[]>|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param array<string,string[]>|null $contacts contacts
     *
     * @return self
     */
    public function setContacts($contacts)
    {
        if (is_null($contacts)) {
            throw new \InvalidArgumentException('non-nullable contacts cannot be null');
        }
        $this->container['contacts'] = $contacts;

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


