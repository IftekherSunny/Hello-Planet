<?php

namespace Sun\Controllers;

use Sun\Models\Message;
use Sun\Routing\Controller as BaseController;

class HelloController extends BaseController
{
    /**
     * To show hello planet page
     *
     * @return mixed
     */
    public function index()
    {
        Message::dummy();

        $messages = Message::all();

        return view('vendor.hello.index', compact('messages'));
    }
}