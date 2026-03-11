<?php 
session_start();
require_once "./functions.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di password</title>
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- container title -->
    <div class="container mx-auto px-4">
        <!-- title -->
        <h1 class="text-3xl font-bold text-center mt-10">IL TUO GENERATORE DI PASSWORD SICURE</h1>
        <!-- title -->
        <!-- box generated password   -->
            <div class="bg-gray-100 rounded-xl shadow-md p-6 mt-10 w-2/5 mx-auto">
    <h3 class="text-lg font-bold text-center pt-2">
        La tua password è pronta da utilizzare dove vuoi!
    </h3>

    <div class="grid grid-cols-10 gap-2 mt-4">
        <div id="password-box" class="col-span-6 min-h-[56px] flex items-center justify-center bg-white text-black rounded p-3 text-center font-mono text-xl break-all">
            <?php echo $_SESSION["password"] ?? ""; ?> 
        </div>

        <button id="copy-btn" class="col-span-2 bg-blue-500 text-white rounded p-3">
            Copy
        </button>

        <a href="./index.php" class="col-span-2 bg-green-500 text-white rounded p-3 text-center">
            ↻
        </a>
    </div>
</div>
</body>
</html>


<script>
    const copyBtn = document.getElementById("copy-btn");
    const passwordBox = document.getElementById("password-box");

    copyBtn.addEventListener("click", async () => {
        const password = passwordBox.textContent.trim();

        if (!password) return;

        await navigator.clipboard.writeText(password);
        copyBtn.textContent = "Copied!";

        setTimeout(() => {
            copyBtn.textContent = "Copy";
        }, 1500);
    });
</script>
