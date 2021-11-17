<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortearController extends Controller
{


    public function sortear() {
      return view('principal');
    }

    public function resultado() {
        $ng = $_GET['ng'];
        $min = $_GET['min'];
        $max = $_GET['max'];
        if(isset($_POST['checkbox'])){
            $check = $_POST['checkbox'];
        }else{
            $check = false;
        }

        $nsor = array();

        for($i = 0; $i < $ng; $i++ ) {
            $valor = rand($min, $max);
                if(in_array($valor, $nsor)){
                $ng++;
                }else{
                    array_push($nsor, $valor);
                }
        }  
            if($check == true){
            sort($nsor);
        }else{
            $nsor;
        }
          
           return view('resultados', compact('nsor'));

    }
}