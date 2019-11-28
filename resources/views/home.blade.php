@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <a href= "{{url('/Create')}}" type="button" class="btn btn-lg btn-block btn-primary">Create</a>
            <a href= "{{url('/Employee')}}" type="button" class="btn btn-lg btn-block btn-success">List</a>
        </div>
    </div>
       
@endsection
