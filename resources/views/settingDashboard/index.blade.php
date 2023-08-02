<x-layouts.app title="Create Skill">
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
        <form action="{{ route('settingDashboard.update') }}" method="post">
            @csrf

            <div class="form-group row">
                <label for="" class="col-sm-2">About</label>
                <div class="col-sm-6">
                    <select name="about" id="about" class="form-control form-control-sm">
                        <option value="">-Pilih-</option>
                        @foreach ($dataDashboard as $item)
                            <option value="{{ $item->id }}"
                                {{ get_meta_value('about') == $item->id ? 'selected' : '' }}>
                                {{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">Interest</label>
                <div class="col-sm-6">
                    <select name="interest" id="interest" class="form-control form-control-sm">
                        <option value="">-Pilih-</option>
                        @foreach ($dataDashboard as $item)
                            <option value="{{ $item->id }}"
                                {{ get_meta_value('interest') == $item->id ? 'selected' : '' }}>
                                {{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2">Award</label>
                <div class="col-sm-6">
                    <select name="award" id="award" class="form-control form-control-sm">
                        <option value="">-Pilih-</option>
                        @foreach ($dataDashboard as $item)
                            <option value="{{ $item->id }}"
                                {{ get_meta_value('award') == $item->id ? 'selected' : '' }}>
                                {{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
        </form>
    @endslot
</x-layouts.app>
