<x-layouts.app>
    @slot('content')
        <div class="pb-3">
            <a href="{{ route('halaman.index') }}" class="btn btn-secondary">
                << Kembali</a>
        </div>

        {{-- halaman.update didapatkan dari php artisan route:list --}}
        {{-- $data->id adalah parameternya --}}
        <form action="{{ route('halaman.update', $data->id) }}" method="post">
            @csrf

            {{-- Untuk edit menambahkan method put --}}
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control form-control-sm" name="title" id="title"
                    aria-describedby="helpId" placeholder="Please Input Title" value="{{ $data->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control summernote">{{ $data->content }}</textarea>
            </div>
            <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
        </form>
    @endslot
</x-layouts.app>
