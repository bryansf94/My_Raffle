# Glossário do código:
Esse glossário tem como objetivo servir de uma breve explicação de como está sendo montado
e pensado a estrutura desse porjeto. Tendo em vista que é a minha primeira vez com HTML e CSS, achei necessário categorizar tudo oque eu tenho feito nesse projeto para que sirva de banco de aprendizado
futuro.

# Ambiente de desenvolvimento:
Esse projeto tem o intuito ser um objeto de estudo de algumas técnologias, sendo que várias delas
será minha primeria vez tendo contato, sendo assim, segue a forma em que estou trabalhando recentemnete:

## Banco de Dados:
- SQL: Banco de dados relacional (Foi escolhido por conveniência)
- SGBD: My SQL (Foi escolhido por conveniência)

### Tabelas do banco:
- admin_cadastro: Tabela para armazenar os dados de cadastro para o administrador (usuário final).
- sorteio: Tabela onde será armazenado informações cadastrais dos sorteios criados.
- comprador_rifa: Tabela para cadastrar os compradores das rifas.
- bilhete: Tabela referente as rifas propriamente ditas, onde inclusive eu faço o vinculo entre rifa e comprador.
- vencedor: Tabela para cadastar o vinculo entre bilhete, sorteio e o comprador que venceu.

## Linguagens e ferramentas trabalhadas:
- PHP: Para conexão com o banco de dados,
- PHP Server: Servidor nativo do PHP para subir localmente a aplicação.
- HTML e CSS: Linguagens de marcação e estilização.
- Java js: Usado em alguns scripts para funções específícas.
- FigJam: Usado para planejar os requisitos e tecnologias do projeto.

## Estruturas do Projeto:
- Private: Arquivos de configuração mais específicos que não quero que o usuário acesse.
- Projeto: Arquivos relacionadas a documentação do projeto.
- Public: Arquivos que preciso que o usuário acesse contendo index, imagens etc.

## Recursos e termos do cóidigo:




