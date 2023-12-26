<?php

// Объявление Класса Config
class Config

{
    // приватное Свойство - будет хранить Конфигурацию для Режимов: dev и prod.
    private $configData;

    // Конструктор Класса
    // Принимает 2 Массива Конфигурации: $devConfig и $prodConfig
    // Сохраняет их в Свойство $configData.
    public function __construct(array $devConfig, array $prodConfig)

    {
        // Присвоение Ассоциативного Массива $devConfig - в Массив $configData
        $this->configData['dev'] = $devConfig;
        // Присвоение  Ассоциативного Массива $prodConfig - в Массив $configData
        $this->configData['prod'] = $prodConfig;
    }

    // Публичный Метод - возвращает Конфигурация для указанного Режима
    public function getConfig($mode = 'prod')
    {
        // Выбор Режима Конфигурации
        $selectedConfig = $this->configData[$mode] ?? null;

        // Если Режим не определен - вывод Исключения.
        if ($selectedConfig === null) {
            throw new \InvalidArgumentException("Указан неверный режим: $mode");
        }

        // Вызов Приватного Метода - для Сериализации выбранной Конфигурации.
        return $this->serializeConfig($selectedConfig);
    }


    // Приватный Метод - для Cериализации Массива Конфигурации 
    private function serializeConfig(array $config)

    {
        // возврат Конфигурации в Формате JSON.
        return json_encode($config);
        
    }
    
}
