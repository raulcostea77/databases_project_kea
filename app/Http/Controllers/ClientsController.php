<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Mail;

use App\Http\Requests;

use App\Client;

class ClientsController extends Controller
{
    public function store()
    {
        $client=new Client;
        $client->email=Input::get('email');
        $client->question= Input::get('question');
        $client->save();

        $data = [
           'email' => $client->email,
           'question' => $client->question
        ];

        // Mail::send(['html'=>'emails.template'], $data, function ($message) {
        //     $message->from('noreply@auctionaffiliate.dk', 'Auction affiliate');
        //     $message->to(config('app.contact_recipient'));
        //     $message->subject('[Auction Affiliate] Contact Request');
        // });

        return Redirect('/');
    }
}
?>