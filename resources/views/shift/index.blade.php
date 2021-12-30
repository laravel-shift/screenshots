@extends('layouts.app')

@section('content')
<main class="max-w-4xl mx-auto prose xl:prose-xl">
    <h1>Shifts</h1>
    <ul>
        @foreach($shifts as $shift)
        <li><a href="{{ route('shift.show', $shift) }}">{{ $shift->name }}</a></li>
        @endforeach
    </ul>
</main>
@endsection
