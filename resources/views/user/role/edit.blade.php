{!!Former::horizontal_open()
->id('edit-user-role')
->method('PUT')
->files('true')
->action(URL::to('user/user/role') .'/'.$role['eid'])!!}
@include('user::user.role.partial.entry')
{!! Former::close() !!}