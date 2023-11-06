   <!-- Modal Structure -->
   <div id="createCurso" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">card_giftcard</i> Novo produto</h4>
      <form action="{{route('admin.curso.store')}}" method="POST" enctype="multipart/form-data" class="col s12">
        @csrf
        <input type="hidden" name="id_user" value="{{auth()->user()->id}}">
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Curso..." id="curso" name="curso" type="text" class="validate">
            <label for="curso">Curso</label>
          </div>
        </div>
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagem</span>
              <input type="file" name="imagem">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        <button type="submit" class="modal-close waves-effect waves-green btn blue right">Cadastrar</button><br>
    </div>
    
  </form>
  </div>