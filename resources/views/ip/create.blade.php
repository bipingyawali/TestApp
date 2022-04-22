@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="mt-5 mb-3 clearfix">
                <h2 class="pull-left">Add Ip Address</h2>
                <a href="{{ route('ip.index') }}" class="btn btn-success pull-right"><i class="fa fa-list"></i> List</a>
            </div>
            @include('flash::message')
            <form action="{{ route('ip.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>IP</label>
                    <input type="text" name="ip" value="{{ $current_ip }}" class="form-control @error('ip') is-invalid @enderror" >
                    @error('ip')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="" class="btn btn-secondary ml-2">Cancel</a>
            </form>
        </div>
    </div>
@endsection
