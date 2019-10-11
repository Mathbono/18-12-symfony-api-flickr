<?php
namespace App\Infrastructure;

use App\Model\FlickerPhoto;

class FlickerService
{
    const API_KEY = '814772198ec9aa500687da8dcc184605';

    private function callFlickerApi($method, $extraParams = [])
    {
        $params = [
            'method' => $method,
            'api_key' => self::API_KEY,
            'format' => 'json',
            'nojsoncallback' => 1
        ];
        $params = array_merge($params, $extraParams);
        $baseUrl = 'https://api.flickr.com/services/rest/';
        $url = $baseUrl . '?' . http_build_query($params);
        $jsonString = file_get_contents($url);
        $objet = json_decode($jsonString);
        return $objet;
    }

    public function findByTag($tag)
    {
        $photosData = $this->callFlickerApi(
            'flickr.photos.search', [
            'tags' => $tag,
            'safe_search' => 1,
            'content_type' => 1,
            'per_page' => 25
            ]
        );
        $flickerPhotos = [];
        foreach ($photosData->photos->photo as $photoData) {
            $photo = new FlickerPhoto(
                $photoData->title,
                $photoData->farm,
                $photoData->server,
                $photoData->id,
                $photoData->secret
            );
            array_push($flickerPhotos, $photo);
        }
        return $flickerPhotos;
    }
}