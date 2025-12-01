<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kopi - Coffee Bliss</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>little coffe</h1>
    <nav>
        <a href="index.html">Home</a>
        <a href="index.html#menu">Menu</a>
        <a href="order.html">Pesan</a>
    </nav>
</header>

<section class="order-page">
    <h2>Form Pemesanan</h2>

    <form class="order-form">
        <label>Nama Lengkap</label>
        <input type="text" placeholder="Isi nama anda" required>

        <label>Menu Kopi</label>
        <select required>
            <option value="">-- Pilih Kopi --</option>
            <option>Espresso</option>
            <option>Cappuccino</option>
            <option>Latte</option>
            <option>Americano</option>
        </select>

        <label>Jumlah</label>
        <input type="number" min="1" max="10" value="1" required>

        <label>Catatan Tambahan</label>
        <textarea placeholder="Misal: Kurangi gula, extra shot, dll"></textarea>

        <button type="submit" class="btn">Kirim Pesanan</button>
    </form>
</section>

<footer>
    <p>📍 kompelks unbita</p>
    <p>📞 0812-3456-7890</p>
    <p>©little coffe</p>
</footer>

</body>
</html>
