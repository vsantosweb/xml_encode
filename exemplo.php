<?php
include('xml_encode.php');

$data = array(
    'nome' => 'Maria',
    'caracteristica' => array(
        'idade' => 36,
        'sexo' => 'feminino'
    )
);

$xml = new SimpleXMLElement('<?xml version="1.0"?><data></data>');
xml_encode($data, $xml);

$xml->asXML('file.xml');