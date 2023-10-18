@extends('layouts.master')
@section('meta_title', 'User Info Page')
@section('content')


<h2>User Contact us Details</h2>
<div class="col-sm-8 mx-auto">
    <a href="/newuser">Add Query</a> 

    @if(session()->has('delmsg'))
    <div class="alert alert-success">
    {{session()->get('delmsg')}}
    </div>
    @endif
{{-- 
    @if(session()->has('updatemsg'))
    <div class="alert alert-success">
    {{session()->get('updatemsg')}}
    </div>
    @endif --}}

    @if (session('updatemsg'))
    <div class="alert alert-success">{{ session('updatemsg') }}</div>
    @endif

<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
    <tr class="bg-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>File</th>
        <th>Message</th>
        <th>Created Date</th>
        <th>Action</th>
    </tr>
</thead>
@foreach ($data as $id => $contacts )

<tbody>
    <tr>

        <td> {{ $contacts->id }} </td>
        <td> {{ $contacts->user_name }}</td>
        <td> {{ $contacts->user_email }}</td>
        <td> {{ $contacts->user_subject }}</td>
        <td> {{ $contacts->user_file }}</td>
        <td> {{ $contacts->user_message }} </td>
        <td> {{ $contacts->created_at }} </td>
        <td> <a href="{{ route('view.contactinfo', $contacts->id) }}">View</a> 
            <a href="{{ route('update.page', $contacts->id) }}">Update</a> 
            <a href="{{ route('delete.contactinfo', $contacts->id) }}">Delete</a></td>

    </tr>
</tbody>
  
@endforeach


</table>
 <div class="pagination2">
        {{$data->links()}}
 </div>

<div class="currentPage1">
        Current Page: {{$data->currentPage()}} <br />
        Total Records: {{$data->total()}}
</div>


</div>
</div>

@endsection
