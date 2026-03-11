<?php 


session_start();
require_once "./functions.php";


$passlength = $_GET["length"] ?? 8;


$chars = "abcdefghijklmnopqrstuvwxyz";
$symbols ="!@#$%^&*<>?+-_";
$numbers ="0123456789";
$uppercases = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";


if (isset($_GET["length"])) {
    $_SESSION["password"] = passwordGenerator($passlength, $chars, $symbols, $uppercases, $numbers);
    header("Location: ./result.php");
    exit;
}


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
        <h2 class="text-xl text-center">Sei pigro? Non sei sicuro della tua password? </h2>
        <p class="text-center">Lascia che il generatore faccia il lavoro per te!</p>
        <!-- title -->
        <!-- box generated password   -->
            <div class="bg-gray-100 rounded-xl shadow-md p-6 mt-10 w-2/5 mx-auto">

         <p class="italic text-center"> </p>
        <!-- open  form  -->
         <form method="GET" class="max-w-sm mx-auto text-center">
        <!-- tailwind input number -->
        <label for="number-input" class="block mb-2.5 text-sm font-medium text-heading italic rounded-pill">Scegli la lunghezza della tua nuova password!</label>
       <input type="number" name="length" id="number-input" min="8" max="64" required class="w-full mt-2 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"/>

        <button type="submit" class="mb-4 mt-4 w-36 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition">Magia sia!</button>
        
        <!-- custom password -->
         <hr>
         <h6 class="my-4 italic bold">Personalizza la tua password!</h6>
        <div class="flex flex-col gap-3 mb-4">
            <!-- uppercase letters -->
    <label for="uppercase" class="flex items-center gap-2 text-sm font-medium text-gray-800">
        <input id="uppercases" type="checkbox" name="uppercases" class="w-4 h-4 rounded border-gray-300 text-blue-500 focus:ring-2 focus:ring-blue-400">
        <span>Lettere maiuscole</span>
    </label>
<!-- symbols -->
    <label for="symbols" class="flex items-center gap-2 text-sm font-medium text-gray-800">
        <input id="symbols" type="checkbox" name="symbols" class="w-4 h-4 rounded border-gray-300 text-blue-500 focus:ring-2 focus:ring-blue-400">
        <span>Caratteri speciali</span>
    </label>
<!-- numbers -->
    <label for="numbers" class="flex items-center gap-2 text-sm font-medium text-gray-800">
        <input id="numbers" type="checkbox" name="numbers" class="w-4 h-4 rounded border-gray-300 text-blue-500 focus:ring-2 focus:ring-blue-400">
        <span>Numeri</span>
    </label>
</div>
    <!-- close form -->
    </form>
</div>
            
</div>


</body>
</html>