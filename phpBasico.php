<?php

//variaveis

$nome = 'raissa';
echo 'meu nome é' .$nome; //concatenar com .


//variavel da variavel
$nome = 'raissa';
$raissa = 'teste';

echo 'meu nome é' .$$nome; //significa um $ declara uma variavel, com 2 $ significa que estamos chamando mais uma variavel



//comparar valores

//>= <= == != 
// > (maior que), >= (maior ou igual a), == (igual), != (diferente), < (menor que) e <= (menor ou igual a)



//=== !== 
// === (igual a e do mesmo tipo) e !== (diferente de ou não do mesmo tipo)


if ($nome == 'raissa') { 
    echo 'true';
} else {
    echo 'false';
}
    echo '<hr>';
/*

$idade = '16'

if ($idade == 16) {
     echo 'true';
} else {
    echo 'false';
}
    echo '<hr>';
// saida = true

    if ($idade === 26) {
     echo 'true';
} else {
    echo 'false';
}
//saida = false, pq === signica que eles tem que ser identicos ('16' e 16)
    
if ($idade !== 26) {
     echo 'true';
} else {
    echo 'false';
}  
//saida = true, pq eles sao totalmente diferentes !== significa totalmente diferente

    if ($idade != 26) {
     echo 'true';
} else {
    echo 'false';
} 
//saida = false, pq != significa que o valor é diferente, o que nao é


//looping

for ($i=0; $i < 10 ; $i++) { // $i=0 declara variave; $i < 10 declara "limite"; $i++ significa que ele vai adicionar mais um ate o limite
    echo $i;
    echo '<hr>';
}
for ($i=0; $i <= 10 ; $i++) { // $i=0 declara variave; $i <= 10 declara "limite"; $i++ significa que ele vai adicionar mais um ate o limite
    echo $i;
    echo '<hr>';
}
 
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
} //msm coisa do for
*/

//funções
printNum(30);
echo '<br>';
printNum(50);

function printNum($n) {
    echo $n;
}
/*
printNum(30);
echo '<br>';
printNum('raissa'); //da certo pq eu nao defini o tipo da variavel

function printNum($n) {
    echo $n;
}
*/


//classes
 class pessoal {
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function printNomeeIdade(){
        echo $this->nome;
        echo '<hr>';
        echo $this->idade;
    }
 }
$pessoa = new pessoal('raissa','16');
$pessoa->printNomeeIdade();
 

?>