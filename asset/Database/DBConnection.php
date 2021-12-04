<?php 

namespace Database;

use \PDO;

class DBConnection
{
    private $dbname;
    private $host;
    private $username;
    private $password;
    private $pdo;

    public function __construct(string $dbname = "etudiant" ,string $host="localhost" ,string $username = "root" ,string $password = "root" )
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;

    }

    public function getPDO():PDO
    {
        if($this->pdo == null){
            $this->pdo =  new PDO("mysql:dbname={$this->dbname};host={$this->host}", $this->username , $this->password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->pdo;
    }

    public function charset($format){
       return htmlspecialchars($format);
    }
    public function insert($nom , $prenom , $tel ,$email , $matricule){
    $nom = $this->charset($nom) ;
    $prenom = $this->charset($prenom);
    $tel = $this->charset($tel);
    $email = $this->charset($email);
    $matricule = $this->charset($matricule);
    $requete = $this->getPDO()->prepare("INSERT INTO etudiants(nom,prenoms,telephone,email,matriculeLoko)  VALUES(?,?,?,?,?)");
    $requete->execute(array($nom,$prenom,$tel,$email,$matricule));
    }

}
?>