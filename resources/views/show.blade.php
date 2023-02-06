@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $listing->listings_name}}</div>

                        <div class="card-body">
                            <div class="list-group">
                            <div class="list-group-item">
                                    Name : {{ $listing->listings_name }}
                                </div>
                                <div class="list-group-item">
                                    Address : {{ $listing->listings_address }}
                                </div>
                                <div class="list-group-item">
                                    Email : {{ $listing->listings_email }}
                                </div>
                                <div class="list-group-item">
                                    Website : {{ $listing->listings_website }}
                                </div>
                                <div class="list-group-item">
                                    Phone : {{ $listing->listings_phone }}
                                </div>
                                <div class="list-group-item">
                                   Bio : {{ $listing->listings_bio }}
                                </div>
                            </div>
                </div>
            </div>
        </div>
</div>
@endsection
