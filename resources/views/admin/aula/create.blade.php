   <!-- Modal Structure -->
   <div id="createAula" class="modal">
    <div class="modal-content"><br><br><br><br>
      <h4><i class="material-icons">library_add</i>CADASTRAR AULA</h4>
      <form action="{{route('admin.aula.store')}}" method="POST" enctype="multipart/form-data" class="col s12">
        @csrf
        <input type="hidden" name="id_user" value="{{auth()->user()->id}}">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Aula..." id="aula" name="aula" type="text" class="validate">
            <label for="aula">Nome da Aula</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Descricao" name="descricao" id="descricao" type="text" class="validate">
            <label for="descricao">Descricao da Aula</label>
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
          <div class="input-field col s12">
            <select name="id_curso">
              @foreach ($cursos as $curso)
                <option value="{{$curso->id}}">{{$curso->curso}}</option>
              @endforeach
            </select>
            <label>Selecione o Curso</label>
          </div>
             

        
       
        <button type="submit" class="modal-close waves-effect waves-green btn blue right">Cadastrar</button><br><br><br><br><br><br><br><br>
    </div>
    
  </form>
  </div>