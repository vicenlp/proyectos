<div class="modal fade" id="modal-delete-{{$cat->idcategoria}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    {{Form::open(array('action'=>array('CategoriaController@destroy',$cat->idcategoria),'method'=>'delete'))}}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Eliminar categoria</h3>
            </div>
            <div class="modal-body">
                <p>¿Desea eliminar categoria {{$cat->nombre}}?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
    {{Form::close()}}
</div>