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
                    $this->rent_video($this->videoStore);
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
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

    private function rent_video(VideoStore $videoStore):void
    {
        echo "Insert your video title: ";
        $title=readline();
        if($this->videoStore->checkOut($title)->beingReturned()){
         $this->videoStore->checkOut($title)->setFlag(false);
        }else{
            echo "This wideo is rented.".PHP_EOL;
        }
    }

    private function return_video()
    {
        //todo
    }

    private function list_inventory()
    {
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
