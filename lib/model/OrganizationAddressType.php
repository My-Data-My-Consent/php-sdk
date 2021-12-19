<?php
/**
 * OrganizationAddressType
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
use \MyDataMyConsent\ObjectSerializer;

/**
 * OrganizationAddressType Class Doc Comment
 *
 * @category Class
 * @package  MyDataMyConsent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrganizationAddressType
{
    /**
     * Possible values of this enum
     */
    const CURRENT_ADDRESS = 'CurrentAddress';
    const CORPORATE_ADRESS = 'CorporateAdress';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CURRENT_ADDRESS,
            self::CORPORATE_ADRESS,
        ];
    }
}


