<?php

$string['pluginname'] = 'OAuth provider';
$string['settings'] = 'OAuth provider settings';
$string['addclient'] = 'Add new client';
$string['addotherclient'] = 'Add other client';
$string['addnodesclient'] = 'Add Àgora-Nodes client';
$string['addwordpressclient'] = 'Add XTECBlocs client';

$string['client_id'] = 'Client identifier';
$string['client_secret'] = 'Client secret Key';
$string['redirect_uri'] = 'Redirect URL';
$string['grant_types'] = 'Grant Types';
$string['scope'] = 'Scope';
$string['user_id'] = 'User ID';
$string['wp_url'] = 'Blog URL';

$string['auth_question'] = 'Do you want to authorize <strong>{$a}</strong>?';
$string['auth_question_desc'] = 'This application is asking to have access this information over your account:';
$string['auth_question_login'] = 'This application is to access your login information';


$string['oauth:manageclients'] = 'Manage OAuth provider Clients';

$string['client_not_exists'] = 'Client does not exist';
$string['saveok'] = 'Client successfully saved';
$string['confirmdeletestr'] = 'Are you sure you want to delete client {$a}?';
$string['delok'] = 'Client successfully deleted';
$string['client_id_existing_error'] = 'The Client identifier specified already exists, please choose another one';
$string['insert_error'] = 'Error occurred creating client';
$string['update_error'] = 'Error occurred updating client data';
$string['delete_error'] = 'Error occurred deleting client';

$string['scope_user_info'] = 'User Profile Information';

$string['event_user_not_granted'] = 'User not granted';
$string['event_user_granted'] = 'User granted';
$string['event_user_info_request'] = 'User info requested';
$string['event_user_info_request_failed'] = 'User info request failed';

$string['client_id_help'] = 'Identifier to be used from the client form in order to reference this provider. It has to be unique. For instance, a valid identifier could be "blog1" or "nodes".';
$string['redirect_uri_help'] = 'URI where to redirect after login. For instance, for XTECBlocs or Nodes, the redirect URI are like: <ul><li>XTECBlocs: <i>http://blocs.xtec.cat/nomdelbloc/wp-content/plugins/wordpress-social-login/hybridauth/?hauth.done=Moodle</i></li><li>NODES: <i>http://agora.xtec.cat/nomdelcentre/wp-content/plugins/wordpress-social-login/hybridauth/?hauth.done=Moodle</i></li></ul>';

$string['privacy:metadata:externalpurpose'] = 'This plugin doesn\'t store data in Moodle, it\'s sent to OAuth 2.0 clients which have been configured by the site administrator. Individual users must grant explicit permission for their information to be passed to the OAuth 2.0 client.';
$string['privacy:metadata:userid'] = 'The user\'s ID number in the Moodle database.';
$string['privacy:metadata:username'] = 'The username.';
$string['privacy:metadata:idnumber'] = 'The user\'s optional ID number.';
$string['privacy:metadata:firstname'] = 'The user\'s firstname.';
$string['privacy:metadata:lastname'] = 'The user\'s lastname.';
$string['privacy:metadata:middlename'] = 'The user\'s middlename.';
$string['privacy:metadata:email'] = 'The user\'s email address.';
$string['privacy:metadata:phone1'] = 'The user\'s phone number.';
$string['privacy:metadata:institution'] = 'The user\'s institution.';
$string['privacy:metadata:department'] = 'The user\'s department.';
$string['privacy:metadata:address'] = 'The user\'s address.';
$string['privacy:metadata:city'] = 'The user\'s city.';
$string['privacy:metadata:description'] = 'The user\'s description.';
