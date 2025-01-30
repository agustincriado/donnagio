<?php
function get_footer () {
  ob_start();
  ?>
  <style>
    .cards-container {
      position: fixed;
      z-index: 100;
      left: 0;
      bottom: 0;
      width: 100%;
      display: flex;
      flex-flow: row wrap;
      gap: 1.5rem;
      background-color: #f5f5f7;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    @media (max-width: 480px) {
      .cards-container {
        display: flex;
        flex-flow: column;
      }
    }
  </style>
  <section class="cards-container">
      <a class="card" href="massei.php"><h2 class="card-address">Via Massei</h2></a>
      <a class="card" href="mazzini.php"><h2 class="card-address">Via Mazzini</h2></a>
      <a class="card" href="petronio.php"><h2 class="card-address">via San Petronio Vecchio</h2></a>
      <a class="card" href="saragozza.php"><h2 class="card-address">Via Saragozza</h2></a>
      <a class="card" href="valencia.php"><h2 class="card-address">Valencia ES</h2></a>
    </section>
    <?php
  $content = ob_get_clean();
  return $content;
}

?>