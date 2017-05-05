<?php 

/**
* Corta um texto para fazer o resumo
* @param string $html Entra-se com texto completo 
* @param int $length verifica tamanho final da string
* @param string $end imprime uma marca para indicar que houve um corte no textp
* @param bool $end_word ativa ou desativa o sensor de termino da palavra. 
* se o valor for true então o corte do texto é feito no final da palavra. se for false
* o corte será feito exatamente no número de caracteres expecificado no length, mesmo que este seja no meio de uma palavra
* @return string resumo                                   
*/

function excerpt($html, $length, $end="...", $end_word=true)
{

    $string = strip_tags($html);

    if($end_word){
        $last_caracter = substr($string, $length, 1);
        while(empty($last_caracter) or $last_caracter != " "){  
            $length++;          
            $last_caracter = substr($string, $length, 1);
        }

    }

    $excerpt = substr($string, 0, $length);  // abcd
    return $excerpt.$end;

}