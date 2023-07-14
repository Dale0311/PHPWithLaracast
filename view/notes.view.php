<?php require "partials/header.php" ?>
    <?php require "partials/nav.php" ?>
    <?php require "partials/generic.php" ?>
    <?php 
        $config = require "config.php";
        $db=  new Database($config['database']);
        $pdo = $db->con();
        $blogs = new Blog($pdo, "post");
        $post = $blogs->getBlog(1);

        $arrPost=[];
        if($post->rowCount() > 1){
            foreach ($post->fetchAll() as $key => $row) {
                $arrPost[]=$row;
            }
        }
        elseif($post->rowCount() === 1){
            $arrPost = $post->fetch();
        }
        else{
            $arrPost['message'] = "No record Found";
        }

    ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <ul>
                <?php foreach($arrPost as $key => $row): ?>
                    <li>
                        <a href="note?id=<?=$row["id"]?>" class='text-blue-500 text-xl hover:underline'>
                            <?= $row['title'] ?>
                        </a>
                    </li>
                    <br>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
<?php require "partials/footer.php" ?>
