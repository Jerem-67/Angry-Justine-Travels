<?php

class WindyApi
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getCamLocation(string $camLocation)
    {
        $curl = curl_init("https://api.windy.com/api/webcams/v2/list/webcam={$camLocation}?show=webcams:player&key={$this->apiKey}");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 1);
        $data = curl_exec($curl);
        if($data === false || curl_getinfo($curl, CURLINFO_HTTP_CODE !== 200) ){
            var_dump(curl_error($curl));
            return "erreur d'affichage";
        }else {
            $data = json_decode($data, true);
            return '<a name="windy-webcam-timelapse-player" data-id="' .$data["result"]["webcams"]["0"]["id"] .'" href="https://windy.com/webcams/' .$data["result"]["webcams"]["0"]["id"] .'" >' . $data["result"]["webcams"]["0"]["title"].'</a><script async type="text/javascript" src="../script/player.js"></script>';
;
        }
    }

}


//https://webcams.windy.com/webcams/public/embed/script/player.js