<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    protected $table = 'tag_table';
    public function jobs()
    {
        return $this->belongsToMany(Job::class,table: 'job_tag_pivot_table' , foreignPivotKey:'tag_model_id' ,relatedPivotKey: 'jobs_listening_id');
    }
}
