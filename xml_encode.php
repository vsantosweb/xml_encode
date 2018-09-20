<?php
$data = array(
    'nome' => 'Vitor',
    'caracteristica' => array(
        'idade' => 22,
        'sexo' => 'masculino',
    )
);

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


$xml = new SimpleXMLElement('<?xml version="1.0"?><data></data>');
xml_encode($data, $xml);

$xml->asXML('name.xml');