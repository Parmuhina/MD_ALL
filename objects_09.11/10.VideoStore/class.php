<?php

require_once "Video.php";
require_once "VideoStore.php";
require_once "MovieCollection.php";

class Application
{
    private array $videos;
    private MovieCollection $collection;
    private VideoStore $videoStore;

    public function __construct(array $videos, MovieCollection $collection, VideoStore $videoStore)
    {
        $this->videos=$videos;
        $this->collection=$collection;
        $this->videoStore=$videoStore;
    }

    function run(array $videos, MovieCollection $collection, VideoStore $videoStore)
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";
            echo "Choose 5 to give some ratings\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies($this->videoStore);
                    break;
                case 2:
                    $this->rent_video($this->videoStore,$this->videos);
                    break;
                case 3:
                    $this->return_video($this->videoStore, $this->videos);
                    break;
                case 4:
                    $this->list_inventory($this->videos);
                    break;
                case 5:
                    $this->giveRatings($this->videoStore);
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies(VideoStore $videoStore):void
    {
        $title=readline("Please enter film name: ");
        $this->videoStore->addInStore(new Video($title, IN, 0));
        $this->videos[]=new Video($title, IN, 0);
    }

    private function giveRatings(VideoStore $videoStore):void
    {
        foreach ($this->videos as $video){
            echo $video->getTitle()." insert your rating: ";
            $rating=readline();
            $this->videoStore->giveRating($video, $rating);
        }
        var_dump($this->collection);
    }

    private function rent_video(VideoStore $videoStore, array $videos):void
    {
        echo "Insert your video title: ";
        $title=readline();
        if($title==="Godfather 2" && ($this->videoStore->checkOut($title, $videos)->beingReturned())){
            $this->list_inventory($videos);
        }
        if ($this->videoStore->checkOut($title, $videos)===null){
            echo "This video not in store!".PHP_EOL;
        }elseif($this->videoStore->checkOut($title, $videos)->beingReturned()){
            $this->videoStore->checkOut($title, $videos)->setFlag(false);
        }else{
            echo "This video is rented.".PHP_EOL;
        }

    }

    private function return_video(VideoStore $videoStore, array $videos)
    {
        echo "Insert your video title which you want tor return: ";
        $title=readline();

        if ($this->videoStore->checkOut($title, $videos)===null){
            echo "This is not our store video.".PHP_EOL;
        }else{
            $this->videoStore->checkOut($title, $videos)->setFlag(true);
        }
    }

    private function list_inventory(array $videos):void
    {
        foreach ($videos as $video) {
            echo "Film name is " . $video->getTitle() . " 
film rating is " . $video->getRating() . " 
is film in store ";
            echo ($video->beingReturned())? "IN": "OUT" . PHP_EOL;
            echo PHP_EOL;
        }
    }
}

const IN=true;
const OUT=false;
$videos=[
    new Video("The matrix", IN, 8.5),
    new Video ("Godfather 2", OUT, 9.0),
    new Video ("Star wars episode 4: A new hope", IN, 9.5)
];
$collection=new MovieCollection($videos);
$newVideoStore=new VideoStore($collection);
$app = new Application($videos, $collection, $newVideoStore);

$app->run($videos, $collection, $newVideoStore);
