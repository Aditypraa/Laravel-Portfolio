<x-layouts.app title="Education">

    @slot('content')
        <p class="card-title">Education</p>

        {{-- a href menggunakan cara route resource --}}
        <div class="pb-3"><a href="{{ route('education.create') }}" class="btn btn-primary">+ Tambah Education</a></div>
        <div class="table-responsive">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Universitas</th>
                        <th>Gelar</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Akhir</th>
                        <th class="col-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $nomor++ }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->info1 }}</td>
                            <td>{{ $item->tanggal_mulai_indo }}</td>
                            <td>{{ $item->tanggal_akhir_indo }}</td>
                            <td>
                                <a href="{{ route('education.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                {{-- Untuk Edit Dari data seperti Ini --}}
                                <form onsubmit="return confirm('Yakin Menghapus Data?')"
                                    action="{{ route('education.destroy', $item->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" type="submit" name="submit">Delete</button>
                                </form>
                                {{-- End Edit --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endslot



</x-layouts.app>
