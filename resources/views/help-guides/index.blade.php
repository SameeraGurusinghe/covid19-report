@extends('layouts.app')

@section('title', 'HELP & GUIDE')

@section('content')
<div class="container">

    @if(auth()->check())
    <ul class="ml-auto" style="float: right;">
        <a class="btn btn-success" href="{{ route('help-guides.create') }}">Add Help Guide</a>
    </ul>
    @endif

    <div class="help">
        <h1>Help & Guide</h1>
        <ul>
            @foreach($helpGuides as $helpGuide)
        
                <div class="details">
                    <li>
                        <a href="{{ $helpGuide->link }}">
                        <h6><b>{{ $helpGuide->user->name }}</b> . {{ $helpGuide->created_at->format('M d') }} . {{ $helpGuide->created_at->format('H:i') }}</h6>
                        <h5 class="description">{{ $helpGuide->description }}</h5></a>
                    </li>
                </div>
        
            @endforeach

            @if(count($helpGuides) == 0)
            <li>No help guides found.</li>
            @endif
        </ul>
    </div>

</div>
@endsection