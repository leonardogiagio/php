<?php

class Post {
    private array $comments = [];
    private int $likes;
    private int $id;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setLikes($likes) {
        $this->likes = $likes;
    }

    public function getLikes() {
        return $this->likes;
    }
}

class Foto extends Post {
    private string $url;

    public function __construct($id, $url) {
        $this->setId($id);
        $this->setUrl($url);
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }
}


$foto = new Foto(20, 'http://foto.com.br');

echo 'Foto ID: ' . $foto->getId() . ' e URL: ' . $foto->getUrl();


