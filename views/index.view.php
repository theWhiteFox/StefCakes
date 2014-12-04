<h1>My Blog By SteJ</h1>
<?php foreach ($posts as $post) : ?>
   <article>
      <h2><a href="single.php?post_id=<?= $post['post_id']; ?>"><?= $post['title']; ?></a></h2> 
      <div class="body"><?= $post['body']; ?></div>      
   </article>
<?php endforeach; ?>
<div><a href="/admin/">Admin</a><br>
   <a href="https://github.com/Stevo5o/StephCakeBlog">GitHub Code</a></div>
