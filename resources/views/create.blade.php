@extends('layout')
@section('content')
<div class="flex-center position-ref full-height">
   <form action="/" method="POST">
    @csrf
        <input type="text" placeholder="Write your task.." name="task"> Task
        <button type="submit">Add</button>
    </form>
</div>
@endsection

        

