<?php
 include_once "./views/partials/header.php";
include_once "./connection.php";
?>

<!-- signIn part start -->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 " id="signInDiv">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Admin Sign In</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="signIn_email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

 
      <div>
        <button onclick="signInProcess();" type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send Verification Code</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
            <a href="/signin" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Back to Customer Signin</a>
    </p>
  </div>
</div>
<!-- signIn Part End -->
<?php
 include_once "./views/partials/footer.php";

?>
