<?php

class Comment extends DatabaseObject
{

  static protected $table_name = "comment";
  static protected $db_columns = ['comment_id', 'post_id', 'user_id', 'user_comment', 'comment_date', 'parent_comment_id'];

  public $comment_id;
  public $post_id;
  public $user_id;
  public $user_comment;
  public $comment_date;
  public $parent_comment_id;

  public function __construct($args = [])
  {
    $this->comment_id = $args['comment_id'] ?? '';
    $this->post_id = $args['post_id'] ?? '';
    $this->user_id = $args['user_id'] ?? '';
    $this->user_comment = $args['user_comment'] ?? '';
    $this->comment_date = $args['comment_date'] ?? '';
    $this->parent_comment_id = $args['parent_comment_id'] ?? '';
  }

}
