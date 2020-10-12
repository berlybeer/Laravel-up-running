<h1>This is a galery</h1>

@if(isset($User))

<h3>{{$User}}</h3>

@endif

<h2>This is a variable accessible to every view in the site</h2>
<ul>
  <li><h3>{{$layout}}</h3></li>
  <li><h3>{{$tasks}}</h3></li>
</ul>
