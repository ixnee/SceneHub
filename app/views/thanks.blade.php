@extends('layouts.default')

@section('title')
	| Thanks
@stop

@section('content')

<article id="mainContent">
    <h1>You Signed Up!</h1>
    <article class="post">
      <h2>Thanks for registering</h2>
      <p>You've registered {{ $username }}.</p>
</article>
  </article>
 @stop