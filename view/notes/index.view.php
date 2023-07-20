<?php require basePath("view/partials/header.php")?>
    <?php require basePath("view/partials/nav.php")?>
    <?php require basePath("view/partials/generic.php")?>
    <main>
        <div class="mx-auto lg:w-1/3 bg-white my-5 rounded py-6 px-2">
            <ul class="space-y-2">
                <?php if(!$arrPost): ?>
                    <h1 class="my-4 text-lg font-semibold">No notes</h1>
                <?php endif ?>
                <?php foreach($arrPost as $key => $row): ?>
                    <a href="notes/show?id=<?=$row["id"]?>" class=''>
                        <li class="bg-gray-200 p-4 rounded hover:bg-gray-300">
                            <form method="post">
                                <div class="flex justify-between items-center">
                                    <h1 class="font-semibold"><?= $row['title'] ?></h1>
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full px-5 py-2.5 text-center mr-2 mb-2 group">
                                        <i class="fa-regular fa-trash"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </a>
                    <br>
                <?php endforeach; ?>
            </ul>
            <p>
                <a class="inline-flex items-center gap-2 rounded border border-blue-600 bg-blue-600 px-8 py-3 text-white hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500" href="/notes/create">
                    Create 
                    <i class="fa-regular fa-pen"></i>
                </a>
            </p>
        </div>
    </main>
<?php require basePath("view/partials/footer.php") ?>
