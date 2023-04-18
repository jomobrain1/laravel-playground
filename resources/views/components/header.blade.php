<div>
   <H1>This is the Header Component {{$name}}</H1>

   <h1>Fruits</h1>
   @foreach ($fruits as $fruit)
       <li>{{$fruit}}</li>
   @endforeach

   <b>
    It is not the man who has too little, but the man who craves more, that is poor. - Seneca
   </b>
</div>