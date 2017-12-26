
// SimpleAJAX - Multidev.cl
function s_ajax(mediante,ruta,variables,callback)
{
    var mediante  = mediante;
    var ruta      = ruta;
    var variables = variables;
    var mientras  = mientras;

    var response  = "";

    $.ajax({
        type: mediante,
        url: ruta,
        data: variables,
        success: callback
    }); 
}

$(document).ready(function() 
{
	envio_mensaje();
	envio_pv();

});

var str 	= '';

function envio_mensaje()
{
	var form 		= $("form[name='form_contacto']");
	var contacto	= form.find("[name='enviar']");

	contacto.on("click", function(e)
	{
		
		if(form.attr("data-status") == "standby")
		{
			form.attr("data-status","working");			
		
			$(".alert").remove();
		
			var str 	= "nombre,email,fono";

			var arr     = str.split(",");

			var err     = 0;

			for(var v = 0; v < arr.length; v++)
		    {
		    	var item 	= form.find("[name='" + arr[v] + "']");
		    	var tipo 	= item.attr('data-valid');
		    	var mensaje	= item.attr('data-message');

				if(validador(form,arr[v],tipo,mensaje,'width: 100%; margin-top:-10px;padding: 9px;') == 1)
			    {
			        err     = 1;
			        form.attr("data-status","standby");
			        return false;
			    }
			}
		
			if(err == 1)
		    {
		        e.preventDefault();
		    }
		    else
		    {
		    	form.submit();
		    }

		}
		else
		{
			return false;
		}

	});
}

function envio_pv()
{
	var form 		= $("form[name='form_pv']");
	var pv			= form.find("[name='enviar']");

	pv.on("click", function(e)
	{
		
		if(form.attr("data-status") == "standby")
		{
			form.attr("data-status","working");			
		
			$(".alert").remove();
		
			var str 	= "rut,fono,nombre,proyecto,email,casa,detalle_1";

			var arr     = str.split(",");

			var err     = 0;

			for(var v = 0; v < arr.length; v++)
		    {
		    	var item 	= form.find("[name='" + arr[v] + "']");
		    	var tipo 	= item.attr('data-valid');
		    	var mensaje	= item.attr('data-message');

				if(validador(form,arr[v],tipo,mensaje,'width: 100%; margin-top:-10px;padding: 9px;') == 1)
			    {
			        err     = 1;
			        form.attr("data-status","standby");
			        return false;
			    }
			}
		
			if(err == 1)
		    {
		        e.preventDefault();
		    }
		    else
		    {
		    	form.submit();
		    }

		}
		else
		{
			return false;
		}

	});
}

function cambia_planta() 
{
	var planta 	= $('#idvivienda').val();
	
	$('.tab-content').removeClass('current');
	
	if(planta == 1)
	{		
		$('#tab-1').addClass('current');
	}
	
	if(planta == 2)
	{
		$('#tab-2').addClass('current');
	}
	
	if(planta == 3)
	{
		$('#tab-3').addClass('current');
	}
	
	if(planta == 4)
	{
		$('#tab-4').addClass('current');
	}
	
	if(planta == 5)
	{
		$('#tab-5').addClass('current');
	}
}


function enviar_mensaje()
{
    var form_contacto = $('#form_contacto');
    
    if(form_contacto.attr('data-status') == 'standby')
    {
        form_contacto.attr('data-status','working');
        $('#btn_enviar').html('Enviando...');

        var str     = "nombre,apellidos,email,fono,mensaje";

        var arr     = str.split(",");

        var tipo    = 0;
        var err     = 0;
      
        for(var v = 0; v < arr.length; v++)
        {

            if($("#" + arr[v]).hasClass('fo1'))
            {
                tipo    = 1;
            }else if($("#" + arr[v]).hasClass('fo2')){
                tipo    = 2;
            }else if($("#" + arr[v]).hasClass('fo3')){
                tipo    = 3;        
            }else if($("#" + arr[v]).hasClass('fo4')){
                tipo    = 4;
            }else if($("#" + arr[v]).hasClass('fo5')){
                tipo    = 5;
            }

            if(validador(arr[v],tipo) == 1)
            {
                err     = 1;
                form_contacto.attr('data-status','standby');
                $('#btn_enviar').html('Enviar');
            }
        }
        
        if(err == 1)
        {
            return false;
        }else{

            var data    = $("#form_contacto").serialize();

            s_ajax("POST","validador/contacto.php",data,
                    function(response)
                    {
                        //$("#imprime").html(response);
                        document.location.href = "resultado-contacto.php";
                    });

        }
    }

    return false;
}

function cambia_info()
{
    var oficina    = $("#vivienda").val();

    var campos      = "vivienda=" + oficina;

    s_ajax("POST","validador/info.php",campos,
                function(response)
                {
                	/*var arreglo	= response.split(";;;");
                    $('.detalle-coti').html(arreglo[0]);
                    $('#dafoto').attr("src",arreglo[1]);*/
                    $('#display_info').html(response);
                });
}

function cotizar()
{
    var str     = "nombre_c,email_c,telefono_c,rut_c";

    var arr     = str.split(",");

    var tipo    = 0;
    var err     = 0;

    var stat    = $("#form_cotizacion").attr("data-status");
  
    for(var v = 0; v < arr.length; v++)
    {

        if($("#" + arr[v]).hasClass('fo1'))
        {
            tipo    = 1;
        }else if($("#" + arr[v]).hasClass('fo2')){
            tipo    = 2;
        }else if($("#" + arr[v]).hasClass('fo3')){
            tipo    = 3;        
        }else if($("#" + arr[v]).hasClass('fo4')){
            tipo    = 4;
        }else if($("#" + arr[v]).hasClass('fo5')){
            tipo    = 5;
        }

        if(validador(arr[v],tipo) == 1)
        {
            err     = 1;
        }
    }

    if(err == 1)
    {
        return false;
    }else{
	    
        $("#form_cotizacion").submit();

    }

    return false;
}
