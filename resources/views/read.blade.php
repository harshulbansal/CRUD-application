@include('inc.header')

<div class="container">

<div class="row">
<legend>read article</legend>
 <p class="lead">{{ $articles->title }}</p>

 
</div>
<div class="row"><p >{{ $articles->description }}</p></div>

</div>
@include('inc.footer')