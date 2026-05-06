<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog Developer</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 via-white to-blue-200 min-h-screen p-6">

<div class="bg-white/80 backdrop-blur shadow-lg mb-8 p-4 flex justify-center space-x-8 rounded-xl">
    <a href="index.php" class="text-gray-600 hover:text-blue-600 transition">Profil</a>
    <a href="timeline.php" class="text-gray-600 hover:text-blue-600 transition">Timeline</a>
    <a href="blog.php" class="font-semibold text-blue-600 border-b-2 border-blue-600 pb-1">Blog</a>
</div>

<h2 class="text-3xl font-extrabold text-center mb-10 text-gray-800">
     Blog Reflektif Developer
</h2>

<?php
$artikel = [
    "html" => [
        "judul" => "Belajar HTML",
        "tanggal" => "2025",
        "isi" => "Saat pertama kali belajar HTML, saya merasa bingung dengan struktur tag, namun lama-kelamaan mulai memahami cara membuat halaman web sederhana.",
        "gambar" => "img/download.jpg",
        "link" => "https://developer.mozilla.org/id/docs/Web/HTML"
    ],
    "error" => [
        "judul" => "Error Pertama dalam Coding",
        "tanggal" => "2025",
        "isi" => "Mengalami error pertama membuat saya frustrasi, tetapi dari situ saya belajar membaca pesan error dan memperbaikinya secara perlahan.",
        "gambar" => "img/download (2).jpg",
        "link" => "https://stackoverflow.com"
    ],
    "js" => [
        "judul" => "Belajar JavaScript",
        "tanggal" => "2026",
        "isi" => "JavaScript membuat website menjadi interaktif, walaupun awalnya sulit, saya mulai memahami konsep event dan DOM.",
        "gambar" => "img/91-1024x683.jpg",
        "link" => "https://developer.mozilla.org/id/docs/Web/JavaScript"
    ],
    "python" => [
        "judul" => "Belajar Python",
        "tanggal" => "2025",
        "isi" => "Python sangat menyenangkan untuk dipelajari, sintaksnya yang sederhana membuat saya cepat bisa membuat program pertama saya.",
        "gambar" => "img/py.jpg",
        "link" => "https://developer.mozilla.org/id/docs/Web/Python"
    ],
    "database" => [
        "judul" => "Belajar Database",
        "tanggal" => "2026",
        "isi" => "Database adalah tempat penyimpanan data yang sangat penting dalam pengembangan aplikasi, dan belajar SQL membuat saya lebih paham tentang cara mengelola data.",
        "gambar" => "img/sql.jpg",
        "link" => "https://developer.mozilla.org/id/docs/Web/SQL"
    ],
];

$quotes = [
    "Terus belajar walau sedikit setiap hari.",
    "Error adalah guru terbaik dalam coding.",
    "Jangan takut mencoba hal baru.",
    "Konsistensi lebih penting daripada sempurna."
];

$randomQuote = $quotes[array_rand($quotes)];
$pilih = $_GET['artikel'] ?? null;
?>

<div class="grid md:grid-cols-3 gap-6">

    <div class="bg-white p-5 rounded-xl shadow-lg">
        <h3 class="font-bold mb-4 text-lg text-gray-700"> Daftar Artikel</h3>
        <ul class="space-y-3">
            <?php foreach ($artikel as $key => $data): ?>
                <li>
                    <a href="?artikel=<?= $key; ?>" 
                       class="block p-3 rounded-lg hover:bg-blue-100 transition 
                       <?= $pilih == $key ? 'bg-blue-200 font-semibold' : '' ?>">
                        <?= $data['judul']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="md:col-span-2">
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition">

        <?php if ($pilih && isset($artikel[$pilih])): 
            $data = $artikel[$pilih];
        ?>
            <h3 class="text-2xl font-bold mb-2 text-blue-600">
                <?= $data['judul']; ?>
            </h3>

            <span class="text-sm bg-gray-200 px-3 py-1 rounded-full">
                <?= $data['tanggal']; ?>
            </span>

            <img src="<?= $data['gambar']; ?>" 
                 class="my-4 rounded-lg w-full h-64 object-cover">

            <p class="mb-4 text-gray-700 leading-relaxed">
                <?= $data['isi']; ?>
            </p>

            <a href="<?= $data['link']; ?>" target="_blank" 
               class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                Baca Referensi
            </a>

        <?php else: ?>
            <div class="text-center text-gray-500 py-10">
                <p>Pilih artikel di sebelah kiri untuk melihat detail </p>
            </div>
        <?php endif; ?>

        </div>
    </div>

</div>

<div class="bg-white p-5 rounded-xl shadow-lg mt-8 text-center">
    <p class="italic text-gray-700">“<?= $randomQuote; ?>”</p>
</div>

<div class="text-center mt-8 space-x-4">
    <a href="index.php" 
       class="bg-gray-500 text-white px-5 py-2 rounded-lg hover:bg-gray-600 transition">
         Profil
    </a>

    <a href="timeline.php" 
       class="bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition">
       Timeline 
    </a>
</div>

</body>
</html>