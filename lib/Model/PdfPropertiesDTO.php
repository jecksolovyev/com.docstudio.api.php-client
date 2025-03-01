<?php
/**
 * PdfPropertiesDTO
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
 * PdfPropertiesDTO Class Doc Comment
 *
 * @category Class
 * @description PDF properties
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PdfPropertiesDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PdfPropertiesDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'min_supported_width' => 'string',
        'min_supported_height' => 'string',
        'stamp_width' => 'string',
        'stamp_height' => 'string',
        'supported_conversion_extensions' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'min_supported_width' => null,
        'min_supported_height' => null,
        'stamp_width' => null,
        'stamp_height' => null,
        'supported_conversion_extensions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'min_supported_width' => false,
        'min_supported_height' => false,
        'stamp_width' => false,
        'stamp_height' => false,
        'supported_conversion_extensions' => false
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
        'min_supported_width' => 'minSupportedWidth',
        'min_supported_height' => 'minSupportedHeight',
        'stamp_width' => 'stampWidth',
        'stamp_height' => 'stampHeight',
        'supported_conversion_extensions' => 'supportedConversionExtensions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'min_supported_width' => 'setMinSupportedWidth',
        'min_supported_height' => 'setMinSupportedHeight',
        'stamp_width' => 'setStampWidth',
        'stamp_height' => 'setStampHeight',
        'supported_conversion_extensions' => 'setSupportedConversionExtensions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'min_supported_width' => 'getMinSupportedWidth',
        'min_supported_height' => 'getMinSupportedHeight',
        'stamp_width' => 'getStampWidth',
        'stamp_height' => 'getStampHeight',
        'supported_conversion_extensions' => 'getSupportedConversionExtensions'
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
        $this->setIfExists('min_supported_width', $data ?? [], null);
        $this->setIfExists('min_supported_height', $data ?? [], null);
        $this->setIfExists('stamp_width', $data ?? [], null);
        $this->setIfExists('stamp_height', $data ?? [], null);
        $this->setIfExists('supported_conversion_extensions', $data ?? [], null);
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
     * Gets min_supported_width
     *
     * @return string|null
     */
    public function getMinSupportedWidth()
    {
        return $this->container['min_supported_width'];
    }

    /**
     * Sets min_supported_width
     *
     * @param string|null $min_supported_width min_supported_width
     *
     * @return self
     */
    public function setMinSupportedWidth($min_supported_width)
    {
        if (is_null($min_supported_width)) {
            throw new \InvalidArgumentException('non-nullable min_supported_width cannot be null');
        }
        $this->container['min_supported_width'] = $min_supported_width;

        return $this;
    }

    /**
     * Gets min_supported_height
     *
     * @return string|null
     */
    public function getMinSupportedHeight()
    {
        return $this->container['min_supported_height'];
    }

    /**
     * Sets min_supported_height
     *
     * @param string|null $min_supported_height min_supported_height
     *
     * @return self
     */
    public function setMinSupportedHeight($min_supported_height)
    {
        if (is_null($min_supported_height)) {
            throw new \InvalidArgumentException('non-nullable min_supported_height cannot be null');
        }
        $this->container['min_supported_height'] = $min_supported_height;

        return $this;
    }

    /**
     * Gets stamp_width
     *
     * @return string|null
     */
    public function getStampWidth()
    {
        return $this->container['stamp_width'];
    }

    /**
     * Sets stamp_width
     *
     * @param string|null $stamp_width stamp_width
     *
     * @return self
     */
    public function setStampWidth($stamp_width)
    {
        if (is_null($stamp_width)) {
            throw new \InvalidArgumentException('non-nullable stamp_width cannot be null');
        }
        $this->container['stamp_width'] = $stamp_width;

        return $this;
    }

    /**
     * Gets stamp_height
     *
     * @return string|null
     */
    public function getStampHeight()
    {
        return $this->container['stamp_height'];
    }

    /**
     * Sets stamp_height
     *
     * @param string|null $stamp_height stamp_height
     *
     * @return self
     */
    public function setStampHeight($stamp_height)
    {
        if (is_null($stamp_height)) {
            throw new \InvalidArgumentException('non-nullable stamp_height cannot be null');
        }
        $this->container['stamp_height'] = $stamp_height;

        return $this;
    }

    /**
     * Gets supported_conversion_extensions
     *
     * @return string[]|null
     */
    public function getSupportedConversionExtensions()
    {
        return $this->container['supported_conversion_extensions'];
    }

    /**
     * Sets supported_conversion_extensions
     *
     * @param string[]|null $supported_conversion_extensions supported_conversion_extensions
     *
     * @return self
     */
    public function setSupportedConversionExtensions($supported_conversion_extensions)
    {
        if (is_null($supported_conversion_extensions)) {
            throw new \InvalidArgumentException('non-nullable supported_conversion_extensions cannot be null');
        }
        $this->container['supported_conversion_extensions'] = $supported_conversion_extensions;

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


