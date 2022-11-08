<?php
class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title=$title;
        $this->studio=$studio;
        $this->rating=$rating;
    }

    public function getPG (array $movies):array
    {
        $filtered=array_filter($movies,function($v, $k){return $v->rating==="PG";}, ARRAY_FILTER_USE_BOTH);
        $movieArrays=[];
        foreach ($filtered as $movie) {
            $movieArrays[]= ["title" => $movie->title, "studio" => $movie->studio, "rating" => $movie->rating];
        }
        return $movieArrays;
    }


}
$movies=[
  new Movie("Casino Royale", "Eon Productions", "PG13"),
  new Movie("Glass", "Buena Vista International", "PG13"),
  new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG")
];
for ($i=0; $i<count($movies[0]->getPG($movies)); $i++) {
    echo "Film is:" . PHP_EOL;
    foreach ($movies[0]->getPG($movies)[$i] as $key => $value) {
        echo "{$key} is {$value}" . PHP_EOL;
    }
    echo PHP_EOL;
}
