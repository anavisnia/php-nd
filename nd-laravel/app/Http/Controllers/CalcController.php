<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function add($num1, $num2)
    {
        $answer = $num1 + $num2;
        return view('calc.add',['firstNum' => $num1, 'secNum' => $num2, 'answer' => $answer]);
    }
    
    public function div($num1, $num2)
    {
        if($num1 == 0 || $num2 == 0) {
            $answer = 'Devision by zero is unacceptable!';
        } else {
            $answer = $num1 / $num2;
            $answer = round($answer, 2);
        }
        return view('calc.div',['firstNum' => $num1, 'secNum' => $num2, 'answer' => $answer]);
    }

    public function sub($num1, $num2)
    {
        $answer = $num1 - $num2;
        return view('calc.sub',['firstNum' => $num1, 'secNum' => $num2, 'answer' => $answer]);
    }

    public function mult($num1, $num2)
    {
        $answer = $num1 * $num2;
        return view('calc.mult',['firstNum' => $num1, 'secNum' => $num2, 'answer' => $answer]);
    }

    public function mod($num1, $num2)
    {
        if($num1 == 0 || $num2 == 0) {
            $answer = 'Modulo by zero is unacceptable!';
        } else {
            $answer = $num1 % $num2;
            $answer = round($answer, 2);
        }
        return view('calc.mod',['firstNum' => $num1, 'secNum' => $num2, 'answer' => $answer]);
    }

}
