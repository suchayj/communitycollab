<?php

namespace App\Http\Controllers;

use App\CommunityLink;
use App\CommunitylinkVote;

//use Illuminate\Http\Request;
//
//use App\Http\Requests;

class VotesController extends Controller
{

//    public function _construct()
//    {
//        $this->middleware('auth');
//    }
   public function store(CommunityLink $link)
   {
      auth()->user()->toggleVoteFor($link);
       return back();
   }
}
