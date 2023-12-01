@extends('layouts.app')
@section('content')
    <div class="container mx-auto w-5/6">
       <upload-file ></upload-file>
          <form action="{{route('messages.send')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="text" name="message">
    <button type="submit" class="bg-black text-white"> asd</button>
    </form>

    </div>

    {{-- <example-component> </example-component> --}}
@endsection
