@include('inc.header')

<div class="container">

<div class="row">
<legend>LARAVEL CRUD APPLICAtion</legend>
@if(session('info'))
<div class="col-mg-6 alert alert-sucess">
{{session('info')}}
</div>

@endif
<table class="table table-hover">

<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">TITLE</th>
<th scope="col">Description</th>
<th scope="col">Action</th>
</tr>
</thead>

<tbody>
@if(count($articles) > 0)
@foreach($articles->all() as $article)



<tr class="table-active">
<th scope="row">{{ $article->id }}</th>
<td>{{ $article->title }}</td>
<td>{{ $article->description }}</td>
<td>
<a href='{{url("/read/{$article->id}")}}' class="label label-primary">Read</a>
<a href='{{url("/update/{$article->id}")}}' class="label label-sucess">update</a>
<a href='{{url("/delete/{$article->id}")}}' class="label label-sucess">delete</a>
</td>
</tr>
@endforeach
@endif
</tbody>
</table> 
</div>
</div>
@include('inc.footer')