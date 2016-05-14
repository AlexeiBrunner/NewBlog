<?php

namespace App\Http\Controllers;
use App\Http\Requests;

class CurCalculateController extends Controller
{
    public function calc($cur, $val,$outType = 'BYR' , $inverse = 0)
    {
        $kursi = simplexml_load_file('http://www.nbrb.by/Services/XmlExRates.aspx');


        if ($outType == 'BYR') {
            foreach ($kursi->Currency as $Currency) {
                if ($Currency->CharCode == $cur) {
                    $rez = $Currency->Rate;
                }
            }
            if (!$inverse) {
                $nam["Currency"] = array('out' => $rez * $val, 'inType' => $cur, 'outType' => $outType, 'val' => $val);

                return view('goldView/start', compact('nam'));
            } else {
                $nam["Currency"] = array('out' => $val / $rez, 'inType' => $outType, 'outType' =>$cur , 'val' => $val);
                return view('goldView/start', compact('nam'));
            }
        }else
        {

            foreach ($kursi->Currency as $Currency) {
                if ($Currency->CharCode == $cur) {
                    $rezIn = $Currency->Rate;
                }
            }
            foreach ($kursi->Currency as $Currency) {
                if ($Currency->CharCode == $outType) {
                    $rezOut = $Currency->Rate;
                }
            }
            if (!$inverse) {
                $nam["Currency"] = array('out' => $rezIn / $rezOut * $val , 'inType' => $cur, 'outType' => $outType, 'val' => $val);

                return view('goldView/start', compact('nam'));
            } else {
                $nam["Currency"] = array('out' => $rezOut / $rezIn * $val, 'inType' => $outType, 'outType' =>$cur , 'val' => $val);
                return view('goldView/start', compact('nam'));
            }
        }
    }
    public function help()
    {
            $kursi = simplexml_load_file('http://www.nbrb.by/Services/XmlExRates.aspx');
        $i=0;
        foreach ($kursi->Currency as $Currency) {
            $help[$i] = array("charCode" => $Currency->CharCode, 'name' => $Currency->Name);
            $i++;
        }return view('goldView/help', compact('help'));
    }

}