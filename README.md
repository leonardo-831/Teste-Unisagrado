clone o repositório: https://github.com/leonardo-831/Teste-Unisagrado.git
1 - git clone 
2 - cd Teste-Unisagrado
3 - composer install
4 - npm install
5 - faça uma cópia do arquivo .env.example e renomeie para .env
6 - crie o seu Banco de Dados
7 - no .env, coloque:
DB_CONNECTION=suaConexão (mysql/pgsql)
DB_PORT=PortaDoBd
DB_HOST=hostdoDB
DB_DATABASE=seuBancodeDados
DB_USERNAME=seuUsername
DB_PASSWORD=suaSenha
8 - crie as tabelas rodando: php artisan migrate
9 - crie os registros de usuário com: php artisan db:seed --class UserSeeder
10 - crie os registros de usuário com: php artisan db:seed --class CursoSeeder
11 - php artisan key:generate
12 - php artisan serve
13- npm run watch
14- Acesse localhost:8000
