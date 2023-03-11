<?php

class Post extends DatabaseObject
{

  static protected $table_name = "post";
  static protected $db_columns = ['post_id', 'mlm_id', 'post_title', 'post', 'post_date'];

  public $post_id;
  public $mlm_id;
  public $post_title;
  public $post;
  public $post_date;

  public function __construct($args = [])
  {
    $this->post_id = $args['post_id'] ?? '';
    $this->mlm_id = $args['mlm_id'] ?? '';
    $this->post_title = $args['post_title'] ?? '';
    $this->post = $args['post'] ?? '';
    $this->post_date = $args['post_date'] ?? '';
  }

}
