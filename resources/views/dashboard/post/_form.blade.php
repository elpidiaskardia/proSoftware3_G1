{{--Falsificacion de peticiones en sitios cruzados--}}
@csrf
@include('dashboard.structure.validation-error')
<div class ="form-group">
    <input class="form-control"type="text" name ="publication" id="publication" placeholder="Nombre publicacion"
    value="{{old('publication', $post -> publication)}}">

</div>
<div class="form-group">
    <select class="custom-select" aria-label="Default" name="category_id" id="category_id">
        <option selected disabled>Selecciona una opcion</option>
        @foreach ($categories as $category_name => $id)
            <option {{$post -> category_id==$id? 'selected="selected"':''}} value="{{$id}}">
            {{$category_name}}
            </option>
        @endforeach
    </select>

</div>
<div class="form-group">
    <select class="custom-select" name="state publication" id="state_publication">
        @include('dashboard.components.state_options',['val'=> $post -> state_publication])
    </select>
</div>
<div class="form-group">
    <textarea class ="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
    placeholder="Contenido de la publicacion">
    {{old('content_publication', $post -> content_publication)}}
</textarea>
<br>
<div >
    <button type="submit" class="btn btn-success btn-sm"> Aceptar</button>
    <a class="btn btn-danger btn-sm" href="{{URL::previous()}}">Cancelar</a>
</div>
