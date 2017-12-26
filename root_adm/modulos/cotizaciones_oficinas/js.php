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
    $("#servicio").validate({
		rules:{
			tipo:{
				required:true
			},
			titulo:{
				required:true
			},
			descripcion:{
				required:true
			},
			foto:{
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
            save("servicio");
        }
	});

});

function tableDrag(tableid)
{
	$("" + tableid).tableDnD({
				        onDrop: function(table, row) {
				        	var campos 	= $.tableDnD.serialize();

				        	campos 		= campos + '&modo=reordenar&tbid=' + tableid;

				        	call_ajax("POST","<?=BASEURL;?>modulos/<?=$modulo;?>/save_banner.php",campos,"");
				        	
					    }
				    });
}

</script>