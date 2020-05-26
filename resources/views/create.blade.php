@extends('layout')
@section('content')
<div class="create-form">
   <div class="header">
    <a href="/"><img src="https://img.icons8.com/cotton/34/000000/circled-left-2.png"/></a>
    <h5 class="header-text">Create new task</h5>
   </div>
   <div class="header-img"> <img src="https://img.icons8.com/clouds/100/000000/todo-list.png"/></div>
   <form action="/" method="POST" >
    @csrf
       <div class="content">
        <input type="text" placeholder="TITLE" name="title"> 
        @error('task')
            {{$message}}
        @enderror
        <input type="text" name="desc" placeholder="DESCRIPTION">
            @error('desc')
                {{$message}}
            @enderror
        <button class="button" type="submit">Add your task</button>
       </div>
      
    </form>
</div>
@endsection

        

