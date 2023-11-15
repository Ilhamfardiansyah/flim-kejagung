@extends('Layouts.main')
<!-- Tombol untuk menambahkan form -->

@section('content')
    <button id="tambahForm" class="btn btn-primary">Tambah Form</button>

    <!-- Container untuk form yang akan ditambahkan -->
    <div id="formContainer">
        <!-- Form awal di sini -->
        <div class="form-group">
            <label for="newInput">Input Baru</label>
            <input type="text" class="form-control" id="newInput" name="newInput[]">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ketika tombol 'Tambah Form' ditekan
            $("#tambahForm").click(function() {
                // Tambahkan form baru ke dalam container
                $("#formContainer").append('<div class="form-group">' +
                    '<label for="newInput">Input Baru</label>' +
                    '<input type="text" class="form-control" id="newInput" name="newInput[]">' +
                    '</div>');
            });
        });
    </script>
@endsection
