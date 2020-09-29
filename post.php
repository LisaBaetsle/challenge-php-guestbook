<?php

declare(strict_types=1);

class Post
{
  private $title;
  private $date;
  private $content;
  private $name;

  // constructor
  function __construct($title, $date, $content, $name)
  {
    $this->title = $title;
    $this->date = $date;
    $this->content = $content;
    $this->name = $name;
  }
}
