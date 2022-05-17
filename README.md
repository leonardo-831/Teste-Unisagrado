clone o repositório: https://github.com/leonardo-831/Teste-Unisagrado.git<br>
1 - git clone<br> 
2 - cd Teste-Unisagrado<br>
3 - composer install<br>
4 - npm install<br>
5 - faça uma cópia do arquivo .env.example e renomeie para .env<br>
6 - crie o seu Banco de Dados<br>
7 - no .env, coloque:<br>
DB_CONNECTION=suaConexão (mysql/pgsql)<br>
DB_PORT=PortaDoBd<br>
DB_HOST=hostdoDB<br>
DB_DATABASE=seuBancodeDados<br>
DB_USERNAME=seuUsername<br>
DB_PASSWORD=suaSenha<br>
8 - crie as tabelas rodando: php artisan migrate<br>
9 - crie os registros de usuário com: php artisan db:seed --class UserSeeder<br>
10 - crie os registros de usuário com: php artisan db:seed --class CursoSeeder<br>
11 - php artisan key:generate<br>
12 - php artisan serve<br>
13- npm run watch<br>
14- Acesse localhost:8000<br>
