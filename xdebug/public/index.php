<?php

$hello = 'Hello world';

function flop (string $bigO) {
    return $bigO;
}

$v = true;
$returnMessage = 'Deu ruim';

if ($v) {
    throw new Exception('Return message');
} else {
    $returnMessage = flop($hello);
}

echo $returnMessage;