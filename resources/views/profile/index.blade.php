<x-layouts.app title="Create Profile">
    @slot('styles')
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.css"
            integrity="sha512-wcf2ifw+8xI4FktrSorGwO7lgRzGx1ld97ySj1pFADZzFdcXTIgQhHMTo7tQIADeYdRRnAjUnF00Q5WTNmL3+A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            .tokenfield .token {
                margin: -1px 1px 1px 1px;
                height: 25px;
                line-height: 22px;
                color: #fff;
                background-color: #0b5ed7
            }

            .tokenfield .token a {
                color: #FFFFFF;
                text-decoration: none;
            }
        </style>
    @endslot

    @slot('content')
        {{-- enctype untuk memasukan gambar --}}
        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-between">
                <div class="col-5">
                    <h3>Profile</h3>

                    @if (get_meta_value('foto'))
                        <img src="{{ asset('foto') . '/' . get_meta_value('foto') }}" alt="Foto Profile"
                            style="max-width:100px; max-height:100px">
                    @endif

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control form-control-sm" name="foto" id="foto">

                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control form-control-sm" name="kota" id="kota"
                            value="{{ get_meta_value('kota') }}">
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control form-control-sm" name="provinsi" id="provinsi"
                            value="{{ get_meta_value('provinsi') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Nomor Hp</label>
                        <input type="text" class="form-control form-control-sm" name="nohp" id="nohp"
                            value="{{ get_meta_value('nohp') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control form-control-sm" name="email" id="email"
                            value="{{ get_meta_value('email') }}">
                    </div>

                </div>
                <div class="col-5">
                    <h3>Akun Media Sosial</h3>
                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control form-control-sm" name="facebook" id="facebook"
                            value="{{ get_meta_value('facebook') }}">
                    </div>
                    <div class="mb-3">
                        <label for="x" class="form-label">X</label>
                        <input type="text" class="form-control form-control-sm" name="x" id="x"
                            value="{{ get_meta_value('x') }}">
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control form-control-sm" name="instagram" id="instagram"
                            value="{{ get_meta_value('instagram') }}">
                    </div>
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">Linkedin</label>
                        <input type="text" class="form-control form-control-sm" name="linkedin" id="linkedin"
                            value="{{ get_meta_value('linkedin') }}">
                    </div>
                    <div class="mb-3">
                        <label for="github" class="form-label">Github</label>
                        <input type="text" class="form-control form-control-sm" name="github" id="github"
                            value="{{ get_meta_value('github') }}">
                    </div>
                </div>
            </div>


            <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
        </form>
    @endslot

</x-layouts.app>
