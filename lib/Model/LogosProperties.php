<?php
/**
 * LogosProperties
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
 * LogosProperties Class Doc Comment
 *
 * @category Class
 * @description Logos properties
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LogosProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LogosProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'logo_circle_svg' => 'string',
        'mime_types' => 'string[]',
        'logo_max_px' => 'int',
        'logo_min_px' => 'int',
        'logo_max_bytes' => 'int',
        'logo_cache_hours' => 'int',
        'default_brand_svg' => 'string',
        'logo_with_name_svg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'logo_circle_svg' => null,
        'mime_types' => null,
        'logo_max_px' => 'int32',
        'logo_min_px' => 'int32',
        'logo_max_bytes' => 'int32',
        'logo_cache_hours' => 'int32',
        'default_brand_svg' => null,
        'logo_with_name_svg' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'logo_circle_svg' => false,
        'mime_types' => false,
        'logo_max_px' => false,
        'logo_min_px' => false,
        'logo_max_bytes' => false,
        'logo_cache_hours' => false,
        'default_brand_svg' => false,
        'logo_with_name_svg' => false
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
        'logo_circle_svg' => 'logoCircleSvg',
        'mime_types' => 'mimeTypes',
        'logo_max_px' => 'logoMaxPx',
        'logo_min_px' => 'logoMinPx',
        'logo_max_bytes' => 'logoMaxBytes',
        'logo_cache_hours' => 'logoCacheHours',
        'default_brand_svg' => 'defaultBrandSvg',
        'logo_with_name_svg' => 'logoWithNameSvg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'logo_circle_svg' => 'setLogoCircleSvg',
        'mime_types' => 'setMimeTypes',
        'logo_max_px' => 'setLogoMaxPx',
        'logo_min_px' => 'setLogoMinPx',
        'logo_max_bytes' => 'setLogoMaxBytes',
        'logo_cache_hours' => 'setLogoCacheHours',
        'default_brand_svg' => 'setDefaultBrandSvg',
        'logo_with_name_svg' => 'setLogoWithNameSvg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'logo_circle_svg' => 'getLogoCircleSvg',
        'mime_types' => 'getMimeTypes',
        'logo_max_px' => 'getLogoMaxPx',
        'logo_min_px' => 'getLogoMinPx',
        'logo_max_bytes' => 'getLogoMaxBytes',
        'logo_cache_hours' => 'getLogoCacheHours',
        'default_brand_svg' => 'getDefaultBrandSvg',
        'logo_with_name_svg' => 'getLogoWithNameSvg'
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
        $this->setIfExists('logo_circle_svg', $data ?? [], null);
        $this->setIfExists('mime_types', $data ?? [], null);
        $this->setIfExists('logo_max_px', $data ?? [], null);
        $this->setIfExists('logo_min_px', $data ?? [], null);
        $this->setIfExists('logo_max_bytes', $data ?? [], null);
        $this->setIfExists('logo_cache_hours', $data ?? [], null);
        $this->setIfExists('default_brand_svg', $data ?? [], null);
        $this->setIfExists('logo_with_name_svg', $data ?? [], null);
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
     * Gets logo_circle_svg
     *
     * @return string|null
     */
    public function getLogoCircleSvg()
    {
        return $this->container['logo_circle_svg'];
    }

    /**
     * Sets logo_circle_svg
     *
     * @param string|null $logo_circle_svg logo_circle_svg
     *
     * @return self
     */
    public function setLogoCircleSvg($logo_circle_svg)
    {
        if (is_null($logo_circle_svg)) {
            throw new \InvalidArgumentException('non-nullable logo_circle_svg cannot be null');
        }
        $this->container['logo_circle_svg'] = $logo_circle_svg;

        return $this;
    }

    /**
     * Gets mime_types
     *
     * @return string[]|null
     */
    public function getMimeTypes()
    {
        return $this->container['mime_types'];
    }

    /**
     * Sets mime_types
     *
     * @param string[]|null $mime_types mime_types
     *
     * @return self
     */
    public function setMimeTypes($mime_types)
    {
        if (is_null($mime_types)) {
            throw new \InvalidArgumentException('non-nullable mime_types cannot be null');
        }


        $this->container['mime_types'] = $mime_types;

        return $this;
    }

    /**
     * Gets logo_max_px
     *
     * @return int|null
     */
    public function getLogoMaxPx()
    {
        return $this->container['logo_max_px'];
    }

    /**
     * Sets logo_max_px
     *
     * @param int|null $logo_max_px logo_max_px
     *
     * @return self
     */
    public function setLogoMaxPx($logo_max_px)
    {
        if (is_null($logo_max_px)) {
            throw new \InvalidArgumentException('non-nullable logo_max_px cannot be null');
        }
        $this->container['logo_max_px'] = $logo_max_px;

        return $this;
    }

    /**
     * Gets logo_min_px
     *
     * @return int|null
     */
    public function getLogoMinPx()
    {
        return $this->container['logo_min_px'];
    }

    /**
     * Sets logo_min_px
     *
     * @param int|null $logo_min_px logo_min_px
     *
     * @return self
     */
    public function setLogoMinPx($logo_min_px)
    {
        if (is_null($logo_min_px)) {
            throw new \InvalidArgumentException('non-nullable logo_min_px cannot be null');
        }
        $this->container['logo_min_px'] = $logo_min_px;

        return $this;
    }

    /**
     * Gets logo_max_bytes
     *
     * @return int|null
     */
    public function getLogoMaxBytes()
    {
        return $this->container['logo_max_bytes'];
    }

    /**
     * Sets logo_max_bytes
     *
     * @param int|null $logo_max_bytes logo_max_bytes
     *
     * @return self
     */
    public function setLogoMaxBytes($logo_max_bytes)
    {
        if (is_null($logo_max_bytes)) {
            throw new \InvalidArgumentException('non-nullable logo_max_bytes cannot be null');
        }
        $this->container['logo_max_bytes'] = $logo_max_bytes;

        return $this;
    }

    /**
     * Gets logo_cache_hours
     *
     * @return int|null
     */
    public function getLogoCacheHours()
    {
        return $this->container['logo_cache_hours'];
    }

    /**
     * Sets logo_cache_hours
     *
     * @param int|null $logo_cache_hours logo_cache_hours
     *
     * @return self
     */
    public function setLogoCacheHours($logo_cache_hours)
    {
        if (is_null($logo_cache_hours)) {
            throw new \InvalidArgumentException('non-nullable logo_cache_hours cannot be null');
        }
        $this->container['logo_cache_hours'] = $logo_cache_hours;

        return $this;
    }

    /**
     * Gets default_brand_svg
     *
     * @return string|null
     */
    public function getDefaultBrandSvg()
    {
        return $this->container['default_brand_svg'];
    }

    /**
     * Sets default_brand_svg
     *
     * @param string|null $default_brand_svg default_brand_svg
     *
     * @return self
     */
    public function setDefaultBrandSvg($default_brand_svg)
    {
        if (is_null($default_brand_svg)) {
            throw new \InvalidArgumentException('non-nullable default_brand_svg cannot be null');
        }
        $this->container['default_brand_svg'] = $default_brand_svg;

        return $this;
    }

    /**
     * Gets logo_with_name_svg
     *
     * @return string|null
     */
    public function getLogoWithNameSvg()
    {
        return $this->container['logo_with_name_svg'];
    }

    /**
     * Sets logo_with_name_svg
     *
     * @param string|null $logo_with_name_svg logo_with_name_svg
     *
     * @return self
     */
    public function setLogoWithNameSvg($logo_with_name_svg)
    {
        if (is_null($logo_with_name_svg)) {
            throw new \InvalidArgumentException('non-nullable logo_with_name_svg cannot be null');
        }
        $this->container['logo_with_name_svg'] = $logo_with_name_svg;

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


