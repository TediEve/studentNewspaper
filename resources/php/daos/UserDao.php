<?php
include_once "BaseDao.php";
include_once "../models/user.php";
include_once "../functions/dbInitScript.php";

class NewsDao extends BaseDao{
     public function __construct() { }    
     
     public function add($user){
        $conn = get_connection();
        $query = 'INSERT INTO users (username, password) VALUES ("' . $user->getUsername() . '", ' . $user->getPassword() . ')';
                
        $entity = mysqli_query($conn, $query);
        mysqli_close($conn);
         mysql_query( "SELECT LAST_INSERT_ID()" )
        return $entity;
     }
     
     public function update($user){
        // $conn = get_connection();
        // $query = 'UPDATE users SET text = "' . $news -> getText() . '", publishDate = "' . $news -> getPublishDate() . '" WHERE id = ' . $news->getId(); 
                
        // $entity = mysqli_query($conn, $query);
        // mysqli_close($conn);
        // return $entity;
     }
     
     public function findById($id){
        $conn = get_connection();
        $query = "USE studentnewspaper; 
                  SELECT * FROM Users WHERE id = " . $id; 
                
        $entity = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $entity;
     }
     
     public function findAll(){
        $conn = get_connection();
        $query = "SELECT id, username FROM users"; 
                                   
        $entitiesList = array();
        $dbQuery = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($dbQuery)){
            $entity = new User($row["id"], $row["username"], null);
            $entitiesList[] = $entity;
        }
        mysqli_close($conn);
        return $entitiesList;
     }
     
     public function findAllByFilter($skip, $take){
         
     }
     
     public function deleteById($id){
        $conn = get_connection();
        $query = 'DELETE FROM users WHERE id = ' . $id;
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
     public function deleteAll(){
        $conn = get_connection();
        $query = 'DELETE FROM users';
        mysqli_query($conn, $query); 
        mysqli_close($conn);
     }
     
     
}
?>
