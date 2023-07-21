<?php view("partials/header.php") ?>
  <main class="h-screen w-screen flex justify-center items-center bg-white">
    <div class="flex w-1/3 flex-col justify-center px-6 py-12 lg:px-8 bg-[#F3F4F6] rounded">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create account</h2>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="/register" method="POST">
          <div>
            <label for="nickname" class="block text-sm font-medium leading-6 text-gray-900">Nick name</label>
            <div class="mt-2">
              <input id="nickname" name="name" type="text" autocomplete="nickname"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?= $error['nameInput']?? "" ?>">
              <p class="text-red-500 text-sm font-semibold my-1"><?= $error['name']?? "" ?></p>
            </div>
          </div>

          <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?= $error['emailInput']?? "" ?>">
              <?php if($error?? ""): ?>
                <?php if($error['emailExist']?? ""): ?>
                  <p class="text-red-500 text-sm font-semibold my-1"><?= $error['emailExist'] ?></p>
                <?php else: ?>
                  <p class="text-red-500 text-sm font-semibold my-1"><?= $error['email']?? "" ?></p>
                <?php endif ?>
              <?php endif ?>
            </div>
          </div>

          <div>
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            </div>
            <div class="mt-2">
              <input id="password" name="password" type="password" autocomplete="current-password"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <p class="text-red-500 text-sm font-semibold my-1"><?= $error['password']?? "" ?></p>
            </div>
          </div>

          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
            <p class="mt-1 text-center">Already have an acount? <a href="/login" class="underline hover:text-blue-500">log in here</a></p>
          </div>
        </form>
      </div>
    </div>
  </main>
<?php view("partials/footer.php") ?>