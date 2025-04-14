<?php
// Defina uma classe chamada aluno
class Livro{
    // criar uma propriedade privada (encapsulamento) chamada $livros;
    // Essa propriedade é um array que armazena dados e livros;
    // Cada livro é representado por um array associativo com titulo, autor e ano de publicação
private $livros = [
    ['nome' => 'Manual de assassinato para boas garotas', 'autor' => 'Holly Jackson', 'ano' => 2022],
    ['nome' => 'Jantar Secreto', 'autor' => 'Raphael Montes', 'ano'=> 2016],
    ['nome' => 'Um de nós está mentindo', 'autor' => 'Karen McManus', 'ano' => 2017],
    ['nome' => 'E não sobrou nenhum', 'autor' => 'Agatha Christie', 'ano' => 1939],
    ['nome' => 'Mentirosos', 'autor' => 'E. Lockhart', 'ano' => 2014]
];

// Define um método púnlico chamado listarAlunos.
// Esse método serve para retornar o conteúdo do array $alunos

public function listarlivros(){
    return $this->livros;
}

}
?>