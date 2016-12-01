<?php

namespace ExA2040\LaravelSluggable;
use Illuminate\Database\Eloquent\Model;

class Slug extends Model {

  protected $table = 'slugs';
  protected $fillable = array('class_name', 'object_id');

}
