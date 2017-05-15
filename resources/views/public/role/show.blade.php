<div class="col-md-12">
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="name">
                {!! trans('user::role.label.name') !!}
              </label><br />
              {!! $role['name'] !!}
         </div>
      </div>
[<a href='/user/role/{{ $role['slug'] }}'>View</a>]
<hr>
</div>