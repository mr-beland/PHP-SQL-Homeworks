<?php

// Функцию - создания Строки для одного Уровня Ёлки
// Принимает Параметры: Высоты, Уровня, Символа Ёлки   
function buildTreeRow($n, $level, $signTree) {
    // Формула, чтобы определить количество Символов в текущем Ряду Ёлки - для отображения
    $numSymbols = 2 * $level - 1;
    // Формула, для определения количества Пробелов перед Символами Ёлки в текущем Ряде.
    $numSpaces = $n - $level;
    // Возврат Большой Строки (состоящей из 2 подстрок)
    // Подстрока 1 - состоящая из указанного Количества Пробелов
    // Подстрока 2 - состоящая из Символов "Ёлки", разделенных Пробелами
    // Повтор указанной Строки заданное количество раз - Функцией str_repeat
    return str_repeat(' ', $numSpaces) . str_repeat($signTree . ' ', $numSymbols);
}

// Функция - построения Рядов Ёлки 
// Принимает Параметры: высоты и символа Ёлки    
function buildTreeRows($n, $signTree) {
    // Создание пустого Массива, который будет содержать Строки Ёлки.
    $treeRows = [];
    // Использование Цикла для Итерации от 1 до высоты Ёлки - n.
    for ($i = 1; $i <= $n; $i++) {
        // На каждой Итерации Цикла вызывается - Функция buildTreeRow с параметрами: Высота, текущий Уровень Ёлки, Символ Ёлки
        // для создания Строки для текущего Уровня Ёлки. 
        // Результат добавляется в Массив 
        $treeRows[] = buildTreeRow($n, $i, $signTree);
    }

    // Возврат Массива содержащий Строки для каждого Уровня Ёлки.
    return $treeRows;

}

