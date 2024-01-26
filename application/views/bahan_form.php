<?php $this->load->view('header')?>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tambah Bahan</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
        <div class="container">
            <form action="<?php echo $action; ?>" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Bahan</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $jumlah; ?>" required>
                </div>
                <!-- Add other fields as needed -->

                <input type="hidden" name="id_bahan" value="<?php echo $id_bahan; ?>">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('footer')?>
