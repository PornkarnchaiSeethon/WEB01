<?php
namespace Core\Data;

use PDO;
use PDOException;

class Config
{
    public const host = "localhost";
    public const dbname = "web01";
    public const user = "root";
    public const password = "";
    private $dsn = 'mysql:host='.self::host.';dbname='.self::dbname.'';
    protected $connect = null;

    function __construct()
    {
        try
        {
            $this->connect = new PDO($this->dsn,self::user,self::password);
        }catch(PDOException $e)
        {
            view("register.view.php");
        }
    }
}