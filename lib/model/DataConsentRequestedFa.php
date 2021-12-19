<?php
/**
 * DataConsentRequestedFa
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
 * Unleashing the power of data consent
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
 * DataConsentRequestedFa Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DataConsentRequestedFa implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataConsentRequestedFa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'consent_id' => 'string',
        'drn' => 'string',
        'from_datetime' => '\DateTime',
        'to_datetime' => '\DateTime',
        'provider_id' => 'string',
        'account_type' => '\MyDataMyConsent\Model\FinancialAccountType',
        'account_identifier' => 'string',
        'data_consent' => '\MyDataMyConsent\Model\DataConsent',
        'organization' => '\MyDataMyConsent\Model\Organization',
        'filters' => '\MyDataMyConsent\Model\DataConsentRfaFilter[]'
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
        'consent_id' => 'uuid',
        'drn' => null,
        'from_datetime' => 'date-time',
        'to_datetime' => 'date-time',
        'provider_id' => 'uuid',
        'account_type' => null,
        'account_identifier' => null,
        'data_consent' => null,
        'organization' => null,
        'filters' => null
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
        'consent_id' => 'consentId',
        'drn' => 'drn',
        'from_datetime' => 'fromDatetime',
        'to_datetime' => 'toDatetime',
        'provider_id' => 'providerId',
        'account_type' => 'accountType',
        'account_identifier' => 'accountIdentifier',
        'data_consent' => 'dataConsent',
        'organization' => 'organization',
        'filters' => 'filters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'consent_id' => 'setConsentId',
        'drn' => 'setDrn',
        'from_datetime' => 'setFromDatetime',
        'to_datetime' => 'setToDatetime',
        'provider_id' => 'setProviderId',
        'account_type' => 'setAccountType',
        'account_identifier' => 'setAccountIdentifier',
        'data_consent' => 'setDataConsent',
        'organization' => 'setOrganization',
        'filters' => 'setFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'consent_id' => 'getConsentId',
        'drn' => 'getDrn',
        'from_datetime' => 'getFromDatetime',
        'to_datetime' => 'getToDatetime',
        'provider_id' => 'getProviderId',
        'account_type' => 'getAccountType',
        'account_identifier' => 'getAccountIdentifier',
        'data_consent' => 'getDataConsent',
        'organization' => 'getOrganization',
        'filters' => 'getFilters'
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
        $this->container['consent_id'] = $data['consent_id'] ?? null;
        $this->container['drn'] = $data['drn'] ?? null;
        $this->container['from_datetime'] = $data['from_datetime'] ?? null;
        $this->container['to_datetime'] = $data['to_datetime'] ?? null;
        $this->container['provider_id'] = $data['provider_id'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['account_identifier'] = $data['account_identifier'] ?? null;
        $this->container['data_consent'] = $data['data_consent'] ?? null;
        $this->container['organization'] = $data['organization'] ?? null;
        $this->container['filters'] = $data['filters'] ?? null;
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
     * Gets consent_id
     *
     * @return string|null
     */
    public function getConsentId()
    {
        return $this->container['consent_id'];
    }

    /**
     * Sets consent_id
     *
     * @param string|null $consent_id consent_id
     *
     * @return self
     */
    public function setConsentId($consent_id)
    {
        $this->container['consent_id'] = $consent_id;

        return $this;
    }

    /**
     * Gets drn
     *
     * @return string|null
     */
    public function getDrn()
    {
        return $this->container['drn'];
    }

    /**
     * Sets drn
     *
     * @param string|null $drn drn
     *
     * @return self
     */
    public function setDrn($drn)
    {
        $this->container['drn'] = $drn;

        return $this;
    }

    /**
     * Gets from_datetime
     *
     * @return \DateTime|null
     */
    public function getFromDatetime()
    {
        return $this->container['from_datetime'];
    }

    /**
     * Sets from_datetime
     *
     * @param \DateTime|null $from_datetime from_datetime
     *
     * @return self
     */
    public function setFromDatetime($from_datetime)
    {
        $this->container['from_datetime'] = $from_datetime;

        return $this;
    }

    /**
     * Gets to_datetime
     *
     * @return \DateTime|null
     */
    public function getToDatetime()
    {
        return $this->container['to_datetime'];
    }

    /**
     * Sets to_datetime
     *
     * @param \DateTime|null $to_datetime to_datetime
     *
     * @return self
     */
    public function setToDatetime($to_datetime)
    {
        $this->container['to_datetime'] = $to_datetime;

        return $this;
    }

    /**
     * Gets provider_id
     *
     * @return string|null
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     * @param string|null $provider_id provider_id
     *
     * @return self
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return \MyDataMyConsent\Model\FinancialAccountType|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param \MyDataMyConsent\Model\FinancialAccountType|null $account_type account_type
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets account_identifier
     *
     * @return string|null
     */
    public function getAccountIdentifier()
    {
        return $this->container['account_identifier'];
    }

    /**
     * Sets account_identifier
     *
     * @param string|null $account_identifier account_identifier
     *
     * @return self
     */
    public function setAccountIdentifier($account_identifier)
    {
        $this->container['account_identifier'] = $account_identifier;

        return $this;
    }

    /**
     * Gets data_consent
     *
     * @return \MyDataMyConsent\Model\DataConsent|null
     */
    public function getDataConsent()
    {
        return $this->container['data_consent'];
    }

    /**
     * Sets data_consent
     *
     * @param \MyDataMyConsent\Model\DataConsent|null $data_consent data_consent
     *
     * @return self
     */
    public function setDataConsent($data_consent)
    {
        $this->container['data_consent'] = $data_consent;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \MyDataMyConsent\Model\Organization|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \MyDataMyConsent\Model\Organization|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \MyDataMyConsent\Model\DataConsentRfaFilter[]|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \MyDataMyConsent\Model\DataConsentRfaFilter[]|null $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

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


