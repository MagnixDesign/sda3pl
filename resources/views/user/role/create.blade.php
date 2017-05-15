{!!Former::horizontal_open()
->id('create-user-role')
->method('POST')
->files('true')
->action(URL::to('user/user/role'))!!}
@include('user::user.role.partial.entry')
{!! Former::close() !!}