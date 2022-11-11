<?php
require_once "Video.php";
require_once "class.php";
class VideoStore
{
    private MovieCollection $collection;

    public function __construct($collection)
    {
        $this->collection=$collection;
    }

    public function getVideos():array
    {

    }

    public function checkOut (string $title):Video
    {
        foreach ($this->collection as $video){
            if($video->getTitle()===$title){
                return $video;
            }
        }
    }

    public function addInStore (Video $newVideo):void
    {
        $this->collection->add($newVideo);
    }

    public function giveRating(Video $video, float $rating):void
    {
        $video->setRating($rating);
    }
}