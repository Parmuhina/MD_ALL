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

    public function checkOut (string $title, array $videos):?Video
    {
        $counter=0;
        foreach ($videos as $video) {
            if ($video->getTitle() === $title) {
                return $video;
            }
            $counter++;
        }
        if($counter===count($videos)){
            return null;
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