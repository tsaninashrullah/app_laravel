 <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-list"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home">Home</a></li>
        <li><a href="profile">Profile</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="employees">Employee</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="home">Home</a></li>
        <li><a href="profile">Components</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="employees">Employee</a></li>      
      </ul>
    </div>
  </nav>
  <script type="text/javascript">
    $( document ).ready(function(){
      $(".button-collapse").sideNav();
    })
  </script>