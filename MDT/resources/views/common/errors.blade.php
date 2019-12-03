<style type="text/css">
.alert.alert-danger ul strong {
	font-size: 36px;
}
.alert.alert-danger ul strong {
	font-size: 24px;
}
.alert.alert-danger ul strong {
	font-size: 16px;
}
</style>
@if ($errors->any())

<div class="alert alert-danger"> 
        	<ul>
        	  <strong>            	@foreach($errors->all() as $error)
   			  </strong>
        	  <li><strong>{{ $error }}</strong></li>
        	  <strong>        		@endforeach
              </strong>
        	</ul>
    	</div>
@endif