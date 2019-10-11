@include('inc.header')
<div class="container">
<div class="row">
<div class="col-md-6">
<form class="form-horizontal" method="POST" action="{{url('/edit',array($articles->id))}}">
{{csrf_field()}}

<fieldset>
<legend>LARAVEL CRUD APPLICAtion</legend>
	@if(count($errors) >0 )
		@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			{{$error}}
		</div>

		@endforeach
	@endif
<div class="form-group">
<div class="row">
<label for="exampleInputtitle">title</label> 
<div class="col-md-6">
<input type="text" name="title" class="form-control" value="<?php echo $articles->title; ?>" id="exampleInputEmail1"  	aria-describedby="emailHelp" placeholder="title">				
</div>
</div>
</div>


<div class="form-group">
<div class="row">
<label for="exampleInputEmail1"> description</label> 
<div class="col-md-6">

<textarea class="form-control" name="description" placeholder="description">
	<?php echo $articles->description; ?>
</textarea>			
</div>
</div>
</div>





</fieldset>
<button type="submit" class="btn btn-primary">update</button>
<a href="{{url('/')}}" class="btn btn-primary">back</a>

</form> 
</div>
</div>
</div>

@include('inc.footer')