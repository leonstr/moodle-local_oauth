<?php

$string['pluginname'] = 'OAuth провайдер';
$string['settings'] = 'Настройки OAuth провайдера';
$string['addclient'] = 'Создать клиента';
$string['addotherclient'] = 'Создать ещё одного клиента';
$string['addnodesclient'] = 'Добавить клиента Àgora-Nodes';
$string['addwordpressclient'] = 'Добавить клиента XTECBlocs';

$string['client_id'] = 'Идентификатор клиента';
$string['client_secret'] = 'Секретный ключ клиента';
$string['redirect_uri'] = 'Адрес перенаправления (redirect uri)';
$string['grant_types'] = 'Тип авторизации (grant type)';
$string['scope'] = 'Область видимости (scope)';
$string['user_id'] = 'User ID';
$string['wp_url'] = 'Адрес блога Wordpress';

$string['auth_question'] = 'Вы хотите авторизовать <strong>{$a}</strong>?';
$string['auth_question_desc'] = 'Это приложение запрашивает доступ к следующей информации в вашем профиле:';
$string['auth_question_login'] = 'Приложению получит имя пользователя, с которым вы входите на сайт';


$string['oauth:manageclients'] = 'Управление клиентами OAuth';

$string['client_not_exists'] = 'Клиент не найден';
$string['saveok'] = 'Клиент сохранен успешно';
$string['confirmdeletestr'] = 'Вы уверены, что хотите удалить {$a}?';
$string['delok'] = 'Клиент удалён успешно';
$string['client_id_existing_error'] = 'Вы ввели идентификатор клиента, который уже используется другим клиентом, пожалуйста укажите уникальный идентификатор клиента';
$string['insert_error'] = 'При создании клиента произошла ошибка';
$string['update_error'] = 'При сохранении клиента произошла ошибка';
$string['delete_error'] = 'При удалении клиента произошла ошибка';

$string['scope_user_info'] = 'Полная информация о профиле пользователя';

$string['event_user_not_granted'] = 'Отказ в доступе';
$string['event_user_granted'] = 'Доступ предоставлен';
$string['event_user_info_request'] = 'Запрос данных';
$string['event_user_info_request_failed'] = 'Ошибка запроса данных';

$string['client_id_help'] = 'Идентификатор клиента должен быть уникальным. Придумайте строку и сообщите её клиенту вместе с секретным ключом. Примеры: «blog1», «nodes».';
$string['redirect_uri_help'] = 'Адрес на стороне клиента, куда пользователь будет перенаправлен после успешного входа на сайт. Например, для XTECBlocs или Nodes, адрес перенаправления будет следующий: <ul><li>XTECBlocs: <i>http://blocs.xtec.cat/nomdelbloc/wp-content/plugins/wordpress-social-login/hybridauth/?hauth.done=Moodle</i></li><li>NODES: <i>http://agora.xtec.cat/nomdelcentre/wp-content/plugins/wordpress-social-login/hybridauth/?hauth.done=Moodle</i></li></ul>';