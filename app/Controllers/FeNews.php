<?php

namespace App\Controllers;

class FeNews extends BaseController
{
    public function worldNews(){
        return view('news_world');
    }
}