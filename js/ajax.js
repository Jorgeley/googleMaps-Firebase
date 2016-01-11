//envia requisições ajax por GET ou POST
function ajax(url,tipo,dados){
	$(document).ready(function(){
		$(document)
                    .ajaxStart(function(){
                            //$('div.jqmWindow').jqmHide();
                            $('#load').show();
                    })
                    .ajaxStop(function(){
                        $('#load').hide(); 
                    });
		$.ajax({
			type: tipo,
			url: url,
			data: dados,
			datatype: "html",
			success: function(data){ $('.container').html(data); }
		});
	});
}