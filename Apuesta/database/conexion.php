<?php
ini_set('default_charset', 'utf-8');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion1
 *
 * @author Henry
 */
class conexion{
    VAR $db;
    VAR $username;
    VAR $password;
    VAR $url;
    VAR $dbname;
    ///////////////////////////
     FUNCTION conexion($dbname, $username, $password) {
         $id=-1;
         //variables de conexion base de datos
        $this->username="pollaheel";
         $this->password="FaZZR7MNrxx2Fahj";
         $this->url="localhost";
         $this->dbname="polla";
         
         //$this->db = MYSQL_CONNECT ('localhost', $username, $password) or DIE ("Unable to connect to Database Server");
         //MYSQL_SELECT_DB ($dbname, $this->db) or DIE ("Could not select database");
         
         $this->db = MYSQL_CONNECT ($this->url, $this->username, $this->password) or DIE ("Unable to connect to Database Server");
         MYSQL_SELECT_DB ($this->dbname, $this->db) or DIE ("Could not select database");
         mysql_query("SET NAMES utf8");
         //$this->db = new mysqli($this->url, $this->username, $this->password, $this->dbname, 3306);
        //if ($this->db->connect_errno) {
            //echo "Failed to connect to MySQL: (" . $this->db->connect_errno . ") " . $this->db->connect_error;
        //}
         
     }
 
     FUNCTION query($sql) {
          $result = MYSQL_QUERY ($sql, $this->db) or DIE ("Invalid query: " . MYSQL_ERROR());
          RETURN $result;
     }
     ///////////////////////////
     FUNCTION fetch($sql) {
          $data = ARRAY();
          $result = $this->query($sql);
 
          WHILE($row = MYSQL_FETCH_ASSOC($result)) {
               $data[] = $row;
          }
               RETURN $data;
     }
     ///////////////////////////
     FUNCTION getone($sql) {
     $result = $this->query($sql);
 
     IF(MYSQL_NUM_ROWS($result) == 0)
          $value = FALSE;
     ELSE
          $value = MYSQL_RESULT($result, 0);
          RETURN $value;
     }
    
    INSERT INTO `polla`.`usuario` (`nombre`, `cedula`, `correo`, `admin`, `puntaje`, `id`) VALUES ('julian', '10219033', 'julian@trilde.com', '0', '0', NULL);
    
    
     function addUser($nombre,$cedula,$correo,$admin){
        $resultado = $this->query("INSERT INTO usuario (nombre,cedula,correo,admin,puntaje,id) VALUES ('".$nombre."', '".$cedula."', '".$correo."', '".$admin."', 0, NULL);");         
        //$this->mysql_fetch_all($resultado);
     }
    
     function loginUser($cedula, $codigo){
       $resultado = $this->query( "SELECT usuario.id , codigos.valido  from usuario inner join codigos  where correo = '".$email."' AND password = '".$pass."'");         
         $todas = $this->mysql_fetch_all($resultado);
         return $todas;
     }


     function getUsers(){
        $resultado = $this->query( "SELECT * from usuario where tipo_usuario_idtipo_usuario = 1 and activo = 0");         
        $todas = $this->mysql_fetch_all($resultado);
        return $todas;
     }

     function deleteUser($id){
        $resultado = $this->query( "DELETE FROM usuario WHERE idusuario=".$id.";");         
        $todas = $this->mysql_fetch_all($resultado);
        return $todas;
     }

     function modifyUser($id){
        $resultado = $this->query( "UPDATE usuario SET activo =1 WHERE idusuario =".$id.";");         
        $todas = $this->mysql_fetch_all($resultado);
        return $todas;
     }
/*
     function rankingAcumulado(){
        $resultado = $this->query( "SELECT i.tipo_usuario_idtipo_usuario, (select nomusuario from usuario where idusuario = i.tipo_usuario_idtipo_usuario ) as nom_usuario, sum(i.puntaje) as puntaje from registro i group by tipo_usuario_idtipo_usuario order by puntaje DESC");         
        $todas = $this->mysql_fetch_all($resultado);
        return $todas;
     }
*/
    


    
    
     //Funcion la cual hace una consulta MySQL y retorna los datos(filas y columnas) en forma de array
     function mysql_fetch_all ($result, $result_type = MYSQL_BOTH){
          
        if (!is_resource($result) || get_resource_type($result) != 'mysql result')
        {   trigger_error(__FUNCTION__ . '(): supplied argument is not a valid MySQL result resource', E_USER_WARNING);
            return false;        }
        if (!in_array($result_type, array(MYSQL_ASSOC, MYSQL_BOTH, MYSQL_NUM), true))
        {   trigger_error(__FUNCTION__ . '(): result type should be MYSQL_NUM, MYSQL_ASSOC, or MYSQL_BOTH', E_USER_WARNING);
            return false;        }
        $rows = array();
        while ($row = mysql_fetch_array($result, $result_type))
        {   $rows[] = $row;        }
        return $rows;
    }



}
