<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaudeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // IMC
    public function imcForm()
    {
        return view('imc');
    }

    public function calcularIMC(Request $request)
    {
        $peso = $request->peso;
        $altura = $request->altura;

        $imc = $peso / ($altura * $altura);

        return view('imc', ['resultado' => $imc]);
    }

    // Sono
    public function sonoForm()
    {
        return view('sono');
    }

    public function avaliarSono(Request $request)
    {
        $horas = $request->horas;

        if ($horas < 6) {
            $msg = "Sono insuficiente";
        } elseif ($horas <= 8) {
            $msg = "Sono adequado";
        } else {
            $msg = "Sono excessivo";
        }

        return view('sono', ['resultado' => $msg]);
    }

    // Viagem
    public function viagemForm()
    {
        return view('viagem');
    }

    public function calcularViagem(Request $request)
    {
        $distancia = $request->distancia;
        $consumo = $request->consumo;
        $preco = $request->preco;

        $litros = $distancia / $consumo;
        $custo = $litros * $preco;

        return view('viagem', ['resultado' => $custo]);
    }
}