<?php

function placeToysRandomly($treeRows, $treeToys, $signToys) {
    $totalRows = count($treeRows);
    $toysPlaced = 0;

    while ($toysPlaced < $treeToys) {
        $randomRow = rand(0, $totalRows - 1);
        $rowArray = mb_str_split($treeRows[$randomRow]);

        $randomPosition = rand(0, count($rowArray) - 1);

        array_splice($rowArray, $randomPosition, 2);

        // Добавление нового Символа Игрушки в случайное Место
        $randomInsertPosition = rand(0, count($rowArray));
        array_splice($rowArray, $randomInsertPosition, 0, $signToys);

        $treeRows[$randomRow] = implode('', $rowArray);
        $toysPlaced++;
    }

    return $treeRows;

}