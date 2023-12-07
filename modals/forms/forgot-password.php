<div class="modal-container" style="display: block;">
  <canvas class="fixed top-0 left-0 w-full h-full bg-black opacity-75 z-20"></canvas>
  <main
    class="modal fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#d0d9e7] p-6 shadow-lg rounded-lg z-30"
    style="display: block; max-height: 85%; overflow-y: scroll;">

    <form action="index.php" class="flex justify-end" method="POST">
      <button name="close-forgot"
        class="cursor-pointer text-xl font-bold absolute top-2 right-2 text-gray-500 px-2 rounded-md hover:bg-red-400 hover:text-white">&times;</button>
    </form>

    <section class="mt-6 mb-3 cursor-default font-semibold text-gray-800 text-lg flex items-center">
      <img class="w-auto h-6 mr-1" src="assets/img/padlock.png" alt="padlock">
      <h1 class="text-start font-bold">Forgot Password</h1>
    </section>

    <section>
      <form action="#" method="POST" class="w-[250px] lg:w-[400px] mx-auto duration-300">
        <div class="lg:flex block duration-300">
          <label class="mr-2 text-gray-800">Email:</label>
        </div>
        <input
          class="w-full bg-white py-2 px-3 rounded-md border-2 border-gray-300 transition-all duration-500 outline-none focus:border-[#003568] focus:text-[#004e94] mb-3 mt-3"
          type="text" name="usernameGuest" placeholder="*">
        <div class="flex justify-center items-center">
          <button
            class="w-full mt-3 py-2 px-10 shadow-md tracking-wider rounded-lg hover:bg-[#febd5b] bg-[#5c6f9f] font-semibold text-white border-[#2e5679] hover:text-[#002951] transition duration-300 ease-in-out">Enter</button>
        </div>
      </form>
    </section>



  </main>
</div>