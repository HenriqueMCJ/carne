$(document).ready( function() {
   /* Executa a requisi��o quando o campo CEP perder o foco */
   $('#cep').blur(function(){
           /* Configura a requisi��o AJAX */
           $.ajax({
                url : 'consultar_cep.php', /* URL que ser� chamada */ 
                type : 'POST', /* Tipo da requisi��o */ 
                data: 'cep=' + $('#cep').val(), /* dado que ser� enviado via POST */
                dataType: 'json', /* Tipo de transmiss�o */
                success: function(data){
                    if(data.sucesso == 1){
                        $('#idendereco').val(data.rua);
                        $('#idbairro').val(data.bairro);
                        $('#idcidade').val(data.cidade);
                        $('#idestado').val(data.estado);
 
                        $('#idnumero').focus();
                    }
                }
           });   
   return false;    
   });
});