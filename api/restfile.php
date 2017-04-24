<?php
require_once ('/adp/home/www_serv/php/sys/libs/sys_security.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

            $url = 'http://dexter.plaza.ds.adp.com:10224';
            if (isset($_REQUEST['Employee'])) {
                
                $xminput = '<eoapi:Request version="1.0" EliminateNamespace="Yes"   xmlns:eoapi="http://www.adp.com/eoapi">
       <Session>
              <Echo AppName="DecisivSRM" DealerCode="854" TransName="Group"
                     TransID="49fd34d0-24c9-4cc5-9d3c-f429cee50dd7" ConversationID="bbe5dd93-d68f-42e5-97bb-9c61978f893c" />
              <Connection>
                     <Product>WEBSUITE</Product>
                     <Server>BSNOB</Server>
                     <Password>000453fd14</Password>
                     <Pooling>Yes</Pooling>
              </Connection>
              <GetSet>
                     <Object>Employee</Object>
                     <Group>MAP</Group>
                     <Selection></Selection>
              </GetSet>
       </Session>
    </eoapi:Request>';
                
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                // Following line is compulsary to add as it is:
                curl_setopt($ch, CURLOPT_POSTFIELDS, $xminput);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
                $data = curl_exec($ch);
                curl_close($ch);
                
                $array_data = json_decode(json_encode(simplexml_load_string($data)), true);
                
                /*
                 * print_r('<pre>');
                 * print_r(json_encode($array_data['Session']['Reply'][2]['GLAgrnView']));
                 * print_r('</pre>');
                 */
                
                echo json_encode($array_data['Session']['Reply'][1]['Group']);
                EXIT();
            }
            else {
                echo "Error!!";
            }
