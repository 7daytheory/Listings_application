@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest Business Listings</div>
                    @if (count($listings))

                        <div class="card-body">
                            @foreach($listings as $listing)

                            @endforeach
                    @else
                    <p>No listings found!</p>
                    @endif
                </div>
            </div>
        </div>
</div>
@endsection
