<style type="text/css">
.alert.alert-success strong {
	font-size: 36px;
}
.alert.alert-success strong {
	font-size: 24px;
}
</style>
@if(session('status'))
<div class="alert alert-success"><strong>
   	{{session('status')}}
</strong></div>
@endif