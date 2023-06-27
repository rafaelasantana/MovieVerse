<?php
$page = "about";
session_start();
include "header.php";
include "navbar.php";
?>

<main>
  <div class="row justify-content-center my-4">
    <div class="col-xs-10 col-lg-6">
      <div class="row mb-3">
        <h2 class="text-center">Our Story</h2>
        <div>MovieVerse was founded in 2023 by a group of movie enthusiasts who wanted to create a platform where people can easily find great movies to watch. Our goal is to help you discover new and exciting films that you might not have heard of before.</div>
      </div>

      <div class="row mb-3">
        <h2 class="text-center">Our Team</h2>
          <div class="text-center">
            <div><strong>Rafaela Santana</strong> - Co-founder</div>
            <div><strong>Livia Zylja</strong> - Co-founder</div>
            <div><strong>Shpetim Shkrelaj</strong> - Co-founder</div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <h2 class="text-center">Contact Us</h2>
        <p class="text-center">If you have any questions or feedback, don't hesitate to contact us:</p>
        <div class="text-center">
          <div>Email: <a href="mailto:contact@movieverse.com">contact@movieverse.com</a></div>
          <div>Phone: +43-111-11111111</div>
          <div>Address: 123 Irgendeinestrasse, Vienna, Austria</div>
        </div>
      </div>

    </div>
  </div>
</main>

<?php
  include "footer.php";
?>