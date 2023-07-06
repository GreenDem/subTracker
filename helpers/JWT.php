<?php
class JWT{

    public static function get(string $jwt){

        // on casse le tableau du jwt concaténé avec les ' . '
        $jwt_array = explode('.', $jwt,3);
        
        // on attribue chaque partie à une variable
        $header = $jwt_array[0];
        $payload = $jwt_array[1];
        $signature = $jwt_array[2];

        //on décode chaque élément

        $headerReplaced = str_replace(['-', '_', ''], ['+', '/', '='], $header);
        $headerDecoded = base64_decode($headerReplaced);
        $headerJson = json_decode($headerDecoded);

        $payloadReplaced = str_replace(['-', '_', ''], ['+', '/', '='], $payload);
        $payloadDecoded = base64_decode($payloadReplaced);
        $payloadJson = json_decode($payloadDecoded);

        // on vérifie que la signature récupérée correspond bien à celle envoyé

        $signatureFromUser = hash_hmac('sha256', $header . "." . $payload, SECRET_KEY, true);

        $signatureFinal = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signatureFromUser));

        // on vérifie que les deux soient identique, si oui on return l'email du payload

        if($signatureFinal === $signature){
            return $payloadJson;
        }else{
            return false;
        }



    }


    public static function set(int $id, string $mail ){

        // header encode
        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));


        //payload encode
        $payload = json_encode([
            'mail' => $mail,
            'id' => $id
        ]);

        $base64Urlpayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

        // création signature
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64Urlpayload, SECRET_KEY, true);

        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));


        $jwt = $base64UrlHeader . "." . $base64Urlpayload . "." . $base64UrlSignature;


        return $jwt;
    }
}