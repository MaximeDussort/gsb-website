<?php
    function insertInscript($nom, $prenom, $mail, $id_activite){
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

        $client = new SoapClient($url, $options);

        $parameters = array('nom' => $nom, 'prenom'=> $prenom, 'mail' =>strtolower($mail), 'id_activite' => $id_activite);
        $res = $client->tabInscript($parameters);
    }
?>