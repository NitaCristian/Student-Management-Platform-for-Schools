<div class="table-responsive">
    <table class="table" id="assignments-table">
        <thead>
            <tr>
                <th>Batch Id</th>
        <th>Classroom Id</th>
        <th>Course Id</th>
        <th>Level Id</th>
        <th>Shift Id</th>
        <th>Day Id</th>
        <th>Time Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($assignments as $assignment)
            <tr>
                <td>{{ $assignment->batch_id }}</td>
            <td>{{ $assignment->classroom_id }}</td>
            <td>{{ $assignment->course_id }}</td>
            <td>{{ $assignment->level_id }}</td>
            <td>{{ $assignment->shift_id }}</td>
            <td>{{ $assignment->day_id }}</td>
            <td>{{ $assignment->time_id }}</td>
                <td>
                    {!! Form::open(['route' => ['assignments.destroy', $assignment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('assignments.show', [$assignment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('assignments.edit', [$assignment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
