<?php include 'header.php'; ?>

<!-- Optional inline CSS for the blank page -->
<style>
  /* Adjust this value based on your header and footer heights */
  .full-screen-main {
    /* Subtracting an estimated total of 160px (e.g., 80px header + 80px footer) */
    min-height: calc(100vh - 160px);
    background: url('assets/img/your-background.jpg') center center/cover no-repeat;
    padding-top: 100px;  /* offset for fixed header */
    padding-bottom: 100px;  /* space above footer */
  }
</style>

<!-- Main section with full-screen background -->
<main class="main full-screen-main">
  <div class="container text-center">
    <h1 class="text-white">Blank Page</h1>
    <p class="text-white">This page has a full-screen background. Add your content below.</p>
    <!-- Filler content to demonstrate scrolling -->
    <div style="height: 200vh;"></div>
  </div>
</main>

<?php include 'footer.php'; ?>
