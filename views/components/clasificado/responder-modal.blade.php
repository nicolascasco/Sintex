<div class="modal fade" id="responder-modal-container" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Respuesta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="responder-modal" method="POST" action="">
        {{ csrf_field() }}
        <input type="hidden" name="clasificado" value="{{ $clasificado->id }}">
        <div class="modal-body">
          <textarea name="texto" style="width: 100%;" rows="5" placeholder="Escribi tu respuesta..."></textarea>
      	</div>
      	<div class="modal-footer">
      	  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      	  <button type="submit" class="btn btn-primary" style="background-color: #da251c;">Enviar</button>
      	</div>
      </form>
    </div>
  </div>
</div>