<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #eee;
            padding: 1.5rem;
            border-radius: 15px 15px 0 0 !important;
        }
        .table {
            margin-bottom: 0;
        }
        .table thead th {
            border-bottom: 2px solid #dee2e6;
            background-color: #f8f9fa;
            color: #495057;
            font-weight: 600;
        }
        .btn {
            border-radius: 8px;
            padding: 0.5rem 1rem;
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
            margin-bottom: 1rem;
        }
        .btn-warning {
            color: white;
            margin-right: 0.5rem;
        }
        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Data Barang</h3>
                <a href="{{ route('barang.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Tambah Barang
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>Jumlah Barang</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barangs as $barang)
                            <tr>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->jenis_barang }}</td>
                                <td>{{ $barang->jumlah_barang }}</td>
                                <td class="text-center">
                                    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <div class="action-buttons justify-content-center">
                                            <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>