<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;
    protected $guarded = [];
    //protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function booted() : void
    {
        static::creating(function (Question $question) {
            $question->slug = str($question->title)->slug();
        });
    }

    public function scopeMine(Builder $query){
        if(!auth()->user()){
            return;
        }

        $query->whereBelongsTo(auth()->user());
    }
}
