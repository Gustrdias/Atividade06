<?php
declare(strict_types=1);

namespace Tests;

use App\movimento;
use PHPUnit\Framework\TestCase;

class RoboTest extends TestCase{
	
	//testa se o botão foi pressionado para iniciar o movimento
	public function testBotaoAtivo(){
		$botaoAcionado=false;
		$this->assertNotFalse($botaoAcionado);
	}
	//teste para saber se a variavel recebe o incremento necessário para se deslocar
	public function testMovimentoGeral(){
		$movimentoAngular=null;
		$this->assertNotEmpty($movimentoAngular);
	}
	//testa o deslocamento máximo descendo
	public function testMovimentoLimiteBase(){
		$motorBase = new Movimento();
		$motorBase->setAnguloMotorBase(0.0);
		$movimentoAngular=345.0;
		
		$this->assertLessThanOrEqual(195.0, $motorBase->movimentoAnguloBase($movimentoAngular));
	}
	////testa o deslocamento máximo subindo
	public function testMovimentoBaseSubindo(){
		$motorBase = new Movimento();
		$motorBase->setAnguloMotorBase(0.0);
		$movimentoAngular= -115.0;
		
		$this->assertGreaterThanOrEqual(-95.0, $motorBase->movimentoAnguloBase($movimentoAngular));
	}
	
}