@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest Business Listings</div>
                    @if (count($listings))

                        <div class="card-body">
                            <div class="list-group">
                            @foreach($listings as $listing)
                                <div class="list-group-item">
                                    {{ $listing->listings_name }}
                                </div>
                            @endforeach
                            </div>
                    @else
                    <p>No listings found!</p>
                    @endif
                </div>
            </div>
        </div>
</div>
@endsection
