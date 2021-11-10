@extends('dashboard.master')
@section('content')
<h6>Crear Categoria</h6>
<form action="{{route('category.store')}}" method="POST">
    @include('dashboard.categories._form')
</form>

@endsection