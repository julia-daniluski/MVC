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
