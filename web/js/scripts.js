//FUNCIONES JAVASCRIPT
//
// Carga de las distintas partes de la pagina
// a través de ajax
/////////////////////////////////////////////
var x;
x=$(document);
x.ready(cargarInicio);

function cargarInicio(){
	cargarBody("php/inicio.php");	
	cargarLogin();
	return false;
}

function cargarBody(pagina){
	var x=$("#bodySection");
	if(pagina=="php/buscador.php"){
		resetDirections();
	}
	x.load(pagina);
	return false;
}

function cargarLogin(){
	var pagina="php/boxlogin.php";
	var x=$("#boxLogin");
	x.load(pagina);
	return false;
}


//
//	Función para eliminar inmuebles   
////////////////////////////////////
function eliminar(formulario){
	var msg = 'Va a eliminar el inmueble seleccionado definitivamente \u00BFDesea continuar?';
	if(confirm(msg)){
		$("#opcion").val("delete");
		envioFormulario(formulario,'');
	}
}

//
//	Función para validar formularios 
/////////////////////////////////////
function validar(formulario){
	var oksave = true;
	var form = $("#"+formulario);
	var htmlData = "bodySection";
	
	switch(formulario){
		case "formLogin":
			if($.trim($("#userid").val())==""){
				$("#userid").css("background","#F6CECE");
				oksave = false;
			}else{
				$("#userid").css("background","#FFFFFF");
			}
			if($.trim($("#userpasswd").val())==""){
				$("#userpasswd").css("background","#F6CECE");
				oksave = false;
			}else{
				$("#userpasswd").css("background","#FFFFFF");
			}
		break;
		
		case "formContacto":
			if($.trim($("#nombre").val())==""){
				$("#nombre").css("background","#F6CECE");
				oksave = false;
			}else{
				$("#nombre").css("background","#FFFFFF");
			}
			if($.trim($("#email").val())==""){
				$("#email").css("background","#F6CECE");
				oksave = false;
			}else{
				$("#email").css("background","#FFFFFF");
			}
			if($.trim($("#mensaje").val())==""){
				$("#mensaje").css("background","#F6CECE");
				oksave = false;
			}else{
				$("#mensaje").css("background","#FFFFFF");
			}
		break;
		
		case "formInmueble":
			if($.trim($("#provincia_id").val())==""){
				$("#provincia_id").css("background","#F6CECE");
				oksave = false;
			}else{
				$("#provincia_id").css("background","#FFFFFF");
			}
			if($.trim($("#poblacion").val())==""){
				$("#poblacion").css("background","#F6CECE");
				oksave = false;
			}else{
				$("#ref").css("background","#FFFFFF");
			}
		break;
		
	}
	
	if(oksave){
		envioFormulario(formulario,htmlData);
	}
}

//
// Envio de los distintos formularios
//////////////////////////////////////

function envioFormulario(formulario,htmlData){
	var datos = $('#'+formulario).serializeArray();
	
	$.ajax({
		type:"POST",
		dataType: "html",
		url:$('#'+formulario).attr('action'),
		data:datos,
		success: function(data){
			switch($.trim(data)){
				case "ok":
					if(formulario=="formInmueble"){
						showFicha('','hide','');
						cargarBody("php/buscador.php");
					}else{
						limpiarFormulario(formulario);
					}
					muestramensaje('Los datos se han enviado correctamente.','ok');
				break;
				
				case "error":
					muestramensaje('Error en el envio de datos. Por favor, vuelvalo a intentar.','error');
				break;
				
				case "login":
				case "logoff":
					cargarLogin();
					cargarBody($("#id_pagina").val());
				break;
				
				case "loginerror":
					muestramensaje('Error en validacion de usuario. Por favor, vuelvalo a intentar.','error');
				break;
				
				default:
					if(formulario=="formInmueble"){
						alert('Numero de Referncia Insertado: '+data)+'No olvide codificar su imagen con esta referencia.';
						showFicha('','hide','');
						cargarBody("php/buscador.php");
						muestramensaje('El inmueble '+data+' ha sido dado de alta correctamente.','ok');
					}else{
						$('#'+htmlData).html(data);
					}
			}
		},
		error: function(data){
			muestramensaje('Error en el envio del formulario.');
		}
	});
}

// Mostrar mensajes de confirmación
/////////////////////////////////////
function muestramensaje(msg,estado){
	var x=$("#mensajeConfirmacion");
	var y=$("#textoMensaje");
	
	x.addClass(estado);
	y.html(msg);
	x.slideToggle();
	x.delay(4000);
	x.slideToggle();
}

//
//	Función para limpiar formularios
///////////////////////////////////////
function limpiarFormulario(formulario){
	$("#"+formulario)[0].reset();
	$("#"+formulario+" input,textarea").css("background","#FFFFFF");
}

// Gestion de carga de paises, provincias y poblaciones
////////////////////////////////////////////////////////
function cargarProvincias(pais_id){
	var pagina="php/provincias.php?pais_id="+pais_id;
	var x=$("#selectProvincia");
	x.load(pagina);
	return false;
}

function cargarPoblaciones(provincia_id,poblacion){
	var pais_id = $("#pais_id").val();
	var pagina="php/poblaciones.php?pais_id="+pais_id+"&provincia_id="+provincia_id+"&poblacion="+poblacion;
	var x=$("#selectPoblacion");
	x.load(pagina);
	return false;
}

function resetDirections(){
	$("#provincia_id").remove();
	$("#selectProvincia").remove();
	$("#selectPoblacion").remove();
}

//
// Función para mostrar y ocultar la ventana flotante
// donde se muestran las fichas de los inmuebles
/////////////////////////////////////////////////////

function showFicha(ref,mode,pagina){
	var x=$("#fichaInmueble");
	
	//Si estamos editando un inmueble cambiamos la propiedad position a absolute
	//para que al hacer scroll también baje la ficha y nos la permita ver entera
	if(pagina=="php/edit_ficha_inmueble.php"){
		x.css("position","absolute");
	}else{
		x.css("position","fixed");
	}
	
	switch(mode){
		case "show":
			$.ajax({
				type:'POST',
				url:pagina,
				data:"ref="+ref,
				success: function(data){
					x.html(data);
					$('.fondoOpaco').css('height',$('body').outerHeight());
					$('.fondoOpaco').css('display','block');
					x.animate({
						width: "show",
						opacity: "show"
					});
				},
				error: function(){
					muestramensaje('No se ha podido encontrar la pagina solicitada.');
				}
			});
		break;
	
		case "hide":
			x.animate({
				width: "hide",
				opacity: "hide"
			},function(){
				$('.fondoOpaco').css('display','none');
			});
			
		break;
	}
	return false;
}
