<template>
 <div class="page fullscreen bg-blur animated fadeinright">

  <!-- Clock -->
  <div class="clock center-align animated fadein delay-2">
    <h2>13:45</h2>
    <span>Monday, June 20</span>
  </div>

  <ul class="collection notify">
    <li class="collection-item white z-depth-1 dismissable animated fadeinup delay-2">
      <div class="notify-header">
        <img class="avatar circle" src="img/user4.jpg" alt="">
        <div class="notify-author">
          <span>Jassie North</span>
          <span class="truncate">My dear friend so absorbed in the exquisite sense of mere tranquil existence</span>
          <span class="small">1 hour ago</span>
        </div>
      </div>
    </li>
    <li class="collection-item white z-depth-1 dismissable animated fadeinup delay-3">
      <div class="notify-header">
        <div class="unknow-avatar primary-color">
          <span>A</span>
        </div>
        <div class="notify-author">
          <span>Alberth Jones</span>
          <span class="truncate">3 new emails</span>
          <span class="small">5 minago</span>
        </div>
      </div>
    </li>
    <li class="collection-item white z-depth-1 dismissable animated fadeinup delay-4">
      <div class="notify-header">
        <img class="avatar circle" src="img/user2.jpg" alt="">
        <div class="notify-author">
          <span>Camilla Lee</span>
          <span class="truncate">I throw myself down among the tall grass by the trickling stream</span>
          <span class="small">5 minago</span>
        </div>
      </div>
    </li>
  </ul>

  <!-- Unlock -->
  <div class="animated bouncein delay-6">
    <div class="unlock">
      <a href="/"><i class="ion-android-lock"></i></a>
    </div>
  </div>

</div> 
<!-- End of Page Contents -->

</template>

<script>
export default {

  name: 'LockScreen',

  data () {
    return {

    };
  }
};
</script>

<style lang="css" scoped>
</style>