<?php 

class DB {
    
    
    /// variable de configuration 
    
    private $host='localhost'; 
    private $username='root'; 
    private $password=''; 
    private $database = ' panier '; 
    private $db; 
    
    
    public function __construct($host=null, $username = null , $password =  null, $database = null ) {
        
        if ($host !=null) {
            
            $this->host = $host; 
            $this->username = $usernam; 
            $this->password = $password; 
            $this->database = $database; 
        }
        
        try {
            
            /// connecter a ma base 
        $this->db = new PDO('mysql:host= '; dbname='$this->database', $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            
        }
        catch(PDOException $e){
            
            die('<h1> Erreur de connexion </h1');
        }
        
    }
    
    public function query($sql) {
        $req= $this->db->prepare($sql); 
$req->execute(); 
 return $req->fetchAll(PDO::FETCH_OBJ); 
        
        
        
    }
    
}