<?php

// Функция - предназначена для случайного распределения Игрушек на уровнях Ёлки 
// принимает Параметры: Массив Рядов Ёлки, Символ Игрушки, Количество Игрушек
function placeToysRandomly($treeRows, $treeToys, $signToys) {

    // Выполняетcя подсчет количества Элементов (Рядов) в Массиве $treeRows - Функцией count 
    $totalRows = count($treeRows);
    // Переменная, которая отслеживает Количество размещенных Игрушек - изначально - 0
    $toysPlaced = 0;

    // Цикл - до тех пор пока - не будет достигнуто или превышено заданное в Поле Вода - количество Игрушек  
    while ($toysPlaced < $treeToys) {
        // Выбор случайного Уровня (Ряда) Ёлки из предоставленных - Функцией rand
        $randomRow = rand(0, $totalRows - 1);
        // Разбив Строки Ряда на Массив Символов - функций mb_str_split
        $rowArray = mb_str_split($treeRows[$randomRow]);
        // Выбор случайной Позиция для вставки Новой Игрушки - Функцией rand
        $randomPosition = rand(0, count($rowArray) - 1);
        
        // Удаляются/заменяются 2 Символа в выбранной Позиции в ряду Массива - Функцией array_splice
        array_splice($rowArray, $randomPosition, 2);

        // Добавление нового Символа Игрушки в случайное Место - Функцией rand
        $randomInsertPosition = rand(0, count($rowArray));

        // Новый Символ Игрушки вставляется (заменяется) в выбранную позицию в Ряду - Функцией array_splice
        array_splice($rowArray, $randomInsertPosition, 0, $signToys);

        // Массив Символов Уровней (ряда) Ёлки объединяется обратно в Строку с добавленной Игрушкой
        $treeRows[$randomRow] = implode('', $rowArray);
        // Увеличения Значения Счётчика размещенных Игрушек.
        $toysPlaced++;
    }

    // Возвращается Массив обновленных Рядов Ёлки.
    return $treeRows;

}