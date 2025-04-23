<h1> while statement </h1>
@php
$i = 1;
@endphp
@while($i <= 10)
  <p>Number {{$i}}</p>
  @php $i++; @endphp
@endwhile
