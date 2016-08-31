<?php

namespace App\Http\Controllers;

use App\channel;
use App\communitylink;
use App\Exceptions\CommunityLinkAlreadySubmitted;
use App\Http\Requests\CommunityLinkForm;
use App\Queries\CommunityLinksQuery;
use Illuminate\Http\Request;

class CommunityLinksController extends Controller
{
    /**
     * @param channel|null $channel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Channel $channel = null)
    {

         $links = (new CommunityLinksQuery)->get(
            request()->exists('popular'),  $channel
         );

//         dd($links);
        $channels = Channel::orderBy('title', 'asc')->get();

//        flash()->success('Success', 'Flash Added');


        return view('community.index', compact('links','channels','channel'));
    }

    /**
     * @param CommunityLinkForm $form
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CommunityLinkForm $form)
    {


        try{
            $form->$persist();

            CommunityLink::from(
                auth()->user())
                ->contribute($request->all(), $this);

        }catch (CommunityLinkAlreadySubmitted $e){

            flash()->overlay("we'll insted bump the timestamp and bring that link to the top Thansk! ",
                'That Link Has Already Been Submitted'
            );

        }



        return back();
    }
}
