<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BebidasLemon;

class BebidasController extends Controller
{
    public function obtenerBebidasLimon(){
        $curl = curl_init(); 

        curl_setopt_array($curl, [
            CURLOPT_URL => "www.thecocktaildb.com/api/json/v1/1/filter.php?i=Lemon",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT =>30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            

        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if($err){
            echo "curl error #:". $err;
        }else{
            $objeto = json_decode($response);
            $allData=$objeto->drinks;
            foreach ($allData as $bebida){
                echo json_encode($bebida);
                //echo json_encode($objeto);
                $verificar = BebidasLemon::where('strDrink',$bebida->strDrink)->first();
                if(!$verificar)
                    $nuevo = new BebidasLemon();

                $nuevo->strDrink = $bebida->strDrink;
                $nuevo->strDrinkThumb=$bebida->strDrinkThumb;
                $nuevo->idDrink=$bebida->idDrink;
                $nuevo->save();

            echo "<hr>";


            }

        }
        
        
       
    }
    
   
}
