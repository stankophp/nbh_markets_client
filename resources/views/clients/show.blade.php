@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Client Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ URL::route('clients.update', [$client->id]) }}">
                        @method('patch')
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$client->id}}" name="id">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" class="form-control" id="surname" name="surname" value="{{ $client->surname }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="balance">Balance</label>
                            <input type="text" class="form-control" id="balance" name="balance" value="{{ $client->balance }}">
                        </div>
                        <div class="form-group">
                            <label for="open_trades">Open Trades</label>
                            <input type="number" class="form-control" id="open_trades" name="open_trades" value="{{ $client->open_trades }}">
                        </div>
                        <div class="form-group">
                            <label for="closed_trades">Closed Trades</label>
                            <input type="number" class="form-control" id="closed_trades" name="closed_trades" value="{{ $client->closed_trades }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
