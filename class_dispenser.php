<?php
class Dispenser {
  private $liquidVolume;
  private $jenisMinuman ;
  private $hargaSegelas;
  private $jumlahCup;
  protected $credits;
  const volumeGelas = 220;
  
  public function __construct(int $liquidVol, int $harga, string $jenis, int $jumlahCup) {
    $this->liquidVolume = $liquidVol;
    $this->hargaSegelas = $harga;
    $this->jenisMinuman = $jenis;
    $this->jumlahCup = $jumlahCup;
  }

  // ? Refill ? //
  public function refill(int $liquidVol) {
    if ($liquidVol > 0) {
      $this->liquidVolume = $this->liquidVolume + $liquidVol;
      echo '<br>You refilled '.$liquidVol.'ml of '. $this->jenisMinuman;
    } else {
      echo "<br>You can't refill nothing.";
    }
  }

  // ? RefillCup ? //
  public function refillCup(int $jumlah) {
    $this->jumlahCup += $jumlah;
    echo "<br>Refilled! Amount of cups now : ".$this->jumlahCup;
  }

  // ? Recharge ? //
  public function recharge(int $value) {
    $this->credits += $value;
    echo "<br>You recharged ".$value." of credits.";
  } 

  // ? Buy ? //
  public function buy(int $jumlah) {
    if ($this->liquidVolume > ($jumlah*self::volumeGelas) and $this->jumlahCup > $jumlah and $this->credits > $this->hargaSegelas) {
      $this->credits -= $this->hargaSegelas;
      $this->liquidVolume -= ($jumlah*self::volumeGelas);
      $this->jumlahCup -= $jumlah;
      echo "<br>You bought ".$jumlah."x cup of ".$this->jenisMinuman;
    } elseif ($this->credits < ($this->hargaSegelas*$jumlah)) {
      echo "<br>Not enough credits";
    } else {
      echo "<br>Not enough resource, please refill this dispenser (Cup or Drinks)";
    }
  }

  // * Check Dispenser * //
  public function what() {
    echo "#######";
    echo "<br>This is ".$this->jenisMinuman." dispenser.";
    echo "<br>It contains ".$this->liquidVolume."ml of ".$this->jenisMinuman.".";
    echo "<br>The label says ".$this->hargaSegelas." credits per glass.";
    echo "<br>There are ".$this->jumlahCup." cups left.";
    echo "<br>#######";
  }
}