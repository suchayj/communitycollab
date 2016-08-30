<?php

namespace App\Http\Controllers;

use App\CommunityLink;
//use Illuminate\Http\Request;
//
//use App\Http\Requests;

class VotesController extends Controller
{
   public function store(CommunityLink $link)
   {
      auth()->user()->voteFor($link);

       return back();
   }
}
