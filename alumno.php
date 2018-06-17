<?php
	class Alumno{
		private $id;
		private $nombre;
		private $apellidos;
		private $email;
		private $nacimiento;
		private $invitados;
 
		function __construct(){}
 
		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
 
		public function getApellidos(){
			return $this->apellidos;
		}
 
		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}
 
		public function getEmail(){
		return $this->email;
		}
 
		public function setEmail($email){
			$this->email = $email;
		}

		public function getNacimiento(){
			return $this->nacimiento;
			}
	 
		public function setNacimiento($nacimiento){
				$this->nacimiento = $nacimiento;
			}

		public function getInvitados(){
				return $this->invitados;
				}
		 
		public function setInvitados($invitados){
					$this->invitados = $invitados;
				}

		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}
	}
?>