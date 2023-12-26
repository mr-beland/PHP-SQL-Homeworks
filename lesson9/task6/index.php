<?php

// Подключение Файла
require_once './ClassConfig.php';

// Конфигурация - dev
$devConfig = [
    'db_name' => 'dev_database',
    'db_user' => 'dev_user',
    'db_password' => 'dev_password',
    'app_email' => 'dev@mail.com',
    'app_url' => 'https://dev.mail.com',
];

// Конфигурация - prod
$prodConfig = [
    'db_name' => 'prod_database',
    'db_user' => 'prod_user',
    'db_password' => 'prod_password',
    'app_email' => 'prod@mail.com',
    'app_url' => 'https://prod.mail.com',
];

// Создание Экземпляров Классов Config - dev и prod 
$config = new Config($devConfig, $prodConfig);

// Получение Конфигурации для Режима - dev 
$devConfigData = $config->getConfig('dev');
echo "Dev Config:\n$devConfigData\n\n" . '<br>';

// Получение Конфигурации для Режима - prod 
$prodConfigData = $config->getConfig('prod');
echo "Prod Config:\n$prodConfigData\n" . '<br>';
?>
