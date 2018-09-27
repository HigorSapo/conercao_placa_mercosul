<?php

class ConvercaoPlaca
{
	public $placa;
	public $tabela = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');

	public function converterPlaca($placa = '')
	{
		$this->placa = strtoupper($placa);

		$validacaoPlaca = $this->conferirPlaca();
		if ($validacaoPlaca != 'OK')
			return $validacaoPlaca;

		$isPlacaMercosul = $this->isPlacaMercosul();
		if (!$isPlacaMercosul['RESPONSE'])
			$this->placa;

		$stringConvertida = array_search($isPlacaMercosul['VAL'], $this->tabela);
		if ($stringConvertida === false)
			return 'LETRA INVALIDA: ' . $isPlacaMercosul['VAL'];

		return substr($this->placa, 0, 4) . $stringConvertida . substr($this->placa, 5, 2);
	}

	private function conferirPlaca()
	{
		$this->placa = str_replace('-', '', $this->placa);

		if ($this->placa == '')
			return 'SEM PLACA';

		if (strlen($this->placa) != 7)
			return 'PLACA INVALIDA';

		return 'OK';
	}

	private function isPlacaMercosul()
	{
		$val = substr($this->placa, 4, 1);
		return array('VAL' => $val, 'RESPONSE' => !is_numeric($val));
	}


}

// $obj = new ConvercaoPlaca();
// echo $obj->converterPlaca('ACI6A67');