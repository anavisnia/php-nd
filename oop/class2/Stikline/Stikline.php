<?php
class Stikline {
    private $turis;
    private $kiekis;

    public function __construct($turis)
    {
        $this->turis = $turis;
    }

    // public function ipilti($kiekis) : void
    // {
    //     if($kiekis > $this->turis || $this->kiekis > $this->turis) {
    //         $this->kiekis = $this->turis;
    //     } else if($kiekis < 0) {
    //         $kiekis = 0;
    //     }
    //     $this->kiekis += $kiekis;
    // }
    public function ipilti($kiekis) : void
    {
        if($kiekis > $this->turis || $this->kiekis > $this->turis) {
            $this->kiekis = $this->turis;
        } else {
            $this->kiekis += $kiekis;
        }
    }

    public function ispilti()
    {
        $likutis = $this->kiekis;
        $this->kiekis = 0;
        return $likutis;
    }



}