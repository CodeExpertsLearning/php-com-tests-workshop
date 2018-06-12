<?php
namespace CodeExperts\Aritmetico;

use PHPUnit\Framework\TestCase;
use CodeExperts\Aritmetico\Subtracao;

class SubtracaoTest extends TestCase
{
	public function assertPreConditions()
	{
		$this->assertTrue(
			class_exists('CodeExperts\Aritmetico\Subtracao')
		);
	}

	public function testSubtracaoDeDoisNumeros()
	{
		$soma = new Subtracao();
		$soma->setNum1(15);
		$soma->setNum2(10);

		$this->assertEquals(5, $soma->subtrair());

		$soma = new Subtracao();
		$soma->setNum1(40);
		$soma->setNum2(30);

		$this->assertEquals(10, $soma->subtrair());
	}

	/**
	 * @expectedException \InvalidArgumentException
	 * @expectedExceptionMessage Parametro nao informado
	 */
	public function testValidaSeValoresNaoForemPassados()
	{
		$soma = new Subtracao();
		$soma->setNum1(40);
		$soma->setNum2();
	}
}