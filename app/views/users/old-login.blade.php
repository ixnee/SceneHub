{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
    <h2 class="form-signin-heading">Please Log In</h2>
 
    {{ Form::text('username', null, array('class'=>'input-block-level', 'placeholder'=>'Username')) }}
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
 
    {{ Form::submit('Log In', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}