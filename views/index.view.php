<h1><?php echo $name?> Blogging</h1>
<?php $c = true;
foreach ($posts as $post) : ?>
   <article class="<?= ($c = !$c) ? 'odd' : NULL ?>">
      <div id="posted">
         <div id="post">
            <h2><a href="single.php?post_id=<?= $post['post_id']; ?>"><?= $post['title']; ?></a></h2> 
            <div class="body"><?= $post['body']; ?></div>            
            <div class="date"><?= "Post By: $name " ?><?= date('d/m/Y', strtotime($post['date'])); ?></div>
         </div>
      </div>
   </article>
<?php endforeach; ?>
<div><p><button onclick="location.href = 'admin/'">Post</button></p>
   <hr style="border:dashed #009999; border-width:1px 0 0 0; height:0;line-height:0px;font-size:0;margin:0;padding:0;">
   <p><button onclick="location.href = 'https://github.com/Stevo5o/StephCakeBlog'">GitHub</button></p>