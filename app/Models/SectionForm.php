<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;


class SectionForm extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'cd_crm'; 
    protected $guarded = [];

    protected $fillable = [];

    public $timestamps = true;
}
