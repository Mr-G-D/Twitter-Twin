<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $gaurded = [];


    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id(),
            ],
            [
                'liked' => $liked,
            ]
        );
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        return (bool) likes::
            where('tweet_id', $this->id)
            ->where('user_id', $user->id)
            ->where('liked', '1')
            ->count();
    }

    public function isDislikedBy(User $user)
    {
        return (bool) likes::
            where('tweet_id', $this->id)
            ->where('user_id', $user->id)
            ->where('liked', '0')
            ->count();
    }

    public function likes()
    {
        return $this->hasMany(likes::class);
    }

}
