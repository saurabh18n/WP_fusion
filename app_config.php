<?php
	//application details
		$apps[$x]['name'] = "WebPhone";
		$apps[$x]['uuid'] = "7ceea968-af85-11ec-b909-0242ac120002";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "uvcpbx.in";
		$apps[$x]['description']['en-us'] = "WebPhone with autometic login";
		$apps[$x]['description']['es-cl'] = "";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['fr-fr'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-ch'] = "";
		$apps[$x]['description']['pt-pt'] = "";
		$apps[$x]['description']['pt-br'] = "";

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = "webphone_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "ef6a87aa-af8a-11ec-b909-0242ac120002";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
	//default settings
		$y = 0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '0afa7e2e-af88-11ec-b909-0242ac120002';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'WebPhone';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'Hostname';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'sng.uvcpbx.in';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Web Socket Server Hostname(like sng.uvcpbx.in)';
		$y++;

		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '85d4288c-af94-11ec-b909-0242ac120002';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'WebPhone';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'Port';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '7443';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Web Socket Server Port';
		$y++;
	?>
