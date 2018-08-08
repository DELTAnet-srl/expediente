{!! Form::open(array('url'=>'aprobacion_expedientes/expedientes_pendientes','method'=>'GET','autocomplete'=>'on','role'=>'search')) !!}
<div class="form-group">
    <div class="input-group">
        <input type="text" class="form-control" name="searchText" placeholder="Filtrar por ID, referencia, por Código de OT, memo o Proveedor..." autocomplete="on" value="{{$searchText}}">
        <span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
    </div>
</div>

{{Form::close()}}