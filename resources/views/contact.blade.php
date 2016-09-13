@extends('layout.app')

@section('content')
<div class="container">
    <div class="content">
    <center><h1>Contact Me</h1></center>
	<div class="row">
    <div class="col s4">
        <strong><h4>Tsani Nashrullah</h4></strong>
        <img src="images/avatar.jpg" class="responsive-img circle" width="50%">
    </div>
    <div class="col s8">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="fa fa-user prefix"></i>
          <input id="icon_prefix" type="email" data-error="Your email is incorrect" class="validate">
          <label for="icon_prefix">Email</label>
        </div>
        <div class="input-field col s12">
          <i class="fa fa-newspaper-o prefix"></i>
          <textarea id="textarea1" class="materialize-textarea" rows="10"></textarea>
          <label for="textarea1">Messages</label>
        </div>
      </div>
    </form>
    </div>
	</div>
        <div class="col s12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
		$('#textarea1').val('');
		$('#textarea1').trigger('autoresize');
    });
</script>
@endsection