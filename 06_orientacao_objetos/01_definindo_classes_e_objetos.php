<?php

class Post {
    // propriedades
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    // metodo construtor
    public function __construct(int $qtLikes) {
        $this->likes = $qtLikes;
    }

    // metodos
    public function aumentarLike() {
        $this->likes++;
    }
}

$post = new Post(10);
$post->aumentarLike();
echo $post->likes;
