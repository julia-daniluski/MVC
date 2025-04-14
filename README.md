# 🧠 Padrão MVC

## 📌 O que é MVC?

**MVC** (Model-View-Controller), ou em português **Modelo-Visão-Controlador**, é um padrão de arquitetura de software que ajuda a organizar o código em três partes distintas:

- **🧱 Model (Modelo):** Lida com os dados e regras de negócio.
- **🖼️ View (Visão):** Responsável pela interface com o usuário.
- **🎮 Controller (Controlador):** Intermedia a comunicação entre Model e View.

Esse padrão promove uma separação clara de responsabilidades, tornando o código mais limpo, modular e fácil de manter.

---

## 🧭 Esquema MVC

A[Usuário (Navegador)] --> B[Requisição]

B --> C[Controller]

C --> D[Model]

D --> C

C --> E[View]

E --> A


## 🧩 Como funciona?

Usando o padrão **MVC**:

1. O **usuário** faz uma requisição através da interface.
2. O **controlador (Controller)** recebe essa solicitação.
3. O controlador interage com o **modelo (Model)** para processar dados ou regras de negócio.
4. O **modelo** retorna os dados ao controlador.
5. O controlador seleciona uma **visão (View)** apropriada.
6. A **visão** é exibida ao **usuário** com os dados necessários.

> Esse fluxo permite que cada parte do sistema seja desenvolvida e mantida separadamente, promovendo organização e escalabilidade.


## EXEMPLO:

O modelo usava de exemplo uma lista de alunos e sua idade ao lado, alterei algumas coisas deixando nome de jogadores do São Paulo FC com sua idade, ficando assim:

![Captura de tela 2025-04-14 155153](https://github.com/user-attachments/assets/d2619aec-8145-4843-85f9-1a3c3a11270f)

## Atividade

A atividade pedia para O sistema deve permitir:
1.    Listar livros cadastrados.
2.    Exibir informações de cada livro (Título, Autor, Ano de publicação).

  Ficou assim:
  
![Captura de tela 2025-04-14 155141](https://github.com/user-attachments/assets/9ba6613c-9de1-413d-a7c6-1e131119c455)

Após a implementação de HTML e CSS, a lista ficou assim:


https://github.com/user-attachments/assets/ddbccaff-1f42-4e25-8e30-95f0ba3efad1



  


