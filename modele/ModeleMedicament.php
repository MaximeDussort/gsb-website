<?php
    
    function returnMedocs(){
        $url = "https://localhost:44319/WebService1.asmx?WSDL";

        $options = array(
            'cache_wsdl' => 0,
            'trace' => 1,
            'stream_context' => stream_context_create(array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            ))
        );

        $tab = new SoapClient($url, $options);

        $res = $tab->tabMedic();
        $lesRes = $res->tabMedicResult->string;
        
        return $lesRes;
    }
?>