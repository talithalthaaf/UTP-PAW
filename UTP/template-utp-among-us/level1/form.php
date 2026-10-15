<h2>Daftar Ransum</h2>
<table>
    <tr>
        <th>Ransum</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>Pizza Segitiga Polus</td>
        <td>Rp25.000</td>
    </tr>
    <tr>
        <td>Susu Elektrik Electrical</td>
        <td>Rp18.000</td>
    </tr>
    <tr>
        <td>Space Donut Oxygen</td>
        <td>Rp15.000</td>
    </tr>
    <tr>
        <td>Jus Berry MedBay</td>
        <td>Rp20.000</td>
    </tr>
    <tr>
        <td>Emergency Steak Navigation</td>
        <td>Rp45.000</td>
    </tr>
</table>

<h2>Form Pemesanan</h2>
<form action="proses.php" method="post">
    <div class="baris">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Nama" required>
    </div>

    <div class="baris">
        <label for="menu">Ransum:</label>
        <select id="menu" name="menu" required>
            <option value="">-- Pilih ransum --</option>
            <option value="Pizza Segitiga Polus">Pizza Segitiga Polus</option>
            <option value="Susu Elektrik Electrical">Susu Elektrik Electrical</option>
            <option value="Space Donut Oxygen">Space Donut Oxygen</option>
            <option value="Jus Berry MedBay">Jus Berry MedBay</option>
            <option value="Emergency Steak Navigation">Emergency Steak Navigation</option>
        </select>
    </div>

    <div class="baris">
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" value="1" required>
    </div>

    <div class="baris">
        <label for="kategori">Kategori Pelanggan:</label>
        <select id="kategori" name="kategori" required>
            <option value="Crewmate">Crewmate</option>
            <option value="Impostor">Impostor</option>
        </select>
    </div>

    <button type="submit">Pesan Ransum</button>
</form>
