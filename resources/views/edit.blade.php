@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <span><a href="/home" class="float-right btn-custom">Go back</a></span></div>
                    <div class="card-header">Edit Listing</div>
                        <div class="card-body">
                            @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status')}}
                                    
                                @endif
                                <form method="POST" action="/listings/{{$listing->listings_id}}">
                                    @CSRF
                                    @method('PUT')
                                    <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$listing->listings_name}}">
                                    </div>
                                    <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$listing->listings_email}}">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                    <label for="address">Subject</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{$listing->listings_address}}">
                                    </div>
                                    <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" id="website" name="website" value="{{$listing->listings_website}}">
                                    </div>
                                    <div class="form-group">
                                    <label for="address">Phone</label>
                                    <input type="number" class="form-control" id="phone" name="phone" value="{{$listing->listings_phone}}">
                                    </div>
                                    <div class="form-group">
                                    <label for="bio">Listing Bio</label>
                                    <input type="text" class="form-control" id="bio" name="bio" value="{{$listing->listings_bio}}">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2" style="float:right">Submit</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection