[<a href="/user/user/permission/create"> {{ trans('cms.create')  }}</a>]
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <td>Id</td>
        <th>{!! trans('user::permission.label.name')!!}</th>
                    <th>{!! trans('user::permission.label.readable_name')!!}</th>
        <td>Action</td>
    </thead>
    <tbody>
        @foreach($permissions as $permission)
        <tr>
            <td><a href="/user/user/permission/{!! $permission->eid !!}"> {!! $permission->id !!} </a></td>
            <td>{{ $permission->name }}</td>
                    <td>{{ $permission->readable_name }}</td>
            <td>
                <a href="/user/user/permission/{!! $permission->eid !!}/edit"> Edit </a>
                <a href="/user/user/permission/{!! $permission->eid !!}" class="link-delete"> Delete </a>
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