<?php
$Nama= "Lutfiah Nurul Aulia"; 
$NIM= "102022400240";
$Prodi= "S1 Sistem Infomasi";
$Fakultas= "Fakultas Rekayasa Industri";
$Tanggal = date("D, d M Y");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web portofolio- <?= $Nama ?></title>
    <link rel="icon" href="favicon.ico">


    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="max-w-7xl mx-auto mt-10 p-6 bg-white rounded-2xl shadow-lg">

       
        <div class="flex flex-col items-center">
            <img src="profile.jpg" alt="Foto Profil"
                class="w-32 h-32 rounded-full border-4 border-blue-500 object-cover mb-4">
            <h1 class="text-2xl font-bold"><?= $Nama ?></h1>
        </div>

        
        <table class="table-auto w-full my-6 border">
            <tr class="border">
                <th class="px-4 py-2 text-left">NIM</th>
                <td class="px-4 py-2"><?= $NIM ?></td>
            </tr>
            <tr class="border">
                <th class="px-4 py-2 text-left">Program Studi</th>
                <td class="px-4 py-2"><?= $Prodi ?></td>
            </tr>
            <tr class="border">
                <th class="px-4 py-2 text-left">Fakultas</th>
                <td class="px-4 py-2"><?= $Fakultas ?></td>
            </tr>
        </table>

    
        <div class="flex justify-center gap-10 my-6">
            <a href="https://github.com/lutfiahnurul" target="_blank" class="text-gray-600 hover:text-black">
                <img src="github_logo.jpg" alt="Github" class="w-10 h-10 mx-auto"><br>Github
            </a>
            <a href="https://www.instagram.com/lutfiahnaaa" target="_blank" class="text-pink-500 hover:text-pink-600">
                <img src="instagram.png" alt="Instagram" class="w-10 h-10 mx-auto"><br>Instagram
            </a>
            <a href="https://www.linkedin.com/in/lutfiah-nurul-a-a06b06322/" target="_blank" class="text-blue-700 hover:text-blue-800">
                <img src="logo linkedin.png" alt="LinkedIn" class="w-10 h-10 mx-auto"><br>LinkedIn
            </a>
        </div>


        <p class="text-right text-sm text-gray-500"><?= $Tanggal ?></p>
    </div>
</body>

</html>




