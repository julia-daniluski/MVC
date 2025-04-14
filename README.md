# MVC
 
## O que é MVC?

* M: Model
* V: View
* C: Controler

MVC em português: modelo-visão-controlador é um padrão de arquitetura, usado para organizar o código de forma clara, separando a lógica em 3 partes.

## Esquema MVC

usuários(navegador) -> Requisição -> controler -> model -> controler -> view -> usuarios.

![images](https://github.com/user-attachments/assets/26aaded8-ba76-4b7a-ae4d-b979ea59a664)

Usando esse padrão, as solicitações de usuário são encaminhadas para um Controlador, que é responsável por trabalhar com o Modelo para executar as ações do usuário e/ou recuperar os resultados de consultas. O Controlador escolhe a Exibição a ser exibida para o usuário e fornece-a com os dados do Modelo solicitados. Assim, a página principal pode exibir o que é necessário sem deixar o código dela extenso.

Confira mais em: https://learn.microsoft.com/pt-br/aspnet/core/mvc/overview?view=aspnetcore-9.0