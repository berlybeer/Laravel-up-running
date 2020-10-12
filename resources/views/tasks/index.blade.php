<h1>tasks.index view</h1>

@if(count($tasks)>0) 
@foreach($tasks as $task) 
<ul> 
<p> {{$task->title}} </p> 
<p> {{$task->body}} </p> 
</ul> 

@endforeach 
@else 
<p> empty </p> 
@endif 