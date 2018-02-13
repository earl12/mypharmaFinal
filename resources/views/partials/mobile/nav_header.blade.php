
<li>
  <div class="sidenav-header">

   <nav class="searchnav">
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label for="search"><i class="ion-android-search"></i></label>
          <i class="ion-android-close"></i>
        </div>
      </form>
    </div>
  </nav>

  <!-- Social Bar -->
  <div class="nav-social">
    <i class="ion-social-facebook"></i>
    <i class="ion-social-twitter"></i>
    <i class="ion-social-tumblr"></i>
  </div>

  <div class="nav-avatar">

    <img class="circle avatar" src="{{ asset('assets/img/avatars/user5.jpg') }}">


    <h3>Mypharma</h3>
    <div class="avatar-body">
      <h3>{{ Auth::user()->name }} </h3>
      <p>{{ Auth::user()->role->name}}</p>
    </div>
  </div>
</div>



</li>
