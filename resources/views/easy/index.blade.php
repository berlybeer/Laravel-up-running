<h1>Easy view</h1>
@if(isset($easies))

@foreach($easies as $easy)
  <h2>{{$easy}}</h2>

@endforeach

@endif