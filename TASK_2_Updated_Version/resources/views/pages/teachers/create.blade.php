@extends('layouts.app')
@section('dynamic_content')


    <form action="{{route('teacher.create')}}" method="post">
        
        <!--Cross Site Request Forgery-->

        {{csrf_field()}}
    
        <div class="col-md-2 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                    <span class="text-danger">{{$message}}</span>
            @enderror
        
        </div>


        <div class="col-md-2 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            @error('phone')
                    <span class="text-danger">{{$message}}</span>
            @enderror            
        </div>       
        <br>
        <input type="submit" class="btn btn-success" value="Add">

    </form>

@endsection