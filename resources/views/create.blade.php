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

<form method="POST" action="/insert"> 
        @csrf
        <div class="input-group">
            <input type="hidden" name="id">
            <label> Name </label>
                <input type="text" name="name">
        </div>

        <div class="input-group">
            <label> Address </label>
                <input type="text" name="address">  
        </div>

        <div class="input-group">
            <label> Mobile </label>
                <input type="text" name="mobile">
        </div>
        <div class="input-group">
            <label> Status </label>
                <input type="text" name="status">
        </div>

        <div class="botton">
            <button class="btn" type="submit" name="save" >Save</button>
        </div> 

</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection