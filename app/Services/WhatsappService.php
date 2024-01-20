<?php

namespace App\Services;
use App\Contracts\NotificationService;
use Illuminate\Support\Facades\Http;

use Throwable;


class WhatsappService implements NotificationService
{

    public function kirimNotifWa($nomorhp, $isipesan){
        $apikey     = env('WAHA_API_KEY');
        $url        = env('WAHA_API_URL');
        $sessionApi = env('WAHA_API_SESSION');
        $requestApi = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept'       => 'application/json',
            'X-Api-Key'    => $apikey,
        ]);

        // SOP based on https://waha.devlike.pro/docs/overview/how-to-avoid-blocking/

        // try {
            #1 Send Seen
            $requestApi->post($url.'/api/sendSeen', [ "session" => $sessionApi, "chatId"  => $nomorhp.'@c.us', ]);

            #2 Start Typing
            $requestApi->post($url.'/api/startTyping', [ "session" => $sessionApi, "chatId"  => $nomorhp.'@c.us', ]);

            sleep(1); // jeda seolah olah ngetik

            #3 Stop Typing
            $requestApi->post($url.'/api/stopTyping', [ "session" => $sessionApi, "chatId"  => $nomorhp.'@c.us', ]);

            #4 Send Message
            $requestApi->post($url.'/api/sendText', [
                "session" => $sessionApi,
                "chatId"  => $nomorhp.'@c.us',
                "text"    => $isipesan,
            ]);
        // } catch (Throwable $th) {
        //     throw $th;
        // }
    }
}
