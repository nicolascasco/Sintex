function modalResponder(el) {
	var dataId = el.attributes["data-id"];
	var modal = document.getElementById('responder-modal');
	console.log(dataId);
	$(modal).attr('action', 'store/respuesta/' + dataId.value);
}

var ele;
function eliminarPregunta(el) {
	$.ajax({
  		type: 'DELETE',
  		url: 'delete/pregunta/1'
	});
}