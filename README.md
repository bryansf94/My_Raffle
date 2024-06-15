# My Riffle

Repositório criado para um projeto de desenvolvimento de um site que realiza sorteios de rifas com até 500 números. Este projeto tem um propósito educacional, onde irei desenvolver minha primeira aplicação utilizando PHP, JavaScript, banco de dados SQL e servidor Apache.

## Configuração do Ambiente de Desenvolvimento

### Ferramentas e Tecnologias

- **IDE/Editor de Código**: Visual Studio Code.
- **Backend**: PHP 7.3
- **Frontend**: JavaScript, HTML e CSS.
- **Banco de Dados**: MySQL.
- **Servidor Web**: Apache.
- **Controle de Versão**: Git e GitHub.

## Requisitos

Para os requisitos, procurei uma abordagem extremamente simples. O intuito é começar logo a desenvolver e ser de fato algo simples para que eu possa praticar e estudar sobre a tecnologia.

### Requisitos Funcionais

- **RF-01**: Possuir formulário de cadastro e login.
- **RF-02**: Pode sortear até 500 números.
- **RF-03**: Pode cadastrar até 500 participantes com os seguintes campos:
  - Nome
  - Sobrenome
  - Tel
  - Insta
- **RF-04**: Poder escolher período do sorteio.

### Requisitos Não Funcionais

- **RNF-01**: O site deve ser feito usando JavaScript, CSS e HTML.
- **RNF-02**: O site deve consultar um banco de dados SQL.
- **RNF-03**: O site deve utilizar metodologias de UX/UI.

## Fluxograma do Sistema de Sorteio de Riffle

## Fluxo Principal

1. **Início**
2. **Usuário seleciona o número de participantes**
3. **Usuário seleciona o período do sorteio**
4. **Usuário cadastra os participantes**

### Verificação do Tempo
5. **Passou o tempo?**
   - **Não**: Aguardar tempo
     - **Passou o tempo?**
       - **Não**: Aguardar tempo
       - **Sim**: Sistema liberado para início do sorteio
   - **Sim**: Sistema liberado para início do sorteio

6. **Usuário inicia o sorteio**
7. **Sistema mostra informações sobre o vencedor**
8. **Fim**

```mermaid
flowchart TD
    A[Usuário seleciona o número de participantes] --> B[Usuário seleciona o período do sorteio]
    B --> C[Usuário cadastra os participantes]
    C --> D{Passou o tempo?}
    D -->|Não| E[Aguardar tempo]
    E --> F{Passou o tempo?}
    F -->|Não| E
    F -->|Sim| G[Sistema liberado para início do sorteio]
    D -->|Sim| G[Sistema liberado para início do sorteio]
    G --> H[Usuário inicia o sorteio]
    H --> I[Sistema mostra informações sobre o vencedor]
    I --> J[Fim]








 
