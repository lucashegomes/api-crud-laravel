## API CRUD - Laravel

Esta aplicação foi desenvolvida como um teste para a integração do Laravel com Vue, gerenciados por containers.
Atividades realizadas no projeto

- CRUD para Usuários e Concessionárias
- Autenticação de usuário via JWT
- Criação de seeds em conformidade com a nossa lingua
- DAmbientes orquestrados pelo docker-compose
- Nginx servindo a aplicação com algumas regras de segurança

## Instalação

Para executar esta aplicação é necessário seguir os passos a seguir:

- Instalar o [WSL](https://learn.microsoft.com/pt-br/windows/wsl/install) (windows apenas)
- Instalação do [Docker](https://docs.docker.com/engine/install)
- Instalação do **docker-compose** (caso tenha instalado o Docker Desktop, esse pacote é nativo)
- Clonar o projeto 
```
git clone git@github.com:lucashegomes/api-crud-laravel.git
```
>**OBS:** Para executar o git clone desta forma, será necessário configurar uma chave SSH e configurá-la na sua conta do Github

- Entre na pasta do projeto clonado e execute **docker-compose build --no-cache**

## Próximos passos

Execute os comandos sequencialmente:
```
docker-compose down --remove-orphans
docker-compose up -d
docker-compose exec php php artisan config:clear
docker-compose exec php php artisan cache:clear
docker-compose exec php php artisan migrate:fresh --seed
docker-compose exec php php artisan serve
```

## License

This is an open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
