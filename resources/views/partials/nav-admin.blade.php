<div id="navbar_top" class="row navbar shadow bg-white">
  <div class="col-2 text-center">
    <b>LOGO</b> 
  </div>
  <div class="col-7">
    <b>#SemuaBisaPunyaEmas</b> 
  </div>
  <div class="col-3">
    <label for="" class="d-flex gap-3 ">
        <img src="/img/FotoYudaz.jpg" alt="mdo" width="40" height="40" class="rounded-circle">
          <span class="pt-1">
            <strong>{ Nama Customer }</strong>
            <small class="d-block">Customer</small>
          </span>
          <a href="#" class="d-block link-dark text-decoration-none text-center p-3" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/img/down-arrow-solid-24.png" alt="" width="15" height="15" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow ">
            <li><a class="dropdown-item " href="#">Settings</a></li>
            <li><a class="dropdown-item " href="#">Profile</a></li>
            <li><hr class="dropdown-divider "></li>
            <li><a class="dropdown-item " href="#">Sign out</a></li>
          </ul>
    </label>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          document.getElementById('navbar_top').classList.add('fixed-top');
          // add padding top to show content behind navbar
          navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.getElementById('navbar_top').classList.remove('fixed-top');
          // remove padding top from body
          document.body.style.paddingTop = '0';
        } 
    });
  }); 
  // DOMContentLoaded  end
</script>