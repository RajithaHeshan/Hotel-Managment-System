@extends('housekeepers.layout')

@section('content1')
<a href               = "{{ url('/') }}" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "{{ route('housekeepers.index') }}" style="font-family:calibri;font-size:18px;"> Maintenance Management </a>
<text> > </text>
<a href               = "{{ route('tasks.index') }}" style="font-family:calibri;font-size:18px;">Task List</a>
<text> > Edit Task</text>
<br>
<hr class             = "line2">
@endsection

@section('content')
<div style="background-image: url({{asset("hsImages/bc3.jpg")}});"><br><br>
    <div class="container" style="opacity:0.9; background-color:white;"><br>
        @if ($errors->any())
            <div class="alert alert-danger">
            <strong> Whoops! There were some problems with your inputs.</strong><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif

        <div class="row">
            <div class = "col-lg-12"><br>
                <h3 style="margin-left:50px;"><u><b>Edit Task Details</b></u></h3>
                <div class="float-right">
                    <div class="btn-group">
                        <a class="btn btn-outline-primary" href = "{{ route('tasks.index') }}">List of Task</a>
                        <a class="btn btn-outline-primary" href = "{{ route('tasks.index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <form action = "{{ route('tasks.update', $task->task_id) }}" method="POST">
        @csrf
        @method ('PUT')

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputRoomNo" class="font-weight-bold" >Room Number</label>
                    <input type="text" class="form-control" name="room_ID" value = "{{ $task->room_ID}}" placeholder="Enter Room Number" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputText" class="font-weight-bold">Special Request/Description</label>
                <textarea  class="form-control" name="description" rows="5" value = "{{ $task->description}}" placeholder="Enter specipic task descrition" required>{{ $task->description}}</textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus" class="font-weight-bold">Status</label>

                    @if( $task->status == 'Done')
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Done" checked>
                            <label class="form-check-label" for="exampleRadios1">Done</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Not Yet">
                            <label class="form-check-label" for="exampleRadios2">Not Yet</label>
                        </div>
                    @elseif( $task->status == 'Not Yet')
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Done">
                            <label class="form-check-label" for="exampleRadios1">Done</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="Not Yet" checked>
                            <label class="form-check-label" for="exampleRadios2">Not Yet</label>
                        </div>
                    @endif
                </div>
            </div><br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form><br><br>
    </div><br><br><br>
</div>
@endsection