   <!-- Modal Structure -->
   <div id="delete-{{$subTarefa->id}}" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">delete</i>EXCLUIR</h4>
        <div class="row">
          <p>Tem certeza que deseja excluir {{$subTarefa->titulo}}</p> 
        <form action="{{route('admin.subtarefa.delete', $subTarefa->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class=" waves-effect waves-green btn red right">Excluir</button>
        </form>
        <button href="#!" class="modal-close waves-effect waves-green btn blue right">Voltar</button><br>
    </div>
  </div>