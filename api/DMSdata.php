<?php

$url = "http://dexter.plaza.ds.adp.com:10224";

$post_string = '<?xml version="1.0" encoding="UTF-8"?>
<eoapi:Request xmlns:eoapi="http://www.adp.com/eoapi" version="1.0" ShowUnknownElementErrors="Yes">
<Session>
<Connection>
<Product>WEBSUITE</Product>
<Server>BSNOB</Server>  
<Password>000453fd14</Password>  
<Pooling>Yes</Pooling>   
</Connection>
<GetSet> 
            <Object>Employee</Object> 
            <Selection></Selection>
            <Group>AKC</Group>            
        </GetSet> 
</Session>
</eoapi:Request>';


$headers = array(
    "POST  HTTP/1.1",
    "Content-type: application/soap+xml; charset=\"utf-8\"",
    "Content-length: ".strlen($post_string)
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, "$post_string");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


$xml_data = curl_exec($ch);
$dataset = simplexml_load_string($xml_data);
if(curl_errno($ch))
    print curl_error($ch);
else
    curl_close($ch);
echo json_encode($dataset);

