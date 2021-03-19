<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function index(string $operation, int $num1, int $num2)
    {
        if($operation === 'mult') {
            $operation = 'multiply';
            $answer = $num1 * $num2;
        } elseif($operation === 'add') {
            $operation = 'addition';
            $answer = $num1 + $num2;
        } elseif($operation === 'sub') {
            $operation = 'substract';
            $answer = $num1 - $num2;
        } elseif($operation === 'div') {
            $operation = 'division';
            if($num1 === 0 || $num2 === 0) {
                $answer = 'Devision by zero is unacceptable!';
            } else {
                $answer = $num1 / $num2;
                $answer = round($answer, 2);
            }
        } elseif($operation === 'mod') {
            $operation = 'reminder of devision';
            if($num1 === 0 || $num2 === 0) {
                $answer = 'Modulo by zero is unacceptable!';
            } else {
                $answer = $num1 % $num2;
                $answer = round($answer, 2);
            }
        }
        return view('calc.calculate',['op' => $operation, 'firstNum' => $num1, 'secNum' => $num2, 'answer' => $answer]);
    }

}
