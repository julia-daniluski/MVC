<?php
// Defina uma classe chamada aluno
class Aluno{
    // criar uma propriedade privada (encapsulamento) chamada $alunos;
    // Essa propriedade é um array que armazena dados e alunos;
    // Cada aluno é representado por um array associativo com nome e idade
private $alunos = [
    ['nome' => 'Ferreirinha', 'idade' => 27],
    ['nome' => 'Lucas', 'idade' => 32],
    ['nome' => 'Oscar', 'idade' => 33]
];

// Define um método púnlico chamado listarAlunos.
// Esse método serve para retornar o conteúdo do array $alunos

public function listarAlunos(){
    return $this->alunos;
}

}
?>