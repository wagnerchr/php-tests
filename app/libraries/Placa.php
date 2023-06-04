<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class Placa 
{

  // Não pode conter caracteres especiais
  public function testCaracteresEspeciais($placa)
  {
    if (preg_match('/[^\p{L}\p{N}\s]/u', $placa)) 
      return false;
    return true;
  }

  // Placa com 7 caracteres
  public function testTamanhoPlaca($placa)
  {
    if (strlen($placa) !== 7) 
      return false;
    return true;
  }

  // Três primeiros dígitos tem Caractere alfabéticos não acentuados
  public function testTresPrimeirosCaractere($placa)
  {
    if (!ctype_alpha(substr($placa, 0, 3))) 
      return false;
    return true;
  }

  // Quarto dígito tem que ser um número
  public function testQuartoCaractere($placa)
  {
    if (!is_numeric(substr($placa, 3, 1))) 
      return false;
    return true;
  }

  // Quinto dígito não é um Caractere alfabéticos não acentuado
  public function testQuintoCaractere($placa)
  {
    if (!ctype_alpha(substr($placa, 4, 1))) 
      return false;
    return true;
  }

  // Dois últimos caracteres tem que ser números
  public function testDoisUltimosCaractere($placa)
  {
    if (!is_numeric(substr($placa, strlen($placa) - 2, 2))) 
      return false;
    return true;
  }
}