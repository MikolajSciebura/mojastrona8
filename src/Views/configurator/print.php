<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Specyfikacja Konfiguracji - MSTechPC</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333; line-height: 1.6; }
        .container { max-width: 800px; margin: 40px auto; padding: 20px; border: 1px solid #eee; }
        .header { text-align: center; border-bottom: 2px solid #00f2ff; padding-bottom: 20px; margin-bottom: 30px; }
        .logo { font-size: 24px; font-weight: bold; color: #000; }
        .logo span { color: #00f2ff; }
        .config-table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        .config-table th, .config-table td { padding: 12px; text-align: left; border-bottom: 1px solid #eee; }
        .config-table th { background: #f9f9f9; }
        .total { text-align: right; font-size: 20px; font-weight: bold; }
        .footer { margin-top: 50px; font-size: 12px; color: #888; text-align: center; }
        @media print {
            .no-print { display: none; }
            .container { border: none; margin: 0; }
        }
    </style>
</head>
<body onload="window.print()">
    <div class="container">
        <div class="header">
            <div class="logo">MS<span>Tech</span>PC</div>
            <h1>Specyfikacja Konfiguracji</h1>
            <p>Data wygenerowania: <?= date('d.m.Y') ?></p>
        </div>

        <table class="config-table">
            <thead>
                <tr>
                    <th>Podzespół</th>
                    <th>Model</th>
                    <th style="text-align: right;">Cena</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($config['parts'] as $part): ?>
                <tr>
                    <td><strong><?= e($part['type']) ?></strong></td>
                    <td><?= e($part['name']) ?></td>
                    <td style="text-align: right;"><?= number_format($part['price'], 2, ',', ' ') ?> zł</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="total">
            Suma brutto: <?= number_format($config['total'], 2, ',', ' ') ?> zł
        </div>

        <div class="footer">
            <p>MSTechPC - Profesjonalne Komputery Gamingowe i Serwis</p>
            <p>Częstochowa, ul. Przykładowa 123 | www.mstechpc.pl | biuro@mstechpc.pl</p>
            <p>Niniejsza specyfikacja nie stanowi oferty handlowej w rozumieniu Art.66 par.1 Kodeksu Cywilnego.</p>
        </div>

        <div class="no-print" style="margin-top: 30px; text-align: center;">
            <button onclick="window.print()" style="padding: 10px 20px; cursor: pointer;">Drukuj / Zapisz PDF</button>
        </div>
    </div>
</body>
</html>
