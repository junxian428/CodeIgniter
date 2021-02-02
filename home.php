<section>
    <div class="jumbotron">
      <div class= "container">
         <h1 class="display-4">I m handsome! </h1>
         <p class="lead">Check this out </p>

       </div>
    </div>


</section>


<section class="blog-section">

  <div class="container">
    <?php  if ($news): ?>
      <?php foreach ($news as $newsItem): ?>
               <h3> <?php $newsItem['title'] ?> </h3>
      <?php endforeach; ?>

    <?php else: ?>
      <p class="text-center"> No posts Have been found</p>
      <?php endif; ?>

  </div>


</section>
