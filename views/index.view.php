<h1><?php echo $name?> Blogging</h1>
<?php $c = true;
foreach ($posts as $post) : ?>
   <article class="<?= ($c = !$c) ? 'odd' : NULL ?>">     
         <div id="post">
            <h2><a href="single.php?post_id=<?= $post['post_id']; ?>"><?= $post['title']; ?></a></h2> 
            <div class="body"><?= ellipsis($post['body'],150); ?></div>            
            <div class="date"><?= "Post By: $name " ?><?= date('d/m/Y', strtotime($post['date'])); ?></div>
             <a style="font-size:80%" href="single.php?post_id=<?= $post['post_id']; ?>">Read Article &#8594;</a>
         </div>    
   </article>
<?php endforeach; ?>
<div><p><button onclick="location.href = 'admin/'">Post</button></p>
   <hr style="border:dashed #009999; border-width:1px 0 0 0; height:0;line-height:0px;font-size:0;margin:0;padding:0;">
   <p><button onclick="location.href = 'https://github.com/Stevo5o/StephCakeBlog'">GitHub</button></p>
   <div align="center"><img src="img/3.jpg" class="bg"></div>