<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorConversion extends Controller
{
    public function home(){
        return view('inicio');
    }
    public function repaso1(){
        return view('repaso1');
    }
    public function conversion(Request $request){
        $type = $request->input('tipo_conversion');
        $value = $request->input('valor');
        $result = '';
        $unidad= '';

        switch($type){
            case 'MBaGB':
                $result=  $value / 1024;
                $unidad=' GB';
                break;
            case 'GBaMB':
                $result=  $value * 1024;
                $unidad=' MB';
                break;
            case 'GBaTB':
                $result=  $value / 1024;
                $unidad=' TB';
                break;
            case 'TBaGB':
                $result=  $value * 1024;
                $unidad=' MB';
                break;
            default:
                $result = 'ERROR, REVISE BIEN SUS VALORES';
                break;
        }
        $result=number_format($result, 3).$unidad;
        return view('repaso1', ['result'=>$result]);
    }
}    
