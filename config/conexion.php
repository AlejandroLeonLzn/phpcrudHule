<?php
include("config.php");
class conex{
	function conectar(){
		$conexion=new mysqli($_SESSION['host'],$_SESSION['usr'],$_SESSION['psw'],$_SESSION['bd']);
		return $conexion; 
	}

	function mostrarproce($odbc, $id){
		$cdr=$odbc->query("call Procedimiento1('".$id."');");
		while ($row = mysqli_fetch_row($cdr)){
			echo utf8_encode('
			<tbody>
			<tr>
			<td>'.$row[0].'</td>
            <td>'.$row[1].'</td>
			<td>'.$row[2].'</td>
            <td>'.$row[3].'</td>
			<td>'.$row[4].'</td>
			<td>'.$row[5].'</td>
			</tr>
			</tbody>
			');
		}
	}
    function mostrartodo($odbc){
		$cdr=$odbc->query("call MuestraTodo;");
		while ($row = mysqli_fetch_row($cdr)){
			echo utf8_encode('
			<tbody>
			<tr>
			<td>'.$row[0].'</td>
            <td>'.$row[1].'</td>
			<td>'.$row[2].'</td>
            <td>'.$row[3].'</td>
			<td>'.$row[4].'</td>
			<td>'.$row[5].'</td>
			</tr>
			</tbody>
			');
		}
	}

}
?>