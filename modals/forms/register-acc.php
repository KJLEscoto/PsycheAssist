<div class="modal-container" style="display: block;">
  <canvas class="fixed top-0 left-0 w-full h-full bg-black opacity-75 z-20"></canvas>
  <main
    class="modal fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#d0d9e7] p-6 rounded-lg shadow-lg z-30"
    style="display: block; max-height: 85%; overflow-y: scroll;">
    <form action="index.php" class="flex justify-end" method="POST">
      <button name="go-to-login"
        class="cursor-pointer text-xl font-bold absolute top-2 right-2 text-gray-500 px-2 rounded-md hover:bg-red-400 hover:text-white">&times;</button>
    </form>

    <section class="mt-6 mb-5 cursor-default font-semibold text-gray-800 text-lg flex items-center">
      <img class="w-auto h-6 mr-1" src="assets/img/add-user.png" alt="add-user">
      <h1 class="text-start font-bold">Create an Account</h1>
    </section>

    <section>
      <form action="#" method="POST" class="w-[400px] lg:w-[700px] mx-auto duration-300">
        <section class="mb-3">
          <div class="lg:flex block duration-300">
            <label class="mr-2 text-gray-800">Full Name:</label>
          </div>
          <section class="flex lg:gap-0 gap-3 justify-between">
            <div>
              <input
                class="lg:w-[280px] w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 outline-none focus:border-[#003568] focus:text-[#004e94] mt-3"
                type="text" name="fname_new_guest" placeholder="*">
              <h4 class="text-sm text-gray-400">First Name</h4>
            </div>
            <div>
              <input
                class="lg:w-[280px] w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 outline-none focus:border-[#003568] focus:text-[#004e94] mt-3"
                type="text" name="lname_new_guest" placeholder="*">
              <h4 class="text-sm text-gray-400">Last Name</h4>
            </div>

            <div class="">
              <input
                class="lg:w-[100px] w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 outline-none focus:border-[#003568] focus:text-[#004e94] mt-3"
                type="text" name="midini_new_guest">
              <h4 class="text-sm text-gray-400">M. I. (Optional)</h4>
            </div>
          </section>
        </section>

        <section class="mb-3 flex lg:gap-10 gap-5">
          <section>
            <div class="lg:flex block duration-300">
              <label class="mr-2 text-gray-800">Age:</label>
            </div>
            <input
              class="w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 outline-none focus:border-[#003568] focus:text-[#004e94] mt-3"
              type="number" name="age_new_guest" placeholder="*">
          </section>
          <section class="">
            <div class="lg:flex block duration-300">
              <label class="text-gray-800">Gender:</label>
            </div>
            <div class="lg:flex block lg:gap-5 gap-5 lg:justify-between justify-normal mt-2">
              <div class="flex lg:gap-5 gap-10 mb-2 m-auto">
                <div class="flex justify-center">
                  <input id="male-radio" class="mr-2" type="radio" name="gender_new_guest" value="male"
                    onchange="toggleTextInput()">
                  <label for="male-radio" class="text-gray-600">Male</label>
                </div>
                <div class="flex justify-center">
                  <input id="female-radio" class="mr-2" type="radio" name="gender_new_guest" value="female"
                    onchange="toggleTextInput()">
                  <label for="female-radio" class="text-gray-600 m-auto">Female</label>
                </div>
              </div>
              <div class="flex justify-center">
                <input id="others-radio" class="mr-2 mt-1" type="radio" name="gender_new_guest" value="others"
                  onchange="toggleTextInput()">
                <label for="others-radio" class="text-gray-600 mr-2 m-auto">Others:</label>
                <input id="others-text-input"
                  class="w-full bg-gray-200 py-2 px-3 rounded-md border-2 border-gray-300 outline-none focus:border-[#003568] focus:text-[#004e94]"
                  type="text" name="other_gender_new_guest" placeholder="Please specify" disabled>
              </div>
            </div>
          </section>
        </section>

        <section class="mb-3 flex lg:gap-0 gap-3 justify-between">
          <div>
            <div class="lg:flex block duration-300">
              <label class="text-gray-800">Username:</label>
            </div>
            <input
              class="lg:w-[340px] w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 outline-none focus:border-[#003568] focus:text-[#004e94] mt-3"
              type="text" name="username_new_guest" placeholder="*">
          </div>
          <div>
            <div class="lg:flex block duration-300">
              <label class="text-gray-800">Email:</label>
            </div>
            <input
              class="lg:w-[340px] w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 outline-none focus:border-[#003568] focus:text-[#004e94] mt-3"
              type="email" name="email_new_guest" placeholder="*">
          </div>
        </section>

        <section class="mb-3 flex lg:gap-0 gap-3 justify-between">
          <div>
            <div class="lg:flex block duration-300">
              <label class="text-gray-800">Password:</label>
            </div>
            <input
              class="lg:w-[340px] w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 outline-none focus:border-[#003568] focus:text-[#004e94] mt-3"
              type="password" name="password_new_guest" placeholder="*">
          </div>
          <div>
            <div class="flex justify-between">
              <div class="lg:flex block duration-300">
                <label class="text-gray-800">Confirm Password:</label>
              </div>
              <span onclick="togglePassword('password_new_guest', 'confirm_password_new_guest')"><img
                  class="w-auto h-5 opacity-75 hover:bg-[#9aaaa1] rounded-lg" src="assets/img/eye.png"
                  alt="show"></span>
            </div>
            <input
              class="lg:w-[340px] w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 outline-none focus:border-[#003568] focus:text-[#004e94] mt-3"
              type="password" name="confirm_password_new_guest" placeholder="*">
          </div>
        </section>

        <section class="mb-3 flex lg:gap-0 gap-3 justify-between">
          <div>
            <div class="lg:flex block duration-300">
              <label class="text-gray-800">Contact No.:</label>
            </div>
            <input
              class="lg:w-[340px] w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 outline-none focus:border-[#003568] focus:text-[#004e94] mt-3"
              type="text" name="password_new_guest">
          </div>
          <div>
            <div class="lg:flex block duration-300">
              <label class="text-gray-800">Address:</label>
            </div>
            <input
              class="lg:w-[340px] w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 outline-none focus:border-[#003568] focus:text-[#004e94] mt-3"
              type="text" name="confirm_password_new_guest" placeholder="*">
          </div>
        </section>

        <form action="index.php" method="POST">
          <section class="mt-3 flex mb-2">
            <input type="checkbox" id="termsCheckbox" class="form-checkbox text-[#5c6f9f]">
            <label for="termsCheckbox" class="text-gray-800 ml-2 mr-1">
              I have carefully reviewed and accepted the terms of
              <button name="go-to-terms"
                class="text-blue-800 font-semibold underline hover:opacity-60">PsycheAssist.</button>
            </label>
          </section>
        </form>


        <form action="#" method="POST">
          <section class="flex justify-center items-center">
            <button name="register"
              class="w-full mt-3 py-2 px-10 shadow-md tracking-wider rounded-lg hover:bg-[#febd5b] bg-[#5c6f9f] font-semibold text-white border-[#2e5679] hover:text-[#002951] transition duration-300 ease-in-out">Register</button>
          </section>
        </form>


        <form action="index.php" method="POST">
          <section class="mt-5 text-center">
            <div class="flex justify-center">
              <p class="text-gray-800 text-base">Already have an account?</p>
              <button name="go-to-login" class="ml-1 font-medium text-blue-800 hover:opacity-60">Sign In</button>
            </div>
          </section>
        </form>

      </form>
    </section>



  </main>
