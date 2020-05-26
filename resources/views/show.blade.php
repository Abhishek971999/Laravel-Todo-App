@extends('layout')
@section('content')
<div class="show-form">
    <div class="header-image"></div>
   <div class="content-show">
      <div style="display:flex;flex-direction:row">
        <h5 style="margin-left: 20px">TASKS</h5>
        <div style="margin-left: 70%;margin-top:5px">
         <a href="/create"><img src="https://img.icons8.com/ultraviolet/40/000000/plus.png"/></a>
         </div>
      </div>
    <div class="task">
        @forelse ($task as $t)
        <div class="indi-task">
            <form action="/{{$t->id}}" method="POST" style="display:inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="del-btn">
                    <img src="https://img.icons8.com/office/22/000000/checked-2--v1.png"/></button>
        </form>
        &nbsp;<span style="text-transform:capitalize">{{$t->title}}</span>&nbsp;<span style="color:rgba(87, 85, 85, 0.787)">-({{$t->desc}})</span>
        </div>
            <hr>
            @empty
             <h4 style="text-align:center">NO TASK WOOHOO!</h4>
    @endforelse
    </div>
   
   </div>
</div>
@endsection

        

