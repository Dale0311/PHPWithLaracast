<?php require basePath("view/partials/header.php") ?>
<?php require basePath("view/partials/nav.php") ?>
<?php require basePath("view/partials/generic.php") ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 mt-6 bg-white rounded">
        <div class="w-1/2 mx-auto">
            <a class="inline-flex items-center gap-2 rounded border border-red-600 bg-red-600 px-8 py-3 text-white hover:bg-transparent hover:text-red-600 focus:outline-none focus:ring active:text-red-500 my-4" href="/notes">
                <i class="fa-regular fa-arrow-left"></i>
                <span class="text-sm font-medium"> Cancel/Go Back </span>
            </a>
            <form class="space-y-2 flex flex-col" method="post" action="/notes">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="id" value="<?= $arrRow['id'] ?>">
                <input type="hidden" name="user_id" value="<?= $arrRow['user_id'] ?>">
                <div>
                    <label for="Username" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 font-semibold">
                        <input type="text" id="Username" name="title" class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4" placeholder="Title" value="<?= $arrRow['title'] ?>"/>
                        <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                            Title
                        </span>
                    </label>
                    <?php if(isset($error['title'])) :?>
                        <p class="text-red-500 text-sm"><?= $error['title'] ?></p>
                    <?php endif ?>
                </div>
                <div>
                    <textarea name="body" id="" rows="10" class="w-full border rounded text-lg p-4 resize-none overscroll-contain focus:outline-blue-500" placeholder="Here's a new idea..."><?= $arrRow['body'] ?></textarea>
                    <?php if(isset($error['body'])) :?>
                        <p class="text-red-500 text-sm"><?= $error['body'] ?></p>
                    <?php endif ?>
                    <?php if(isset($error['bodyMaxLimit'])) :?>
                        <p class="text-red-500 text-sm"><?= $error['bodyMaxLimit'] ?></p>
                    <?php endif ?>
                </div>
                <div class="self-end">
                    <button type="submit" name="submitForm" class="inline-flex items-center gap-2 rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                        <span class="text-sm font-medium"> update </span>

                        <i class="fa-regular fa-upload"></i>
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
</main>
<?php require basePath("view/partials/footer.php") ?>

<?php die(); ?>

<?php require basePath("view/partials/header.php") ?>
    <?php require basePath("view/partials/nav.php") ?>
    <?php require basePath("view/partials/generic.php") ?>
    <main class="w-1/2 mx-auto">
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div>
                <div class="space-y-4 text-gray-700">
                    <h1 class="text-sm">Blog: #<?= $arrRow['id'] ?></h1>
                    <h1 class="text-lg font-bold"><?= $arrRow['title'] ?></h1>
                    <p><?= $arrRow['body'] ?></p>
                    <h1 class="font-semibold text-sm">Created By: user_<?= $arrRow['user_id'] ?></h1>
                    <div class="">
                        <a href="../notes" class="text-blue-500 hover:underline">Go back to notes</a>
                        <form method="post">
                            <input type="hidden" name="">
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </main>
<?php require basePath("view/partials/footer.php") ?>
