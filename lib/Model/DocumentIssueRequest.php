<?php
/**
 * DocumentIssueRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * My Data My Consent - Developer API
 *
 * Unleashing the power of data consent by establishing trust. The Platform Core Developer API defines a set of capabilities that can be used to request, issue, manage and update data, documents and credentials by organizations. The API can be used to request, manage and update Decentralised Identifiers, Financial Data, Health Data issue Documents, Credentials directly or using OpenID Connect flows, and verify Messages signed with DIDs and much more.
 *
 * The version of the OpenAPI document: v1
 * Contact: support@mydatamyconsent.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyDataMyConsent\Model;

use \ArrayAccess;
use \MyDataMyConsent\ObjectSerializer;

/**
 * DocumentIssueRequest Class Doc Comment
 *
 * @category Class
 * @description Document Issue Request.
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DocumentIssueRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentIssueRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document_type_id' => 'string',
        'identifier' => 'string',
        'description' => 'string',
        'receiver' => '\MyDataMyConsent\Model\DocumentReceiver',
        'issued_at_utc' => '\DateTime',
        'valid_from_utc' => '\DateTime',
        'expires_at_utc' => '\DateTime',
        'payment_request' => '\MyDataMyConsent\Model\PaymentRequest',
        'metadata' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'document_type_id' => 'uuid',
        'identifier' => null,
        'description' => null,
        'receiver' => null,
        'issued_at_utc' => 'date-time',
        'valid_from_utc' => 'date-time',
        'expires_at_utc' => 'date-time',
        'payment_request' => null,
        'metadata' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'document_type_id' => 'documentTypeId',
        'identifier' => 'identifier',
        'description' => 'description',
        'receiver' => 'receiver',
        'issued_at_utc' => 'issuedAtUtc',
        'valid_from_utc' => 'validFromUtc',
        'expires_at_utc' => 'expiresAtUtc',
        'payment_request' => 'paymentRequest',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_type_id' => 'setDocumentTypeId',
        'identifier' => 'setIdentifier',
        'description' => 'setDescription',
        'receiver' => 'setReceiver',
        'issued_at_utc' => 'setIssuedAtUtc',
        'valid_from_utc' => 'setValidFromUtc',
        'expires_at_utc' => 'setExpiresAtUtc',
        'payment_request' => 'setPaymentRequest',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_type_id' => 'getDocumentTypeId',
        'identifier' => 'getIdentifier',
        'description' => 'getDescription',
        'receiver' => 'getReceiver',
        'issued_at_utc' => 'getIssuedAtUtc',
        'valid_from_utc' => 'getValidFromUtc',
        'expires_at_utc' => 'getExpiresAtUtc',
        'payment_request' => 'getPaymentRequest',
        'metadata' => 'getMetadata'
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
        $this->container['document_type_id'] = $data['document_type_id'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['receiver'] = $data['receiver'] ?? null;
        $this->container['issued_at_utc'] = $data['issued_at_utc'] ?? null;
        $this->container['valid_from_utc'] = $data['valid_from_utc'] ?? null;
        $this->container['expires_at_utc'] = $data['expires_at_utc'] ?? null;
        $this->container['payment_request'] = $data['payment_request'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['document_type_id'] === null) {
            $invalidProperties[] = "'document_type_id' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['receiver'] === null) {
            $invalidProperties[] = "'receiver' can't be null";
        }
        if ($this->container['issued_at_utc'] === null) {
            $invalidProperties[] = "'issued_at_utc' can't be null";
        }
        if ($this->container['valid_from_utc'] === null) {
            $invalidProperties[] = "'valid_from_utc' can't be null";
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
     * Gets document_type_id
     *
     * @return string
     */
    public function getDocumentTypeId()
    {
        return $this->container['document_type_id'];
    }

    /**
     * Sets document_type_id
     *
     * @param string $document_type_id Document type id.
     *
     * @return self
     */
    public function setDocumentTypeId($document_type_id)
    {
        $this->container['document_type_id'] = $document_type_id;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier Document identifier.
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Document description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets receiver
     *
     * @return \MyDataMyConsent\Model\DocumentReceiver
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     *
     * @param \MyDataMyConsent\Model\DocumentReceiver $receiver receiver
     *
     * @return self
     */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;

        return $this;
    }

    /**
     * Gets issued_at_utc
     *
     * @return \DateTime
     */
    public function getIssuedAtUtc()
    {
        return $this->container['issued_at_utc'];
    }

    /**
     * Sets issued_at_utc
     *
     * @param \DateTime $issued_at_utc Datetime of issue in UTC timezone.
     *
     * @return self
     */
    public function setIssuedAtUtc($issued_at_utc)
    {
        $this->container['issued_at_utc'] = $issued_at_utc;

        return $this;
    }

    /**
     * Gets valid_from_utc
     *
     * @return \DateTime
     */
    public function getValidFromUtc()
    {
        return $this->container['valid_from_utc'];
    }

    /**
     * Sets valid_from_utc
     *
     * @param \DateTime $valid_from_utc Valid from datetime in UTC timezone.
     *
     * @return self
     */
    public function setValidFromUtc($valid_from_utc)
    {
        $this->container['valid_from_utc'] = $valid_from_utc;

        return $this;
    }

    /**
     * Gets expires_at_utc
     *
     * @return \DateTime|null
     */
    public function getExpiresAtUtc()
    {
        return $this->container['expires_at_utc'];
    }

    /**
     * Sets expires_at_utc
     *
     * @param \DateTime|null $expires_at_utc Datetime of expiry in UTC timezone.
     *
     * @return self
     */
    public function setExpiresAtUtc($expires_at_utc)
    {
        $this->container['expires_at_utc'] = $expires_at_utc;

        return $this;
    }

    /**
     * Gets payment_request
     *
     * @return \MyDataMyConsent\Model\PaymentRequest|null
     */
    public function getPaymentRequest()
    {
        return $this->container['payment_request'];
    }

    /**
     * Sets payment_request
     *
     * @param \MyDataMyConsent\Model\PaymentRequest|null $payment_request payment_request
     *
     * @return self
     */
    public function setPaymentRequest($payment_request)
    {
        $this->container['payment_request'] = $payment_request;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata Metadata.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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


