<div class='col-md-4 col-sm-6'>
                       {!! Former::text('name')
                       -> label(trans('user::role.label.name'))
                       -> placeholder(trans('user::role.placeholder.name'))!!}
                </div>

{!!   Former::actions()
->large_primary_submit('Submit')
->large_inverse_reset('Reset')
!!}