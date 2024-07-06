<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceItem extends Model
{
  /**
   * @var string
   */
  protected $table = 'experience_items';

  /**
   * @var bool
   */
  public $timestamps = false;

  // Relationship with Experience
  public function experience()
  {
    return $this->belongsTo(Experience::class);
  }
}
