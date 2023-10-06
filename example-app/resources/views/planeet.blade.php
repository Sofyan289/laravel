<div>
   @foreach ($planet as $planeet) 
    {{ $planeet['name'] }};
    {{ $planeet['description'] }};
   @endforeach
</div>
