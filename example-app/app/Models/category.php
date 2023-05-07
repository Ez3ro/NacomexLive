<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class category extends Model
{
    use HasFactory;


    protected $fillable= ['title', 'slug',];


    public function post():BelongsToMany
    {

        return $this->belongsToMany(Post::class);
        # code...
    }

}
