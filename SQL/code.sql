--  Escreva comandos SQL para inserir os dados abaixo conforme o diagrama
-- apresentado.
-- a) Pablo é Pai de Lucas
-- b) Brenda é Mãe de Lucas

INSERT INTO aluno(id,name) VALUES (1,'Lucas');
INSERT INTO responsavel(id,name) VALUES (1,'Pablo');
INSERT INTO responsavel(id,name) VALUES (2,'Brenda');
INSERT INTO parentesco(id_responsavel,id_aluno,parentesco) VALUES (1,1,'Pai');
INSERT INTO parentesco(id_responsavel,id_aluno,parentesco) VALUES (2,1,'Mãe')

-- Escreva uma consulta SQL para retornar dados únicos conforme tabela abaixo.
-- Caso o aluno tenha mais de dois responsáveis, traga apenas os dois primeiros
-- responsáveis encontrados na tabela.

SELECT aluno.name AS aluno, responsavel.name AS responsavel, parentesco.parentesco
FROM parentesco
JOIN responsavel ON parentesco.id_responsavel = responsavel.id
JOIN aluno ON parentesco.id_aluno = aluno.id
LIMIT 2

-- Bônus:
--     Escreva uma consulta SQL para trazer todos os dados. Seja criativo.

SELECT *
FROM parentesco
JOIN responsavel ON parentesco.id_responsavel = responsavel.id
JOIN aluno ON parentesco.id_aluno = aluno.id