<x-layouts.app title="Edit Experience">
    @slot('content')
        <div class="pb-3">
            <a href="{{ route('experience.index') }}" class="btn btn-secondary">
                << Kembali</a>
        </div>

        {{-- halaman.update didapatkan dari php artisan route:list --}}
        {{-- $data->id adalah parameternya --}}
        <form action="{{ route('experience.update', $data->id) }}" method="post">
            @csrf

            {{-- Untuk edit menambahkan method put --}}
            @method('put')

            <div class="mb-3">
                <label for="title" class="form-label">Posisi</label>
                <input type="text" class="form-control form-control-sm" name="title" id="title"
                    aria-describedby="helpId" placeholder="Please Input Posisi" value="{{ $data->title }}">
            </div>
            <div class="mb-3">
                <label for="info1" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control form-control-sm" name="info1" id="info1"
                    aria-describedby="helpId" placeholder="Please Input Nama Perusahaan" value="{{ $data->info1 }}">
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-auto">Tanggal Mulai</div>
                    <div class="col-auto">
                        <input type="date" class="form-control form-control form-control-sm" name="tanggal_mulai"
                            placeholder="dd/mm/yyyy" value="{{ $data->tanggal_mulai }}">
                    </div>
                    <div class="col-auto">Tanggal Akhir</div>
                    <div class="col-auto">
                        <input type="date" class="form-control form-control form-control-sm" name="tanggal_akhir"
                            placeholder="dd/mm/yyyy" value="{{ $data->tanggal_akhir }}">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control summernote">{{ $data->content }}</textarea>
            </div>
            <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
        </form>
    @endslot
</x-layouts.app>
