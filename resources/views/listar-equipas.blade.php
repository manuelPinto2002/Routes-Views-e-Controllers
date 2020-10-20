@if(isset($equipas))
<h1>lista de equipas</h1>
@foreach($equipas as $equipa)
 <h2>{{$equipa}}</h2>
@endforeach
 <p>esta tudo!</p>
@else
 <h1>so uma equipa</h1>
 {{$equipa}}
@endif