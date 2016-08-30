<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isTrusted()
    {
        return !!$this->trusted;
    }

    public function votes()
    {
        return $this->belongsToMany(CommunityLinks::class, 'community_links_votes')
            ->withTimestamps();
    }

    public function voteFor(communityLink $link)
    {
      return  $this->votes()->sync([$link->id], false);
    }

    public function unvoteFor(communityLink $link)
    {
        return  $this->votes()->detach($link);
    }


    public function votedFor(CommunityLink $link)
    {
        return $link->votes->contains('user_id', $this->id);
    }
}
