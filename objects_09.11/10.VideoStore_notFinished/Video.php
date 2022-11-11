<?php
class Video
{
    private string $title;
    private bool $flag;
    private float $rating;
    public function __construct(string $title, bool $flag, float $rating)
    {
        $this->title=$title;
        $this->flag=$flag;
        $this->rating=$rating;
    }
    public function setFlag(bool $flag):void
    {
        $this->flag=$flag;
    }
    public function beingReturned ():bool
    {
        return $this->flag;
    }

    public function getRating ():float
    {
        return $this->rating;
    }
    public function getTitle():string
    {
        return $this->title;
    }
    public function setRating(float $rating):void
    {
        $this->rating=($this->getRating()+$rating)/2;
    }
}