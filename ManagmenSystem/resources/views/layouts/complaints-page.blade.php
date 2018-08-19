@extends('home')
@section('content')
    <h1 class="text-center text-primary">Welcome To the Complaints Menu</h1>
    <br>
    <br>
            <div id="app">
                <div class="row">
                 <div class="col-6">
                <select class="form-control" onchange="location = this.value" name="chooseDepartment" id="chooseDepartment">
                    @if(isset($department))
                        <option disabled selected>Select Any Of Department</option>
                @foreach( $department as $department )
                        <option value="{{route('getting.subfields',$department->id)}}">{{ $department->name  }}</option>
                @endforeach
                    @endif
                    @if(isset($department1))
                        @foreach($department1 as $department)
                            <option value="{{route('getting.subfields',$department->id)}}" selected>{{ $department->name  }}</option>
                            @endforeach
                    @endif
                </select>
                 </div>
                </div>

                @if(isset($subFeild))
                        <form action="/submit"  method="POST">
                            @csrf
                            {{method_field('POST')}}
                            <div class="row">
                                <div class="col-6">
                            <select class="form-control" name="chooseSubField" id="chooseSubField">
                                @foreach( $subFeild as $subFeild )
                                    <option value="{{ $subFeild->id }}">{{ $subFeild->name  }}</option>
                                @endforeach
                            </select>
                                </div>
                                <br>
                            <textarea class="form-control pt-15" name="description" id="description" cols="30" rows="10"></textarea>
                                <input type="text" value="{{Auth::user()->id}}" name="agentId" hidden>
                            <input type="submit" class="btn btn-dark">
                            </div>
                        </form>
                    @endif
            </div>
@endsection
