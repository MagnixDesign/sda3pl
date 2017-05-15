<div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="name">
                {!! trans('user::permission.label.name') !!}
              </label><br />
              {!! $permission['name'] !!}
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class"form-group">
              <label for="readable_name">
                {!! trans('user::permission.label.readable_name') !!}
              </label><br />
              {!! $permission['readable_name'] !!}
         </div>
      </div>
[<a href='/user/permission/{{ $permission['slug'] }}'>View</a>]
<hr>
