@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Stories Page</div>

                <div class="card-body">
                    <h1>My Stories</h1>
                    {{-- {{ dd($stories) }} --}}
                    <table class="table table-hover mt-5">
                        <thead class="thead-dark">
                            <th>Title</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($stories as $story)
                                <tr>
                                    <td>{{$story->title}}</td>
                                    <td>{{$story->type}}</td>
                                    <td>{{$story->status}}</td>
                                    <td>Yes/No</td>
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
