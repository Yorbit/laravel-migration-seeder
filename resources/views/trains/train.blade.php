@extends('layouts.main')

@section('main-content')
<div class="title">
    <h1>Trains Leaving Today</h1>
    <div class="train-container">
        <div class="container">
            @forelse ($train as $train )
                <div class="card">
                    <h2>{{ $train->company }}</h2>
                    <pre> Departure Station: {{ $train->departure_station }} - Arrivals Station: {{ $train->arrivals_station }}</pre>
                    <pre> Departure Time: {{ $train->departure_time }} - Arrival Time: {{ $train->arrival_time }}</pre>
                    <pre> Code: {{ $train->train_code }}</pre>
                    <pre> Number Carriages:{{ $train->number_carriages }}</pre>
                    @if ($train->in_time == 1)
                        <pre>In Time: Yes</pre>
                    @else
                        <pre>In Time: No</pre>
                    @endif

                    @if ($train->is_deleted == 1)
                        <pre>Is Deleted: Yes</pre>
                    @else
                        <pre>Is Deleted: No</pre>
                    @endif
                </div>
            @empty
                <h3>Nessun treno</h3>
            @endforelse
        </div>
    </div>
</div>
@endsection