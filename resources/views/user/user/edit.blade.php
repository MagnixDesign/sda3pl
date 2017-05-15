{!!Former::horizontal_open()
->id('edit-user-user')
->method('PUT')
->files('true')
->action(URL::to('user/user/user') .'/'.$user['eid'])!!}
@include('user::user.user.partial.entry')
{!! Former::close() !!}