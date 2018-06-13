<?php

require_once "../Data/dataPost.php";

class Post {

    private $numPost;
    private $likes;
    private $viewed;

    public function __construct ($numPost=null, $likes=null, $viewed=null) {
        $this->numPost = $numPost;
        $this->likes = $likes;
        $this->viewed = $viewed;    
    }

    public function getNumPost() {
        return $this->numPost;
    }

    public function getLikes() {
        return $this->likes;
    }

    public function getViewed() {
        return $this->viewed;
    }

    public function setNumPost($numPost) {
        $this->numPost = $numPost;
    }

    public function setLikes($likes) {
        $this->likes = $likes;
    }

    public function setViewed($viewed) {
        $this->viewed = $viewed;
    }


    public function insertPost() {
    	$objDataPost = new dataPost();
        $resultado = $objDataPost->insertPost();
	    return $resultado;
    }
    
    public function increaseLike($numPost) {
        $objDataPost = new dataPost();
        $resultado = $objDataPost->increaseLike($numPost);
        return $resultado;
    }
}

?>