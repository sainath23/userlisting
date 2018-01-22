@extends('layouts.app')

@section('title', 'User Responses')

@section('response-active', 'active')

@section('content')
    <h1 style="text-align:center">User Responses</h1>
        @if(count($data) > 0)
            <table class="table table-striped table-hover ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $index = 1; ?>
                    @foreach($data as $entry)
                    <tr>
                        <!-- 5 * (1-1) + 1 = 1 -->
                        <td>{{ $data->perPage() * ($data->currentPage() - 1) + $index }}</td>
                        <td>{{ $entry->first_name }}</td>
                        <td>{{ $entry->last_name }}</td>
                        <td>{{ $entry->email }}</td>
                        <td>{{ $entry->phone_number }}</td>
                    </tr>
                    <?php $index++; ?>
                    @endforeach
                </tbody>
            </table>
            <div style="float:right">
                {{ $data->links() }}
            </div>
        @else
            <div class="alert alert-info"><strong>No records found!</strong></div>
        @endif

@endsection