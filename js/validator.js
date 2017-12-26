$(document).ready(function () {

    $('#formulario_validate').bootstrapValidator({
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
	 fields: {
		 name: {
			 validators: {
				 notEmpty: {
					 message: 'El nombre es requerido'
				 },
				 regexp: {
					 regexp: /[a-z-A-Z]/,
					 message: 'El nombre solo puede contener letras'
				 }
			 }
		 },
		 correo: {
			 validators: {
				 notEmpty: {
					 message: 'El correo es requerido y no puede estar vacio'
				 },
				 emailAddress: {
					 message: 'El correo electronico no es valido'
				 }
			 }
		 },
		 telefono: {
			 message: 'El teléfono no es valido',
			 validators: {
				 notEmpty: {
					 message: 'El teléfono es requerido y no puede estar vacio'
				 },
				 regexp: {
					 regexp: /^[0-9]+$/,
					 message: 'El teléfono solo puede contener números'
				 }
			 }
		 }
 
	 }
});
    
    
});

/**
  Funciones
*/
