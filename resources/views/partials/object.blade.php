<div class="object">
    <img class="rowimg" style="" src="{{ asset('storage/images/'.$car->photo ) }}" alt=""></a>
    <div class="content-text">
        <h4>{{ $car->name }}</h4>
        <p>price: {{ $car->price }}</p>
        <p>Horsepower: {{ $car->hp }}</p>
        <p>Date: {{ $car->date }}</p>
    </div>
</div>
php
