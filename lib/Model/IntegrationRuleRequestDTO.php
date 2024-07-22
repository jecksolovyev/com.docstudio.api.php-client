<?php
/**
 * IntegrationRuleRequestDTO
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
 * IntegrationRuleRequestDTO Class Doc Comment
 *
 * @category Class
 * @description Request details
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IntegrationRuleRequestDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntegrationRuleRequestDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mailbox_uuid' => 'string',
        'template_uuid' => 'string',
        'version_uuid' => 'string',
        'in' => 'bool',
        'naming_rule' => 'string',
        'map' => 'string',
        'source' => 'string',
        'multiple_envelopes' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mailbox_uuid' => 'uuid',
        'template_uuid' => 'uuid',
        'version_uuid' => 'uuid',
        'in' => null,
        'naming_rule' => null,
        'map' => null,
        'source' => null,
        'multiple_envelopes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mailbox_uuid' => false,
        'template_uuid' => false,
        'version_uuid' => false,
        'in' => false,
        'naming_rule' => false,
        'map' => false,
        'source' => false,
        'multiple_envelopes' => false
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
        'mailbox_uuid' => 'mailboxUuid',
        'template_uuid' => 'templateUuid',
        'version_uuid' => 'versionUuid',
        'in' => 'in',
        'naming_rule' => 'namingRule',
        'map' => 'map',
        'source' => 'source',
        'multiple_envelopes' => 'multipleEnvelopes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mailbox_uuid' => 'setMailboxUuid',
        'template_uuid' => 'setTemplateUuid',
        'version_uuid' => 'setVersionUuid',
        'in' => 'setIn',
        'naming_rule' => 'setNamingRule',
        'map' => 'setMap',
        'source' => 'setSource',
        'multiple_envelopes' => 'setMultipleEnvelopes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mailbox_uuid' => 'getMailboxUuid',
        'template_uuid' => 'getTemplateUuid',
        'version_uuid' => 'getVersionUuid',
        'in' => 'getIn',
        'naming_rule' => 'getNamingRule',
        'map' => 'getMap',
        'source' => 'getSource',
        'multiple_envelopes' => 'getMultipleEnvelopes'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('mailbox_uuid', $data ?? [], null);
        $this->setIfExists('template_uuid', $data ?? [], null);
        $this->setIfExists('version_uuid', $data ?? [], null);
        $this->setIfExists('in', $data ?? [], null);
        $this->setIfExists('naming_rule', $data ?? [], null);
        $this->setIfExists('map', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('multiple_envelopes', $data ?? [], null);
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

        if ($this->container['mailbox_uuid'] === null) {
            $invalidProperties[] = "'mailbox_uuid' can't be null";
        }
        if ($this->container['template_uuid'] === null) {
            $invalidProperties[] = "'template_uuid' can't be null";
        }
        if ($this->container['version_uuid'] === null) {
            $invalidProperties[] = "'version_uuid' can't be null";
        }
        if ($this->container['map'] === null) {
            $invalidProperties[] = "'map' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
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
     * Gets mailbox_uuid
     *
     * @return string
     */
    public function getMailboxUuid()
    {
        return $this->container['mailbox_uuid'];
    }

    /**
     * Sets mailbox_uuid
     *
     * @param string $mailbox_uuid UUID of mailbox for applying rule for
     *
     * @return self
     */
    public function setMailboxUuid($mailbox_uuid)
    {
        if (is_null($mailbox_uuid)) {
            throw new \InvalidArgumentException('non-nullable mailbox_uuid cannot be null');
        }
        $this->container['mailbox_uuid'] = $mailbox_uuid;

        return $this;
    }

    /**
     * Gets template_uuid
     *
     * @return string
     */
    public function getTemplateUuid()
    {
        return $this->container['template_uuid'];
    }

    /**
     * Sets template_uuid
     *
     * @param string $template_uuid UUID of the template to use for generated envelope
     *
     * @return self
     */
    public function setTemplateUuid($template_uuid)
    {
        if (is_null($template_uuid)) {
            throw new \InvalidArgumentException('non-nullable template_uuid cannot be null');
        }
        $this->container['template_uuid'] = $template_uuid;

        return $this;
    }

    /**
     * Gets version_uuid
     *
     * @return string
     */
    public function getVersionUuid()
    {
        return $this->container['version_uuid'];
    }

    /**
     * Sets version_uuid
     *
     * @param string $version_uuid UUID of template version
     *
     * @return self
     */
    public function setVersionUuid($version_uuid)
    {
        if (is_null($version_uuid)) {
            throw new \InvalidArgumentException('non-nullable version_uuid cannot be null');
        }
        $this->container['version_uuid'] = $version_uuid;

        return $this;
    }

    /**
     * Gets in
     *
     * @return bool|null
     */
    public function getIn()
    {
        return $this->container['in'];
    }

    /**
     * Sets in
     *
     * @param bool|null $in Rule direction, true = IN, false = OUT
     *
     * @return self
     */
    public function setIn($in)
    {
        if (is_null($in)) {
            throw new \InvalidArgumentException('non-nullable in cannot be null');
        }
        $this->container['in'] = $in;

        return $this;
    }

    /**
     * Gets naming_rule
     *
     * @return string|null
     */
    public function getNamingRule()
    {
        return $this->container['naming_rule'];
    }

    /**
     * Sets naming_rule
     *
     * @param string|null $naming_rule Naming pattern rule. Tokens allowed: {mailboxUuid}, {envelopeUuid}, {randomNumber}, {templateUuid}, {date yyyy-MM-dd_HH-mm-ss}. Forbidden characters are: /:?*<>|
     *
     * @return self
     */
    public function setNamingRule($naming_rule)
    {
        if (is_null($naming_rule)) {
            throw new \InvalidArgumentException('non-nullable naming_rule cannot be null');
        }
        $this->container['naming_rule'] = $naming_rule;

        return $this;
    }

    /**
     * Gets map
     *
     * @return string
     */
    public function getMap()
    {
        return $this->container['map'];
    }

    /**
     * Sets map
     *
     * @param string $map XSLT map to use for transformation
     *
     * @return self
     */
    public function setMap($map)
    {
        if (is_null($map)) {
            throw new \InvalidArgumentException('non-nullable map cannot be null');
        }
        $this->container['map'] = $map;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source XML source to convert
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets multiple_envelopes
     *
     * @return bool|null
     */
    public function getMultipleEnvelopes()
    {
        return $this->container['multiple_envelopes'];
    }

    /**
     * Sets multiple_envelopes
     *
     * @param bool|null $multiple_envelopes Multiple envelopes allowed
     *
     * @return self
     */
    public function setMultipleEnvelopes($multiple_envelopes)
    {
        if (is_null($multiple_envelopes)) {
            throw new \InvalidArgumentException('non-nullable multiple_envelopes cannot be null');
        }
        $this->container['multiple_envelopes'] = $multiple_envelopes;

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


