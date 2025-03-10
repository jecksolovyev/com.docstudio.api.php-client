<?php
/**
 * CommentThreadDTO
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
 * CommentThreadDTO Class Doc Comment
 *
 * @category Class
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommentThreadDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CommentThreadDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mailbox_uuid' => 'string',
        'mailbox_name' => 'string',
        'thread_uuid' => 'string',
        'xpath' => 'string',
        'messages' => '\DocStudio\Client\Model\CommentMessageDTO[]',
        'access_type' => 'string',
        'shared_to' => '\DocStudio\Client\Model\NameUuidDTO[]'
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
        'mailbox_name' => null,
        'thread_uuid' => 'uuid',
        'xpath' => null,
        'messages' => null,
        'access_type' => null,
        'shared_to' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mailbox_uuid' => false,
        'mailbox_name' => false,
        'thread_uuid' => false,
        'xpath' => false,
        'messages' => false,
        'access_type' => false,
        'shared_to' => false
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
        'mailbox_name' => 'mailboxName',
        'thread_uuid' => 'threadUuid',
        'xpath' => 'xpath',
        'messages' => 'messages',
        'access_type' => 'accessType',
        'shared_to' => 'sharedTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mailbox_uuid' => 'setMailboxUuid',
        'mailbox_name' => 'setMailboxName',
        'thread_uuid' => 'setThreadUuid',
        'xpath' => 'setXpath',
        'messages' => 'setMessages',
        'access_type' => 'setAccessType',
        'shared_to' => 'setSharedTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mailbox_uuid' => 'getMailboxUuid',
        'mailbox_name' => 'getMailboxName',
        'thread_uuid' => 'getThreadUuid',
        'xpath' => 'getXpath',
        'messages' => 'getMessages',
        'access_type' => 'getAccessType',
        'shared_to' => 'getSharedTo'
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

    public const ACCESS_TYPE_MAILBOX = 'mailbox';
    public const ACCESS_TYPE_ACCOUNT = 'account';
    public const ACCESS_TYPE_PUB = 'pub';
    public const ACCESS_TYPE_OFFICIAL = 'official';
    public const ACCESS_TYPE_SHARED = 'shared';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessTypeAllowableValues()
    {
        return [
            self::ACCESS_TYPE_MAILBOX,
            self::ACCESS_TYPE_ACCOUNT,
            self::ACCESS_TYPE_PUB,
            self::ACCESS_TYPE_OFFICIAL,
            self::ACCESS_TYPE_SHARED,
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
        $this->setIfExists('mailbox_uuid', $data ?? [], null);
        $this->setIfExists('mailbox_name', $data ?? [], null);
        $this->setIfExists('thread_uuid', $data ?? [], null);
        $this->setIfExists('xpath', $data ?? [], null);
        $this->setIfExists('messages', $data ?? [], null);
        $this->setIfExists('access_type', $data ?? [], null);
        $this->setIfExists('shared_to', $data ?? [], null);
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

        $allowedValues = $this->getAccessTypeAllowableValues();
        if (!is_null($this->container['access_type']) && !in_array($this->container['access_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'access_type', must be one of '%s'",
                $this->container['access_type'],
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
     * Gets mailbox_uuid
     *
     * @return string|null
     */
    public function getMailboxUuid()
    {
        return $this->container['mailbox_uuid'];
    }

    /**
     * Sets mailbox_uuid
     *
     * @param string|null $mailbox_uuid UUID of Mailbox created this comment
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
     * Gets mailbox_name
     *
     * @return string|null
     */
    public function getMailboxName()
    {
        return $this->container['mailbox_name'];
    }

    /**
     * Sets mailbox_name
     *
     * @param string|null $mailbox_name Name of Mailbox created this comment
     *
     * @return self
     */
    public function setMailboxName($mailbox_name)
    {
        if (is_null($mailbox_name)) {
            throw new \InvalidArgumentException('non-nullable mailbox_name cannot be null');
        }
        $this->container['mailbox_name'] = $mailbox_name;

        return $this;
    }

    /**
     * Gets thread_uuid
     *
     * @return string|null
     */
    public function getThreadUuid()
    {
        return $this->container['thread_uuid'];
    }

    /**
     * Sets thread_uuid
     *
     * @param string|null $thread_uuid Thread UUID
     *
     * @return self
     */
    public function setThreadUuid($thread_uuid)
    {
        if (is_null($thread_uuid)) {
            throw new \InvalidArgumentException('non-nullable thread_uuid cannot be null');
        }
        $this->container['thread_uuid'] = $thread_uuid;

        return $this;
    }

    /**
     * Gets xpath
     *
     * @return string|null
     */
    public function getXpath()
    {
        return $this->container['xpath'];
    }

    /**
     * Sets xpath
     *
     * @param string|null $xpath xPath to find selected area
     *
     * @return self
     */
    public function setXpath($xpath)
    {
        if (is_null($xpath)) {
            throw new \InvalidArgumentException('non-nullable xpath cannot be null');
        }
        $this->container['xpath'] = $xpath;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \DocStudio\Client\Model\CommentMessageDTO[]|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \DocStudio\Client\Model\CommentMessageDTO[]|null $messages All messages in the thread
     *
     * @return self
     */
    public function setMessages($messages)
    {
        if (is_null($messages)) {
            throw new \InvalidArgumentException('non-nullable messages cannot be null');
        }
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets access_type
     *
     * @return string|null
     */
    public function getAccessType()
    {
        return $this->container['access_type'];
    }

    /**
     * Sets access_type
     *
     * @param string|null $access_type Access level
     *
     * @return self
     */
    public function setAccessType($access_type)
    {
        if (is_null($access_type)) {
            throw new \InvalidArgumentException('non-nullable access_type cannot be null');
        }
        $allowedValues = $this->getAccessTypeAllowableValues();
        if (!in_array($access_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'access_type', must be one of '%s'",
                    $access_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['access_type'] = $access_type;

        return $this;
    }

    /**
     * Gets shared_to
     *
     * @return \DocStudio\Client\Model\NameUuidDTO[]|null
     */
    public function getSharedTo()
    {
        return $this->container['shared_to'];
    }

    /**
     * Sets shared_to
     *
     * @param \DocStudio\Client\Model\NameUuidDTO[]|null $shared_to shared_to
     *
     * @return self
     */
    public function setSharedTo($shared_to)
    {
        if (is_null($shared_to)) {
            throw new \InvalidArgumentException('non-nullable shared_to cannot be null');
        }


        $this->container['shared_to'] = $shared_to;

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


