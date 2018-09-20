<?php

function xml_encode($data, &$xml){

    foreach($data as $key => $value) {
        if(is_numeric($key)){
            $key = 'item'. $key;
        }
        if(is_array($value)) {
            $sub_node = $xml->addChild($key);
            xml_encode($value, $sub_node);
        }else{
            $xml->addChild("$key",htmlspecialchars("$value"));
        }
    }
}
