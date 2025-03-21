<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs_listening';
    protected $fillable = ['title','description'];

    public function employer(){
        return $this->belongsTo(Employer::class, 'employer_id');
    }

    public function tags(){
        return $this->belongsToMany(TagModel::class, table: 'job_tag_pivot_table' ,foreignPivotKey: 'jobs_listening_id', relatedPivotKey: 'tag_model_id');
    }
}
