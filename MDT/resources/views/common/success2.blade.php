<style type="text/css">
.alert.alert-danger strong {
	font-size: 36px;
}
.alert.alert-danger strong {
	font-size: 24px;
}
</style>
@if(session('status2'))
<div class="alert alert-danger"><strong>
   	{{session('status2')}}
</strong></div>
@endif