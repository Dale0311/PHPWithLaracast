<?php require basePath("view/partials/header.php") ?>
<?php require basePath("view/partials/nav.php") ?>
<?php require basePath("view/partials/generic.php") ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 mt-6 bg-white rounded">
        <div class="w-1/2 mx-auto">
            <form class="space-y-2 flex flex-col" method="post" action="/notes">
                <div>
                    <label for="Username" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 font-semibold">
                        <input type="text" id="Username" name="title" class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4" placeholder="Title" value="<?= $_POST['title']?? '' ?>"/>
                        <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                            Title
                        </span>
                    </label>
                    <?php if(isset($error['title'])) :?>
                        <p class="text-red-500 text-sm"><?= $error['title'] ?></p>
                    <?php endif ?>
                </div>
                <div>
                    <textarea name="body" id="" rows="10" class="w-full border rounded text-lg p-4 resize-none overscroll-contain focus:outline-blue-500" placeholder="Here's a new idea..."><?= $_POST['body']?? '' ?></textarea>
                    <?php if(isset($error['body'])) :?>
                        <p class="text-red-500 text-sm"><?= $error['body'] ?></p>
                    <?php endif ?>
                    <?php if(isset($error['bodyMaxLimit'])) :?>
                        <p class="text-red-500 text-sm"><?= $error['bodyMaxLimit'] ?></p>
                    <?php endif ?>
                </div>
                <div class="self-end">
                    <button type="submit" class="inline-flex items-center gap-2 rounded border border-blue-600 bg-blue-600 px-8 py-3 text-white hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500">
                        Create 
                        <i class="fa-regular fa-plus"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php require basePath("view/partials/footer.php") ?>


