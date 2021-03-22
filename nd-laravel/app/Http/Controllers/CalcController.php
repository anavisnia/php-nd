<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CalcController extends Controller
{
    public function show()
    {
        $rez = Session::get('answer', 'not found');
        Session::put('answer', null);
        return view('calc.calcform', ['r' => $rez]);
    }

    public function calc(Request $request)
    {
        $sum = $request->x + $request->y;
        if($request->distribution == 'add' || $request->distribution == '+') {
            $this->add($request->x, $request->y);
            return redirect()->back();
        } elseif($request->distribution == 'sub' || $request->distribution == '-') {
            $this->sub($request->x, $request->y);
            return redirect()->back();
        } elseif($request->distribution == 'mult' || $request->distribution == '*') {
            $this->mult($request->x, $request->y);
            return redirect()->back();
        } elseif($request->distribution == 'div' || $request->distribution == '/') {
            $this->div($request->x, $request->y);
            return redirect()->back();
        } elseif($request->distribution == 'mod' || $request->distribution == '%') {
            $this->mod($request->x, $request->y);
            return redirect()->back();
        }
    }

    public function add(float $num1, float $num2)
    {
        $answer = $num1 + $num2;
        Session::put('answer', $answer);
    }
    
    public function div(float $num1, float $num2)
    {
        if($num1 == 0 || $num2 == 0) {
            $answer = 'Devision by zero is unacceptable!';
            Session::put('answer', $answer);
        } else {
            $answer = $num1 / $num2;
            $answer = round($answer, 2);
            Session::put('answer', $answer);
        }
    }

    public function sub(float $num1, float $num2)
    {
        $answer = $num1 - $num2;
        Session::put('answer', $answer);
    }

    public function mult(float $num1, float $num2)
    {
        $answer = $num1 * $num2;
        Session::put('answer', $answer);
    }

    public function mod(float $num1, float $num2)
    {
        if($num1 == 0 || $num2 == 0) {
            $answer = 'Modulo by zero is unacceptable!';
            Session::put('answer', $answer);
        } else {
            $answer = $num1 % $num2;
            $answer = round($answer, 2);
            Session::put('answer', $answer);
        }
    }

}
