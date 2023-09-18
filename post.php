<?php
    include_once ("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach ($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"> <?= $currentPost['title'] ?></h1>
        <p id="post-description"> <?= $currentPost['description']?></p>
       
        <div class="img-container">
         <img src="<?= $BASE_URL ?>/img/<?=$currentPost['img']?>" alt="<?= $currentPost['title'] ?>">
        </div>

        <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum veniam culpa aliquid ducimus delectus molestias commodi. Velit asperiores provident eveniet odit nesciunt similique incidunt vitae praesentium possimus omnis! Facere, odio.
        Ea, a inventore? Officia, quas voluptatibus facilis dolor ut eaque reiciendis, atque molestias maiores facere cum dicta itaque nemo at distinctio sunt numquam? Ex itaque adipisci officiis placeat, officia maiores.
        Quisquam laborum unde repellat eaque? Ea ipsum nostrum beatae dignissimos corrupti rem! Sit, ea. Commodi voluptatibus at aliquid rerum dicta, dignissimos sint fugiat assumenda expedita possimus vitae sequi praesentium pariatur?
        Dolor quaerat ad consequatur similique saepe nesciunt eius aliquam alias minus culpa est quae, iusto quia nobis rerum voluptatum explicabo minima tempora totam perferendis sint officiis mollitia laborum qui! Consequatur.
        Sit numquam praesentium sunt error laboriosam, perspiciatis in voluptatum illo consectetur dicta, veniam soluta assumenda. Est dolor expedita provident impedit commodi, ipsa sapiente harum perferendis. Ratione tenetur amet molestias velit?</p>
    </div>

    <aside id="nav-container">

    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
        </ul>

    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
    </ul>   
    
    </aside>

    </main>



<?php include_once ("templates/footer.php") ?>