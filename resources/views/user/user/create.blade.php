{!!Former::horizontal_open()
->id('create-user-user')
->method('POST')
->files('true')
->action(URL::to('user/user/user'))!!}
@include('user::user.user.partial.entry')
{!! Former::close() !!}