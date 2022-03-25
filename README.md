# rbs
Api rest de gerenciamento de empregos e cadastro de incidentes 


Essa api proporciona um sistema de busca de empregos com login e nivel de acesso de cliente e administrador e cadastro de incidentes.

Comandos para rodar o projeto:
  php artisan key:generate;
  php artisan:migrate;
  php artisan serve;
Após executar esses comandos o sistema já deverá funcionar.

Para a finalidade de crud de incidentes, não é necessário realizar a autenticação.
Lembrando que se trata de uma api rest, portando é necessário a utilização dos verbos http correspondentes para acessar os métodos desejados.
A url base da api é http://127.0.0.1:8000/api/ devendo-se colocar incidents caso queira realizar o crud de incidents.

Exemplo de utilização da api: 
Cadastrar - post - http://127.0.0.1:8000/api/incidents/
Atualizar - put -  http://127.0.0.1:8000/api/incidents/{id}
Listar - get -     http://127.0.0.1:8000/api/incidents/
Editar - get -     http://127.0.0.1:8000/api/incidents/{id}
Deletar - delete - http://127.0.0.1:8000/api/incidents/{id}
