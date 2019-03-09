<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2017 SOFTLAB24 LIMITED
 * @license   SOFTLAB24 LIMITED, COMMERCIAL LICENSE  https://www.softlab24.com/license/commercial-license-v1
 * @link      https://www.softlab24.com/
 */
define('CustomFields', ossn_route()->com . 'CustomFields/');
require_once(CustomFields . 'classes/CustomFields.php');
ossn_register_system_sdk('CustomFields', 'custom_profile_fields_init');