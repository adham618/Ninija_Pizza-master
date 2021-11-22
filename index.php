<?php
include('config/db_connect.php');
// write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';
// make query and get results
$results = mysqli_query($connect, $sql);
// fetch the results rows as an array
$pizzas = mysqli_fetch_all($results, MYSQLI_ASSOC);
// free results from memmory
mysqli_free_result($results);
// close the connection to database
mysqli_close($connect);
//explode(',', $pizzas[0]['ingredients']);
?>
<?php include("template/header.php"); ?>
<h4 class="center grey-text">Pizzas!</h4>
<div class="container">
  <div class="row">
    <?php foreach ($pizzas as $pizza) :  ?>

      <div class="col s6 md3">
        <div class="card z-depth-0">
          <img src="img/pizza.svg" class="pizza" />
          <div class="card-content center">
            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
            <ul class="grey-text">
              <?php foreach (explode(',', $pizza['ingredients']) as $ing) :  ?>
                <li><?php echo htmlspecialchars($ing); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="card-action right-align">
            <a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">more info</a>
          </div>
        </div>
      </div>

    <?php endforeach; ?>
    <?php if (count($pizzas) >= 3) : ?>
      <p> there are 3 or more pizzas</p>
    <?php else : ?>
      <p>there are less than 3 pizzas</p>
    <?php endif; ?>
  </div>
</div>
<?php include("template/footer.php"); ?>