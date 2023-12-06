<div class="modal-container" style="display: block;">
  <canvas class="fixed top-0 left-0 w-full h-full bg-black opacity-75 z-10"></canvas>
  <main
    class="modal fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#d0d9e7] p-6 shadow-lg rounded-lg z-20"
    style="display: block; max-height: 85%; overflow-y: scroll;">

    <!-- Close button -->
    <form action="index.php" class="flex justify-end">
      <button type="submit"
        class="cursor-pointer text-xl font-bold absolute top-2 right-2 text-gray-500 px-2 rounded-md hover:bg-red-400 hover:text-white">&times;</button>
    </form>

    <!-- Switch button -->
    <section class="mt-6 mb-3 cursor-default font-semibold text-gray-800 text-lg flex justify-between">
      <h1 class="py-2 text-start font-bold">Login</h1>
      <div class="flex justify-center">
        <button id="switchToGuest"
          class="cursor-pointer bg-[#5c6f9f] text-white px-4 py-2 rounded-s-lg border-s-2 border-y-2 tracking-wider"
          onclick="switchLoginForm('guestLogin')">Guest</button>
        <button id="switchToAdmin" class="cursor-pointer px-4 py-2 rounded-e-lg border-e-2 border-y-2  tracking-wider"
          onclick="switchLoginForm('adminLogin')">Admin</button>
      </div>
    </section>

    <!-- Guest Login Form -->
    <section id="guestLogin">
      <form action="#" method="POST" class="w-[350px] lg:w-[500px] mx-auto duration-300">
        <div class="lg:flex block duration-300">
          <label class="mr-2 text-gray-800">Username:</label>
          <?php if (isset($_GET['error'])) { ?>
          <p class="text-red-500"><?php echo "(" . $_GET['error'] . ")"?></p>
          <?php } ?>
        </div>
        <input
          class="w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 transition-all duration-500 outline-none focus:border-[#003568] focus:text-[#004e94] mb-5 mt-3"
          type="text" name="usernameGuest" placeholder="*">
        <div class="flex justify-between">
          <div class="lg:flex block duration-300">
            <label class="mr-2 text-gray-800">Password:</label>
            <?php if (isset($_GET['error'])) { ?>
            <p class="text-red-500"><?php echo "(" . $_GET['error'] . ")"?></p>
            <?php } ?>
          </div>
          <span onclick="togglePassword('passwordGuest')"><img
              class="w-auto h-5 opacity-75 hover:bg-[#9aaaa1] rounded-lg" src="assets/img/eye.png" alt="show"></span>
        </div>
        <input id="passwordGuest"
          class="w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 transition-all duration-500 outline-none focus:border-[#003568] focus:text-[#004e94] mb-2 mt-3"
          type="password" name="passwordGuest" placeholder="*">

        <a class="text-blue-800 text-sm mb-5 underline hover:opacity-60" href="index.php">Forgot password?</a>

        <div class="flex justify-center items-center">
          <button type="submit" name="submit"
            class="w-full mt-3 py-2 px-10 shadow-md tracking-wider rounded-lg hover:bg-[#febd5b] bg-[#5c6f9f] font-semibold text-white border-[#2e5679] hover:text-[#002951] transition duration-300 ease-in-out">Submit</button>
        </div>
      </form>

      <section class="text-center justify-center mt-5 flex">
        <p class="text-gray-800 text-base">Don't have an account?</p>
        <a class="ml-1 font-medium text-blue-800 hover:opacity-60" href="#">Sign Up</a>
      </section>

      <section class="flex justify-center mt-5 mb-3 cursor-default">
        <hr class="w-full m-auto border mr-2">
        <p class="m-auto text-gray-800 text-sm font-bold">OR</p>
        <hr class="w-full m-auto border ml-2">
      </section>

      <p class="text-center mb-5 text-gray-800">Sign in using:</p>

      <section class="mb-5">
        <button
          class="w-full mt-3 py-2 px-10 shadow-md tracking-wider rounded-lg bg-[#4eb876] font-semibold text-white transition duration-300 ease-in-out hover:opacity-75 flex">
          <div class="flex justify-center items-center m-auto">
            <img class="w-auto h-6 mr-2" src="assets/img/google.png" alt="google">
            <p class="m-auto mr-1 lg:block hidden">Login with </p>
            <p class="m-auto">Google</p>
          </div>
        </button>
        <button
          class="w-full mt-3 py-2 px-10 shadow-md tracking-wider rounded-lg bg-[#0041de] font-semibold text-white transition duration-300 ease-in-out hover:opacity-75 flex">

          <div class="flex justify-center items-center m-auto">
            <img class="w-auto h-6 mr-2" src="assets/img/facebook.png" alt="fb">
            <p class="m-auto mr-1 lg:block hidden">Login with </p>
            <p class="m-auto">Facebook</p>
          </div>
        </button>
      </section>
    </section>

    <!-- Admin Login Form (hidden by default) -->
    <section id="adminLogin" class="hidden">
      <form action="#" method="POST" class="w-[350px] lg:w-[500px] mx-auto duration-300">
        <div class="lg:flex block duration-300">
          <label class="mr-2 text-gray-800">Username:</label>
          <?php if (isset($_GET['error'])) { ?>
          <p class="text-red-500"><?php echo "(" . $_GET['error'] . ")"?></p>
          <?php } ?>
        </div>
        <input
          class="w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 transition-all duration-500 outline-none focus:border-[#003568] focus:text-[#004e94] mb-5 mt-3"
          type="text" name="usernameAdmin" placeholder="*">
        <div class="flex justify-between">
          <div class="lg:flex block duration-300">
            <label class="mr-2 text-gray-800">Password:</label>
            <?php if (isset($_GET['error'])) { ?>
            <p class="text-red-500"><?php echo "(" . $_GET['error'] . ")"?></p>
            <?php } ?>
          </div>
          <span onclick="togglePassword('passwordAdmin')"><img
              class="w-auto h-5 opacity-75 hover:bg-[#9aaaa1] rounded-lg" src="assets/img/eye.png" alt="show"></span>
        </div>
        <input id="passwordAdmin"
          class="w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 transition-all duration-500 outline-none focus:border-[#003568] focus:text-[#004e94] mb-2 mt-3"
          type="password" name="passwordAdmin" placeholder="*">

        <a class="text-blue-800 text-sm mb-5 underline hover:opacity-60" href="index.php">Forgot password?</a>

        <div class="flex justify-center items-center mb-5">
          <form action="query/login-email.php">
            <button type="submit" name="login"
              class="w-full mt-3 py-2 px-10 shadow-md tracking-wider rounded-lg hover:bg-[#febd5b] bg-[#5c6f9f] font-semibold text-white border-[#2e5679] hover:text-[#002951] transition duration-300 ease-in-out block dark:hidden">Login</button>
          </form>
        </div>
      </form>
    </section>

  </main>
</div>

<script>
function switchLoginForm(formId) {
  // Hide all login forms
  document.getElementById('guestLogin').classList.add('hidden');
  document.getElementById('adminLogin').classList.add('hidden');

  // Show the selected login form
  document.getElementById(formId).classList.remove('hidden');

  // Highlight the active button
  document.getElementById('switchToGuest').classList.remove('bg-[#5c6f9f]', 'text-white');
  document.getElementById('switchToAdmin').classList.remove('bg-[#5c6f9f]', 'text-white');
  document.getElementById('switchToGuest').classList.remove('bg-gray-300');
  document.getElementById('switchToAdmin').classList.remove('bg-gray-300');

  if (formId === 'guestLogin') {
    document.getElementById('switchToGuest').classList.add('bg-[#5c6f9f]', 'text-white');
  } else {
    document.getElementById('switchToAdmin').classList.add('bg-[#5c6f9f]', 'text-white');
  }
}

function togglePassword(inputId) {
  const passwordInput = document.getElementById(inputId);
  const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordInput.setAttribute('type', type);
}
</script>