


<h2>Single User Details</h2>
<div class="col-sm-8 mx-auto">
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
    <tr class="bg-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Created Date</th>
    </tr>
</thead>
@foreach ($data as $id => $singleUser )

<tbody>
    <tr>

        <td> {{ $singleUser->id }} </td>
        <td> {{ $singleUser->user_name }}</td>
        <td> {{ $singleUser->user_email }}</td>
        <td> {{ $singleUser->user_subject }}</td>
        <td> {{ $singleUser->user_message }} </td>
        <td> {{ $singleUser->created_at }} </td>
    </tr>
</tbody>
  
@endforeach


</table>
</div>
</div>


