@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <span><a href="/listings/create" class="float-right btn-custom">Create Listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  

                    <h3>Your Listings</h3>
                    @if (count($listings))
                        <table class="table table-striped">
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{ $listing->listings_name }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                    <p>There are no listings yet.</p>
                    @endif
                </div>
            </div>
        </div>
</div>
@endsection
