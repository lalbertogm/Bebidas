<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BebidasLemon;
use App\Models\BebidasWatermelon;
use App\Models\BebidasSherry;
use App\Models\BebidasMango;
use App\Models\BebidasOrange;

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
    
    public function obtenerBebidasSandia(){
        $curl = curl_init(); 

        curl_setopt_array($curl, [
            CURLOPT_URL => "www.thecocktaildb.com/api/json/v1/1/filter.php?i=Watermelon",
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
                $verificar = BebidasWatermelon::where('strDrink',$bebida->strDrink)->first();
                if(!$verificar)
                    $nuevo = new BebidasWatermelon();

                $nuevo->strDrink = $bebida->strDrink;
                $nuevo->strDrinkThumb=$bebida->strDrinkThumb;
                $nuevo->idDrink=$bebida->idDrink;
                $nuevo->save();

            echo "<hr>";


            }

        }
        
        
       
    }

    public function obtenerBebidasCereza(){
        $curl = curl_init(); 

        curl_setopt_array($curl, [
            CURLOPT_URL => "www.thecocktaildb.com/api/json/v1/1/filter.php?i=Sherry",
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
                $verificar = BebidasSherry::where('strDrink',$bebida->strDrink)->first();
                if(!$verificar)
                    $nuevo = new BebidasSherry();

                $nuevo->strDrink = $bebida->strDrink;
                $nuevo->strDrinkThumb=$bebida->strDrinkThumb;
                $nuevo->idDrink=$bebida->idDrink;
                $nuevo->save();

            echo "<hr>";


            }

        }
        
        
       
    }

    public function obtenerBebidasMango(){
        $curl = curl_init(); 

        curl_setopt_array($curl, [
            CURLOPT_URL => "www.thecocktaildb.com/api/json/v1/1/filter.php?i=Mango",
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
                $verificar = BebidasMango::where('strDrink',$bebida->strDrink)->first();
                if(!$verificar)
                    $nuevo = new BebidasMango();

                $nuevo->strDrink = $bebida->strDrink;
                $nuevo->strDrinkThumb=$bebida->strDrinkThumb;
                $nuevo->idDrink=$bebida->idDrink;
                $nuevo->save();

            echo "<hr>";


            }

        }
        
        
       
    }

    public function obtenerBebidasNaranja(){
        $curl = curl_init(); 

        curl_setopt_array($curl, [
            CURLOPT_URL => "www.thecocktaildb.com/api/json/v1/1/filter.php?i=Orange",
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
                $verificar = BebidasOrange::where('strDrink',$bebida->strDrink)->first();
                if(!$verificar)
                    $nuevo = new BebidasOrange();

                $nuevo->strDrink = $bebida->strDrink;
                $nuevo->strDrinkThumb=$bebida->strDrinkThumb;
                $nuevo->idDrink=$bebida->idDrink;
                $nuevo->save();

            echo "<hr>";


            }

        }
        
        
       
    }

    public function Limon(){ 
        echo "<h2>Bebidas Limon</h2>";
        $drinks=BebidasLemon::all();
        foreach($drinks as $drink)
        {
            if(isset($drink->idDrink))
            echo "<h3>IdDrink: $drink->idDrink</h3>"; 

            if(isset($drink->strDrink))
            echo "<h3>$drink->strDrink </h3>";

            if(isset($drink->strDrinkThumb))
            echo "<h3> Imagen </h3>";
            echo "<img src='$drink->strDrinkThumb' alt=''>";

            echo "<hr>";

        }

    }

    public function Sandia(){ 
        echo "<h2>Bebidas Sandia</h2>";
        $drinks=BebidasWatermelon::all();
        foreach($drinks as $drink)
        {
            if(isset($drink->idDrink))
            echo "<h3>IdDrink: $drink->idDrink</h3>"; 

            if(isset($drink->strDrink))
            echo "<h3>$drink->strDrink </h3>";

            if(isset($drink->strDrinkThumb))
            echo "<h3> Imagen </h3>";
            echo "<img src='$drink->strDrinkThumb' alt=''>";

            echo "<hr>";

        }

    }

    public function Cereza(){ 
        echo "<h2>Bebidas Cereza</h2>";
        $drinks=BebidasSherry::all();
        foreach($drinks as $drink)
        {
            if(isset($drink->idDrink))
            echo "<h3>IdDrink: $drink->idDrink</h3>"; 

            if(isset($drink->strDrink))
            echo "<h3>$drink->strDrink </h3>";

            if(isset($drink->strDrinkThumb))
            echo "<h3> Imagen </h3>";
            echo "<img src='$drink->strDrinkThumb' alt=''>";

            echo "<hr>";

        }

    }

    public function Mango(){ 
        echo "<h2>Bebidas Limon</h2>";
        $drinks=BebidasMango::all();
        foreach($drinks as $drink)
        {
            if(isset($drink->idDrink))
            echo "<h3>IdDrink: $drink->idDrink</h3>"; 

            if(isset($drink->strDrink))
            echo "<h3>$drink->strDrink </h3>";

            if(isset($drink->strDrinkThumb))
            echo "<h3> Imagen </h3>";
            echo "<img src='$drink->strDrinkThumb' alt=''>";

            echo "<hr>";

        }

    }

    public function Naranja(){ 
        echo "<h2>Bebidas Naranja</h2>";
        $drinks=BebidasOrange::all();
        foreach($drinks as $drink)
        {
            if(isset($drink->idDrink))
            echo "<h3>IdDrink: $drink->idDrink</h3>"; 

            if(isset($drink->strDrink))
            echo "<h3>$drink->strDrink </h3>";

            if(isset($drink->strDrinkThumb))
            echo "<h3> Imagen </h3>";
            echo "<img src='$drink->strDrinkThumb' alt=''>";

            echo "<hr>";

        }

    }

    public function JLimon(){   //DevuelveJson
        $drinks=BebidasLemon::all();
        return $drinks;
    }

    public function JSandia(){   //DevuelveJson
        $drinks=BebidasWatermelon::all();
        return $drinks;
    }

    public function JCereza(){   //DevuelveJson
        $drinks=BebidasSherry::all();
        return $drinks;
    }

    public function JMango(){   //DevuelveJson
        $drinks=BebidasMango::all();
        return $drinks;
    }

    public function JNaranja(){   //DevuelveJson
        $drinks=BebidasOrange::all();
        return $drinks;
    }
}
