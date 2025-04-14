<?php
// incluir o arquivo 'aluno.php' que contem a classe Aluno.
// Incluir o alunosView.php que contém a função exibirAlunos().

require_once 'aluno.php';
require_once 'alunosView.php';

// Declaração da classe alunoController.
// Essa classe é responsável pela comunicação entre aluno.php(model) e p alunosView.php(view).

class alunoController{
    // criar uma propriedade privada chamada $model.
    // ela será usada para armazenar uma instancai da classe aluno.

private $model;
// criar um metodo constructor da classe, ele é chamado automaticamente quando um objeto for criado.

public function __construct()
{
    // criar uma nova instancia da classe aluno e armazenar na propriedade $model
    $this->model= new Aluno();

    //metodo publico chamado listar que serve para buscar a lista de alunos e passar para o view

    public function listar(){
        // chama o metodo listarAlunos() do modelo e armazena na variavel $alunos.
        $alunos = $this->model->listarAlunos();
        // chama a função exibir alunos e envia para mostrar no navegador
    }
}
}


?>