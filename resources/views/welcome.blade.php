<?php 
    $num1 = 20;
    $num2 = 10;
    $edadIsabel = 15;
    echo 'hola mundo';
    $nombre = 'Luis';
?>

<br>
{{'Hola mundo 2'}}
<br>
{{4+20}}
<br>
<!-- informacion en pantalla o imprimir-->
<h1>{{$nombre}}</h1>

{{strtoupper('Josue')}}

<?php 
    if($num1 > $num2){
        echo '<h2>Holis</h2>';
    }
?>
@if($num1 > $num2)
    <h2>Hola mundo 4</h2>
@endif

@if ($edadIsabel >= 18)
    <h2>Puede votar</h2>
    
@else
<h2>no Puede votar</h2>
@endif

d@foreach ($collection as $item)
    
@endforeach