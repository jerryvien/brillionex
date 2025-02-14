<?php include 'header.php'; ?>

<style>
  .full-screen-main {
    /* Adjust the 160px offset if your header/footer heights differ */
    min-height: calc(100vh - 160px);
    background: url('assets/img/your-background.jpg') center center/cover no-repeat;
    padding-top: 100px;   /* to avoid overlap with fixed header */
    padding-bottom: 100px; /* to ensure space for the footer */
  }
</style>

<main class="main full-screen-main">
  <div class="container text-center">
    <h1 class="text-white">Blank Page</h1>
    <p class="text-white">This page has a full-screen background. Add your content below.</p>
    <!-- Filler content to force scrolling -->
    <div style="height: 200vh;"></div>
  </div>
</main>

<?php include 'footer.php'; ?>
