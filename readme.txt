Projeto de API Carros com Laravel 7.x

Para a utilização desta API, é necessário configurar um banco MySql no arquivo .env do php.
Eu criei utilizei o banco dbcars no mysql.

Para confugurá-lo, atente-se as suas configurações padrões de porta, root e senha e configure-as no MySql.
Eu utilizei o mysql workbench para configurar o banco de dados.

Após configurar, crie um banco com o mesmo nome do banco de dados definido no sistema, no arquivo .env.

Rode o comando php artisan migrate para criar a tabela e os campos.

Para rodar a API, utilizei o Postmann com as seguintes rotas: 

GET: http://localhost:8000/api/cars
GET: http://localhost:8000/api/cars/{$id}
POST: http://localhost:8000/api/cars
PUT: http://localhost:8000/api/cars/{$id}
DELETE:http://localhost:8000/api/cars/{$id}

O JSON deverá ser utilizado respeitando a órdem do exemplo abaixo: 

{
        
        "vehicle": "Sandero",
        "model": "Renault",
        "year": 2018
}

Quando a busca não retorna resultado, a seguinte exceção é apresentada:  "Nonexistent car"
 
