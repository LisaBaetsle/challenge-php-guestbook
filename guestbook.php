<?php

declare(strict_types=1);

class Guestbook
{

  function addPost($title, $date, $content, $name)
  {
    $post = new Post($title, $date, $content, $name);
    file_put_contents("guestbook.txt", serialize($post), FILE_APPEND);
  }

  function printPost()
  {
    $guestbookPosts = file_get_contents("guestbook.txt");
    print_r($guestbookPosts);
    echo '<br>';
    print_r(unserialize($guestbookPosts));
  }
}
