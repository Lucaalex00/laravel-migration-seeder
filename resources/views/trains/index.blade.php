@extends('layouts.app')

@section('content')
    <h1>Trains : </h1>
    <div class="container">
        <div class="row row-cols-md-3">
            @forelse ($trains as $train)
                <div class="col">
                    <a class="text-decoration-none" href="{{ route('trains.show', $train) }}">
                        <div class="card bg-dark text-white border-1 border-dark p-5 justify-content-between">
                            <div class="card_title mt-3">
                                <h3>Company : {{ $train->brand_name }}</h3>
                                <h6>Seat Number : {{ $train->coach_number }}</h6>
                                <div class="position-absolute top-0 end-0">Train Code : {{ $train->train_code }}</div>
                            </div>
                            <!-- /.card_title -->
                            <div
                                class="card_body my-3 d-flex
                        flex-column justify-content-center align-items-start font-size-2">
                                <h4>Departure "{{ $train->start_station }}"</h4>
                                <div class="mb-3"> {{ $train->departure_time }}</div>
                                <h4>Arrival "{{ $train->end_station }}"</h4>
                                <div> {{ $train->arrival_time }}</div>
                            </div>
                            <!-- /.card_body -->
                            <div class="card_footer">
                                @if ($train->is_ontime === 1)
                                    <div class="text-danger"> DELAYED </div>
                                @else
                                    <div class="text-danger"> NOT DELAYED </div>
                                @endif

                                @if ($train->is_cancelled === 1)
                                    <div class="text-danger text-decoration-underline"> CANCELLED </div>
                                @endif
                            </div>
                            <!-- /.card_footer -->
                        </div>
                        <!-- /.card -->
                    </a>
                </div>
                <!-- /.col -->
            @empty
                <h3>There aren't trains HERE</h3>
            @endforelse
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
