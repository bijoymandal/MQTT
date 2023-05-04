<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpMqtt\Client\Facades\MQTT;

class MessageController extends Controller
{
    public function index()
    {
        MQTT::publish('some/topic', 'Hello World!','public');
        return view('msg.index');
    }
}
