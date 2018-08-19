<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Welcome To Complaints</title>
</head>
<body>
    <h1 class="text-center text-primary">Welcome To the Complaints Menu</h1>
    <br>
    <br>
            <div id="app">
                <select class="form-control" onchange="location = this.value" name="chooseDepartment" id="chooseDepartment">

                    @if(isset($department))
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

                @if(isset($subFeild))
                        <form action="/submit"  method="POST">
                            @csrf
                            {{method_field('POST')}}
                            <select class="form-control" name="chooseSubField" id="chooseSubField">
                                @foreach( $subFeild as $subFeild )
                                    <option value="{{ $subFeild->id }}">{{ $subFeild->name  }}</option>
                                @endforeach
                            </select>

                            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                            <input type="submit" class="btn btn-dark">
                        </form>
                    @endif

            </div>
</body>
</html>
