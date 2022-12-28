<?php

$str = file_get_contents('INPUT.TXT');

$arrows = 0;

for ($i=0; $i < strlen($str) - 4; $i++) {
    $t = substr($str, $i, 5);
    if ($t == ">>-->" or $t == "<--<<") {
        $arrows++;
    }
}
file_put_contents('OUTPUT.TXT', $arrows);