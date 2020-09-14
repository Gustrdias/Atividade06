<?php
declare(strict_types=1);

namespace Tests;

use App\soma;
use PHPUnit\Framework\TestCase;


class SomaTest extends TestCase{
	
	/** @test */
	public function somarDois(){
		$soma= new Soma();
		$soma->setNum1(10);
		$soma->setNum2(10);
		
		$this->assertEquals(30,$soma->somar());
	}
	//coloque nome test
	public function testSomarDoisNumeros(){
		$soma= new Soma();
		$soma->setNum1(10);
		$soma->setNum2(20);
		
		$this->assertEquals(30,$soma->somar());
	}
}