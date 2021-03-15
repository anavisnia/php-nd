<?php
class Pinigine {
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function ideti(int $kiekis) : void
    {
        if($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        } elseif($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti() : int
    {
        $suma = $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        return $suma;
    }
}