[<a href="/user/user/user/create"> {{ trans('cms.create')  }}</a>]
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <td>Id</td>
        <th>{!! trans('user::user.label.reporting_to')!!}</th>
                    <th>{!! trans('user::user.label.name')!!}</th>
                    <th>{!! trans('user::user.label.email')!!}</th>
                    <th>{!! trans('user::user.label.password')!!}</th>
                    <th>{!! trans('user::user.label.active')!!}</th>
                    <th>{!! trans('user::user.label.remember_token')!!}</th>
                    <th>{!! trans('user::user.label.sex')!!}</th>
                    <th>{!! trans('user::user.label.dob')!!}</th>
                    <th>{!! trans('user::user.label.designation')!!}</th>
                    <th>{!! trans('user::user.label.mobile')!!}</th>
                    <th>{!! trans('user::user.label.phone')!!}</th>
                    <th>{!! trans('user::user.label.address')!!}</th>
                    <th>{!! trans('user::user.label.street')!!}</th>
                    <th>{!! trans('user::user.label.city')!!}</th>
                    <th>{!! trans('user::user.label.district')!!}</th>
                    <th>{!! trans('user::user.label.state')!!}</th>
                    <th>{!! trans('user::user.label.country')!!}</th>
                    <th>{!! trans('user::user.label.photo')!!}</th>
                    <th>{!! trans('user::user.label.web')!!}</th>
                    <th>{!! trans('user::user.label.social_login')!!}</th>
        <td>Action</td>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td><a href="/user/user/user/{!! $user->eid !!}"> {!! $user->id !!} </a></td>
            <td>{{ $user->reporting_to }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->active }}</td>
                    <td>{{ $user->remember_token }}</td>
                    <td>{{ $user->sex }}</td>
                    <td>{{ $user->dob }}</td>
                    <td>{{ $user->designation }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->street }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->district }}</td>
                    <td>{{ $user->state }}</td>
                    <td>{{ $user->country }}</td>
                    <td>{{ $user->photo }}</td>
                    <td>{{ $user->web }}</td>
                    <td>{{ $user->social_login }}</td>
            <td>
                <a href="/user/user/user/{!! $user->eid !!}/edit"> Edit </a>
                <a href="/user/user/user/{!! $user->eid !!}" class="link-delete"> Delete </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
    $('.link-delete').click(function(e){
        var url = $(this).attr('href');
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function(){
            $.ajax({
                url: url,
                type: 'DELETE',
                processData: false,
                contentType: false,
                success:function(data, textStatus, jqXHR)
                {
                    data = jQuery.parseJSON(data);
                    window.location = data.redirect;
                },
            });
        });
        e.preventDefault();
    });
});
</script>