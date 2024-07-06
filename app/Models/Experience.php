<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /**
     * @var string
     */
    protected $table = 'experience';

    /**
     * @var bool
     */
    public $timestamps = true;

    // Relationship with ExperienceItems
    public function experienceItems()
    {
        return $this->hasMany(ExperienceItem::class, 'experience_id');
    }
}
