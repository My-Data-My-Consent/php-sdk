<?php
/**
 * GetConsentTemplateDetailsDto
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.2.1
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
 * GetConsentTemplateDetailsDto Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetConsentTemplateDetailsDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetConsentTemplateDetailsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'consent_purpose' => 'string',
        'collectables' => '\MyDataMyConsent\Model\CollectibleTypes[]',
        'fetch_type' => '\MyDataMyConsent\Model\FetchTypes',
        'short_id' => 'string',
        'created_by' => 'string',
        'created_at_utc' => '\DateTime',
        'status' => 'string',
        'template_type' => '\MyDataMyConsent\Model\ConsentTemplateTypes',
        'frequency' => '\MyDataMyConsent\Model\Life',
        'identity' => '\MyDataMyConsent\Model\IdentitySupportedFields[]',
        'documents' => '\MyDataMyConsent\Model\Document[]',
        'financials' => '\MyDataMyConsent\Model\Financial[]'
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
        'name' => null,
        'description' => null,
        'consent_purpose' => null,
        'collectables' => null,
        'fetch_type' => null,
        'short_id' => null,
        'created_by' => null,
        'created_at_utc' => 'date-time',
        'status' => null,
        'template_type' => null,
        'frequency' => null,
        'identity' => null,
        'documents' => null,
        'financials' => null
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
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'consent_purpose' => 'consentPurpose',
        'collectables' => 'collectables',
        'fetch_type' => 'fetchType',
        'short_id' => 'shortId',
        'created_by' => 'createdBy',
        'created_at_utc' => 'createdAtUtc',
        'status' => 'status',
        'template_type' => 'templateType',
        'frequency' => 'frequency',
        'identity' => 'identity',
        'documents' => 'documents',
        'financials' => 'financials'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'consent_purpose' => 'setConsentPurpose',
        'collectables' => 'setCollectables',
        'fetch_type' => 'setFetchType',
        'short_id' => 'setShortId',
        'created_by' => 'setCreatedBy',
        'created_at_utc' => 'setCreatedAtUtc',
        'status' => 'setStatus',
        'template_type' => 'setTemplateType',
        'frequency' => 'setFrequency',
        'identity' => 'setIdentity',
        'documents' => 'setDocuments',
        'financials' => 'setFinancials'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'consent_purpose' => 'getConsentPurpose',
        'collectables' => 'getCollectables',
        'fetch_type' => 'getFetchType',
        'short_id' => 'getShortId',
        'created_by' => 'getCreatedBy',
        'created_at_utc' => 'getCreatedAtUtc',
        'status' => 'getStatus',
        'template_type' => 'getTemplateType',
        'frequency' => 'getFrequency',
        'identity' => 'getIdentity',
        'documents' => 'getDocuments',
        'financials' => 'getFinancials'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['consent_purpose'] = $data['consent_purpose'] ?? null;
        $this->container['collectables'] = $data['collectables'] ?? null;
        $this->container['fetch_type'] = $data['fetch_type'] ?? null;
        $this->container['short_id'] = $data['short_id'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['created_at_utc'] = $data['created_at_utc'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['template_type'] = $data['template_type'] ?? null;
        $this->container['frequency'] = $data['frequency'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
        $this->container['documents'] = $data['documents'] ?? null;
        $this->container['financials'] = $data['financials'] ?? null;
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
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets consent_purpose
     *
     * @return string|null
     */
    public function getConsentPurpose()
    {
        return $this->container['consent_purpose'];
    }

    /**
     * Sets consent_purpose
     *
     * @param string|null $consent_purpose consent_purpose
     *
     * @return self
     */
    public function setConsentPurpose($consent_purpose)
    {
        $this->container['consent_purpose'] = $consent_purpose;

        return $this;
    }

    /**
     * Gets collectables
     *
     * @return \MyDataMyConsent\Model\CollectibleTypes[]|null
     */
    public function getCollectables()
    {
        return $this->container['collectables'];
    }

    /**
     * Sets collectables
     *
     * @param \MyDataMyConsent\Model\CollectibleTypes[]|null $collectables collectables
     *
     * @return self
     */
    public function setCollectables($collectables)
    {
        $this->container['collectables'] = $collectables;

        return $this;
    }

    /**
     * Gets fetch_type
     *
     * @return \MyDataMyConsent\Model\FetchTypes|null
     */
    public function getFetchType()
    {
        return $this->container['fetch_type'];
    }

    /**
     * Sets fetch_type
     *
     * @param \MyDataMyConsent\Model\FetchTypes|null $fetch_type fetch_type
     *
     * @return self
     */
    public function setFetchType($fetch_type)
    {
        $this->container['fetch_type'] = $fetch_type;

        return $this;
    }

    /**
     * Gets short_id
     *
     * @return string|null
     */
    public function getShortId()
    {
        return $this->container['short_id'];
    }

    /**
     * Sets short_id
     *
     * @param string|null $short_id short_id
     *
     * @return self
     */
    public function setShortId($short_id)
    {
        $this->container['short_id'] = $short_id;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_at_utc
     *
     * @return \DateTime|null
     */
    public function getCreatedAtUtc()
    {
        return $this->container['created_at_utc'];
    }

    /**
     * Sets created_at_utc
     *
     * @param \DateTime|null $created_at_utc created_at_utc
     *
     * @return self
     */
    public function setCreatedAtUtc($created_at_utc)
    {
        $this->container['created_at_utc'] = $created_at_utc;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets template_type
     *
     * @return \MyDataMyConsent\Model\ConsentTemplateTypes|null
     */
    public function getTemplateType()
    {
        return $this->container['template_type'];
    }

    /**
     * Sets template_type
     *
     * @param \MyDataMyConsent\Model\ConsentTemplateTypes|null $template_type template_type
     *
     * @return self
     */
    public function setTemplateType($template_type)
    {
        $this->container['template_type'] = $template_type;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return \MyDataMyConsent\Model\Life|null
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param \MyDataMyConsent\Model\Life|null $frequency frequency
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return \MyDataMyConsent\Model\IdentitySupportedFields[]|null
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param \MyDataMyConsent\Model\IdentitySupportedFields[]|null $identity identity
     *
     * @return self
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \MyDataMyConsent\Model\Document[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \MyDataMyConsent\Model\Document[]|null $documents documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets financials
     *
     * @return \MyDataMyConsent\Model\Financial[]|null
     */
    public function getFinancials()
    {
        return $this->container['financials'];
    }

    /**
     * Sets financials
     *
     * @param \MyDataMyConsent\Model\Financial[]|null $financials financials
     *
     * @return self
     */
    public function setFinancials($financials)
    {
        $this->container['financials'] = $financials;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


