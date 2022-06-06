<?php

namespace App\Http\Controllers;

use Dymantic\InstagramFeed\InstagramFeed;
use Dymantic\InstagramFeed\Profile;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class InstagramController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function show()
    {
        $feed = InstagramFeed::for(env('INSTAGRAM_FEED'));
        return view('instagram_feed', ['instagram_feed' => $feed]);
    }

    /**
     * @return Application|RedirectResponse|Redirector
     */
    public function complete()
    {
        if (request('result') === 'success') {
            Session::flash('message', 'OAuth process is successful');
        } else {
            Session::flash('message', 'OAuth process failed');
            Session::flash('alert-class', 'alert-danger');
        }

        return redirect('/');
    }
}
