<?php

/**
 * Função: pesquisa_binaria
 * 
 * Esta função retorna a posição de um item em uma lista utilizando da pesquisa binaria.
 * Exercicio retirado da página 27 do livro Entendendo algoritmos: Um guia ilustrado para programadores e outros curiosos
 */
function pesquisa_binaria($lista, $item)
{
    /**A posição mais baixa possivel da lista */
    $baixo = 0;

    /**A posição mais alta possivel da lista */
    $alto = sizeof($lista) - 1;

    /**Enquando baixo for menor ou igual a alto */
    while ($baixo <= $alto) {
        /**O meio será sempre a soma de baixo mais alto dividido por 2 */
        $meio = floor(($baixo + $alto)/2);

        /**O chute será sempre o item do meio da array */
        $chute = $lista[$meio];

        /**Se o chute estiver correto, a função retorna a posição do item na array*/
        if ($chute == $item) {
            return $meio;
        
        /**Se o chute for maior do que o item procurado, a maior posição possivel se torna o $meio - 1*/
        } elseif ($chute > $item) {
            $alto = $meio - 1;

        /**Se o chute for menor do que o item procurado, a menor posição possivel se torna o $meio + 1*/
        } else {
            $baixo = $meio + 1;
        }
    }

    /**Se o valor procurado não estiver na array, a função retorna null */
    return null;
}

$minha_lista = [1,3,5,7,9,12];

echo pesquisa_binaria($minha_lista, 3) . "\n";
echo pesquisa_binaria($minha_lista, -1) . "\n";