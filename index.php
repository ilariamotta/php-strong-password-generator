<?php var_dump($_GET["length"]); ?>

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

        <button class="mt-4 w-36 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition">Magia sia!</button>
        </form>
        <!-- close form -->
                <h3 class="text-lg font-bold text-center pt-2">La tua password è pronta da utilizzare dove vuoi!</h3>
                <div class="grid grid-cols-10 gap-2 mt-4">
            <!-- password -->
    <div class="col-span-8 bg-white rounded p-3 text-center font-mono text-xl">
        ...
    </div>
            <!-- copy -->
    <button class="col-span-1 bg-blue-500 text-white rounded p-3">Copy</button>
            <!-- regenerate -->
    <button class="col-span-1 bg-green-500 text-white rounded p-3">↻</button>
</div>
<!-- box password -->
</div>


</body>
</html>