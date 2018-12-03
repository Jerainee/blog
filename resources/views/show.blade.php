@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($con as $single_con)
    @csrf
    <tr>
      <th scope="row">{{ $single_con->id }}</th>
      <td>{{ $single_con->name    }}</td>
      <td>{{ $single_con->address }}</td>
      <td>{{ $single_con->mobile  }}</td>
      <td>{{ $single_con->status  }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
