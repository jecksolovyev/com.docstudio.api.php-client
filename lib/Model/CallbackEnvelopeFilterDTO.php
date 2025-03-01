<?php
/**
 * CallbackEnvelopeFilterDTO
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
 * CallbackEnvelopeFilterDTO Class Doc Comment
 *
 * @category Class
 * @description Search parameters for callback envelopes
 * @package  DocStudio\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CallbackEnvelopeFilterDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CallbackEnvelopeFilterDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label' => 'string[]',
        'status' => 'string[]',
        'subject' => 'string',
        'create_date_from' => '\DateTime',
        'create_date_to' => '\DateTime',
        'receive_date_from' => '\DateTime',
        'receive_date_to' => '\DateTime',
        'expire_date_from' => '\DateTime',
        'expire_date_to' => '\DateTime',
        'send_date_from' => '\DateTime',
        'send_date_to' => '\DateTime',
        'template' => 'string[]',
        'sender' => 'string[]',
        'scope' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label' => null,
        'status' => null,
        'subject' => null,
        'create_date_from' => 'date-time',
        'create_date_to' => 'date-time',
        'receive_date_from' => 'date-time',
        'receive_date_to' => 'date-time',
        'expire_date_from' => 'date-time',
        'expire_date_to' => 'date-time',
        'send_date_from' => 'date-time',
        'send_date_to' => 'date-time',
        'template' => 'uuid',
        'sender' => 'uuid',
        'scope' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'label' => false,
        'status' => false,
        'subject' => false,
        'create_date_from' => false,
        'create_date_to' => false,
        'receive_date_from' => false,
        'receive_date_to' => false,
        'expire_date_from' => false,
        'expire_date_to' => false,
        'send_date_from' => false,
        'send_date_to' => false,
        'template' => false,
        'sender' => false,
        'scope' => false
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
        'label' => 'label',
        'status' => 'status',
        'subject' => 'subject',
        'create_date_from' => 'createDateFrom',
        'create_date_to' => 'createDateTo',
        'receive_date_from' => 'receiveDateFrom',
        'receive_date_to' => 'receiveDateTo',
        'expire_date_from' => 'expireDateFrom',
        'expire_date_to' => 'expireDateTo',
        'send_date_from' => 'sendDateFrom',
        'send_date_to' => 'sendDateTo',
        'template' => 'template',
        'sender' => 'sender',
        'scope' => 'scope'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
        'status' => 'setStatus',
        'subject' => 'setSubject',
        'create_date_from' => 'setCreateDateFrom',
        'create_date_to' => 'setCreateDateTo',
        'receive_date_from' => 'setReceiveDateFrom',
        'receive_date_to' => 'setReceiveDateTo',
        'expire_date_from' => 'setExpireDateFrom',
        'expire_date_to' => 'setExpireDateTo',
        'send_date_from' => 'setSendDateFrom',
        'send_date_to' => 'setSendDateTo',
        'template' => 'setTemplate',
        'sender' => 'setSender',
        'scope' => 'setScope'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
        'status' => 'getStatus',
        'subject' => 'getSubject',
        'create_date_from' => 'getCreateDateFrom',
        'create_date_to' => 'getCreateDateTo',
        'receive_date_from' => 'getReceiveDateFrom',
        'receive_date_to' => 'getReceiveDateTo',
        'expire_date_from' => 'getExpireDateFrom',
        'expire_date_to' => 'getExpireDateTo',
        'send_date_from' => 'getSendDateFrom',
        'send_date_to' => 'getSendDateTo',
        'template' => 'getTemplate',
        'sender' => 'getSender',
        'scope' => 'getScope'
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

    public const STATUS_DRAFT = 'DRAFT';
    public const STATUS_SENT = 'SENT';
    public const STATUS_WAITING = 'WAITING';
    public const STATUS_COMPLETED = 'COMPLETED';
    public const STATUS_CANCELLED = 'CANCELLED';
    public const STATUS_EXPIRED = 'EXPIRED';
    public const STATUS_ON_APPROVAL = 'ON_APPROVAL';
    public const SCOPE_INBOX = 'inbox';
    public const SCOPE_OUTBOX = 'outbox';
    public const SCOPE_DRAFT = 'draft';
    public const SCOPE_SHARED = 'shared';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_SENT,
            self::STATUS_WAITING,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELLED,
            self::STATUS_EXPIRED,
            self::STATUS_ON_APPROVAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_INBOX,
            self::SCOPE_OUTBOX,
            self::SCOPE_DRAFT,
            self::SCOPE_SHARED,
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
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('create_date_from', $data ?? [], null);
        $this->setIfExists('create_date_to', $data ?? [], null);
        $this->setIfExists('receive_date_from', $data ?? [], null);
        $this->setIfExists('receive_date_to', $data ?? [], null);
        $this->setIfExists('expire_date_from', $data ?? [], null);
        $this->setIfExists('expire_date_to', $data ?? [], null);
        $this->setIfExists('send_date_from', $data ?? [], null);
        $this->setIfExists('send_date_to', $data ?? [], null);
        $this->setIfExists('template', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('scope', $data ?? [], null);
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
     * Gets label
     *
     * @return string[]|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string[]|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }


        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string[]|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string[]|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (array_diff($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject Envelope subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets create_date_from
     *
     * @return \DateTime|null
     */
    public function getCreateDateFrom()
    {
        return $this->container['create_date_from'];
    }

    /**
     * Sets create_date_from
     *
     * @param \DateTime|null $create_date_from Creation date from
     *
     * @return self
     */
    public function setCreateDateFrom($create_date_from)
    {
        if (is_null($create_date_from)) {
            throw new \InvalidArgumentException('non-nullable create_date_from cannot be null');
        }
        $this->container['create_date_from'] = $create_date_from;

        return $this;
    }

    /**
     * Gets create_date_to
     *
     * @return \DateTime|null
     */
    public function getCreateDateTo()
    {
        return $this->container['create_date_to'];
    }

    /**
     * Sets create_date_to
     *
     * @param \DateTime|null $create_date_to Creation date to
     *
     * @return self
     */
    public function setCreateDateTo($create_date_to)
    {
        if (is_null($create_date_to)) {
            throw new \InvalidArgumentException('non-nullable create_date_to cannot be null');
        }
        $this->container['create_date_to'] = $create_date_to;

        return $this;
    }

    /**
     * Gets receive_date_from
     *
     * @return \DateTime|null
     */
    public function getReceiveDateFrom()
    {
        return $this->container['receive_date_from'];
    }

    /**
     * Sets receive_date_from
     *
     * @param \DateTime|null $receive_date_from Receive date from
     *
     * @return self
     */
    public function setReceiveDateFrom($receive_date_from)
    {
        if (is_null($receive_date_from)) {
            throw new \InvalidArgumentException('non-nullable receive_date_from cannot be null');
        }
        $this->container['receive_date_from'] = $receive_date_from;

        return $this;
    }

    /**
     * Gets receive_date_to
     *
     * @return \DateTime|null
     */
    public function getReceiveDateTo()
    {
        return $this->container['receive_date_to'];
    }

    /**
     * Sets receive_date_to
     *
     * @param \DateTime|null $receive_date_to Receive date to
     *
     * @return self
     */
    public function setReceiveDateTo($receive_date_to)
    {
        if (is_null($receive_date_to)) {
            throw new \InvalidArgumentException('non-nullable receive_date_to cannot be null');
        }
        $this->container['receive_date_to'] = $receive_date_to;

        return $this;
    }

    /**
     * Gets expire_date_from
     *
     * @return \DateTime|null
     */
    public function getExpireDateFrom()
    {
        return $this->container['expire_date_from'];
    }

    /**
     * Sets expire_date_from
     *
     * @param \DateTime|null $expire_date_from Expire date from
     *
     * @return self
     */
    public function setExpireDateFrom($expire_date_from)
    {
        if (is_null($expire_date_from)) {
            throw new \InvalidArgumentException('non-nullable expire_date_from cannot be null');
        }
        $this->container['expire_date_from'] = $expire_date_from;

        return $this;
    }

    /**
     * Gets expire_date_to
     *
     * @return \DateTime|null
     */
    public function getExpireDateTo()
    {
        return $this->container['expire_date_to'];
    }

    /**
     * Sets expire_date_to
     *
     * @param \DateTime|null $expire_date_to Expire date to
     *
     * @return self
     */
    public function setExpireDateTo($expire_date_to)
    {
        if (is_null($expire_date_to)) {
            throw new \InvalidArgumentException('non-nullable expire_date_to cannot be null');
        }
        $this->container['expire_date_to'] = $expire_date_to;

        return $this;
    }

    /**
     * Gets send_date_from
     *
     * @return \DateTime|null
     */
    public function getSendDateFrom()
    {
        return $this->container['send_date_from'];
    }

    /**
     * Sets send_date_from
     *
     * @param \DateTime|null $send_date_from Envelope sending date from
     *
     * @return self
     */
    public function setSendDateFrom($send_date_from)
    {
        if (is_null($send_date_from)) {
            throw new \InvalidArgumentException('non-nullable send_date_from cannot be null');
        }
        $this->container['send_date_from'] = $send_date_from;

        return $this;
    }

    /**
     * Gets send_date_to
     *
     * @return \DateTime|null
     */
    public function getSendDateTo()
    {
        return $this->container['send_date_to'];
    }

    /**
     * Sets send_date_to
     *
     * @param \DateTime|null $send_date_to Envelope sending date to
     *
     * @return self
     */
    public function setSendDateTo($send_date_to)
    {
        if (is_null($send_date_to)) {
            throw new \InvalidArgumentException('non-nullable send_date_to cannot be null');
        }
        $this->container['send_date_to'] = $send_date_to;

        return $this;
    }

    /**
     * Gets template
     *
     * @return string[]|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string[]|null $template template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        if (is_null($template)) {
            throw new \InvalidArgumentException('non-nullable template cannot be null');
        }


        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string[]|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string[]|null $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }


        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string[]|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string[]|null $scope scope
     *
     * @return self
     */
    public function setScope($scope)
    {
        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }
        $allowedValues = $this->getScopeAllowableValues();
        if (array_diff($scope, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'scope', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['scope'] = $scope;

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


