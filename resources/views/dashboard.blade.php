<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body {
      background-color: #f0f8ff;
    }

    .sidebar {
      height: 100vh;
      background-color: #a3c9f9;
      padding-top: 20px;
    }

    .sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 10px 20px;
    }

    .sidebar a:hover {
      background-color: #5b9bd5;
    }

    .content {
      padding: 30px;
    }

    .table th {
      background-color: #a3c9f9;
    }

    .btn-primary {
      background-color: #5b9bd5;
      border: none;
    }

    .btn-primary:hover {
      background-color: #4a8ac4;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 sidebar">
        <h4 class="text-center text-white">My Dashboard</h4>
        <a href="#">Home</a>
        <a href="#">Data</a>
        <a href="#">Settings</a>
        <a href="/">Log out</a>
      </div>

      <!-- Content -->
      <div class="col-md-10 content">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3>Data Users</h3>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">+ Tambah Data</button>
        </div>

        <!-- Table -->
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John Doe</td>
              <td>john@example.com</td>
              <td>
                <button class="btn btn-sm btn-warning">Edit</button>
                <button class="btn btn-sm btn-danger">Hapus</button>
              </td>
            </tr>
            <!-- Data lainnya -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal Form Tambah/Edit -->
  <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
