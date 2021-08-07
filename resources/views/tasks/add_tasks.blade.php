@extends('layout')

@section('content')

<div class="content-wrapper">
    <div class="container-full">
        <div class="row">
            <div class="col">
                    <div class="row">
                        <h3>Task Page</h3><br>
                        <a href="{{ route('tasks.view') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">View Task</a>
                    </div>
                <form method="post" action="{{ route('tasks.store') }}" >
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <h5>User <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="user_id"  required="" class="form-control">
                                        <option value="" selected="" disabled="">Select User</option>
                                        @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>                                    
                                </div>
                            </div>  
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <label> Task Status: </label><br>
                                <input type="checkbox"  name="status"  class="form-check-input"> Done<br>                                                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <h5>Deadline <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="deadline"  class="form-control" required="" >
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="text-xs-right">
                        <input type="submit" value="Submit" class="btn btn-rounded btn-info md-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection