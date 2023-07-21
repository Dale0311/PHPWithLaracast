<?php view("partials/header.php") ?>
  <main class="h-screen w-screen flex justify-center items-center bg-white">
    <div class="flex flex-col justify-center px-6 py-12 lg:px-8 h-1/2 w-1/3 bg-[#F3F4F6] rounded">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in</h2>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="/login" method="POST">
          <?php if(!(isset($error['email']) || isset($error['password']) )): ?>
            <p class="text-center text-red-500 font-semibold text-lg"><?= $error['creds']?? "" ?></p>
          <?php endif ?>
          <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?= $error['emailInput']?? "" ?>">
              <p class="text-sm text-red-500 font-semibold"><?= $error['email']?? "" ?></p>
            </div>
          </div>

          <div>
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            </div>
            <div class="mt-2">
              <input id="password" name="password" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <p class="text-sm text-red-500 font-semibold"><?= $error['password']?? "" ?></p>
            </div>
          </div>

          <div class="">
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
            <p class="mt-1 text-center">Don't have an account yet? <a href="/register" class="underline hover:text-blue-500">Create an acount</a></p>
          </div>
        </form>
      </div>
    </div>
  </main>
<?php view("partials/footer.php") ?>