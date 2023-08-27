<?php

class Post {
    // propriedades
    private int $likes = 0;
    private array $comments = [];
    private string $author;

    // metodo construtor
    public function __construct(int $qtLikes) {
        $this->likes = $qtLikes;
    }


    // encapsulamento
    public function setAuthor($author) {
        $this->author = ucfirst($author);
    }

    public function getAuthor() {
        return $this->author ?? 'Visitante';
    }

    public function setLikes($like) {
        $this->likes = $like;
    }

    public function getLikes() {
        return $this->likes;
    }

    // metodos
    public function aumentarLike() {
        $this->likes++;
    }


    // metodo estatico
    public static function somar($n1, $n2) {
        return $n1 + $n2;
    }
}

// criando objeto
$post = new Post(10);
$post->aumentarLike();
$post->setAuthor('Leonardo');

echo 'Esse post tem ' . $post->getLikes() . ' likes e o autor é o ' . $post->getAuthor() . PHP_EOL;

// utilizando o metodo estatico
echo 'Soma: ' . Post::somar(1, 2);
