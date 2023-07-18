<?php require basePath("view/partials/header.php")?>
    <?php require basePath("view/partials/nav.php")?>
    <?php require basePath("view/partials/generic.php")?>
    <main>
        <div class="mx-auto lg:w-1/3 bg-white my-5 rounded py-6 px-2">
            <ul class="space-y-2">
                <?php foreach($arrPost as $key => $row): ?>
                    <a href="notes/show?id=<?=$row["id"]?>" class=''>
                        <li class="bg-gray-200 p-4 rounded hover:bg-gray-300">
                            <h1 class="font-semibold"><?= $row['title'] ?></h1>
                        </li>
                    </a>
                    <br>
                <?php endforeach; ?>
            </ul>

            <p>
                <a href="notes/create" class="py-2 px-4 bg-blue-500 text-white hover:bg-blue-600 rounded">Create a note</a>
            </p>
        </div>
    </main>
<?php require basePath("view/partials/footer.php") ?>
