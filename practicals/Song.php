<?php

 namespace Practicals;

class Song {
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    // Getter and setter functions for title
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter and setter functions for artist
    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter and setter functions for genre
    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter and setter functions for tempo
    public function getTempo() {
        return $this->tempo;
    }

    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}

// Example usage
$song = new Song("My Song", "Artist Name", "Pop", 120);
echo "Title: " . $song->getTitle() . PHP_EOL;
echo "Artist: " . $song->getArtist() . PHP_EOL;
echo "Genre: " . $song->getGenre() . PHP_EOL;
echo "Tempo: " . $song->getTempo() . " BPM" . PHP_EOL;

// Updating song information
$song->setTitle("Updated Title");
$song->setArtist("New Artist");
$song->setGenre("Rock");
$song->setTempo(140);
echo "Updated Title: " . $song->getTitle() . PHP_EOL;
echo "Updated Artist: " . $song->getArtist() . PHP_EOL;
echo "Updated Genre: " . $song->getGenre() . PHP_EOL;
echo "Updated Tempo: " . $song->getTempo() . " BPM" . PHP_EOL;

?>

