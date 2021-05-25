# App Consultas
## Descrição
Aplicativo web para controlar a agenda de consulta dos pacientes de uma clínica médica. O sistema terá os módulos de:
- Cadastro de médicos
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os médicos
    - Filtro por área do médico
- Cadastro de pacientes
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os pacientes
    - Opção de pesquisar o paciente por qualquer parte do nome.
- Cadastro de agenda
    - Agendamento de paciente
    - Alteração em uma agendamento
    - Exclusão de um agendamento
    - Listagem de todos os agendamentos
## Tecnologias (Stack)
- Apache (XAMPP)
- PHP
- MariaDB
- HTML
- CSS
- Javascript
- jQuery
- Bootstrap
### SQL -  Banco de dados
### Criação do banco de dados


```sql
CREATE DATABASE `bd_consultorio`;
```
```sql
CREATE TABLE `bd_consultorio`.`TB_MEDICOS` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nome` VARCHAR(100) NOT NULL ,  
    `telefone` VARCHAR(20) NOT NULL ,  
    `crm` VARCHAR(50) NOT NULL ,  
    `especialidade` VARCHAR(50) NOT NULL ,    PRIMARY KEY  (`id`)
) 
ENGINE = InnoDB;
```
```sql
CREATE TABLE `bd_consultorio`.`TB_PACIENTES` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nome` VARCHAR(100) NOT NULL ,  
    `telefone` VARCHAR(20) NOT NULL ,  
    `dataNascimento` DATE ,  
    `convenio` VARCHAR(3) NOT NULL ,   
    `diagnostico` TEXT NOT NULL,
     PRIMARY KEY  (`id`)
) 
ENGINE = InnoDB;
```
```sql
CREATE TABLE `tb_agenda` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `id_medico` int(11) NOT NULL,
  `sala` varchar(20) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_agenda_medico` (`id_medico`),
  ADD KEY `fk_agenda_paciente` (`id_paciente`);

ALTER TABLE `tb_agenda`
  ADD CONSTRAINT `fk_agenda_medico` FOREIGN KEY (`id_medico`) REFERENCES `tb_medicos` (`id`),
  ADD CONSTRAINT `fk_agenda_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `tb_pacientes` (`id`);
COMMIT;
```
``` sql
SELECT 
                a.id, 
                a.data, 
                a.hora, 
                m.nome as 'NomeMedico', 
                a.sala, 
                p.nome as 'NomePaciente' 
                FROM tb_agenda a 
                INNER JOIN tb_pacientes p ON a.id_paciente = p.id 
                INNER JOIN tb_medicos m ON a.id_medico = m.id
```

Criação da tabela usuários

```sql
CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```