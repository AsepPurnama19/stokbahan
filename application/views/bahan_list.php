<?php $this->load->view('header')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>
<body>
<?php if ($this->session->flashdata('message')):?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('message')?>
  </div>        
<?php endif?>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Stok Bahan</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <table id="bahanTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1; ?>
            <?php foreach ($list_bahan as $bahan): ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $bahan->nama; ?></td>
                    <td><?php echo $bahan->jumlah; ?></td>
                    <td>
                        <a href="<?php echo site_url('Bahan/update/'.$bahan->id_bahan)?>" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo site_url('Bahan/delete/'.$bahan->id_bahan)?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Akan Menghapus Data Ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
<script>
        $(document).ready(function() {
            $('#bahanTable').DataTable();

        });
 </script>

</body>
</html>

<?php $this->load->view('footer')?>
