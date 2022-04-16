<?php

include_once("conexao.php");



//$conectar->query(statement:"INSERT INTO company.funcionarios VALUES ('Izann', 'G', 'Brum', '02150864589', '103N, Rua NO 11, Lote 40', '05520164570', 'M', '02/02/2001', 155.00, 2)");


class Insert{

    public static function insertFuncionarios($pnome, $minicial, $unome, $cpf, $datanasc, $endereco, $sexo, $salario, $cpfSupervisor, $dnr){
        $cc = CConexao::Conexao();
        $sql_insert = "INSERT INTO company.funcionarios VALUES ('$pnome', '$minicial', '$unome', '$cpf', '$datanasc', '$endereco', '$sexo', $salario, '$cpfSupervisor', $dnr)";
            
        $cc->query($sql_insert);
    }

     public static function insertDepartamento($dnome, $dnumero, $cpfGerente, $dataInicioGerente){
        $cc = CConexao::Conexao();
        $sql_insert = "INSERT INTO company.departamento VALUES ('$dnome', '$dnumero', '$cpfGerente', '$dataInicioGerente');";
        
        $cc->query($sql_insert);
    }

    public static function insertDependente($fcpf, $nome, $sexo, $datanasc, $parentesco){
        $cc = CConexao::Conexao();
        $sql_insert = "INSERT INTO company.dependente VALUES ('$fcpf', '$nome', '$sexo', '$datanasc', '$parentesco')";
            
        $cc->query($sql_insert);
    }

    public static function insertLocalDep($dnumero, $dlocal){
        $cc = CConexao::Conexao();
        $sql_insert = "INSERT INTO company.localizacao_dep VALUES ('$dnumero', '$dlocal')";
            
        $cc->query($sql_insert);
    }

    public static function insertProjeto($projnome, $projnumero, $projlocal, $dnum){
        $cc = CConexao::Conexao();
        $sql_insert = "INSERT INTO company.projeto VALUES ('$projnome', '$projnumero', '$projlocal', '$dnum')";
            
        $cc->query($sql_insert);
    }

    public static function insertTrabalhaEm($fcpf, $pnr, $horas){
        $cc = CConexao::Conexao();
        $sql_insert = "INSERT INTO company.trabalha_em VALUES ('$fcpf', '$pnr', '$horas')";
            
        $cc->query($sql_insert);
    }
}


?>