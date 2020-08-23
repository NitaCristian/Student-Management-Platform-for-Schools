<div class="table-responsive">
    <table class="table" id="schools-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Code</th>
        <th>Description</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($schools as $school)
            <tr>
                <td>{{ $school->name }}</td>
            <td>{{ $school->code }}</td>
            <td>{{ $school->description }}</td>
            <td>{{ $school->status }}</td>
                <td>
                    {!! Form::open(['route' => ['schools.destroy', $school->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('schools.show', [$school->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('schools.edit', [$school->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
