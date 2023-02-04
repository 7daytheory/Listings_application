@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Listing</div>
                        <div class="card-body">
                            @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status')}}
                                    
                                @endif
                                <form method="POST" action="/listings">
                                    @CSRF
                                    <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                    <label for="address">Subject</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" id="website" name="website" placeholder="Enter website" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="address">Phone</label>
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="bio">Listing Bio</label>
                                    <input type="text" class="form-control" id="bio" name="bio" placeholder="Enter bio" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2" style="float:right">Submit</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection