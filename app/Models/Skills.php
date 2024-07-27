<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    /**
     * @var string
     */
    protected $table = 'skills';

    /**
     * @var bool
     */
    public $timestamps = false;

    public function getFormattedYearsAttribute(){
        $years = 0;
        switch($this->years){
            case 0:
                $years = (date('Y') - 2010) . " years";
                break;
            case 1:
                $years = $this->years . " year"; 
                break;
            default:
                $years = $this->years . " years";
        }
        return $years;
    }
}