<?php
    //Incluir o arquivo 'aluno.php' que contem a classe Aluno.
    //Incluir o alunosView.php, que contem a função exibirAlunos().
    require_once 'aluno.php';
    require_once 'alunosView.php';

    // Declaração da clase alunoController.
    // Essa classe é responsável pela comunicação entre o aluno.php (Model) e o alunosView(View)
    class alunoController{
        //Criar uma propriedadeprivada chamada $model
        //|Ela será usada para armazenaruma instancia da classe aluno.
        private $model;

        //Criar um método constructor da classe, ele é chamado automaticamente quando um objeto é criado.
        public function __construct()
        {
            //criar uma nova instancia da classe aluno, e armazenar na propriedade $model
            $this->model= new Aluno();
        }

        //Método público chamado listar.
        // Serve para buscar a lista de alunos e passar para o view.
        public function listar(){
            //chama o método listarAluno() do modelo e armazena na variável $alunos.
            $alunos = $this->model->listarAlunos();
            // chama a função exibir alunos e envia a lista para mostrar no navegador.

            exibirAlunos($alunos);
        }
    }

    //execução do codigo
    //aqui fora da classe é criado um objeto do tipo AlunoController();
    $controler = new alunoController();
    // Após criar o Objeto, é chamado o método  listar();
    $controler->listar();


?>