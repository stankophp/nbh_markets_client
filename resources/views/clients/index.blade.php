@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Client Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <th>Client name</th>
                            <th>Balance</th>
                            <th>Open Trades</th>
                            <th>Closed Trades</th>
                        </thead>
                        @foreach($clients as $client)
                        <tr>
                            <td>
                                <a href="/clients/{{ $client->id }}">
                                    {{ $client->name . ' ' . $client->surname }}
                                </a>
                            </td>
                            <td>{{ $client->balance }}</td>
                            <td>{{ $client->open_trades }}</td>
                            <td>{{ $client->closed_trades }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
