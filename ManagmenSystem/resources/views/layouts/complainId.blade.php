@extends('home')
@section('content')
    <h4 class="text-center text-danger">ID of List Currently Not resolved</h4>

    <table class="table table-bordered table-info">
        <tr>
            <th class="text-center">Complain Id</th>
            <th class="text-center">Date OF Complain</th>
        </tr>
        <tbody>
        @foreach($list as $list)
        <tr>

                <td class="text-center">{{ $list->id }}</td>
                <td class="text-center">{{$list->created_at}}</td>

        </tr>
        @endforeach
        </tbody>
    </table>


    @endsection




