<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Timeline Belajar Coding</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 via-white to-blue-200 min-h-screen p-6">

<div class="bg-white/80 backdrop-blur shadow-lg mb-8 p-4 flex justify-center space-x-8 rounded-xl">
    <a href="index.php" class="text-gray-600 hover:text-blue-600 transition">Profil</a>
    <a href="timeline.php" class="font-semibold text-blue-600 border-b-2 border-blue-600 pb-1">Timeline</a>
    <a href="blog.php" class="text-gray-600 hover:text-blue-600 transition">Blog</a>
</div>

<h2 class="text-3xl font-extrabold text-center mb-10 text-gray-800">
     Perjalanan Belajar Coding
</h2>

<?php
$timeline = [
    ["tahun" => "2022", "kegiatan" => "Mulai tertarik dunia coding"],
    ["tahun" => "2023", "kegiatan" => "Belajar JavaScript dasar"],
    ["tahun" => "2024", "kegiatan" => "Belajar Python dasar"],
    ["tahun" => "2025", "kegiatan" => "Masuk kuliah dan belajar algoritma serta Python"],
    ["tahun" => "2026", "kegiatan" => "Belajar HTML, CSS, JavaScript, PHP dan Database"],
];

function highlightTahun($tahun) {
    if ($tahun == "2025" || $tahun == "2026") {
        return "bg-blue-500 text-white";
    }
    return "bg-gray-200 text-gray-700";
}
?>

<div class="relative max-w-2xl mx-auto">

    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-gray-300 h-full"></div>

    <?php foreach ($timeline as $index => $data): ?>
        
        <div class="mb-10 flex <?= $index % 2 == 0 ? 'justify-start' : 'justify-end'; ?>">
            
            <div class="w-1/2 px-4">
                
                <div class="bg-white p-5 rounded-xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                    
                    <span class="inline-block px-3 py-1 text-sm font-semibold rounded-full mb-2 <?= highlightTahun($data['tahun']); ?>">
                        <?= $data['tahun']; ?>
                    </span>

                    <p class="text-gray-700"><?= $data['kegiatan']; ?></p>

                </div>

            </div>

        </div>

    <?php endforeach; ?>
</div>

<div class="text-center mt-10 space-x-4">
    <a href="index.php" 
       class="bg-gray-500 text-white px-5 py-2 rounded-lg hover:bg-gray-600 transition">
         Kembali ke Profil
    </a>

    <a href="blog.php" 
       class="bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition">
        Menuju Blog 
    </a>
</div>

</body>
</html>