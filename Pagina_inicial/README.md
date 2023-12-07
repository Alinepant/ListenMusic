# PHP CRUD Completo - Cadastro de Usuários

### ****Criação da Base de Dados****

Crie a tabela *crud* no MySQL database usando o código abaixo.

```sql
CREATE TABLE `crud` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)
```

### ****Copie os arquivos para a pasta htdocs****
