<?php

class Banco
{
    private static $dbNome = 'globotransportes_crudteste';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'globotransportes_gtmaster';
    private static $dbSenha = 'fJLw0mfAf3Ih';
    
    private static $cont = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
        
    }
}

?>
