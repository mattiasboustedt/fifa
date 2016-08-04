<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Access\User\User;
use App\Models\Game;
use App\Models\Rating;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $users = User::all();
        $games = Game::all();


        $rating = new Rating('1000', '1500', '1', '0');
        $newRating = $rating->getNewRatings();
        $prediction = $rating->getPrediction('1500', '900');


        javascript()->put([
            'test' => 'it works!',
        ]);

        return view('frontend.index', compact('users', 'games', 'newRating', 'prediction'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}