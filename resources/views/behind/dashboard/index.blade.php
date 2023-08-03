<x-layouts.app title="Dashboard">

    @slot('content')
        <p class="card-title">Dashboard</p>

        {{-- a href menggunakan cara route resource --}}
        <div class="pb-3"><a href="{{ route('halaman.create') }}" class="btn btn-primary">+ Tambah Halaman</a></div>
        <div class="table-responsive">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Title</th>
                        <th class="col-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $nomor++ }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <a href="{{ route('halaman.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                {{-- Untuk Edit Dari data seperti Ini --}}
                                <form onsubmit="return confirm('Yakin Menghapus Data?')"
                                    action="{{ route('halaman.destroy', $item->id) }}" class="d-inline" method="POST">
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
