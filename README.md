# Sistema de login

Este exemplo demonstra um login suportado por base de dados.

Os acessos às Bases de Dados são efetuados com 

* MySQLi
* PDO

e incluem a utilizaçao de 

* Prepared Statements com parâmetros *named* e *unnamed*

## Base de dados

O exemplo pressupõe a existência uma base de dados MySQL
chamada **ex_login** com uma tabela **users** com os seguintes campos:
* username (varchar 10)
* password (varchar 10)
* nome (varchar 50)
* apelido (varchar 50)

com chave primária no campo **username**

Pode utilizar o ficheiro SQL fornecido **ex_login.sql** para importar a base de dados usando o **phpmyadmin** ou outro cliente para MySQL.

Esta base de dados pressupõe a existência de um utilzador MySQL **php** com password **php** que tem acesso à BD **ex_login**, nomeadamente para SELECT, INSERT, UPDATE e DELETE. Deve configurar um utilizador com estes privilégios para a BD **exlogin**. Alternativamente, pode executar o seguinte código SQL para criar o utilizador (já incluíso em **ex_login.sql**).

```sql
GRANT USAGE ON *.* TO 'php'@'localhost' IDENTIFIED BY PASSWORD '*8F5FF90079BC601F8EA7C148475658E65A0C029D';

GRANT SELECT, INSERT, UPDATE, DELETE ON `ex_login`.* TO 'php'@'localhost';
```

Estas configurações estão refletidas no início do ficheiro **connect.php** que é utilizado para conetar ao MySQL, que deverá ser atualizado caso sejam alterados os nomes à base de dados , utilizador ou password.

## Métodos de Acesso

####MySQLi básico:

* pasta `MySQLi.Simple`
 
####MySQLi com Prepared Statements:

* pasta `MySQLi.Prepared`		

####PDO Básico:

* pasta `PDO.Simple`

####PDO com Prepared Statements e UnNamed Parameters:

* pasta `PDO.Prepared.UnNamed`

####PDO com Prepared Statements e Named Parameters:

* pasta `PDO.Prepared.Named`	



## Ficheiros (dos Vários Exemplos)
* connect.php (ligação à BD)
* index.php (pagina de entrada autenticada)
* login.php (página de login)
* logout.php (script de logout)
* exlogin.sql (sql para importar a base de dados e user - opcional)

## Funcionamento

São utilizadas sessões PHP.

Sempre que houver um login válido, o username do utilizador é armazenado na variável de sessão **$_SESSION['user']**. Sempre que for feito um logout, esta variável é destruída.

Ao tentar entrar em **index.php** é verificado se existe login. Caso negativo, redireciona para a página de login - **login.php**. Caso exista login válido, mostra a página.

Ao fazer **logout** o script destrói informação de login e redireciona para **login.php**.

Sempre que entra em **login.php** é verificado se já existe um login. Caso positivo, redireciona para página de conteúdo **index.php**. Caso contrário verifica se foram enviados dados pelo formulário e verifica se estes (**username** e **password**) existem na Base de Dados de utilizadores.

Havendo correspondência na BD, redireciona para página de conteúdo (**index.php**). Não correspondendo a nenhum utilizador, recarrega/mostra página de login (**login.php**).

Estão na tabela inseridos dois utilizadores (username / password):
* iuri / iupi
* cr7 / bolas

 
