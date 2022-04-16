<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectar PHP com PostgreSQL</title>
</head>
<body>
    <?php
        include_once("postgresqinsert.php");
         
        
         Insert::insertDepartamento('Pesquisa', '5', '333444555121', '22-05-1998');
         Insert::insertDepartamento('Administracao','4', '9878545215', '01-01-1995');
         Insert::insertDepartamento('Matriz','1', '8888666555', '19-05-1981');

         Insert::insertDependente('33355566611', 'Alicia', 'F', '05-04-1988', 'Filha');
         Insert::insertDependente('33355566612', 'Tiago', 'M', '25-10-1983', 'Filho');
         Insert::insertDependente('55566623145', 'Janaina', 'F', '03-05-1958', 'Esposa');
         Insert::insertDependente('54789521142', 'Antonio', 'M', '28-02-1948', 'Marido');
         Insert::insertDependente('66655523154', 'Michael', 'M', '04-01-1988', 'Filho');
         Insert::insertDependente('45879546125', 'Alicia', 'F', '30-12-1968', 'Filha');
         Insert::insertDependente('06898451278', 'Elizabeth', 'F', '05-05-1967', 'Esposa');

         Insert::insertFuncionarios('Joao', 'B', 'Silva', '12345689712', '09-01-1965', 'Rua das flores, 751, sao paulo ,SP', 'M', 30.000, '33355564812', 5);
         Insert::insertFuncionarios('Fernando', 'T', 'Wong', '55544478542', '08-12-1955', 'Rua da lapa, 34, sao paulo, SP', 'M', 40.000, '11154879545', 5);
         Insert::insertFuncionarios('Alice', 'J', 'Zelaya', '77785421548', '19-01-1968', 'Rua souza lima, 35, curitiba,PR', 'F', 25.000, '66654879545', 4);
         Insert::insertFuncionarios('Jennifer', 'S', 'Souza', '98756845878', '20-06-1941', 'Av. arthur de lima, 54, santo andre, SP', 'F', 43.000, '11154879545', 4);
         Insert::insertFuncionarios('Ronaldo', 'K', 'Lima', '45878548547', '15-09-1962', 'Rua reboucas, 65, piracicaba, SP', 'M', 38.000, '33355564812', 5);
         Insert::insertFuncionarios('Joice', 'A', 'leite', '11154859545', '31-07-1972', 'Av. lucas oliver, 74, sao paulo, SP', 'M', 25.000, '33355564812', 5);
         Insert::insertFuncionarios('Andre', 'V', 'Pereira', '45875965465', '29-03-1969', 'Rua timbira, 35, sao paulo ,SP', 'M', 25.000, '66654879545', 4);
         Insert::insertFuncionarios( 'Jorge', 'E', 'Brito','11245485412', '10-11-1937', 'Rua do horto, 35, sao paulo ,SP', 'M', 55.000, 'NULL', 1);

         Insert::insertLocalDep('1', 'Sao Paulo');
         Insert::insertLocalDep('4', 'Maua');
         Insert::insertLocalDep('5', 'Santo Andre');
         Insert::insertLocalDep('5', 'Itu');
         Insert::insertLocalDep('5', 'São Paulo');

         Insert::insertProjeto( 'ProdutoX', '1', 'Santo Andre', '5');
         Insert::insertProjeto('ProdutoY', '2', 'Itu', '5');
         Insert::insertProjeto('ProdutoZ', '3', 'Sao Paulo', '5');
         Insert::insertProjeto('Informatizacao', '10', 'Maua', '4');
         Insert::insertProjeto('Reorganizacao', '20', 'São Paulo', '1');
         Insert::insertProjeto('Novosbeneficios', '30', 'Mauá', '4');

         Insert::insertTrabalhaEm('12345689712', '1', '32,5');
         Insert::insertTrabalhaEm('12345089712', '2', '7,5');
         Insert::insertTrabalhaEm('45878548547', '3', '40,0');
         Insert::insertTrabalhaEm('11154859545', '1', '20,0');
         Insert::insertTrabalhaEm('11154859545', '2', '20,0');
         Insert::insertTrabalhaEm('55544478542', '2', '10,0');
         Insert::insertTrabalhaEm('55544478542', '3', '10,0');
         Insert::insertTrabalhaEm('55544478542', '10', '10,0');
         Insert::insertTrabalhaEm('55544478542', '20', '10,0');
         Insert::insertTrabalhaEm('77785421548', '30', '30,0');
         Insert::insertTrabalhaEm('77785421548', '10', '10,0');
         Insert::insertTrabalhaEm('45875965465', '10', '35,0');
         Insert::insertTrabalhaEm('45875965465', '30', '5,0');
         Insert::insertTrabalhaEm('98756845878', '30', '20,0');
         Insert::insertTrabalhaEm('98756845878', '20', '15,0');
         Insert::insertTrabalhaEm('11245485412', '20', 'NULL');
     
  ?>
</body>
</html>