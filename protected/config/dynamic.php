<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=humhub',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_MailTransport',
      ),
      'view' => 
      array (
        'theme' => 
        array (
          'name' => 'HumHub',
        ),
      ),
    ),
    'view' => 
    array (
      'theme' => 
      array (
        'name' => 'HumHub',
      ),
    ),
    'formatter' => 
    array (
      'defaultTimeZone' => 'Asia/Kolkata',
    ),
    'formatterApp' => 
    array (
      'defaultTimeZone' => 'Asia/Kolkata',
      'timeZone' => 'Asia/Kolkata',
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'localhost',
        'installer_database' => 'humhub',
      ),
    ),
    'config_created_at' => 1446060929,
    'installed' => true,
  ),
  'name' => 'Koli Pride',
  'language' => 'en',
  'timeZone' => 'Asia/Kolkata',
); ?>