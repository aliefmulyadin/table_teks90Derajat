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
            width: 100%;
            border-collapse: collapse;
        }

        .responsive-table th,
        .responsive-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            overflow: hidden;
            white-space: nowrap;
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


        @media (max-width: 768px) {

            .responsive-table th,
            .responsive-table td {
                font-size: 14px;
            }

            .rotated-text {
                display: none;
            }
        }

        @media (max-width: 480px) {

            .responsive-table th,
            .responsive-table td {
                font-size: 12px;
            }
        }
    </style>

</head>

<body>
    <div class="table-container">
        <table class="responsive-table">
            <tr>
                <th rowspan="2">
                    <div>TOTAL PIUTANG</div>
                    <div>Rp. 57.824.570.772</div>
                </th>
                <th rowspan="2" class="rotated-text">PIUTANG</th>
                <th class="rotated-text">UNBILL</th>
                <th>Kolom 1</th>
                <th>Kolom 2</th>
                <th>Kolom 3</th>
                <th>Kolom 4</th>
                <th>Kolom 5</th>
                <th>Kolom 6</th>
            </tr>
            <tr>
                <td class="rotated-text">BILLED</td>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
            </tr>
            <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
        </table>
    </div>
</body>

</html>
