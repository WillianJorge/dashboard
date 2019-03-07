<?php

namespace App\Http\Controllers;

use Ping\Ping;
use Illuminate\Http\Request;

class PingController extends Controller
{
    public function test()
    {

        //o comadno pingo retorno 1 para pcs desligados e 0 para ligados

        //teste totem 1
        $ip = '192.168.0.150';
        exec("ping -w 2 $ip", $saida, $retorno);

        $Totem1 = $retorno;

        //teste totem 2
        $ip = '192.168.0.151';
        exec("ping -w 2 $ip", $saida, $retorno);

        $Totem2 = $retorno;

        //teste totem 3
        $ip = '192.168.0.152';
        exec("ping -w 2 $ip", $saida, $retorno);

        $Totem3 = $retorno;

        $lst = [
            'Totem1' => $Totem1,
            'Totem2' => $Totem2,
            'Totem3' => $Totem3,
        ];

        return $lst;
    }
}