</div>

<script>
function toggleTextInput() {
  var othersRadio = document.getElementById("others-radio");
  var othersTextInput = document.getElementById("others-text-input");
  var maleRadio = document.getElementById("male-radio");
  var femaleRadio = document.getElementById("female-radio");

  if (othersRadio.checked) {
    enableTextInput(othersTextInput);
  } else {
    disableTextInput(othersTextInput);
  }

  if (!maleRadio.checked) {
    clearTextInput(document.getElementById("male-text-input"));
  }

  if (!femaleRadio.checked) {
    clearTextInput(document.getElementById("female-text-input"));
  }
}

function enableTextInput(inputElement) {
  inputElement.disabled = false;
  inputElement.style.backgroundColor = "white";
}

function disableTextInput(inputElement) {
  inputElement.disabled = true;
  inputElement.value = '';
  inputElement.style.backgroundColor = "";
}

function clearTextInput(inputElement) {
  inputElement.value = '';
  inputElement.style.backgroundColor = "";
}

function togglePassword(...fieldNames) {
  fieldNames.forEach(fieldName => {
    const passwordInput = document.querySelector(`[name="${fieldName}"]`);
    const fieldType = passwordInput.type;

    passwordInput.type = (fieldType === 'password') ? 'text' : 'password';
  });
}
</script>