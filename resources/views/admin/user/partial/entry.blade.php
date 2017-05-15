<div class='col-md-4 col-sm-6'>
                       {!! Former::text('reporting_to')
                       -> label(trans('user::user.label.reporting_to'))
                       -> placeholder(trans('user::user.placeholder.reporting_to'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('name')
                       -> label(trans('user::user.label.name'))
                       -> placeholder(trans('user::user.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('email')
                       -> label(trans('user::user.label.email'))
                       -> placeholder(trans('user::user.placeholder.email'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('password')
                       -> label(trans('user::user.label.password'))
                       -> placeholder(trans('user::user.placeholder.password'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('active')
                       -> label(trans('user::user.label.active'))
                       -> placeholder(trans('user::user.placeholder.active'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('remember_token')
                       -> label(trans('user::user.label.remember_token'))
                       -> placeholder(trans('user::user.placeholder.remember_token'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('sex')
                       -> label(trans('user::user.label.sex'))
                       -> placeholder(trans('user::user.placeholder.sex'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('dob')
                       -> label(trans('user::user.label.dob'))
                       -> placeholder(trans('user::user.placeholder.dob'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('designation')
                       -> label(trans('user::user.label.designation'))
                       -> placeholder(trans('user::user.placeholder.designation'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('mobile')
                       -> label(trans('user::user.label.mobile'))
                       -> placeholder(trans('user::user.placeholder.mobile'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('phone')
                       -> label(trans('user::user.label.phone'))
                       -> placeholder(trans('user::user.placeholder.phone'))!!}
                </div>

                <div class='col-md-12'>
                    {!! Former::textarea('address')
                    -> label(trans('user::user.label.address'))
                    -> dataUpload(URL::to($user->getUploadURL('address')))
                    -> addClass('html-editor')
                    -> placeholder(trans('user::user.placeholder.address'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('street')
                       -> label(trans('user::user.label.street'))
                       -> placeholder(trans('user::user.placeholder.street'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('city')
                       -> label(trans('user::user.label.city'))
                       -> placeholder(trans('user::user.placeholder.city'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('district')
                       -> label(trans('user::user.label.district'))
                       -> placeholder(trans('user::user.placeholder.district'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('state')
                       -> label(trans('user::user.label.state'))
                       -> placeholder(trans('user::user.placeholder.state'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('country')
                       -> label(trans('user::user.label.country'))
                       -> placeholder(trans('user::user.placeholder.country'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('photo')
                       -> label(trans('user::user.label.photo'))
                       -> placeholder(trans('user::user.placeholder.photo'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('web')
                       -> label(trans('user::user.label.web'))
                       -> placeholder(trans('user::user.placeholder.web'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Former::text('social_login')
                       -> label(trans('user::user.label.social_login'))
                       -> placeholder(trans('user::user.placeholder.social_login'))!!}
                </div>