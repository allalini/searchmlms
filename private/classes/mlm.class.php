<?php

class Mlm extends DatabaseObject
{

  static protected $table_name = "mlm";
  static protected $db_columns = ['mlm_id', 'mlm_name', 'is_mlm'];

  public $mlm_id;
  public $mlm_name;
  public $is_mlm;

  public function __construct($args = [])
  {
    $this->mlm_id = $args['mlm_id'] ?? '';
    $this->mlm_name = $args['mlm_name'] ?? '';
    $this->is_mlm = $args['is_mlm'] ?? '';
  }

}