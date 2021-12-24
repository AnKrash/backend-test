<?php
$array = array(
    array(
        'House' => 'Baratheon',
        'Sigil' => 'A crowned stag',
        'Motto' => 'Ours is the Fury',
    ),
    array(
        'Leader' => 'Eddard Stark',
        'House' => 'Stark',
        'Motto' => 'Winter is Coming',
        'Sigil' => 'A grey direwolf'
    ),
    array(
        'House' => 'Lannister',
        'Leader' => 'Tywin Lannister',
        'Sigil' => 'A golden lion'
    ),
    array(
        'Q' => 'Z'
    )
);

$abc = $array;
$ark = array();
$i = 0;
foreach ($abc as $base_key => $base_value) {
    foreach ($base_value as $key => $value) {
        $ark[$i] = $key;
        $i++;
    }
}
sort($ark);

$count = count($ark);
for ($i = 1; $i < $count; $i++) {
    if ($ark[$i] == $ark[$i - 1]) {
        unset ($ark[$i - 1]);
    }
}
$arh = array_values($ark);
natcasesort($arh);
$arh = array_values($arh);

echo '<b>      Table     </b>';
echo '</br>';
echo '</br>';
echo '<table >';
foreach($arh as $key => $value){
    echo '<th >', $value, '</th>';
}

foreach($abc as $base_key => $base_value) {
    echo '<tr>';
    $i=0;

    $base_value = array_flip($base_value);
    natcasesort($base_value);
    $base_value = array_flip($base_value);

    foreach ($base_value as $key => $value) {
        while($key != $arh[$i]){
            echo '<td >', '', '</td>';
            $i++;
        }
        echo '<td >', $value, '</td>';
        $i++;
    }

    echo '</tr>';
}
echo '</table>';
