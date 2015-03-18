<!DOCTYPE html>
<html>
<head>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Webarch - Responsive Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN CORE CSS FRAMEWORK -->
{{ HTML::style('assets/plugins/pace/pace-theme-flash.css') }}
{{ HTML::style('assets/plugins/boostrapv3/css/bootstrap.min.css') }}
{{ HTML::style('assets/plugins/boostrapv3/css/bootstrap-theme.min.css') }}
{{ HTML::style('assets/plugins/font-awesome/css/font-awesome.css') }}
{{ HTML::style('assets/css/animate.min.css') }}
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
{{ HTML::style('assets/css/style.css') }}
{{ HTML::style('assets/css/responsive.css') }}
{{ HTML::style('assets/css/magic_space.css') }}
{{ HTML::style('assets/css/custom-icon-set.css') }}
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top lazy"  data-original="{{URL::asset('assets/img/work.jpg')}}"  style="background-image: url('{{URL::asset('assets/img/work.jpg')}}')"> 
<div class="container">
  <div class="row login-container animated fadeInUp">  
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
		 <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
          <h2 class="normal">{{Util::message('LOGIN_TXT001')}}</h2>          
		  
        </div>
		<div class="tiles grey p-t-20 p-b-20 text-black">
			{{ Form::open(array('url' => 'login','method' => 'post','class' =>'animated fadeIn'))}}
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-6 col-sm-6 ">
                        {{ Form::text('username', Input::old('username'), array('placeholder' => Util::message('LOGIN_TXT007'), 'class' => 'form-control', 'required', 'autofocus'))}}
                      </div>
                      <div class="col-md-6 col-sm-6 ">
                        {{ Form::password('password', array('placeholder' => Util::message('LOGIN_TXT008'), 'class' => 'form-control', 'required', 'autofocus'))}}
                      </div>                     
                    </div>
				<div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				  <div class="control-group  col-md-10">
            {{ Form::submit(Util::message('LOGIN_TXT002'), array('class' => 'btn btn-primary btn-cons'))}} {{Util::message('LOGIN_TXT003')}}&nbsp;&nbsp;<button type="button" class="btn btn-info btn-cons" id="register_toggle"> {{Util::message('LOGIN_TXT004')}}</button>
            @if(Session::has('flash_error'))
                <h3 class="normal">{{Session::get('flash_error')}}</h3>
            @endif
            @if(Session::has('flash_notice'))
                <h3 class="normal">{{Session::get('flash_notice')}}</h3>
            @endif
					<div class="checkbox checkbox check-success"> <a href="#">{{Util::message('LOGIN_TXT005')}}</a>&nbsp;&nbsp;
					  <input type="checkbox" id="checkbox1" value="1">
					  <label for="checkbox1">{{Util::message('LOGIN_TXT006')}} </label>
					</div>
				  </div>
				  </div>
			 {{ Form::close() }}
			<form id="frm_register" class="animated fadeIn" style="display:none">
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-6 col-sm-6">
                        <input name="reg_username" id="reg_username" type="text"  class="form-control" placeholder="{{Util::message('LOGIN_TXT007')}}">
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <input name="reg_pass" id="reg_pass" type="password"  class="form-control" placeholder="{{Util::message('LOGIN_TXT008')}}">
                      </div>
                    </div>	
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-12">
                        <input name="reg_mail" id="reg_mail" type="text"  class="form-control" placeholder="Mailing Address">
                      </div>
                    </div>	
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-6 col-sm-6">
                        <input name="reg_first_Name" id="reg_first_Name" type="text"  class="form-control" placeholder="First Name">
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <input name="reg_first_Name" id="reg_first_Name" type="password"  class="form-control" placeholder="Last Name">
                      </div>
                    </div>	
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-12 ">
                        <input name="reg_email" id="reg_email" type="text"  class="form-control" placeholder="Email">
                      </div>
                    </div>						
			</form>
		</div>   
      </div>   
  </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
{{ HTML::style('assets/plugins/jquery-1.8.3.min.js') }}
{{ HTML::style('assets/plugins/bootstrap/js/bootstrap.min.js') }}
{{ HTML::style('assets/plugins/pace/pace.min.js') }}
{{ HTML::style('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}
{{ HTML::style('assets/plugins/jquery-lazyload/jquery.lazyload.min.js') }}
{{ HTML::style('assets/js/login_v2.js') }}
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>



</html>