<?php
/**
 * Created by PhpStorm.
 * User: Techkaps
 * Date: 30/08/2016
 * Time: 12:45 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class CommunitylinkVote extends Model
{
   protected $table = 'community_links_votes';

    protected $fillable = [
        'user_id',
        'community-link_id'
    ];
}