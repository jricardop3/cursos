   <!-- Modal Structure -->
   <div id="createSubTarefa" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">card_giftcard</i> Cadastrar conteudo de uma tarefa.</h4>
      <form action="{{route('admin.subtarefa.store')}}" method="POST" enctype="multipart/form-data" class="col s12">
        @csrf
        <div class="row">
            <div class="input-field col s12">
              <select name="id_tarefa">
                  @foreach ($tarefas as $tarefa)
                    <option value="{{$tarefa->id}}">{{$tarefa->titulo}}</option>
                  @endforeach
              </select>
              <label>Selecione o nome da Tarefa</label>
            </div>
            <div class="input-field col s12">
              <input placeholder="Titulo" id="titulo" name="titulo" type="text" class="validate">
              <label for="titulo">Titulo</label>
            </div>
            <div class="input-field col s12">
              <input id="descricao" type="text" name="descricao" class="validate">
              <label for="descricao">Descricao</label>
            </div>
            <div class="input-field col s12">
              <input id="tarefa" type="text" name="tarefa" class="validate">
              <label for="tarefa">Tarefa</label>
            </div>
            <div class="input-field col s12">
              <input id="conteudotarefa" type="text" name="conteudotarefa" class="validate">
              <label for="conteudotarefa">Descricao da tarefa</label>
            </div>
        </div>
          <div class="file-field input-field">
            <div class="btn">
              <span>Video da tarefa</span>
              <input type="file" name="video">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="input-field col s12">
            <input id="conteudovideo" type="text" name="conteudovideo" class="validate">
            <label for="conteudovideo">Descricao do Video</label>
          </div>
          <div class="file-field input-field">
              <div class="btn">
                <span>Imagem da tarefa</span>
                <input type="file" name="imagem">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
          </div>
          <div class="input-field col s12">
            <input id="conteudoimagem" type="text" name="conteudoimagem" class="validate">
            <label for="conteudoimagem">Conteudo da imagem</label>
          </div>
          <div class="input-field col s12">
            <input id="mensagem" type="text" class="validate" name="mensagem">
            <label for="mensagem">Mensagem ao final da tarefa</label>
          </div>
        </div> 
        <button type="submit" class="modal-close waves-effect waves-green btn blue right">Cadastrar</button><br><br><br><br><br><br>
    </div>
    
  </form>
  </div>