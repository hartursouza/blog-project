<?php
    include_once("./templates/header.php");

    $currentPost;

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        

        foreach($posts as $post){
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?=$currentPost['title']?></h1>
        <p id="post-description"><?=$currentPost['description']?></p>
        <div class="img-container">
            <img src="<?=$BASE_URL?>/img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
        </div>
        <p class="post-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam fuga sed mollitia itaque tempora recusandae
            ipsa perferendis ab, excepturi voluptatibus minus rerum blanditiis, voluptatum nihil labore officiis, et
            odio voluptates?
            Minus, nesciunt cumque ducimus nihil magni cum minima praesentium rem quae enim mollitia delectus blanditiis
            molestiae itaque pariatur aliquam atque aspernatur ut debitis fuga architecto consequatur! Explicabo ex sunt
            fuga.
            Aliquam odio quidem, natus, veniam unde quibusdam architecto molestias officiis neque magni ad sint. Iure
            quis dolores laudantium corrupti culpa nesciunt reprehenderit consectetur ducimus, suscipit unde vel in
            maxime magni.
            Sapiente blanditiis nam quisquam suscipit error dignissimos, aut quam voluptatum id, ducimus similique
            delectus dicta asperiores, amet sit at assumenda quae est magni quibusdam commodi neque. Officiis nihil
            vitae cumque!
            Commodi voluptas placeat cum vel enim rem dolor omnis assumenda sint. Fugit blanditiis voluptatum, nesciunt
            magni officiis sint vitae quasi rem culpa quidem eaque suscipit sapiente amet aliquid minus alias.
        </p>
        <p class="post-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam fuga sed mollitia itaque tempora recusandae
            ipsa perferendis ab, excepturi voluptatibus minus rerum blanditiis, voluptatum nihil labore officiis, et
            odio voluptates?
            Minus, nesciunt cumque ducimus nihil magni cum minima praesentium rem quae enim mollitia delectus blanditiis
            molestiae itaque pariatur aliquam atque aspernatur ut debitis fuga architecto consequatur! Explicabo ex sunt
            fuga.
            Aliquam odio quidem, natus, veniam unde quibusdam architecto molestias officiis neque magni ad sint. Iure
            quis dolores laudantium corrupti culpa nesciunt reprehenderit consectetur ducimus, suscipit unde vel in
            maxime magni.
            Sapiente blanditiis nam quisquam suscipit error dignissimos, aut quam voluptatum id, ducimus similique
            delectus dicta asperiores, amet sit at assumenda quae est magni quibusdam commodi neque. Officiis nihil
            vitae cumque!
            Commodi voluptas placeat cum vel enim rem dolor omnis assumenda sint. Fugit blanditiis voluptatum, nesciunt
            magni officiis sint vitae quasi rem culpa quidem eaque suscipit sapiente amet aliquid minus alias.
        </p>
        <p class="post-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam fuga sed mollitia itaque tempora recusandae
            ipsa perferendis ab, excepturi voluptatibus minus rerum blanditiis, voluptatum nihil labore officiis, et
            odio voluptates?
            Minus, nesciunt cumque ducimus nihil magni cum minima praesentium rem quae enim mollitia delectus blanditiis
            molestiae itaque pariatur aliquam atque aspernatur ut debitis fuga architecto consequatur! Explicabo ex sunt
            fuga.
            Aliquam odio quidem, natus, veniam unde quibusdam architecto molestias officiis neque magni ad sint. Iure
            quis dolores laudantium corrupti culpa nesciunt reprehenderit consectetur ducimus, suscipit unde vel in
            maxime magni.
            Sapiente blanditiis nam quisquam suscipit error dignissimos, aut quam voluptatum id, ducimus similique
            delectus dicta asperiores, amet sit at assumenda quae est magni quibusdam commodi neque. Officiis nihil
            vitae cumque!
            Commodi voluptas placeat cum vel enim rem dolor omnis assumenda sint. Fugit blanditiis voluptatum, nesciunt
            magni officiis sint vitae quasi rem culpa quidem eaque suscipit sapiente amet aliquid minus alias.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-list">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag):?>
            <li><a href="#"><?=$tag?></a></li>
            <?php endforeach;?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category):?>
            <li><a href="#"><?=$category?></a></li>
            <?php endforeach;?>
        </ul>
    </aside>

</main>

<?php 
    include_once("./templates/footer.php");
?>