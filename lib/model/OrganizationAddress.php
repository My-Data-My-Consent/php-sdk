<?php
/**
 * OrganizationAddress
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
 * OrganizationAddress Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrganizationAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrganizationAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'organization_id' => 'string',
        'type' => '\MyDataMyConsent\Model\OrganizationAddressType',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'land_mark' => 'string',
        'city' => 'string',
        'post_code' => 'string',
        'state_id' => 'string',
        'proof_document' => 'string',
        'proof_document_url' => 'string',
        'organization' => '\MyDataMyConsent\Model\Organization',
        'country_state' => '\MyDataMyConsent\Model\CountryState'
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
        'organization_id' => 'uuid',
        'type' => null,
        'address_line1' => null,
        'address_line2' => null,
        'land_mark' => null,
        'city' => null,
        'post_code' => null,
        'state_id' => 'uuid',
        'proof_document' => null,
        'proof_document_url' => null,
        'organization' => null,
        'country_state' => null
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
        'organization_id' => 'organizationId',
        'type' => 'type',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'land_mark' => 'landMark',
        'city' => 'city',
        'post_code' => 'postCode',
        'state_id' => 'stateId',
        'proof_document' => 'proofDocument',
        'proof_document_url' => 'proofDocumentUrl',
        'organization' => 'organization',
        'country_state' => 'countryState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'organization_id' => 'setOrganizationId',
        'type' => 'setType',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'land_mark' => 'setLandMark',
        'city' => 'setCity',
        'post_code' => 'setPostCode',
        'state_id' => 'setStateId',
        'proof_document' => 'setProofDocument',
        'proof_document_url' => 'setProofDocumentUrl',
        'organization' => 'setOrganization',
        'country_state' => 'setCountryState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'organization_id' => 'getOrganizationId',
        'type' => 'getType',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'land_mark' => 'getLandMark',
        'city' => 'getCity',
        'post_code' => 'getPostCode',
        'state_id' => 'getStateId',
        'proof_document' => 'getProofDocument',
        'proof_document_url' => 'getProofDocumentUrl',
        'organization' => 'getOrganization',
        'country_state' => 'getCountryState'
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
        $this->container['organization_id'] = $data['organization_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['land_mark'] = $data['land_mark'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['post_code'] = $data['post_code'] ?? null;
        $this->container['state_id'] = $data['state_id'] ?? null;
        $this->container['proof_document'] = $data['proof_document'] ?? null;
        $this->container['proof_document_url'] = $data['proof_document_url'] ?? null;
        $this->container['organization'] = $data['organization'] ?? null;
        $this->container['country_state'] = $data['country_state'] ?? null;
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
     * Gets organization_id
     *
     * @return string|null
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string|null $organization_id organization_id
     *
     * @return self
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \MyDataMyConsent\Model\OrganizationAddressType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \MyDataMyConsent\Model\OrganizationAddressType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 address_line1
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 address_line2
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets land_mark
     *
     * @return string|null
     */
    public function getLandMark()
    {
        return $this->container['land_mark'];
    }

    /**
     * Sets land_mark
     *
     * @param string|null $land_mark land_mark
     *
     * @return self
     */
    public function setLandMark($land_mark)
    {
        $this->container['land_mark'] = $land_mark;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets post_code
     *
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     *
     * @param string|null $post_code post_code
     *
     * @return self
     */
    public function setPostCode($post_code)
    {
        $this->container['post_code'] = $post_code;

        return $this;
    }

    /**
     * Gets state_id
     *
     * @return string|null
     */
    public function getStateId()
    {
        return $this->container['state_id'];
    }

    /**
     * Sets state_id
     *
     * @param string|null $state_id state_id
     *
     * @return self
     */
    public function setStateId($state_id)
    {
        $this->container['state_id'] = $state_id;

        return $this;
    }

    /**
     * Gets proof_document
     *
     * @return string|null
     */
    public function getProofDocument()
    {
        return $this->container['proof_document'];
    }

    /**
     * Sets proof_document
     *
     * @param string|null $proof_document proof_document
     *
     * @return self
     */
    public function setProofDocument($proof_document)
    {
        $this->container['proof_document'] = $proof_document;

        return $this;
    }

    /**
     * Gets proof_document_url
     *
     * @return string|null
     */
    public function getProofDocumentUrl()
    {
        return $this->container['proof_document_url'];
    }

    /**
     * Sets proof_document_url
     *
     * @param string|null $proof_document_url proof_document_url
     *
     * @return self
     */
    public function setProofDocumentUrl($proof_document_url)
    {
        $this->container['proof_document_url'] = $proof_document_url;

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
     * Gets country_state
     *
     * @return \MyDataMyConsent\Model\CountryState|null
     */
    public function getCountryState()
    {
        return $this->container['country_state'];
    }

    /**
     * Sets country_state
     *
     * @param \MyDataMyConsent\Model\CountryState|null $country_state country_state
     *
     * @return self
     */
    public function setCountryState($country_state)
    {
        $this->container['country_state'] = $country_state;

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


