
<?php
//incluye la clase Libro y CrudLibro
require_once('crud_alumno.php');
require_once('alumno.php');
 
$crud= new CrudAlumno();
$alumno= new Alumno();


if (isset($_POST['nombre'])) {
    $alumno->setNombre($_POST['nombre']);  
}

if (isset($_POST['apellidos'])) {
    $alumno->setApellidos($_POST['apellidos']);  
}

if (isset($_POST['email'])) {
    $alumno->setEmail($_POST['email']);  
}

if (isset($_POST['invitados'])) {
    $alumno->setInvitados($_POST['invitados']);  
}

if (isset($_POST['nacimiento'])) {
    $alumno->setNacimiento($_POST['nacimiento']);  
}

//llama a la función insertar definida en el crud
$crud->insertar($alumno);
$num = $crud->countAlumno(1986);
echo $num;
//header('Location: evento29septiembre.html');


?>