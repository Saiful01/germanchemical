@extends('layouts.app')

@section('content')
<a class="btn btn-success float-right" href="/employee/create">New</a><br>


        <div class="card">
            <div class="card-body">
                <table class="table table-borderd">
                    <tr>
                        <th>Employee name</th>
                        <th> Employee Email</th>
                        <th>Employee phone</th>
                        <th> Employee Bio</th>
                        <th> Employee Image</th>
                        <th> Employee Designation</th>
                        <th> Employee Joining Date</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>


                    @foreach($result as $res)
                    <tr>
                        <td>{{$res->emp_name}} </td>
                        <td>{{$res->emp_email}} </td>
                        <td>{{$res->emp_phone}}</td>
                        <td>{{$res->emp_bio}} </td>
                        <td>{{$res->emp_image}} </td>
                        <td>{{$res->emp_designation}} </td>
                        <td>{{$res->emp_join_date}} </td>
                        <td><a class="btn btn-info" href="/employee/edit/{{$res->emp_id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/employee/delete/{{$res->emp_id}}">Delete</a></td>

                    </tr>

                    @endforeach


                </table>
            </div>
        </div>



        @endsection
