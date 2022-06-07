<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    public function scopeFiler($query)
    {
        $query
            ->where('name', 'like', '%'. \request('search') . '%');

    }

    /**
     * Get all of the post's comments.
     */
    public function images()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

}
