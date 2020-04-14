<?php

namespace App\Http\Controllers;

use App\Entities\Channel;
use App\Entities\User;
use App\Http\Requests\StoreUserChannelsRequest;
use App\Repositories\ChannelRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Query;

class HomeController extends Controller
{
    /**
     * @var ChannelRepository
     */
    private $channelRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ChannelRepository $channelRepository)
    {
        $this->middleware('auth');
        $this->channelRepository = $channelRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->id();
        $channels = $this->channelRepository->getAllChannelsWithUser($user_id)->get();
        return view('home', ['channels' => $channels]);
    }


    public function storeUserChannels(StoreUserChannelsRequest $request)
    {
        /** @var User $user */
        $user = auth()->user();
        $user->channels()->sync($request->get('channels'));

        $user_id = auth()->id();
        $channels = $this->channelRepository->getAllChannelsWithUser($user_id)->get();
        return view('home', ['channels' => $channels]);
    }
}
