@extends('layout')

@section('content')

<div class="content-wrapper">
    <div class="container-full">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <h3>Task Page</h3>
                        
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <div class="text-right">
                                    <a href="{{ route('users.add') }} " class="btn btn-success" style="margin-bottom: 25px">Add User</a>

                                </div>
                                <div class="text-left">
                                    <a href="{{ route('tasks.add') }} " class="btn btn-primary " style="margin-bottom: 25px; margin-left: 20px">Add Task</a>
                            </div>
                            <thead>
                                <tr>
                                    <th width="5%">Serial Number</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Deadline</th>
                                    <th>Actions</th>
                        
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $key => $task)
                                <tr>
                                    <td>{{  $key+1 }}</td>
                                    <td>{{  $task['users']['name'] }}</td>
                                    <td>
                                        @if($task->status == '1')
                                            <span class=""></span>
                                            <input type="checkbox" checked="checked" value="1"  disabled>
                                        @else
                                        <input type="checkbox" value="0"  disabled>
                                        @endif
                                    </td>
                                    <td>{{ date('d-m-Y', strtotime($task->deadline)) }}</td>
                                    <td>
									<a href="" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger">Delete</a>
								</td>
                                
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">Serial Number</th>
                                    <th>Users</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</div>

@endsection