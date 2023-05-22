<?php

class MagicSquare
{
    private $matrix;

    public function __construct($matrix)
    {
        $this->matrix = $matrix;
    }

    public function isMagicSquare()
    {
        $size = count($this->matrix);

        // Verifica se é uma matriz quadrada
        if ($size !== count($this->matrix[0])) {
            return false;
        }

        // Calcula a soma mágica
        $magicSum = array_sum($this->matrix[0]);

        // Verifica as somas de linhas, colunas e diagonais
        for ($i = 0; $i < $size; $i++) {
            $rowSum = array_sum($this->matrix[$i]);
            $colSum = 0;

            for ($j = 0; $j < $size; $j++) {
                $colSum += $this->matrix[$j][$i];
            }

            if ($rowSum !== $magicSum || $colSum !== $magicSum) {
                return false;
            }
        }

        // Verifica a soma da diagonal principal
        $diagonalSum = 0;
        for ($i = 0; $i < $size; $i++) {
            $diagonalSum += $this->matrix[$i][$i];
        }
        if ($diagonalSum !== $magicSum) {
            return false;
        }

        // Verifica a soma da diagonal secundária
        $diagonalSum = 0;
        for ($i = 0; $i < $size; $i++) {
            $diagonalSum += $this->matrix[$i][$size - 1 - $i];
        }
        if ($diagonalSum !== $magicSum) {
            return false;
        }

        return true;
    }
}

// Exemplo de uso:
$matrix = [
    [4, 9, 2],
    [3, 2, 7],
    [8, 1, 6]
];

$magicSquare = new MagicSquare($matrix);
$isMagicSquare = $magicSquare->isMagicSquare();

if ($isMagicSquare) {
    echo "É um quadrado mágico!";
} else {
    echo "Não é um quadrado mágico.";
}
