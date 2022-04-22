@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="mt-5 mb-3 clearfix">
                <h2 class="pull-left">IPs</h2>
                <a href="{{ route('ip.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add</a>
            </div>
            @include('flash::message')
            <table class="table table-bordered table-striped">
                <thead>
                    <th width="2%">S.N.</th>
                    <th width="2%">IP</th>
                    <th>Response</th>
                </thead>
                <tbody>
                    @forelse($ips as $i => $ip)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{!! $ip->ip !!}</td>
                        <td>
                            @php
                                $response = explode(';',$ip->response);
                            @endphp
                            Two Letter:- {{ $response[1] }}<br>Three Letter:- {{ $response[2] }}<br>Full Name:- {{ $response[3] }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">No data available.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
