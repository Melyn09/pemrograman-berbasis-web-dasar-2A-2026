<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Interaktif Developer</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 via-white to-blue-200 min-h-screen p-6">

<div class="bg-white/80 backdrop-blur shadow-lg mb-8 p-4 flex justify-center space-x-8 rounded-xl">
    <a href="index.php" class="font-semibold text-blue-600 border-b-2 border-blue-600 pb-1">Profil</a>
    <a href="timeline.php" class="text-gray-600 hover:text-blue-600 transition">Timeline</a>
    <a href="blog.php" class="text-gray-600 hover:text-blue-600 transition">Blog</a>
</div>

<h2 class="text-3xl font-extrabold mb-6 text-center text-gray-800">
    Profil Interaktif Developer Pemula
</h2>

<div class="bg-white rounded-xl shadow-lg p-6 mb-8 hover:shadow-xl transition">
<table class="w-full border border-gray-200 rounded-lg overflow-hidden">
    <tr class="bg-blue-500 text-white">
        <th class="p-3">Data</th>
        <th class="p-3">Isi</th>
    </tr>
    <tr class="hover:bg-gray-50"><td class="p-2 border">Nama</td><td class="p-2 border">Melinda Nurlaila</td></tr>
    <tr class="hover:bg-gray-50"><td class="p-2 border">ID Developer</td><td class="p-2 border">DEV001</td></tr>
    <tr class="hover:bg-gray-50"><td class="p-2 border">Kota/Tgl Lahir</td><td class="p-2 border">Madiun, 13 Mei 2007</td></tr>
    <tr class="hover:bg-gray-50"><td class="p-2 border">Email</td><td class="p-2 border">1m3liinda@gmail.com</td></tr>
    <tr class="hover:bg-gray-50"><td class="p-2 border">No. WhatsApp</td><td class="p-2 border">08123456789</td></tr>
</table>
</div>

<div class="bg-white rounded-xl shadow-lg p-6 mb-8 hover:shadow-xl transition">
<form method="post" class="space-y-5">

    <div>
        <label class="font-semibold text-gray-700">Framework/Tools:</label>
        <input type="text" name="framework"
            class="w-full mt-1 border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-400 outline-none">
    </div>

    <div>
        <label class="font-semibold text-gray-700">Pengalaman:</label>
        <textarea name="pengalaman"
            class="w-full mt-1 border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-400 outline-none"></textarea>
    </div>

    <div>
        <label class="font-semibold text-gray-700 block mb-2">Tools Penunjang:</label>
        <div class="flex flex-wrap gap-3">
            <label class="bg-gray-100 px-3 py-2 rounded-lg hover:bg-blue-100 cursor-pointer">
                <input type="checkbox" name="tools[]" value="VS Code"> VS Code
            </label>
            <label class="bg-gray-100 px-3 py-2 rounded-lg hover:bg-blue-100 cursor-pointer">
                <input type="checkbox" name="tools[]" value="GitHub"> GitHub
            </label>
            <label class="bg-gray-100 px-3 py-2 rounded-lg hover:bg-blue-100 cursor-pointer">
                <input type="checkbox" name="tools[]" value="Figma"> Figma
            </label>
            <label class="bg-gray-100 px-3 py-2 rounded-lg hover:bg-blue-100 cursor-pointer">
                <input type="checkbox" name="tools[]" value="Postman"> Postman
            </label>
        </div>
    </div>

    <div>
        <label class="font-semibold text-gray-700 block mb-2">Minat Bidang:</label>
        <div class="flex gap-6">
            <label><input type="radio" name="minat" value="Frontend"> Frontend</label>
            <label><input type="radio" name="minat" value="Backend"> Backend</label>
            <label><input type="radio" name="minat" value="Fullstack"> Fullstack</label>
        </div>
    </div>

    <div>
        <label class="font-semibold text-gray-700">Tingkat Skill:</label>
        <select name="skill"
            class="w-full mt-1 border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-400">
            <option value="">-- Pilih --</option>
            <option value="Dasar">Dasar</option>
            <option value="Cukup">Cukup</option>
            <option value="Profesional">Profesional</option>
        </select>
    </div>

    <button type="submit" name="submit"
        class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white py-3 rounded-lg font-semibold hover:scale-105 transform transition">
         Kirim Data
    </button>

</form>
</div>

<?php
function tampilArray($data) {
    return implode(", ", $data);
}

if (isset($_POST['submit'])) {
    $framework = $_POST['framework'];
    $pengalaman = $_POST['pengalaman'];
    $tools = $_POST['tools'] ?? [];
    $minat = $_POST['minat'] ?? "";
    $skill = $_POST['skill'];

    if ($framework == "" || $pengalaman == "" || empty($tools) || $minat == "" || $skill == "") {
        echo "<div class='bg-red-100 text-red-700 p-4 rounded-lg shadow mb-4 text-center font-semibold'>
                 Semua input wajib diisi!
              </div>"; 
    } else {
        $frameworkArray = explode(",", $framework);

        echo "<div class='bg-white p-6 rounded-xl shadow-lg'>";
        echo "<h3 class='text-2xl font-bold mb-4 text-blue-600'>Hasil Input</h3>";

        echo "<table class='w-full border border-gray-200 mb-4'>";

        echo "<tr class='bg-blue-500 text-white'><th class='p-2'>Data</th><th class='p-2'>Isi</th></tr>";
        echo "<tr><td class='border p-2'>Framework</td><td class='border p-2'>" . tampilArray($frameworkArray) . "</td></tr>";
        echo "<tr><td class='border p-2'>Tools</td><td class='border p-2'>" . tampilArray($tools) . "</td></tr>";
        echo "<tr><td class='border p-2'>Minat</td><td class='border p-2'>$minat</td></tr>";
        echo "<tr><td class='border p-2'>Skill</td><td class='border p-2'>$skill</td></tr>";
        echo "</table>";

        echo "<p class='mb-3'><b>Pengalaman:</b> $pengalaman</p>";

        if (count($frameworkArray) > 2) {
            echo "<p class='text-green-600 font-semibold'> Skill Anda cukup luas di bidang development!</p>";
        }

        echo "</div>";
    }
}
?>

</body>
</html>