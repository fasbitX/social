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
 $options = array(
 				'field_placeholder' => input('field_placeholder'),
				'field_options' => input('field_options', "", false),
 				'show_on_signup' => input('show_on_signup'),
 				'is_required' => input('is_required'),
				'show_label' => input('show_label'),
				'show_on_about' => input('show_on_about'),
  );
 $guid = input('guid');

 $optioninput = array('radio', 'dropdown');
 if(isset($options['field_type']) && in_array($options['field_type'], $optioninput) && empty($options['field_options'])){
			ossn_trigger_message(ossn_print('customfield:fields:required:b'), 'error');
			redirect(REF);
 }

 $fields = new CustomFields(array(
			$options 								 
 ));
 if($fields->editField($guid)){
			ossn_trigger_message(ossn_print('customfield:fields:edited'));
			redirect(REF);			 
 } else {
			ossn_trigger_message(ossn_print('customfield:fields:edit:failed'), 'error');
			redirect(REF);
}
