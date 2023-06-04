<?php

namespace tests;

use PHPUnit\Framework\TestCase;
require_once 'app/libraries/Placa.php';


class PlacaTest extends TestCase
{
  
    public function testValidarPlaca()
    {
        $this->assertTrue($this->validarPlaca("AAA3F55"));
        $this->assertTrue($this->validarPlaca("AAA3F55"));
        
        $this->assertTrue($this->validarPlaca("AAA3F40"));
        $this->assertTrue($this->validarPlaca("ATA3F55"));
        
        $this->assertTrue($this->validarPlaca("AAA3F55"));
        $this->assertTrue($this->validarPlaca("AAA4F55"));
        
        $this->assertTrue($this->validarPlaca("AAA3F55"));
        $this->assertTrue($this->validarPlaca("AAA3F55"));
        
        $this->assertTrue($this->validarPlaca("AAA3F55"));
        $this->assertTrue($this->validarPlaca("AAA3F55"));
        
        $this->assertTrue($this->validarPlaca("AAA3F55"));
        $this->assertTrue($this->validarPlaca("AAA3A55"));
        
        $this->assertTrue($this->validarPlaca("AAA3F55"));
        $this->assertTrue($this->validarPlaca("AAA3F55"));
        
        $this->assertTrue($this->validarPlaca("AAA3F55"));
        $this->assertTrue($this->validarPlaca("AAA3F33"));
    }

  public function validarPlaca(string $placateste) : bool
  {
    $placa = new Placa();

    if(!$placa->testCaracteresEspeciais($placateste) |
    !$placa->testTamanhoPlaca($placateste) |
    !$placa->testTresPrimeirosCaractere($placateste) |
    !$placa->testQuartoCaractere($placateste) |
    !$placa->testQuintoCaractere($placateste) |
    !$placa->testDoisUltimosCaractere($placateste))
      return false;
    return true;
  }
}
?>