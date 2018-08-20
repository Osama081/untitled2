
@extends('home');
@section('content')
        <h3 class="text-center text-capitalize">Leave Application</h3>
        <form action="{{route('leave.application')}}" method="post">
            @csrf
            {{ method_field('POST') }}
            <div class="form-row">
                <div class="col-6">
            <label for="teamlead">Select Team Lead:</label>
            <select class="form-control" name="teamlead" id="teamlead">
                <option value="dummy1">This Dummy</option>
                <option value="dummy2">This Dummy2</option>
            </select>
                </div>
                <div class="col-6">
                    <label for="shifts">Select Shift</label>
                    <select name="shifts" class="form-control" id="shifts">
                        <option value="morning">Morning</option>
                        <option value="evening">Evening</option>
                        <option value="morning">Noon</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col-4">
                    <label for="project">Select Project:</label>
                    <select class="form-control" name="project" id="project">
                        <option value="project1">Project1</option>
                        <option value="project2">Project2</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="startdate">Select Leave Start Date:</label>
                    <input type="text" name="startdate" id="startdate" class="form-control">
                    </select>
                </div>

                <div class="col-4">
                    <label for="enddate">Select Leave End Date:</label>
                    <input type="text" name="enddate" id="enddate" class="form-control">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Further Reasons:</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <input value="{{ Auth::user()->id }}" id="agentId" name="agentId"  hidden>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" class="form-control">
            </div>





        </form>
        <script>
            $(function () {
                $( "#startdate" ).datepicker({
                    dateFormat: "yy-mm-dd"
                });
                $( "#enddate" ).datepicker({
                    dateFormat: "yy-mm-dd"
                });

            });
        </script>

    @endsection
