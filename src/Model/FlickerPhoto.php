<?php
namespace App\Model;

class FlickerPhoto
{
    private $title;
    private $farmId;
    private $serverId;
    private $id;
    private $secret;

    public function __construct($title, $farmId, $serverId, $id, $secret)
    {
        $this->title = $title;
        $this->farmId = $farmId;
        $this->serverId = $serverId;
        $this->id = $id;
        $this->secret = $secret;
    }

    private function getUrl($format)
    {
        $url = 'https://farm'.$this->farmId.'.staticflickr.com/'.$this->serverId.'/'.$this->id.'_'.$this->secret.'_'.$format.'.jpg';
        return $url;
    }

    public function getThumbmailUrl()
    {
        return $this->getUrl('s');
    }

    public function getLargeUrl()
    {
        return $this->getUrl('b');
    }

    public function getTitle()
    {
        return $this->title;
    }
}