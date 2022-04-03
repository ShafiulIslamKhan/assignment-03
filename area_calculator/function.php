<?php

function area($type , $i, $j) {

    if($type == null) echo "specify geometrical shape";
    elseif($type == 'rectangle') return $i*$j;
    elseif($type == 'square') return $i*$i;
    elseif($type == 'circle') return 3.14 * ($i * $i);
    else echo "undefined error";

}