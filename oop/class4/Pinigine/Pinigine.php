<?php
class Pinigine {
    private  $popieriniaiPinigai;
    private $metaliniaiPinigai;
    private static $popieriniaiKiekis;
    private static $metaliniaiKiekis;

    public function ideti(int $kiekis) : void
    {
        if($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
            self::$metaliniaiKiekis++;
        } elseif($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
            self::$popieriniaiKiekis++;
        }
    }

    public function skaiciuoti() : int
    {
        $suma = $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        return $suma;
    }

    public static function getPoperiuKiekis()
    {
        return self::$popieriniaiKiekis;
    }

    public static function getMetaliniuKiekis()
    {
        return self::$metaliniaiKiekis;
    }
}