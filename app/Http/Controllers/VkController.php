<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use VK\Client\VKApiClient;

class VkController extends Controller
{
    public function callback(Request $request)
    {
        $data = $request->all();

        if ($data['type'] != 'message_new') {
            return 'ok';
        }


        $peerId = $data['object']['message']['peer_id'];

        $text = $data['object']['message']['text'];

        $answer = 'Моя твоя не понимать!';

        if ($text == 'Привет') {
            $answer = 'Привет!';
        }


        (new VKApiClient)->messages()->send(
            'e8f626a3425e63238eec22c7e5a39326f5b2cf8eb650ce80ea04751e6bdbc421f236cdec75f75417b1fcb',
            [
                'peer_id' => $peerId,
                'random_id' => rand(10000, 99999),
                'message' => $answer,
                'keyboard' => json_encode([
                    'one_time' => false,
                    'buttons' => [
                        [
                            [
                                'action' => [
                                    'type' => 'text',
                                    'label' => 'Информация'
                                ],
                                'color' => 'positive'
                            ],
                        ],
                        [
                            [
                                'action' => [
                                    'type' => 'text',
                                    'label' => 'Привет'
                                ]
                            ],
                            [
                                'action' => [
                                    'type' => 'text',
                                    'label' => 'Дай человека!'
                                ],
                                'color' => 'primary'
                            ]
                        ]
                    ]
                ]),
            ]
        );

        return 'ok';

        /*try {
            echo '46d64fb8';
        } catch (\Exception $e) {
            return $e->getMessage();
        }*/
    }
}
