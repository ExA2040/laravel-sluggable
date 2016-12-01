<?php

namespace ExA2040\LaravelSluggable;

trait SluggableTrait {
  
  public function slug()
  {
    return $this->hasOne('\ExA2040\ViewCounter\Slug', 'object_id')->where('class_name', snake_case(get_class($this)));
  }
}
