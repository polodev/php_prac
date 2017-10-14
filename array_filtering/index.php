<?php
class Post {
  public $title;
  public $published;
  public $author;
  public function __construct($title, $author, $published){
    $this->title = $title;
    $this->published = $published;
    $this->author = $author;
  }
}

$posts = [
  new Post('Here is my first title', 'Polo Dev',  true),
  new Post('Here is my 2nd title', 'Polo Dev', true),
  new Post('Here is my third title', 'Polo Dev', true),
  new Post('Here is my 4th title', 'Sambu Dev', false),
  new Post('Here is my 5th title', 'Sambu Dev', false)
];

$unpublished_posts = array_filter($posts, function ($post) {
  return $post->published === true;
});

// $map = array_map(function ($post) {
//   $p = $post;
//   $p->title = 'Hello world';
//   $p->descripition = 'Hello world again';
//   return $p;
// } , $posts);

$column = array_column($posts, 'author');
var_dump($column);
