<?php require "partials/header.php" ?>
    <?php require "partials/nav.php" ?>
    <?php require "partials/generic.php" ?>
    <main class="w-1/2 mx-auto">
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div>
                <div class="space-y-3 text-gray-700">
                    <h1 class="text-sm">Blog: #<?= $arrRow['id'] ?></h1>
                    <h1 class="text-lg font-bold"><?= $arrRow['title'] ?></h1>
                    <p><?= $arrRow['body'] ?></p>
                    <h1 class="text-blue-500 font-semibold text-xl">Created By: user_<?= $arrRow['user_id'] ?></h1>
                </div>
                
            </div>
        </div>
    </main>
<?php require "partials/footer.php" ?>
