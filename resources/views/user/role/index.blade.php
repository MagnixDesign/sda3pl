[<a href="/user/user/role/create"> {{ trans('cms.create')  }}</a>]
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <td>Id</td>
        <th>{!! trans('user::role.label.name')!!}</th>
        <td>Action</td>
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr>
            <td><a href="/user/user/role/{!! $role->eid !!}"> {!! $role->id !!} </a></td>
            <td>{{ $role->name }}</td>
            <td>
                <a href="/user/user/role/{!! $role->eid !!}/edit"> Edit </a>
                <a href="/user/user/role/{!! $role->eid !!}" class="link-delete"> Delete </a>
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