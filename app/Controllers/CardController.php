<?php

namespace App\Controllers;

class CardController extends BaseController
{
    public function card1()
    {
        return view('card1');
    }

    public function card2()
    {
        return view('card2');
    }

    public function card3()
    {
        return view('card3');
    }
}