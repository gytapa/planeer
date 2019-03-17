{{ Form::model($employee, ['method' => 'PATCH']) }}
    <div>
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name') }}
    </div>

    <div>
        {{ Form::label('email', 'E-mail') }}
        {{ Form::text('email') }}
    </div>

    <div>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
    </div>

    <div>
        {{ Form::label('is_super', 'Employee Type') }}
        {{ Form::select('is_super', [0 => 'Employee', 1 => 'Administrator']) }}
    </div>

    <div>
        {{ Form::submit("Edit Employee") }}
    </div>

{{ Form::close() }}