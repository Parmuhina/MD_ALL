<?php
class MovieCollection
{
    private array $videos;

    public function __construct(array $videos)
    {
        foreach ($videos as $video){
            $this->add($video);
        }
    }

    public function add (Video $video):void
    {
        $this->videos[]=$video;
    }
}