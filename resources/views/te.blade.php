@extends('layouts.app')
@section('content')
    <div class="container mx-auto w-5/6">
        <Drop-down>
            <link-item href_item="#">
                api-styles
            </link-item>
            <link-item href_item="https://vuejs.org/guide/introduction.html#api-styles">
                api-styles 2
            </link-item>
        </Drop-down>

    </div>

    {{-- <example-component> </example-component> --}}
@endsection
