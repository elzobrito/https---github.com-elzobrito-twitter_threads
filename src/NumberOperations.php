<?php

class NumberOperations {
    private $number;

    public function __construct() {
        $this->number = null;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function multiplyByTwo() {
        $this->number *= 2;
    }

    public function add($value) {
        $this->number += $value;
    }

    public function divideByTwo() {
        $this->number /= 2;
    }

    public function subtract($value) {
        $this->number -= $value;
    }

    public function getResult() {
        return $this->number;
    }
}

// Exemplo de uso:
$operations = new NumberOperations();

echo "Pense em um número: ";
$number = intval(readline());

$operations->setNumber($number);
$operations->multiplyByTwo();

echo "Some 14 ao número resultante. Pressione qualquer tecla quando estiver pronto.";
readline();

$operations->add(14);

echo "Divida o número resultante por 2. Pressione qualquer tecla quando estiver pronto.";
readline();

$operations->divideByTwo();

echo "Subtraia o número original que você pensou. Pressione qualquer tecla quando estiver pronto.";
readline();

$operations->subtract($number);

$result = $operations->getResult();
echo "Eu adivinho que o número que você pensou é: " . $result;
