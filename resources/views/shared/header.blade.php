 <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-list"></i></a>
      <ul class="right hide-on-med-and-down">
        <li>{{ link_to('home', 'Home', array('class' => 'waves-effect')) }}</li>
        <li>{{ link_to('profile', 'Profile', array('class' => 'waves-effect')) }}</li>
        <li>{{ link_to('contact', 'Contact', array('class' => 'waves-effect')) }}</li>
        <li>{{ link_to('employees', 'Employee', array('class' => 'waves-effect')) }}</li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li>{{ link_to('home', 'Home', array('class' => 'waves-effect')) }}</li>
        <li>{{ link_to('profile', 'Profile', array('class' => 'waves-effect')) }}</li>
        <li>{{ link_to('contact', 'Contact', array('class' => 'waves-effect')) }}</li>
        <li>{{ link_to('employees', 'Employee', array('class' => 'waves-effect')) }}</li>
      </ul>
    </div>
  </nav>
  <script type="text/javascript">
    $( document ).ready(function(){
      $(".button-collapse").sideNav();
    })
  </script>