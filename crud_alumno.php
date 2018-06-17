<?php
// incluye la clase Db
require_once('conn.php');
 
	class CrudAlumno{

	
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo alumno
		public function insertar($alumno){
			$db=Db::conectar();
		
			echo $alumno->getNombre();

			$insert=$db->prepare('INSERT INTO alumno values(NULL,:nombre,:apellidos, :email, :nacimiento, :invitados)');
			$insert->bindValue('nombre',$alumno->getNombre());
			$insert->bindValue('apellidos',$alumno->getApellidos());
			$insert->bindValue('email',$alumno->getEmail());
			$insert->bindValue('nacimiento',$alumno->getNacimiento());
			$insert->bindValue('invitados',$alumno->getInvitados());
			$insert->execute();
 
		}

			// método para buscar un libro, recibe como parámetro el id del libro
			public function countAlumno($nacimiento){
				$db=Db::conectar();
				$select=$db->prepare('SELECT count(*) as total FROM alumno WHERE NACIMIENTO =:nacimiento');
				$select->bindValue('nacimiento',$nacimiento);
				$select->execute();
				$numAlumnos=$select->fetch();
				return $numAlumnos['total'];
			}

		
	}

?>