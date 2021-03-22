<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function add($num1, $num2)
    {
        $operation = 'addition';
        $answer = $num1 + $num2;
        return view('calc.add',['op' => $operation, 'firstNum' => $num1, 'secNum' => $num2, 'answer' => $answer]);
    }
    
    public function div($num1, $num2)
    {
        $operation = 'division';
        if($num1 === 0 || $num2 === 0) {
            $answer = 'Devision by zero is unacceptable!';
        } else {
            $answer = $num1 / $num2;
            $answer = round($answer, 2);
        }
        return view('calc.div',['op' => $operation, 'firstNum' => $num1, 'secNum' => $num2, 'answer' => $answer]);
    }

    public function sub($num1, $num2)
    {
        $operation = 'substract';
        $answer = $num1 - $num2;
        return view('calc.sub',['op' => $operation, 'firstNum' => $num1, 'secNum' => $num2, 'answer' => $answer]);
    }

    public function mult($num1, $num2)
    {
        $operation = 'multiply';
        $answer = $num1 * $num2;
        return view('calc.mult',['op' => $operation, 'firstNum' => $num1, 'secNum' => $num2, 'answer' => $answer]);
    }

    public function mod($num1, $num2)
    {
        $operation = 'reminder of devision';
        if($num1 === 0 || $num2 === 0) {
            $answer = 'Modulo by zero is unacceptable!';
        } else {
            $answer = $num1 % $num2;
            $answer = round($answer, 2);
        }
        return view('calc.mod',['op' => $operation, 'firstNum' => $num1, 'secNum' => $num2, 'answer' => $answer]);
    }

}
