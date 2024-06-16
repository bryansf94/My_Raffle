# README

Base de dados atualizada do banco utilizado no projeto.

# Como utilizar a base?

## Passo a Passo para Importar a Base de Dados `myfaffle` no MySQL

1. **Preparar o Arquivo SQL**

   Certifique-se de que o arquivo SQL (`myfaffle.sql`) está no diretório correto em seu sistema.

2. **Acessar o MySQL via Linha de Comando**

   Abra seu terminal ou prompt de comando e digite o seguinte comando para acessar o MySQL:

   ```sh
   mysql -u root -p

   Isso solicitará sua senha de root do MySQL. Digite a senha e pressione Enter.

3. **Criar a Base de Dados**

   Dentro do prompt do MySQL, crie uma nova base de dados chamada myfaffle:

   sql
   Copiar código
   CREATE DATABASE myfaffle;
   Selecionar a Base de Dados

   Selecione a base de dados myfaffle:

   sql
   Copiar código
   USE myfaffle;
   Importar o Arquivo SQL

   Saia do prompt do MySQL digitando exit ou pressionando Ctrl+D. De volta ao terminal ou prompt de comando, navegue até o diretório onde está localizado o arquivo myfaffle.sql.

   Use o comando mysql para importar o arquivo SQL:

  sh
  Copiar código
  mysql -u root -p myfaffle < path/to/myfaffle.sql
  Substitua path/to/myfaffle.sql pelo caminho real do arquivo myfaffle.sql.

4. **Verificar a Importação**

  Acesse novamente o MySQL:

  sh
  Copiar código
  mysql -u root -p
  E selecione a base de dados myfaffle:

  sql
  Copiar código
  USE myfaffle;
  Liste as tabelas para verificar se a importação foi bem-sucedida:

  sql
  Copiar código
  SHOW TABLES;
  Você deve ver uma lista das tabelas que foram importadas do arquivo myfaffle.sql.

  ## Conclusão
  Você importou com sucesso a base de dados myfaffle para o MySQL. Agora você pode começar a trabalhar com os dados importados.