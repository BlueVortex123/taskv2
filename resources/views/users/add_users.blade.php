@extends('layout')

@section('content')

<div class="content-wrapper">
    <div class="container-full">
        <div class="row">
            <div class="col">
                    <div class="row">
                        <h3>User Add Page</h3><br>
                    </div>
                <form action>
                    @csrf
                    <div class="row"> 
                        <div class="col-md-12">
                        <a href=""  class="btn btn-rounded btn-success mb-5">View Task</a>
                        <div class="form-group">
                                    <h5> Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name"  class="form-control" required="" >
                                            
                                    </div>
                                </div>  
                        </div> 
                    </div>  
                    
                   <!-- <div class="row"> 
                   <div class="col-md-12">
                   <div class="form-group">
                            <h5>Email <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="email" name="email"  class="form-control" required="" >
                                    
                            </div>
                        </div>  
                   </div>   End col-md-4 -->

                    <div class="text-xs-right">
                        <input type="submit" value="Submit" class="btn btn-rounded btn-info md-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection