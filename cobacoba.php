<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Table</title>
    <style>
        .table-container {
            overflow-x: auto;
        }

        .responsive-table {
            width: auto;
            border-collapse: collapse;
            display: grid;
            grid-auto-flow: column;
        }

        .responsive-table th,
        .responsive-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            overflow: hidden;
        }

        .rotated-text {
            writing-mode: vertical-rl;
            /* Mengatur teks agar diputar vertikal */
            transform: rotate(180deg);
            /* Memastikan teks terbaca dengan benar */
            white-space: nowrap;
            /* Mencegah teks terpotong saat dirotasi */
            width: auto;
            /* Mengikuti lebar teks yang diputar */
        }
    </style>
</head>

<body>
    <div class="table-container">
        <table class="responsive-table">
            <tr>
                <th>Kolom 1</th>
                <th>Kolom 2</th>
                <th>Kolom 3</th>
                <th>Kolom 4</th>
                <th>Kolom 5</th>
                <th>Kolom 6</th>
                <th class="rotated-text">Kolom 7</th>
            </tr>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
                <td class="rotated-text">Data 7</td>
            </tr>
            <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
        </table>
    </div>

</body>

</html>