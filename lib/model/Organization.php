<?php
/**
 * Organization
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
 * Organization Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Organization implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Organization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_by' => 'string',
        'created_at_utc' => '\DateTime',
        'updated_by' => 'string',
        'updated_at_utc' => '\DateTime',
        'created_by_user' => '\MyDataMyConsent\Model\ApplicationUser',
        'updated_by_user' => '\MyDataMyConsent\Model\ApplicationUser',
        'deleted_by' => 'string',
        'deleted_at_utc' => '\DateTime',
        'deleted_by_user' => '\MyDataMyConsent\Model\ApplicationUser',
        'id' => 'string',
        'data_partner_id' => 'string',
        'type_id' => 'string',
        'category_id' => 'string',
        'name' => 'string',
        'regulator_name' => 'string',
        'brand_name' => 'string',
        'registration_id' => 'string',
        'vat_id' => 'string',
        'tax_id' => 'string',
        'description' => 'string',
        'logo_url' => 'string',
        'contact_email' => 'string',
        'phone_number' => 'string',
        'state_id' => 'string',
        'company_code' => 'string',
        'privacy_policy_url' => 'string',
        'terms_of_service_url' => 'string',
        'website_url' => 'string',
        'is_government_organization' => 'bool',
        'dl_api_key' => 'string',
        'is_kyo_completed' => 'bool',
        'is_enabled' => 'bool',
        'is_data_provider' => 'bool',
        'is_data_consumer' => 'bool',
        'submitted_at_utc' => '\DateTime',
        'approved_by' => 'string',
        'approved_at_utc' => '\DateTime',
        'organization_type' => '\MyDataMyConsent\Model\OrganizationType',
        'organization_category' => '\MyDataMyConsent\Model\OrganizationCategory',
        'organization_address' => '\MyDataMyConsent\Model\OrganizationAddress[]',
        'organization_financial_account' => '\MyDataMyConsent\Model\OrganizationFinancialAccount[]',
        'country_state' => '\MyDataMyConsent\Model\CountryState',
        'approved_by_user' => '\MyDataMyConsent\Model\ApplicationUser'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_by' => 'uuid',
        'created_at_utc' => 'date-time',
        'updated_by' => 'uuid',
        'updated_at_utc' => 'date-time',
        'created_by_user' => null,
        'updated_by_user' => null,
        'deleted_by' => 'uuid',
        'deleted_at_utc' => 'date-time',
        'deleted_by_user' => null,
        'id' => 'uuid',
        'data_partner_id' => null,
        'type_id' => 'uuid',
        'category_id' => 'uuid',
        'name' => null,
        'regulator_name' => null,
        'brand_name' => null,
        'registration_id' => null,
        'vat_id' => null,
        'tax_id' => null,
        'description' => null,
        'logo_url' => null,
        'contact_email' => null,
        'phone_number' => null,
        'state_id' => 'uuid',
        'company_code' => null,
        'privacy_policy_url' => null,
        'terms_of_service_url' => null,
        'website_url' => null,
        'is_government_organization' => null,
        'dl_api_key' => null,
        'is_kyo_completed' => null,
        'is_enabled' => null,
        'is_data_provider' => null,
        'is_data_consumer' => null,
        'submitted_at_utc' => 'date-time',
        'approved_by' => 'uuid',
        'approved_at_utc' => 'date-time',
        'organization_type' => null,
        'organization_category' => null,
        'organization_address' => null,
        'organization_financial_account' => null,
        'country_state' => null,
        'approved_by_user' => null
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
        'created_by' => 'createdBy',
        'created_at_utc' => 'createdAtUtc',
        'updated_by' => 'updatedBy',
        'updated_at_utc' => 'updatedAtUtc',
        'created_by_user' => 'createdByUser',
        'updated_by_user' => 'updatedByUser',
        'deleted_by' => 'deletedBy',
        'deleted_at_utc' => 'deletedAtUtc',
        'deleted_by_user' => 'deletedByUser',
        'id' => 'id',
        'data_partner_id' => 'dataPartnerId',
        'type_id' => 'typeId',
        'category_id' => 'categoryId',
        'name' => 'name',
        'regulator_name' => 'regulatorName',
        'brand_name' => 'brandName',
        'registration_id' => 'registrationId',
        'vat_id' => 'vatId',
        'tax_id' => 'taxId',
        'description' => 'description',
        'logo_url' => 'logoUrl',
        'contact_email' => 'contactEmail',
        'phone_number' => 'phoneNumber',
        'state_id' => 'stateId',
        'company_code' => 'companyCode',
        'privacy_policy_url' => 'privacyPolicyUrl',
        'terms_of_service_url' => 'termsOfServiceUrl',
        'website_url' => 'websiteUrl',
        'is_government_organization' => 'isGovernmentOrganization',
        'dl_api_key' => 'dlApiKey',
        'is_kyo_completed' => 'isKyoCompleted',
        'is_enabled' => 'isEnabled',
        'is_data_provider' => 'isDataProvider',
        'is_data_consumer' => 'isDataConsumer',
        'submitted_at_utc' => 'submittedAtUtc',
        'approved_by' => 'approvedBy',
        'approved_at_utc' => 'approvedAtUtc',
        'organization_type' => 'organizationType',
        'organization_category' => 'organizationCategory',
        'organization_address' => 'organizationAddress',
        'organization_financial_account' => 'organizationFinancialAccount',
        'country_state' => 'countryState',
        'approved_by_user' => 'approvedByUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_by' => 'setCreatedBy',
        'created_at_utc' => 'setCreatedAtUtc',
        'updated_by' => 'setUpdatedBy',
        'updated_at_utc' => 'setUpdatedAtUtc',
        'created_by_user' => 'setCreatedByUser',
        'updated_by_user' => 'setUpdatedByUser',
        'deleted_by' => 'setDeletedBy',
        'deleted_at_utc' => 'setDeletedAtUtc',
        'deleted_by_user' => 'setDeletedByUser',
        'id' => 'setId',
        'data_partner_id' => 'setDataPartnerId',
        'type_id' => 'setTypeId',
        'category_id' => 'setCategoryId',
        'name' => 'setName',
        'regulator_name' => 'setRegulatorName',
        'brand_name' => 'setBrandName',
        'registration_id' => 'setRegistrationId',
        'vat_id' => 'setVatId',
        'tax_id' => 'setTaxId',
        'description' => 'setDescription',
        'logo_url' => 'setLogoUrl',
        'contact_email' => 'setContactEmail',
        'phone_number' => 'setPhoneNumber',
        'state_id' => 'setStateId',
        'company_code' => 'setCompanyCode',
        'privacy_policy_url' => 'setPrivacyPolicyUrl',
        'terms_of_service_url' => 'setTermsOfServiceUrl',
        'website_url' => 'setWebsiteUrl',
        'is_government_organization' => 'setIsGovernmentOrganization',
        'dl_api_key' => 'setDlApiKey',
        'is_kyo_completed' => 'setIsKyoCompleted',
        'is_enabled' => 'setIsEnabled',
        'is_data_provider' => 'setIsDataProvider',
        'is_data_consumer' => 'setIsDataConsumer',
        'submitted_at_utc' => 'setSubmittedAtUtc',
        'approved_by' => 'setApprovedBy',
        'approved_at_utc' => 'setApprovedAtUtc',
        'organization_type' => 'setOrganizationType',
        'organization_category' => 'setOrganizationCategory',
        'organization_address' => 'setOrganizationAddress',
        'organization_financial_account' => 'setOrganizationFinancialAccount',
        'country_state' => 'setCountryState',
        'approved_by_user' => 'setApprovedByUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_by' => 'getCreatedBy',
        'created_at_utc' => 'getCreatedAtUtc',
        'updated_by' => 'getUpdatedBy',
        'updated_at_utc' => 'getUpdatedAtUtc',
        'created_by_user' => 'getCreatedByUser',
        'updated_by_user' => 'getUpdatedByUser',
        'deleted_by' => 'getDeletedBy',
        'deleted_at_utc' => 'getDeletedAtUtc',
        'deleted_by_user' => 'getDeletedByUser',
        'id' => 'getId',
        'data_partner_id' => 'getDataPartnerId',
        'type_id' => 'getTypeId',
        'category_id' => 'getCategoryId',
        'name' => 'getName',
        'regulator_name' => 'getRegulatorName',
        'brand_name' => 'getBrandName',
        'registration_id' => 'getRegistrationId',
        'vat_id' => 'getVatId',
        'tax_id' => 'getTaxId',
        'description' => 'getDescription',
        'logo_url' => 'getLogoUrl',
        'contact_email' => 'getContactEmail',
        'phone_number' => 'getPhoneNumber',
        'state_id' => 'getStateId',
        'company_code' => 'getCompanyCode',
        'privacy_policy_url' => 'getPrivacyPolicyUrl',
        'terms_of_service_url' => 'getTermsOfServiceUrl',
        'website_url' => 'getWebsiteUrl',
        'is_government_organization' => 'getIsGovernmentOrganization',
        'dl_api_key' => 'getDlApiKey',
        'is_kyo_completed' => 'getIsKyoCompleted',
        'is_enabled' => 'getIsEnabled',
        'is_data_provider' => 'getIsDataProvider',
        'is_data_consumer' => 'getIsDataConsumer',
        'submitted_at_utc' => 'getSubmittedAtUtc',
        'approved_by' => 'getApprovedBy',
        'approved_at_utc' => 'getApprovedAtUtc',
        'organization_type' => 'getOrganizationType',
        'organization_category' => 'getOrganizationCategory',
        'organization_address' => 'getOrganizationAddress',
        'organization_financial_account' => 'getOrganizationFinancialAccount',
        'country_state' => 'getCountryState',
        'approved_by_user' => 'getApprovedByUser'
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
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['created_at_utc'] = $data['created_at_utc'] ?? null;
        $this->container['updated_by'] = $data['updated_by'] ?? null;
        $this->container['updated_at_utc'] = $data['updated_at_utc'] ?? null;
        $this->container['created_by_user'] = $data['created_by_user'] ?? null;
        $this->container['updated_by_user'] = $data['updated_by_user'] ?? null;
        $this->container['deleted_by'] = $data['deleted_by'] ?? null;
        $this->container['deleted_at_utc'] = $data['deleted_at_utc'] ?? null;
        $this->container['deleted_by_user'] = $data['deleted_by_user'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['data_partner_id'] = $data['data_partner_id'] ?? null;
        $this->container['type_id'] = $data['type_id'] ?? null;
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['regulator_name'] = $data['regulator_name'] ?? null;
        $this->container['brand_name'] = $data['brand_name'] ?? null;
        $this->container['registration_id'] = $data['registration_id'] ?? null;
        $this->container['vat_id'] = $data['vat_id'] ?? null;
        $this->container['tax_id'] = $data['tax_id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['logo_url'] = $data['logo_url'] ?? null;
        $this->container['contact_email'] = $data['contact_email'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['state_id'] = $data['state_id'] ?? null;
        $this->container['company_code'] = $data['company_code'] ?? null;
        $this->container['privacy_policy_url'] = $data['privacy_policy_url'] ?? null;
        $this->container['terms_of_service_url'] = $data['terms_of_service_url'] ?? null;
        $this->container['website_url'] = $data['website_url'] ?? null;
        $this->container['is_government_organization'] = $data['is_government_organization'] ?? null;
        $this->container['dl_api_key'] = $data['dl_api_key'] ?? null;
        $this->container['is_kyo_completed'] = $data['is_kyo_completed'] ?? null;
        $this->container['is_enabled'] = $data['is_enabled'] ?? null;
        $this->container['is_data_provider'] = $data['is_data_provider'] ?? null;
        $this->container['is_data_consumer'] = $data['is_data_consumer'] ?? null;
        $this->container['submitted_at_utc'] = $data['submitted_at_utc'] ?? null;
        $this->container['approved_by'] = $data['approved_by'] ?? null;
        $this->container['approved_at_utc'] = $data['approved_at_utc'] ?? null;
        $this->container['organization_type'] = $data['organization_type'] ?? null;
        $this->container['organization_category'] = $data['organization_category'] ?? null;
        $this->container['organization_address'] = $data['organization_address'] ?? null;
        $this->container['organization_financial_account'] = $data['organization_financial_account'] ?? null;
        $this->container['country_state'] = $data['country_state'] ?? null;
        $this->container['approved_by_user'] = $data['approved_by_user'] ?? null;
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
     * Gets updated_by
     *
     * @return string|null
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param string|null $updated_by updated_by
     *
     * @return self
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

        return $this;
    }

    /**
     * Gets updated_at_utc
     *
     * @return \DateTime|null
     */
    public function getUpdatedAtUtc()
    {
        return $this->container['updated_at_utc'];
    }

    /**
     * Sets updated_at_utc
     *
     * @param \DateTime|null $updated_at_utc updated_at_utc
     *
     * @return self
     */
    public function setUpdatedAtUtc($updated_at_utc)
    {
        $this->container['updated_at_utc'] = $updated_at_utc;

        return $this;
    }

    /**
     * Gets created_by_user
     *
     * @return \MyDataMyConsent\Model\ApplicationUser|null
     */
    public function getCreatedByUser()
    {
        return $this->container['created_by_user'];
    }

    /**
     * Sets created_by_user
     *
     * @param \MyDataMyConsent\Model\ApplicationUser|null $created_by_user created_by_user
     *
     * @return self
     */
    public function setCreatedByUser($created_by_user)
    {
        $this->container['created_by_user'] = $created_by_user;

        return $this;
    }

    /**
     * Gets updated_by_user
     *
     * @return \MyDataMyConsent\Model\ApplicationUser|null
     */
    public function getUpdatedByUser()
    {
        return $this->container['updated_by_user'];
    }

    /**
     * Sets updated_by_user
     *
     * @param \MyDataMyConsent\Model\ApplicationUser|null $updated_by_user updated_by_user
     *
     * @return self
     */
    public function setUpdatedByUser($updated_by_user)
    {
        $this->container['updated_by_user'] = $updated_by_user;

        return $this;
    }

    /**
     * Gets deleted_by
     *
     * @return string|null
     */
    public function getDeletedBy()
    {
        return $this->container['deleted_by'];
    }

    /**
     * Sets deleted_by
     *
     * @param string|null $deleted_by deleted_by
     *
     * @return self
     */
    public function setDeletedBy($deleted_by)
    {
        $this->container['deleted_by'] = $deleted_by;

        return $this;
    }

    /**
     * Gets deleted_at_utc
     *
     * @return \DateTime|null
     */
    public function getDeletedAtUtc()
    {
        return $this->container['deleted_at_utc'];
    }

    /**
     * Sets deleted_at_utc
     *
     * @param \DateTime|null $deleted_at_utc deleted_at_utc
     *
     * @return self
     */
    public function setDeletedAtUtc($deleted_at_utc)
    {
        $this->container['deleted_at_utc'] = $deleted_at_utc;

        return $this;
    }

    /**
     * Gets deleted_by_user
     *
     * @return \MyDataMyConsent\Model\ApplicationUser|null
     */
    public function getDeletedByUser()
    {
        return $this->container['deleted_by_user'];
    }

    /**
     * Sets deleted_by_user
     *
     * @param \MyDataMyConsent\Model\ApplicationUser|null $deleted_by_user deleted_by_user
     *
     * @return self
     */
    public function setDeletedByUser($deleted_by_user)
    {
        $this->container['deleted_by_user'] = $deleted_by_user;

        return $this;
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
     * Gets data_partner_id
     *
     * @return string|null
     */
    public function getDataPartnerId()
    {
        return $this->container['data_partner_id'];
    }

    /**
     * Sets data_partner_id
     *
     * @param string|null $data_partner_id data_partner_id
     *
     * @return self
     */
    public function setDataPartnerId($data_partner_id)
    {
        $this->container['data_partner_id'] = $data_partner_id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return string|null
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param string|null $type_id type_id
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id category_id
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

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
     * Gets regulator_name
     *
     * @return string|null
     */
    public function getRegulatorName()
    {
        return $this->container['regulator_name'];
    }

    /**
     * Sets regulator_name
     *
     * @param string|null $regulator_name regulator_name
     *
     * @return self
     */
    public function setRegulatorName($regulator_name)
    {
        $this->container['regulator_name'] = $regulator_name;

        return $this;
    }

    /**
     * Gets brand_name
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string|null $brand_name brand_name
     *
     * @return self
     */
    public function setBrandName($brand_name)
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets registration_id
     *
     * @return string|null
     */
    public function getRegistrationId()
    {
        return $this->container['registration_id'];
    }

    /**
     * Sets registration_id
     *
     * @param string|null $registration_id registration_id
     *
     * @return self
     */
    public function setRegistrationId($registration_id)
    {
        $this->container['registration_id'] = $registration_id;

        return $this;
    }

    /**
     * Gets vat_id
     *
     * @return string|null
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     *
     * @param string|null $vat_id vat_id
     *
     * @return self
     */
    public function setVatId($vat_id)
    {
        $this->container['vat_id'] = $vat_id;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string|null $tax_id tax_id
     *
     * @return self
     */
    public function setTaxId($tax_id)
    {
        $this->container['tax_id'] = $tax_id;

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
     * Gets logo_url
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string|null $logo_url logo_url
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets contact_email
     *
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string|null $contact_email contact_email
     *
     * @return self
     */
    public function setContactEmail($contact_email)
    {
        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

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
     * Gets company_code
     *
     * @return string|null
     */
    public function getCompanyCode()
    {
        return $this->container['company_code'];
    }

    /**
     * Sets company_code
     *
     * @param string|null $company_code company_code
     *
     * @return self
     */
    public function setCompanyCode($company_code)
    {
        $this->container['company_code'] = $company_code;

        return $this;
    }

    /**
     * Gets privacy_policy_url
     *
     * @return string|null
     */
    public function getPrivacyPolicyUrl()
    {
        return $this->container['privacy_policy_url'];
    }

    /**
     * Sets privacy_policy_url
     *
     * @param string|null $privacy_policy_url privacy_policy_url
     *
     * @return self
     */
    public function setPrivacyPolicyUrl($privacy_policy_url)
    {
        $this->container['privacy_policy_url'] = $privacy_policy_url;

        return $this;
    }

    /**
     * Gets terms_of_service_url
     *
     * @return string|null
     */
    public function getTermsOfServiceUrl()
    {
        return $this->container['terms_of_service_url'];
    }

    /**
     * Sets terms_of_service_url
     *
     * @param string|null $terms_of_service_url terms_of_service_url
     *
     * @return self
     */
    public function setTermsOfServiceUrl($terms_of_service_url)
    {
        $this->container['terms_of_service_url'] = $terms_of_service_url;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string|null
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string|null $website_url website_url
     *
     * @return self
     */
    public function setWebsiteUrl($website_url)
    {
        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets is_government_organization
     *
     * @return bool|null
     */
    public function getIsGovernmentOrganization()
    {
        return $this->container['is_government_organization'];
    }

    /**
     * Sets is_government_organization
     *
     * @param bool|null $is_government_organization is_government_organization
     *
     * @return self
     */
    public function setIsGovernmentOrganization($is_government_organization)
    {
        $this->container['is_government_organization'] = $is_government_organization;

        return $this;
    }

    /**
     * Gets dl_api_key
     *
     * @return string|null
     */
    public function getDlApiKey()
    {
        return $this->container['dl_api_key'];
    }

    /**
     * Sets dl_api_key
     *
     * @param string|null $dl_api_key dl_api_key
     *
     * @return self
     */
    public function setDlApiKey($dl_api_key)
    {
        $this->container['dl_api_key'] = $dl_api_key;

        return $this;
    }

    /**
     * Gets is_kyo_completed
     *
     * @return bool|null
     */
    public function getIsKyoCompleted()
    {
        return $this->container['is_kyo_completed'];
    }

    /**
     * Sets is_kyo_completed
     *
     * @param bool|null $is_kyo_completed is_kyo_completed
     *
     * @return self
     */
    public function setIsKyoCompleted($is_kyo_completed)
    {
        $this->container['is_kyo_completed'] = $is_kyo_completed;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool|null
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool|null $is_enabled is_enabled
     *
     * @return self
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets is_data_provider
     *
     * @return bool|null
     */
    public function getIsDataProvider()
    {
        return $this->container['is_data_provider'];
    }

    /**
     * Sets is_data_provider
     *
     * @param bool|null $is_data_provider is_data_provider
     *
     * @return self
     */
    public function setIsDataProvider($is_data_provider)
    {
        $this->container['is_data_provider'] = $is_data_provider;

        return $this;
    }

    /**
     * Gets is_data_consumer
     *
     * @return bool|null
     */
    public function getIsDataConsumer()
    {
        return $this->container['is_data_consumer'];
    }

    /**
     * Sets is_data_consumer
     *
     * @param bool|null $is_data_consumer is_data_consumer
     *
     * @return self
     */
    public function setIsDataConsumer($is_data_consumer)
    {
        $this->container['is_data_consumer'] = $is_data_consumer;

        return $this;
    }

    /**
     * Gets submitted_at_utc
     *
     * @return \DateTime|null
     */
    public function getSubmittedAtUtc()
    {
        return $this->container['submitted_at_utc'];
    }

    /**
     * Sets submitted_at_utc
     *
     * @param \DateTime|null $submitted_at_utc submitted_at_utc
     *
     * @return self
     */
    public function setSubmittedAtUtc($submitted_at_utc)
    {
        $this->container['submitted_at_utc'] = $submitted_at_utc;

        return $this;
    }

    /**
     * Gets approved_by
     *
     * @return string|null
     */
    public function getApprovedBy()
    {
        return $this->container['approved_by'];
    }

    /**
     * Sets approved_by
     *
     * @param string|null $approved_by approved_by
     *
     * @return self
     */
    public function setApprovedBy($approved_by)
    {
        $this->container['approved_by'] = $approved_by;

        return $this;
    }

    /**
     * Gets approved_at_utc
     *
     * @return \DateTime|null
     */
    public function getApprovedAtUtc()
    {
        return $this->container['approved_at_utc'];
    }

    /**
     * Sets approved_at_utc
     *
     * @param \DateTime|null $approved_at_utc approved_at_utc
     *
     * @return self
     */
    public function setApprovedAtUtc($approved_at_utc)
    {
        $this->container['approved_at_utc'] = $approved_at_utc;

        return $this;
    }

    /**
     * Gets organization_type
     *
     * @return \MyDataMyConsent\Model\OrganizationType|null
     */
    public function getOrganizationType()
    {
        return $this->container['organization_type'];
    }

    /**
     * Sets organization_type
     *
     * @param \MyDataMyConsent\Model\OrganizationType|null $organization_type organization_type
     *
     * @return self
     */
    public function setOrganizationType($organization_type)
    {
        $this->container['organization_type'] = $organization_type;

        return $this;
    }

    /**
     * Gets organization_category
     *
     * @return \MyDataMyConsent\Model\OrganizationCategory|null
     */
    public function getOrganizationCategory()
    {
        return $this->container['organization_category'];
    }

    /**
     * Sets organization_category
     *
     * @param \MyDataMyConsent\Model\OrganizationCategory|null $organization_category organization_category
     *
     * @return self
     */
    public function setOrganizationCategory($organization_category)
    {
        $this->container['organization_category'] = $organization_category;

        return $this;
    }

    /**
     * Gets organization_address
     *
     * @return \MyDataMyConsent\Model\OrganizationAddress[]|null
     */
    public function getOrganizationAddress()
    {
        return $this->container['organization_address'];
    }

    /**
     * Sets organization_address
     *
     * @param \MyDataMyConsent\Model\OrganizationAddress[]|null $organization_address organization_address
     *
     * @return self
     */
    public function setOrganizationAddress($organization_address)
    {
        $this->container['organization_address'] = $organization_address;

        return $this;
    }

    /**
     * Gets organization_financial_account
     *
     * @return \MyDataMyConsent\Model\OrganizationFinancialAccount[]|null
     */
    public function getOrganizationFinancialAccount()
    {
        return $this->container['organization_financial_account'];
    }

    /**
     * Sets organization_financial_account
     *
     * @param \MyDataMyConsent\Model\OrganizationFinancialAccount[]|null $organization_financial_account organization_financial_account
     *
     * @return self
     */
    public function setOrganizationFinancialAccount($organization_financial_account)
    {
        $this->container['organization_financial_account'] = $organization_financial_account;

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
     * Gets approved_by_user
     *
     * @return \MyDataMyConsent\Model\ApplicationUser|null
     */
    public function getApprovedByUser()
    {
        return $this->container['approved_by_user'];
    }

    /**
     * Sets approved_by_user
     *
     * @param \MyDataMyConsent\Model\ApplicationUser|null $approved_by_user approved_by_user
     *
     * @return self
     */
    public function setApprovedByUser($approved_by_user)
    {
        $this->container['approved_by_user'] = $approved_by_user;

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


