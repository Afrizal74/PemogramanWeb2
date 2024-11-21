<?= $this->extend('layout'); ?>

<?= $this->section('main') ?>

<div class="container">
    <h3>Review dan Submit Order</h3>
    <hr />
    <table>
        <tr>
            <td>Pendidikan Karakter</td>
            <td>@1</td>
            <td>Rp70,000</td>
        </tr>
    </table>
    <h3 class="mt-3">Total</h3>
    <hr />
    <span>Rp70,000</span>
    <h3 class="mt-3">Alamat Pengiriman</h3>
    <hr />
    <p>Lrg Salikin, Italia</p>
    <h3 class="mt-3">Metode Bayar</h3>
    <hr />
    <p>Transfer Bank</p>
    <p>No Rekening: Mewing Sigma, BCA, 11022043</p>
    <div class="mt-5">
        <form action="<?= base_url('submit') ?>" method="POST">
            <button type="submit" class="btn btn-success">Submit Order</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>