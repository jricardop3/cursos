   <!-- Modal Structure -->
   <div id="createTarefa" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">card_giftcard</i> Novo produto</h4>
      <form action="{{route('admin.tarefa.store')}}" method="POST" enctype="multipart/form-data" class="col s12">
        @csrf
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Topico da tarefa" name="titulo" id="tarefa" type="text" class="validate">
            <label for="Tarefa">Tarefa</label>
          </div>
          

          <div class="input-field col s12">
            <select name="id_aula">
              @foreach ($aulas as $aula)
              <option value="{{$aula->id}}">{{$aula->aula}}</option>
              @endforeach
            </select>
            <label>Selecione o nome da aula.</label>
          </div>       


        </div> 
       
        <button type="submit" class="modal-close waves-effect waves-green btn blue right">Cadastrar</button><br><br><br><br><br><br>
    </div>
    
  </form>
  </div> 