<section class="invoice-page">
    <div class="container">
        <div class="invoice-box" id="printable-invoice">
            <header class="invoice-header">
                <div class="logo">
                    <span class="text-neon">MS</span>TechPC
                </div>
                <div class="invoice-meta">
                    <h2>Faktura VAT #INV/2024/05/128</h2>
                    <p>Data wystawienia: 15.05.2024</p>
                </div>
            </header>

            <hr>

            <div class="invoice-details">
                <div class="seller">
                    <strong>Sprzedawca:</strong>
                    <p>MSTechPC sp. z o.o.<br>
                    Al. NMP 12<br>
                    42-200 Częstochowa<br>
                    NIP: 1234567890</p>
                </div>
                <div class="buyer">
                    <strong>Nabywca:</strong>
                    <p>Klient Premium<br>
                    ul. Testowa 1/2<br>
                    00-001 Warszawa</p>
                </div>
            </div>

            <table class="invoice-table">
                <thead>
                    <tr>
                        <th>Produkt</th>
                        <th>Cena netto</th>
                        <th>VAT</th>
                        <th>Cena brutto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MSTech Extreme Gaming R1</td>
                        <td>7 316,26 zł</td>
                        <td>23%</td>
                        <td>8 999,00 zł</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-right"><strong>RAZEM:</strong></td>
                        <td class="text-neon"><strong>8 999,00 zł</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="invoice-actions text-center">
            <button class="btn btn-primary" onclick="window.print()"><i class="fas fa-print"></i> Drukuj Fakturę</button>
        </div>
    </div>
</section>

<style>
.invoice-page { padding: 60px 0; }
.invoice-box { background: white; color: black; padding: 60px; border-radius: 10px; max-width: 800px; margin: 0 auto; box-shadow: 0 0 20px rgba(0,0,0,0.2); }
.invoice-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; }
.invoice-details { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px; }
.invoice-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
.invoice-table th, .invoice-table td { border: 1px solid #ddd; padding: 12px; text-align: left; }
.text-right { text-align: right; }
.invoice-actions { margin-top: 40px; }
@media print {
    body * { visibility: hidden; }
    #printable-invoice, #printable-invoice * { visibility: visible; }
    #printable-invoice { position: absolute; left: 0; top: 0; width: 100%; }
}
</style>
