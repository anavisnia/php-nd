<?php

class Krepsys {
    public $krepsioSvoris;
    public $visiGrybai;
    public $sveikas;

    public function prideti($gryboSvoris)
    {
        $this->sveikas++;
        $this->krepsioSvoris += $gryboSvoris;
    }

}