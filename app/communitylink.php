<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class communitylink extends Model
{
   protected $table = 'community_links';
   protected $fillable =
       ['channel_id',
        'title',
        'link'
       ];

   public static function from(User $user)
   {
      $link = new static;

      $link->user_id = $user->id;

      if ($user->istrusted()) {
          $link->approved();
      }

      return $link;

   }

   public function contribute($attributes)
   {
      return $this->fill($attributes)->save();
   }

   public function approved()
   {
      $this->approved = true;

      return $this;
   }

   public function creator()
   {
      return $this->belongsTo(User::class, 'user_id');
   }

   public function channel()
   {
      return $this->belongsTo(channel::class);
   }
}
