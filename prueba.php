<?php include('header.php');?>
<p></p>
<br>
<p></p>
<p></p>
<br>
<p></p>
<script>
$(document).ready(function(){
    $.ajax({
			     type: "POST",
				 url: "../../acciones/consultarClientes.php",
                data: {clienteId: 10},
				 success: function(data)
				 {
				  console.log( JSON.parse(data) );
				  console.log( JSON.parse(data)[11]["n_cliente"] );

                     ///JSON.parse(tipoFinanciamiento[2]);
				 }
			     });
});
</script>