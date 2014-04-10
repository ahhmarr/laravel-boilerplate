<!doctype html>
<html lang="en">
<head>
	{{HTML::style("css/bootstrap.min.css")}}
	{{HTML::style("css/bootstrap-theme.min.css")}}
	{{HTML::style("css/font-awesome.min.css")}}
	{{HTML::style("css/main.css")}}
	{{HTML::style("css/dataTable/jquery.dataTables.css")}}
	{{HTML::style("css/alertify.core.css")}}
	{{HTML::style("css/alertify.bootstrap.css")}}
	{{HTML::style("css/spectrum.css")}}
	{{HTML::style("css/customSelectBox.css")}}
	{{HTML::style("css/jquery.jscrollpane.css")}}
	{{HTML::script("js/jquery.js")}}
	{{HTML::script("js/bootstrap.min.js")}}
	{{HTML::script("js/jquery.dataTables.min.js")}}
	{{HTML::script("js/alertify.min.js")}}
	{{HTML::script("js/lehkat.min.js")}}
	{{HTML::script("js/spectrum.js")}}
	{{HTML::script("js/jquery.mousewheel.js")}}
	{{HTML::script("js/jScrollPane.js")}}
	{{HTML::script("js/SelectBox.js")}}
	{{HTML::script("js/main.js")}}
	<link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png">
	<meta charset="UTF-8">
	<title>senport</title>
</head>
<body>
	<header class="ui-blue container text-center ui-text-blue padding-mid">
	<nav class="capitalCase">
		@if(Auth::user())
			@if(Auth::user()->account_type==3 || Auth::user()->account_type==6
				|| Auth::user()->account_type==5)
				<div class="col-xs-2 ui-white col-xs-offset-1 padding-mid cursor-pointer rounded-all top-buffer-small">
					<a class="" href="{{URL::to('app')}}">app</a>
				</div>
			@elseif(Auth::user()->account_type==2 || Auth::user()->account_type==4)
				<div class="col-xs-2 ui-white col-xs-offset-1 padding-mid cursor-pointer rounded-all top-buffer-small">
					<a class="" href="{{URL::to('app')}}">report</a>
				</div>
			@elseif(Auth::user()->account_type==1)
			<div class="col-xs-2 ui-white  padding-small cursor-pointer rounded-all top-buffer-small ">
				<a href="{{URL::to('itunes')}}" class="">
					<span class="smallCase">i</span>Tunes accounts
				</a>
			</div>
			<div class="col-xs-2">
				<div class="col-xs-12 ui-white padding-small cursor-pointer rounded-all top-buffer-small">
					<a class="" href="{{URL::to('root')}}">root project</a>
				</div>
			</div>
			<div class="col-xs-2">
				<div class="hidden-x col-xs-1 ui-white col-xs-offset-1 padding-small cursor-pointer rounded-all top-buffer-small ">
					<a href="{{URL::to('status')}}" class="">status(</a>
				</div>
				
				<div class="col-xs-12 ui-white col-xs-offset-1 padding-small cursor-pointer rounded-all top-buffer-small">
					<a class="" href="{{URL::to('app')}}">app</a>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="col-xs-5 pull-left ui-white col-xs-offset-1 padding-small cursor-pointer rounded-all top-buffer-small ">
					<a href="{{URL::to('app/statusList')}}" class="">status</a>
				</div>
				<div class="col-xs-5 ui-white col-xs-offset-1 padding-small cursor-pointer rounded-all top-buffer-small">
					<a class="" href="{{URL::to('stats')}}">statistics</a>
				</div>
			</div>
			<div class="col-xs-2">
				<div class="col-xs-6 ui-white hidden-x padding-small cursor-pointer rounded-all top-buffer-small ">
					<a href="{{URL::to('sdk')}}" class="">SDK</a>
				</div>
				<div class="col-xs-11 col-xs-offset-1 ui-white  padding-small cursor-pointer rounded-all top-buffer-small ">
					<a href="{{URL::to('user')}}" class="">user</a>
				</div>
			</div>
			
			
			
			<div class="col-xs-1 hidden-x ui-white col-xs-offset-1 padding-small cursor-pointer rounded-all top-buffer-small ">
				<a href="{{URL::to('rep')}}" class="">report var</a>
			</div>
			
			@endif
			<div class="col-xs-1 pull-right">
				<a class="ui-text-white" href="{{URL::to('logout')}}">Logout</a>
			</div>
		@else
		<div class="ui-white col-xs-offset-1 padding-small cursor-pointer rounded-all top-buffer-small ">
		<h2>welcome guest</h2>
		</div>
		@endif
	</nav>
		
	</header>
	<div class="clearfix"></div>
	<div class="container">
		@yield("content")
	</div>
	<footer>
		<!-- notification -->
		<script type="text/javascript">
		$(function(){
		
		@if((Session::get("error")))
			alertify.error("{{Session::get('error')}}");
		@elseif(Session::get("success"))
			alertify.success("{{Session::get('success')}}");
		@endif

		})
		</script>
	</footer>
</body>
</html>