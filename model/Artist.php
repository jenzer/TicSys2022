<?php

class Artist {

    private $name;
    private $image;
    private $imageThumb;
    private $description;
    private $videos = array();

    function __construct($name = "", $image = "", $imageThumb = "", $description = "") {
        $this->name = $name;
        $this->image = $image;
        $this->imageThumb = $imageThumb;
        $this->description = $description;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getImageThumb() {
        return $this->imageThumb;
    }

    public function setImageThumb($imageThumb) {
        $this->imageThumb = $imageThumb;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getShortDescription($maxLength = 40) {
        if (strlen($this->description) > $maxLength) {
            return substr($this->description, 0, $maxLength - 3). "...";
        }
        return $this->description;
    }

    public function getVideos() {
        return $this->videos;
    }

    public function setVideos(array $videos) {
        $this->videos = $videos;
    }

    public function addVideo(Video $video) {
        $this->videos[] = $video;
    }

    public function hasVideos() {
        return !empty($this->videos);
    }

    public function __toString() {
        return "Name: {$this->name}, Description: {$this->getShortDescription()}, Videos: " . (($this->hasVideos()) ? 'yes' : 'no');
    }

}

