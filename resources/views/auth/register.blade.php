@extends('auth')

@section('template_title')
	Register
@endsection


@section('template_fastload_css')
@endsection


@section('content')

	@include('partials.form-status')

    <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
        <main class="mdl-layout__content margin-top-3-tablet">
			<div class="mdl-grid mdl-grid--no-spacing">
			  	<div class="mdl-cell--6-col-tablet mdl-cell--1-offset-tablet mdl-cell--6-col-desktop mdl-cell--3-offset-desktop ">

			       	<div class="demo-card-full mdl-card mdl-shadow--2dp">

			                <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
			                    <h2 class="mdl-card__title-text text-center full-span block">

			                        {{ Lang::get('titles.register') }}

			                    </h2>
			                </div>
			                <div class="mdl-card__supporting-text ">

								{!! Form::open(array('url' => url('/auth/register'), 'method' => 'POST', 'class' => '', 'role' => 'form', 'id' => 'register')) !!}

									<div class="mdl-grid ">
									  	<div class="mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col-desktop">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('name') ? 'is-invalid' :'' }}">
											    {!! Form::text('name', old('name'), array('id' => 'name', 'class' => 'mdl-textfield__input', 'pattern' => '[A-Z,a-z,0-9]*')) !!}
											    {!! Form::label('name', Lang::get('auth.name') , array('class' => 'mdl-textfield__label')); !!}
											    <span class="mdl-textfield__error">@if ($errors->has('name')){{{ $errors->first('name') }}} <br />@endif Letters and numbers only</span>
											</div>
									  	</div>

									  	<div class="mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col-desktop">
									        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('email') ? 'is-invalid' :'' }}">
									            {!! Form::email('email', null, array('id' => 'email', 'class' => 'mdl-textfield__input' )) !!}
									            {!! Form::label('email', Lang::get('auth.email') , array('class' => 'mdl-textfield__label')); !!}
									            <span class="mdl-textfield__error">@if ($errors->has('name')){{{ $errors->first('name') }}} <br />@endif Please Enter a Valid {{ Lang::get('auth.email') }}</span>
									        </div>
									  	</div>
										<div class="mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col-desktop">
									        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('first_name') ? 'is-invalid' :'' }}">
									            {!! Form::text('first_name', old('first_name'), array('id' => 'first_name', 'class' => 'mdl-textfield__input', 'pattern' => '[A-Z,a-z]*')) !!}
									            {!! Form::label('first_name', Lang::get('auth.first_name') , array('class' => 'mdl-textfield__label')); !!}
									            <span class="mdl-textfield__error">@if ($errors->has('name')){{{ $errors->first('name') }}} <br />@endif Letters only</span>
									        </div>
									  	</div>
									  	<div class="mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col-desktop">
										    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('last_name') ? 'is-invalid' :'' }}">
										        {!! Form::text('last_name', old('last_name'), array('id' => 'last_name', 'class' => 'mdl-textfield__input', 'pattern' => '[A-Z,a-z]*')) !!}
										        {!! Form::label('last_name', Lang::get('auth.last_name') , array('class' => 'mdl-textfield__label')); !!}
										        <span class="mdl-textfield__error">@if ($errors->has('name')){{{ $errors->first('name') }}} <br />@endif Letters only</span>
										    </div>
									  	</div>
									  	<div class="mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col-desktop">
									        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('password') ? 'is-invalid' :'' }}">
									            {!! Form::password('password', array('id' => 'password', 'class' => 'mdl-textfield__input', 'required' => 'required' )) !!}
									            {!! Form::label('password', Lang::get('auth.password') , array('class' => 'mdl-textfield__label')); !!}
									            <span class="mdl-textfield__error">@if ($errors->has('password')){{{ $errors->first('password') }}} <br />@endif</span>
									        </div>
									  	</div>
									  	<div class="mdl-cell mdl-cell--4-col-tablet mdl-cell--6-col-desktop">
									        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('password_confirmation') ? 'is-invalid' :'' }}">
									            {!! Form::password('password_confirmation', array('id' => 'password_confirmation', 'class' => 'mdl-textfield__input', 'required' => 'required' )) !!}
									            {!! Form::label('password_confirmation', Lang::get('auth.confirmPassword') , array('class' => 'mdl-textfield__label')); !!}
									            <span class="mdl-textfield__error">@if ($errors->has('password_confirmation')){{{ $errors->first('password_confirmation') }}} <br />@endif</span>
									        </div>
									  	</div>
									  	<div class="mdl-cell mdl-cell--12-col">
									  		<div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
									  	</div>
									  	<div class="mdl-cell mdl-cell--12-col">
											{!! Form::button('<span class="mdl-spinner-text">'.Lang::get('auth.register').'</span><div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner mdl-color-text--white mdl-color-white"></div>', array('class' => 'mdl-button mdl-js-button mdl-js-ripple-effect center mdl-color--primary mdl-color-text--white mdl-button--raised full-span margin-bottom-1 margin-top-2','type' => 'submit','id' => 'submit')) !!}
									  	</div>
									</div>

								{!! Form::close() !!}

			                </div>


			                <div class="mdl-card__actions mdl-card--border">

			                    <ul class="social-list ">
			                        <li>
			                            <a href="{{ route('social.redirect', ['provider' => 'twitter']) }}" class="social-twitter" id="twitter">
			                                <svg viewBox="0 0 100 100" class="shape-twitter ">
			                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-twitter"></use>
			                                </svg>
			                                <span>Twitter</span>
											<span class="mdl-tooltip mdl-tooltip--large mdl-tooltip--top" for="twitter">
												Register using Twitter
											</span>
			                            </a>
			                        </li>
			                        <li>
			                            <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="social-facebook" id="facebook">
			                                <svg viewBox="0 0 100 100" class="shape-facebook">
			                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-facebook"></use>
			                                </svg>
			                                <span>Facebook</span>
											<span class="mdl-tooltip mdl-tooltip--large mdl-tooltip--top" for="facebook">
												Register using Facebook
											</span>
			                            </a>
			                        </li>
			                        <li>
			                            <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="social-googleplus" id="googleplus">
			                                <svg viewBox="0 0 100 100" class="shape-googleplus">
			                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#googleplus-1"></use>
			                                </svg>
			                                <svg viewBox="0 0 100 100" class="shape-googleplus">
			                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#googleplus-2"></use>
			                                </svg>
			                                <svg viewBox="0 0 100 100" class="shape-googleplus">
			                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#googleplus-3"></use>
			                                </svg>
			                                <span>Google+</span>
											<span class="mdl-tooltip mdl-tooltip--large mdl-tooltip--top" for="googleplus">
												Register using Google+
											</span>
			                            </a>
			                        </li>
			                        <li>
			                            <a href="{{ route('social.redirect', ['provider' => 'github']) }}" class="social-github" id="github">
			                                <svg viewBox="0 0 100 100" class="shape-github">
			                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-github"></use>
			                                </svg>
			                                <span>GitHub</span>
											<span class="mdl-tooltip mdl-tooltip--large mdl-tooltip--top" for="github">
												Register using GitHub
											</span>
			                            </a>
			                        </li>
			                    </ul>
			                    <svg width="0" height="0" style="display: none;">
			                        <defs>
			                            <path id="shape-facebook" d="M94.48,0H5.519C2.471,0,0,2.471,0,5.52v88.96c0,3.049,2.47,5.521,5.519,5.521h63.479L53.411,100V61.273h-13.03V46.181h13.03v-11.13c0-12.916,7.89-19.949,19.412-19.949c5.52,0,10.263,0.41,11.645,0.595v13.497l-7.991,0.004c-6.265,0-7.479,2.979-7.479,7.348v9.636h14.945l-1.947,15.093H68.998v38.726H94.48c3.047,0,5.52-2.472,5.52-5.521V5.52C100,2.471,97.529,0,94.48,0z"></path>
			                            <path id="shape-github" d="M50.049,0.3c14.18,0.332,25.969,5.307,35.366,14.923S99.675,36.9,100,51.409c-0.195,11.445-3.415,21.494-9.658,30.146c-6.244,8.65-14.406,14.772-24.488,18.366c-1.234,0.199-2.112,0.017-2.633-0.549c-0.521-0.565-0.781-1.215-0.781-1.946l0.098-14.074c0-2.396-0.342-4.377-1.023-5.939c-0.684-1.564-1.479-2.745-2.391-3.544c5.788-0.399,10.977-2.312,15.561-5.739c4.586-3.428,7.01-9.934,7.27-19.517c0-2.795-0.455-5.324-1.366-7.586c-0.91-2.263-2.179-4.293-3.805-6.09c0.391-0.665,0.716-2.196,0.976-4.592c0.262-2.396-0.229-5.391-1.463-8.983c0-0.2-1.105-0.15-3.316,0.149c-2.211,0.299-5.691,2.013-10.439,5.141c-4.032-1.131-8.18-1.697-12.438-1.697c-4.26,0-8.439,0.566-12.537,1.697c-4.748-3.128-8.228-4.841-10.439-5.141c-2.211-0.3-3.317-0.35-3.317-0.149c-1.235,3.593-1.723,6.588-1.463,8.983c0.26,2.396,0.585,3.927,0.976,4.592c-1.626,1.73-2.894,3.743-3.805,6.039c-0.911,2.296-1.366,4.842-1.366,7.637c0.26,9.518,2.667,16.006,7.219,19.466c4.553,3.461,9.724,5.391,15.512,5.79c-0.715,0.599-1.366,1.464-1.951,2.596s-1.008,2.528-1.268,4.192c-1.561,0.865-3.772,1.281-6.634,1.248c-2.862-0.033-5.496-1.881-7.902-5.54c0-0.2-0.65-1.032-1.951-2.496c-1.301-1.464-3.187-2.396-5.659-2.795c-0.325-0.066-0.976,0.05-1.951,0.35c-0.976,0.3-0.456,1.214,1.561,2.745c0.065-0.066,0.699,0.449,1.902,1.547c1.203,1.1,2.423,3.078,3.659,5.939c-0.195,0.466,0.862,1.863,3.17,4.191c2.309,2.329,6.846,2.93,13.61,1.797l0.098,9.483c0,0.731-0.26,1.381-0.781,1.946c-0.52,0.564-1.398,0.748-2.634,0.549c-10.082-3.594-18.244-9.716-24.488-18.367C3.415,72.604,0.195,62.556,0,51.11C0.325,36.602,5.187,24.54,14.585,14.923C23.984,5.308,35.772,0.333,49.951,0L50.049,0.3z"></path>
			                            <g id="shape-googleplus">
			                                <path id="googleplus-1" d="M44.438,59.102c-0.699-0.091-1.137-0.091-2.012-0.091c-0.789,0-5.518,0.177-9.193,1.441c-1.927,0.714-7.527,2.868-7.527,9.237c0,6.375,6.041,10.957,15.408,10.957c8.406,0,12.873-4.139,12.873-9.694C53.984,66.364,51.096,63.945,44.438,59.102z"></path>
			                                <path id="googleplus-2" d="M49.167,35.495c0-6.463-3.768-16.514-11.029-16.514c-2.283,0-4.729,1.168-6.133,2.965c-1.49,1.887-1.923,4.301-1.923,6.643c0,6.01,3.412,15.971,10.944,15.971c2.188,0,4.543-1.07,5.953-2.509C48.991,39.979,49.167,37.112,49.167,35.495z"></path>
			                                <path id="googleplus-3" d="M96.879,0H3.121C1.396,0,0,1.428,0,3.19v93.615c0,1.766,1.396,3.193,3.121,3.193h93.758c1.727,0,3.121-1.43,3.121-3.193V3.19C100,1.428,98.604,0,96.879,0z M36.819,84.409c-12.697,0-18.821-6.188-18.821-12.836c0-3.229,1.572-7.804,6.739-10.945c5.425-3.41,12.784-3.856,16.726-4.135c-1.231-1.614-2.628-3.318-2.628-6.1c0-1.523,0.438-2.422,0.872-3.5c-0.966,0.092-1.923,0.18-2.8,0.18c-9.277,0-14.53-7.095-14.53-14.094c0-4.123,1.836-8.703,5.6-12.025c4.994-4.217,11.815-5.361,16.549-5.361h17.25l-5.692,3.659h-5.426c2.013,1.702,6.211,5.293,6.211,12.116c0,6.638-3.675,9.787-7.348,12.746c-1.141,1.164-2.455,2.42-2.455,4.398c0,1.969,1.314,3.044,2.275,3.859l3.155,2.507c3.853,3.319,7.354,6.371,7.353,12.569C59.848,75.887,51.877,84.409,36.819,84.409z M83.404,48.903h-8.801v9.027H70.27v-9.027h-8.758v-4.48h8.758v-8.975h4.334v8.975h8.801V48.903z"></path>
			                            </g>
			                            <path id="shape-twitter" d="M100.001,17.942c-3.681,1.688-7.633,2.826-11.783,3.339c4.236-2.624,7.49-6.779,9.021-11.73c-3.965,2.432-8.354,4.193-13.026,5.146C80.47,10.575,75.138,8,69.234,8c-11.33,0-20.518,9.494-20.518,21.205c0,1.662,0.183,3.281,0.533,4.833c-17.052-0.884-32.168-9.326-42.288-22.155c-1.767,3.133-2.778,6.773-2.778,10.659c0,7.357,3.622,13.849,9.127,17.65c-3.363-0.109-6.525-1.064-9.293-2.651c-0.002,0.089-0.002,0.178-0.002,0.268c0,10.272,7.072,18.845,16.458,20.793c-1.721,0.484-3.534,0.744-5.405,0.744c-1.322,0-2.606-0.134-3.859-0.379c2.609,8.424,10.187,14.555,19.166,14.726c-7.021,5.688-15.867,9.077-25.48,9.077c-1.656,0-3.289-0.102-4.895-0.297C9.08,88.491,19.865,92,31.449,92c37.737,0,58.374-32.312,58.374-60.336c0-0.92-0.02-1.834-0.059-2.743C93.771,25.929,97.251,22.195,100.001,17.942L100.001,17.942z"></path>
			                            <path id="shape-youtube" d="M98.77,27.492c-1.225-5.064-5.576-8.799-10.811-9.354C75.561,16.818,63.01,15.993,50.514,16c-12.495-0.007-25.045,0.816-37.446,2.139c-5.235,0.557-9.583,4.289-10.806,9.354C0.522,34.704,0.5,42.574,0.5,50.001c0,7.426,0,15.296,1.741,22.509c1.224,5.061,5.572,8.799,10.807,9.352c12.399,1.32,24.949,2.145,37.446,2.14c12.494,0.005,25.047-0.817,37.443-2.14c5.234-0.555,9.586-4.291,10.81-9.352c1.741-7.213,1.753-15.083,1.753-22.509S100.51,34.704,98.77,27.492 M67.549,52.203L43.977,64.391c-2.344,1.213-4.262,0.119-4.262-2.428V38.036c0-2.548,1.917-3.644,4.262-2.429l23.572,12.188C69.896,49.008,69.896,50.992,67.549,52.203"></path>
			                        </defs>
			                    </svg>
			                </div>


			                <div class="mdl-card__actions mdl-card--border">

			                    {!! HTML::link(url('/password/email'), Lang::get('auth.forgot'), array('id' => 'forgot', 'class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect left')) !!}
			                  	{!! HTML::link(url('/login'), Lang::get('auth.login'), array('id' => 'login', 'class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect right')) !!}

			                </div>
			        </div>

			  	</div>
			</div>
        </main>
    </div>

@endsection

@section('template_scripts')

	@include('scripts.mdl-required-input-fix')
	{!! HTML::script('https://www.google.com/recaptcha/api.js', array('type' => 'text/javascript')) !!}
	@include('scripts.html5-password-match-check')


@endsection