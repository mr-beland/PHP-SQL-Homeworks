<?php

include 'form.tpl';
include 'tree.php';
include 'tree-toys.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = isset($_POST['n']) ? intval($_POST['n']) : null;
    $signTree = isset($_POST['signTree']) ? htmlspecialchars($_POST['signTree']) : null;
    $treeToys = isset($_POST['treeToys']) ? intval($_POST['treeToys']) : null;
    $signToys = isset($_POST['signToys']) ? htmlspecialchars($_POST['signToys']) : null;

    if ($n !== null && $signTree !== null) {
        // Создать Ёлку без Игрушек, если Символы для Игрушек не указаны
        $treeRows = buildTreeRows($n, $signTree);

        // Создать Ёлку с Игрушками, если Символ и количество Игрушек указаны
        if ($treeToys !== null && $treeToys > 0 && $signToys !== null) {
            $treeRowsWithToys = placeToysRandomly($treeRows, $treeToys, $signToys);
            displayTreeRows($treeRowsWithToys);
        } else {
            displayTreeRows($treeRows);
        }

        exit;
    }
}


// Вывод Ёлки
function displayTreeRows($treeRows) {
    foreach ($treeRows as $row) {
        echo '<div class="tree-row">' . trim($row) . '</div>';
    }
}



