@extends('layouts.app')

@section('content')

<store-form :storages="{{ json_encode($storage) }}"></store-form>
@endsection
