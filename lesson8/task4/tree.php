<?php

function buildTreeRow($n, $level, $signTree) {
    $numSymbols = 2 * $level - 1;
    $numSpaces = $n - $level;
    return str_repeat(' ', $numSpaces) . str_repeat($signTree . ' ', $numSymbols);
}

function buildTreeRows($n, $signTree) {
    $treeRows = [];
    for ($i = 1; $i <= $n; $i++) {
        $treeRows[] = buildTreeRow($n, $i, $signTree);
    }
    return $treeRows;

}

