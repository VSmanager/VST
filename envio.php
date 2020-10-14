<?php

//Si el usario presiona el boton registrar
 if (isset($_POST['enviar']) == true) {

/*Verificamo que los campos no esten vacios*/
if ($name==null && $lastname==null && $email==null && $email_validate==null && $pass==null ) {
    
    //si dejo los campos vacios se le notifica 
	echo "<p >Upps!! Has dejado los campos Vacios Intenta de Nuevo </p> ";

} else {

/*Si no estan vacios pasamos a  evaluar si por lo menos uno esta vacio*/
if (strlen($name)>=1  &&  strlen($lastname)>=1 && strlen($email)>=1 && strlen($email_validate)>=1 && strlen($pass)>=1) {

if ( strlen($email) == strlen($email_validate)) {
    echo "<p>Gracias $name por unirte a la comunidad de Jugadores</p>";
     
} else{
	echo "<p >Upps!! los correos no coinciden </p> ";
}

} else {
	
	//mensaje si el usuario ha dejado por lo menos un campo vacio
	echo "<p >Upps!! Has dejado Por lo menos un Campo Vacio </p> ";

}//fin los campos contienen mas de un caracter

}//fin de si no los campos esta vacios

 //fin si el usuario uso el boton enviar
}

?> 