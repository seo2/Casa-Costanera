<script src="<?=BASEURL;?>js/jquery.dataTables.min.js"></script>
<script src="<?=BASEURL;?>js/matrix.tables.js"></script> 
<script src="<?=BASEURL;?>js/jquery.validate.js"></script>

<script src="<?=BASEURL;?>js/bootstrap-colorpicker.js"></script> 
<script src="<?=BASEURL;?>js/bootstrap-datepicker.js"></script> 
<script src="<?=BASEURL;?>js/masked.js"></script>
<script src="<?=BASEURL;?>js/select2.min.js"></script>
<script src="<?=BASEURL;?>js/matrix.js"></script>
<script src="<?=BASEURL;?>js/wysihtml5-0.3.0.js"></script> 
<script src="<?=BASEURL;?>js/jquery.peity.min.js"></script> 
<script src="<?=BASEURL;?>js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>

<script src="<?=BASEURL;?>js/jquery.tblDnD.js"></script> 

<script type="text/javascript">

$(document).ready(function(){
	
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();

	// Validar ingreso de contenido
    $("#tipo").validate({
		rules:{
			nombre:{
				required:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		},
		submitHandler: function(form) {
            save("tipo");
        }
	});

    // Validar ingreso de contenido
    $("#vivienda").validate({
		rules:{
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		},
		submitHandler: function(form) {
            save("vivienda");
        }
	});


	plantilla();
	format_keyup("precio");
	format_num("precio");

});

function tableDrag(tableid)
{
	$("" + tableid).tableDnD({
				        onDrop: function(table, row) {
				        	var campos 	= $.tableDnD.serialize();

				        	campos 		= campos + '&modo=reordenar&tbid=' + tableid;

				        	call_ajax("POST","<?=BASEURL;?>modulos/<?=$modulo;?>/save_seccion.php",campos,"");
				        	
					    }
				    });
}

// Cambio de Plantilla en Productos

function plantilla(){
	
	$('#plantilla').change(function() {
		
		// Obtener el valor de la plantilla
		var id_plantilla	= $("#plantilla").val();
		
		if(id_plantilla != 0)
		{
			campos 		= 'plantilla=' + id_plantilla;

			var theajax	= call_ajax("POST","<?=BASEURL;?>modulos/<?=$modulo;?>/get_plantilla.php",campos,"");

			$("#det_plantilla").html(theajax);
			
		}else{
			$("#det_plantilla").html("");	
		}
		
	});
	
}

// Selección de colecciones

	function sel_cat(cat_id)
	{
		if($("#cat_" + cat_id).is(':checked')) {
			
			// Se activo el check			
			var act_val		= $("#colecciones").val();
			act_val			= act_val + "cat_" + cat_id + ",";
			
			$("#colecciones").val(act_val);
			
		}else{
			
			// Se desactivo el check
			var colecciones	= $("#colecciones").val();	
			var cambio	 	= colecciones.toString().replace("cat_" + cat_id + ",","");
			
			$("#colecciones").val(cambio);
			
			$("#det_" + cat_id + " input[type=checkbox]").removeAttr("checked").uniform();
			
		}
	}
	
	function sel_sub(cat_id,sub_id)
	{
		if($("#sub_" + sub_id).is(':checked')) {
			
			// Se activo el check			
			var act_val		= $("#colecciones").val();
			act_val			= act_val + "sub_" + sub_id + ",";
			
			if(!$("#cat_" + cat_id).is(':checked'))
			{
				act_val			= act_val + "cat_" + cat_id + ",";
			
				$("#colecciones").val(act_val);	
			}
			
			$("#colecciones").val(act_val);
			
			$("#cat_" + cat_id).prop('checked', true).uniform();
			
		}else{
			
			// Se desactivo el check
			var colecciones	= $("#colecciones").val();	
			var cambio	 	= colecciones.toString().replace("sub_" + sub_id + ",","");
			
			$("#colecciones").val(cambio);
			
			$("#detsub_" + sub_id + " input[type=checkbox]").removeAttr("checked").uniform();
			
		}
	}
	
	function sel_tip(cat_id,sub_id,tip_id)
	{
		if($("#tip_" + tip_id).is(':checked')) {
			
			// Se activo el check			
			var act_val		= $("#colecciones").val();
			act_val			= act_val + "tip_" + tip_id + ",";
			
			$("#colecciones").val(act_val);
			
			if(!$("#cat_" + cat_id).is(':checked'))
			{
				act_val			= act_val + "cat_" + cat_id + ",";
			
				$("#colecciones").val(act_val);	
			}
			
			if(!$("#sub_" + sub_id).is(':checked'))
			{
				act_val			= act_val + "sub_" + sub_id + ",";
			
				$("#colecciones").val(act_val);	
			}
			
			$("#cat_" + cat_id).attr("checked","checked").uniform();
			$("#sub_" + sub_id).attr("checked","checked").uniform();
			
		}else{
			
			// Se desactivo el check
			var colecciones	= $("#colecciones").val();	
			var cambio	 	= colecciones.toString().replace("tip_" + tip_id + ",","");
			
			$("#colecciones").val(cambio);
			
		}
	}

</script>