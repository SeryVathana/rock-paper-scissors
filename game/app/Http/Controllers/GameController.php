<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        // Initialize scores if they don't exist in the session
        if (!session()->has('player_score')) {
            session(['player_score' => 0]);
        }
        if (!session()->has('computer_score')) {
            session(['computer_score' => 0]);
        }

        return view('game.index', [
            'player_score' => session('player_score'),
            'computer_score' => session('computer_score')
        ]);
    }

    public function play(Request $request)
    {
        // Get user's choice from the form
        $userChoice = $request->input('choice');

        // Generate computer's choice randomly
        $choices = ['rock', 'paper', 'scissors'];
        $computerChoice = $choices[array_rand($choices)];

        // Determine the winner
        if ($userChoice == $computerChoice) {
            $result = "It's a tie!";
        } elseif (($userChoice == 'rock' && $computerChoice == 'scissors') ||
            ($userChoice == 'paper' && $computerChoice == 'rock') ||
            ($userChoice == 'scissors' && $computerChoice == 'paper')) {
            $result = "You win!";
            session(['player_score' => session('player_score') + 1]);
        } else {
            $result = "Computer wins!";
            session(['computer_score' => session('computer_score') + 1]);
        }

        // Pass the result and updated scores to the view
        return view('game.result', [
            'userChoice' => $userChoice,
            'computerChoice' => $computerChoice,
            'result' => $result,
            'player_score' => session('player_score'),
            'computer_score' => session('computer_score')
        ]);
    }
}
