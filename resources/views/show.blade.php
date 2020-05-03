@extends('layout')
@section('content')
<div class="flex-center position-ref full-height">
   @if (count($task)>0)
   <ul>
        @foreach ($task as $t)
            <li>{{$t->title}}</li>
            <form action="/{{$t->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    </ul>
    @else
        <h5>no task found</h5>
    @endif
    <div>
        <a href="/create">Add todo item</a>
    </div>
</div>
@endsection

        

