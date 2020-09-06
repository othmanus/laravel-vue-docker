@extends('layouts.app')

@section('content')
<div class="flex justify-center pt-4">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <register></register>
</div>
@endsection
