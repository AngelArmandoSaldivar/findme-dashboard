function obtener_registros(usuarios){	
	$.ajax({
		url : 'listar.php',
		type : 'POST',
		dataType : 'html',
		data : { usuarios: usuarios },
	})
	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
	{
		obtener_registros();
	}
});


function registroContactos(contactos){	
	$.ajax({
		url : 'listarContactos.php',
		type : 'POST',
		dataType : 'html',
		data : { contactos: contactos },
	})
	.done(function(resultado){
		$("#tabla_resultado_contact").html(resultado);
	})
}

$(document).on('keyup', '#busquedaContact', function()
{
	var valorBusqueda=$(this).val();
	
	if (valorBusqueda!="")
	{
		registroContactos(valorBusqueda);
	}
	else
	{
		registroContactos();
	}
});

function Mostrar() {
	$.ajax({
		url : 'mostrarContacto.php',
		type : 'POST',
		dataType : 'html',
		data : { contactos: contactos },
	})
	.done(function(resultado){
		$("#contacto").html(resultado);
	})
}