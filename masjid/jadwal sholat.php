<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Sholat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        table {
            margin-top: 20px;
            width: 50%; /* Mengatur lebar tabel */
            margin-left: auto; /* Mengatur margin kiri otomatis */
            margin-right: auto; /* Mengatur margin kanan otomatis */
        }

        th, td {
            padding: 5px; /* Mengurangi padding di dalam sel */
            text-align: center; /* Mengatur teks agar berada di tengah */
        }

        .back {
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Jadwal Sholat</h1>
        <div class="text-center">
            <h2 id="date"></h2> <!-- Menampilkan tanggal live -->
            <h3 id="live-clock"></h3> <!-- Menampilkan waktu live -->
        </div>

        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Nama Sholat</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Subuh</td>
                    <td id="shubuh">Loading...</td>
                </tr>
                <tr>
                    <td>Dhuhur</td>
                    <td id="dzuhur">Loading...</td>
                </tr>
                <tr>
                    <td>Ashar</td>
                    <td id="ashar">Loading...</td>
                </tr>
                <tr>
                    <td>Maghrib</td>
                    <td id="maghrib">Loading...</td>
                </tr>
                <tr>
                    <td>Isya</td>
                    <td id="isya">Loading...</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            document.getElementById('live-clock').textContent = `${hours}:${minutes}:${seconds}`;
        }

        setInterval(updateClock, 1000);
        updateClock();

        function updateDate() {
            const now = new Date();
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                'Oktober', 'November', 'Desember'
            ];

            const dayName = days[now.getDay()];
            const monthName = months[now.getMonth()];
            const day = now.getDate();
            const year = now.getFullYear();

            const formattedDate = `${dayName}, ${day} ${monthName} ${year}`;
            document.getElementById('date').textContent = formattedDate;
        }

        setInterval(updateDate, 1000);
        updateDate();

        async function getPrayerTimes() {
            const city = 'Tegal';
            const country = 'ID';

            try {
                const response = await fetch(`https://api.aladhan.com/v1/timingsByCity?city=${city}&country=${country}&method=8`);
                const data = await response.json();

                if (data.code === 200) {
                    const timings = data.data.timings;
                    document.getElementById('shubuh').textContent = timings.Fajr;
                    document.getElementById('dzuhur').textContent = timings.Dhuhr;
                    document.getElementById('ashar').textContent = timings.Asr;
                    document.getElementById('maghrib').textContent = timings.Maghrib;
                    document.getElementById('isya').textContent = timings.Isha;
                } else {
                    console.error('Gagal mendapatkan jadwal sholat:', data.data);
                }
            } catch (error) {
                console.error('Terjadi kesalahan:', error);
            }
        }
            
        getPrayerTimes();
    </script>
    <div class="back">
    <a href="index.php">
     <button type="submit">back</button>
    </a>
    </div>
</body>

</html>
