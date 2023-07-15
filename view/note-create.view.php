<?php require "partials/header.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/generic.php" ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 mt-6 bg-white rounded">
        <div class="w-1/2 mx-auto">
            <form class="space-y-2 flex flex-col" method="post">
                <div>
                    <label for="Username" class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 font-semibold">
                        <input type="text" id="Username" name="title" class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 p-4" placeholder="Title" />
                        <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                            Title
                        </span>
                    </label>
                </div>
                <div>
                    <textarea name="body" id="" rows="10" class="w-full border rounded text-lg p-4 resize-none overscroll-contain focus:outline-blue-500" placeholder="Here's a new idea..."></textarea>
                </div>
                <div class="self-end">
                    <button type="submit" name="submitForm" class="inline-flex items-center gap-2 rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500" href="">
                        <span class="text-sm font-medium"> Create </span>

                        <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php require "partials/footer.php" ?>