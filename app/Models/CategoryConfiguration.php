<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryConfiguration extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_id',
        'key',
        'type',
        'value',
        'default'
    ];
    public function categoryConfigurationKeys(){
        return $this->hasOne(CategoryConfiguration::class, 'name','key');
    }
}
