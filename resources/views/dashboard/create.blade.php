<x-layouts.app>
    @slot('content')
        <div class="pb-3">
            <a href="{{ route('halaman.index') }}" class="btn btn-secondary">
                << Kembali</a>
        </div>
        <form action="{{ route('halaman.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control form-control-sm" name="title" id="title"
                    aria-describedby="helpId" placeholder="Please Input Title" value="{{ Session::get('title') }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control summernote">{{ Session::get('content') }}</textarea>
            </div>
            <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
        </form>
    @endslot
</x-layouts.app>
