<li class="{{ Request::is('classes*') ? 'active' : '' }}">
    <a href="{{ route('classes.index') }}"><i class="fa fa-edit"></i><span>Classes</span></a>
</li>

<li class="{{ Request::is('classrooms*') ? 'active' : '' }}">
    <a href="{{ route('classrooms.index') }}"><i class="fa fa-edit"></i><span>Classrooms</span></a>
</li>

<li class="{{ Request::is('levels*') ? 'active' : '' }}">
    <a href="{{ route('levels.index') }}"><i class="fa fa-edit"></i><span>Levels</span></a>
</li>

<li class="{{ Request::is('batches*') ? 'active' : '' }}">
    <a href="{{ route('batches.index') }}"><i class="fa fa-edit"></i><span>Batches</span></a>
</li>

<li class="{{ Request::is('shifts*') ? 'active' : '' }}">
    <a href="{{ route('shifts.index') }}"><i class="fa fa-edit"></i><span>Shifts</span></a>
</li>

<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Courses</span></a>
</li>

<li class="{{ Request::is('times*') ? 'active' : '' }}">
    <a href="{{ route('times.index') }}"><i class="fa fa-edit"></i><span>Times</span></a>
</li>

<li class="{{ Request::is('attendances*') ? 'active' : '' }}">
    <a href="{{ route('attendances.index') }}"><i class="fa fa-edit"></i><span>Attendances</span></a>
</li>

<li class="{{ Request::is('academics*') ? 'active' : '' }}">
    <a href="{{ route('academics.index') }}"><i class="fa fa-edit"></i><span>Academics</span></a>
</li>

<li class="{{ Request::is('days*') ? 'active' : '' }}">
    <a href="{{ route('days.index') }}"><i class="fa fa-edit"></i><span>Days</span></a>
</li>

<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{{ route('transactions.index') }}"><i class="fa fa-edit"></i><span>Transactions</span></a>
</li>

<li class="{{ Request::is('schools*') ? 'active' : '' }}">
    <a href="{{ route('schools.index') }}"><i class="fa fa-edit"></i><span>Schools</span></a>
</li>

<li class="{{ Request::is('assignments*') ? 'active' : '' }}">
    <a href="{{ route('assignments.index') }}"><i class="fa fa-edit"></i><span>Assignments</span></a>
</li>

<li class="{{ Request::is('schedules*') ? 'active' : '' }}">
    <a href="{{ route('schedules.index') }}"><i class="fa fa-edit"></i><span>Schedules</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('teachers*') ? 'active' : '' }}">
    <a href="{{ route('teachers.index') }}"><i class="fa fa-edit"></i><span>Teachers</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('students*') ? 'active' : '' }}">
    <a href="{{ route('students.index') }}"><i class="fa fa-edit"></i><span>Students</span></a>
</li>

