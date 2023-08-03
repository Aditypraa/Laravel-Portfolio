<x-layouts.app title="Create Education">
    @slot('content')
        <div class="pb-3">
            <a href="{{ route('education.index') }}" class="btn btn-secondary">
                << Kembali</a>
        </div>
        <form action="{{ route('education.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Universitas</label>
                <input type="text" class="form-control form-control-sm" name="title" id="title"
                    aria-describedby="helpId" placeholder="Nama Universitas" value="{{ Session::get('title') }}">
            </div>
            <div class="mb-3">
                <label for="info1" class="form-label">Gelar</label>
                <input type="text" class="form-control form-control-sm" name="info1" id="info1"
                    aria-describedby="helpId" placeholder="Gelar" value="{{ Session::get('info1') }}">
            </div>
            <div class="mb-3">
                <label for="info2" class="form-label">Bidang Studi</label>
                <input type="text" class="form-control form-control-sm" name="info2" id="info2"
                    aria-describedby="helpId" placeholder="Bidang Studi" value="{{ Session::get('info2') }}">
            </div>
            <div class="mb-3">
                <label for="info3" class="form-label">IPK</label>
                <input type="text" class="form-control form-control-sm" name="info3" id="info3"
                    aria-describedby="helpId" placeholder="IPK" value="{{ Session::get('info3') }}">
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-auto">Tanggal Mulai</div>
                    <div class="col-auto">
                        <input type="date" class="form-control form-control form-control-sm" name="tanggal_mulai"
                            placeholder="dd/mm/yyyy" value="{{ Session::get('tanggal_mulai') }}">
                    </div>
                    <div class="col-auto">Tanggal Akhir</div>
                    <div class="col-auto">
                        <input type="date" class="form-control form-control form-control-sm" name="tanggal_akhir"
                            placeholder="dd/mm/yyyy" value="{{ Session::get('tanggal_akhir') }}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
        </form>
    @endslot
</x-layouts.app>
