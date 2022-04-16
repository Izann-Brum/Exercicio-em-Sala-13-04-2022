<?php

//Classe que realiza a conexao com o banco de dados
class CConexao{
    
    public static function Conexao(){
        $host = "localhost";
        $dbname = "company";
        $username = "postgres";
        $password = "12345678";

        try {
            $conectar = new PDO("pgsql:host=$host, dbname=$dbname", $username, $password);
            //echo "<br> Conectado a base de dados <br>";
            
        } catch (PDOException $exp) {
            echo "<br> Falha ao conectar a base de dados <br>";
            echo $exp->getMessage();
        }
        
        return $conectar;
    }
        
}

?>