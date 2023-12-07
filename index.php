<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PsycheAssist | Expert System</title>
  <link rel="stylesheet" href="dist/output.css">
  <link rel="shortcut icon" type="x-icon" href="assets/img/main-logo(head-rounded).png">
</head>

<body class="flex items-center justify-center min-h-screen bg-[#e4e4e4]">
  <div class="w-full xl:max-w-screen-xl max-w-screen-lg lg:flex block duration-300 xl:mt-0 mt-20">
    <section class="flex-1 m-auto xl:pl-8 lg:px-0 duration-300 lg:max-w-screen-lg max-w-screen-md px-10">
      <div class="flex justify-center lg:justify-start">
        <img class=" rounded-lg w-auto lg:h-[150px] h-[100px] mb-10" src="assets/img/main-logo.png" alt="main-logo">
      </div>
      <p class="mt-5 tracking-wider px-1 lg:text-lg text-base text-[#4f608a] lg:text-start text-justify">Discover
        Yourself with
        PsycheAssist! Take easy,
        insightful
        tests to
        understand
        your
        mind better.
        Navigate
        life's ups and downs with confidence. Your journey to a happier you starts here!
      </p>
      <div class="flex justify-center lg:justify-start">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <button type="submit" name="lets-go"
            class=" mt-5 py-2 px-10 shadow-md tracking-wider rounded-lg hover:bg-[#febd5b] bg-[#5c6f9f] font-semibold text-white border-[#2e5679] hover:text-[#002951] transition duration-300 ease-in-out">Let's
            Go!</button>
        </form>
      </div>
    </section>
    <section class="flex-1 flex items-center justify-center">
      <img class="lg:h-[700px] w-auto" src="assets/img/online_exam.gif" alt="writing">
    </section>
  </div>

  <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_POST['close-forgot']) || isset($_POST['sign-in'])) {
      include "modals/forms/email-login.php";
    }

    if(isset($_POST['forgot-pass'])) {
      include "modals/forms/forgot-password.php";
    }
  ?>

</body>

</html>