<?php require "partials/header.php" ?>
    <?php require "partials/nav.php" ?>
    <?php require "partials/generic.php" ?>
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

            <p>
                <a href="note-create" class="py-2 px-4 bg-blue-500 text-white hover:bg-blue-600 rounded">Create a note</a>
            </p>
        </div>
    </main>
<?php require "partials/footer.php" ?>
