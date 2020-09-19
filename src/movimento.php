<?php
 namespace App;
class Movimento{
	private $anguloMotorBase;
	private $anguloMotorPrimario;
	private $anguloMotorSecundario;
	
	public function movimentoAnguloBase($movimentoAngular){
		return $this->anguloMotorBase + $movimentoAngular;
	}
	public function movimentoAnguloPrimario($movimentoAngular){
		return $this->anguloMotorPrimario + $movimentoAngular;
	}
	public function movimentoAnguloSecundario($movimentoAngular){
		return $this->anguloMotorSecundario + $movimentoAngular;
	}
	public function setAnguloMotorBase($anguloMotorBase){
		$this->anguloMotorBase = $anguloMotorBase;
	}
	public function setAnguloMotorPrimario($anguloMotorPrimario){
		$this->anguloMotorPrimario = $anguloMotorPrimario;
	}
	public function setAnguloMotorSecundario($anguloMotorSecundario){
		$this->anguloMotorSecundario = $anguloMotorSecundario;
	}
	public function getAnguloMotorBase(){
		return $this->anguloMotorBase;
	}
	public function getanguloMotorPrimario(){
		return $this->anguloMotorPrimario;
	}
	public function getanguloMotorSecundario(){
		return $this->anguloMotorSecundario;
	}
}