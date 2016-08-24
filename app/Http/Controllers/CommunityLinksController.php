<?php

namespace App\Http\Controllers;

use App\channel;
use App\communitylink;
use Illuminate\Http\Request;


class CommunityLinksController extends Controller
{
    public function index()
    {
        $links = communitylink::paginate(25);
        $channels = channel::orderBy('title','asc')->get();
        return view('community.index',compact('links','channels'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
//            'channel_id' => 'required|exists:channels,id',
            'title' => 'required',
            'link' => 'required|active_url|unique:community_links',
        ]);

        CommunityLink::from(auth()->user())
            ->contribute($request->all());


        return back();
    }
}
