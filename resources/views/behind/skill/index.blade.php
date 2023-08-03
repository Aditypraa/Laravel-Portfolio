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
        <form action="{{ route('skill.update') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">PROGRAMMING LANGUAGES & TOOLS</label>
                <input type="text" class="form-control form-control-sm skill" name="language" id="language"
                    aria-describedby="helpId" placeholder="Programming Languages & tools"
                    value="{{ get_meta_value('language') }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">WORKFLOW</label>
                <textarea name="workflow" id="content" cols="30" rows="10" class="form-control summernote">{{ get_meta_value('workflow') }}</textarea>
            </div>
            <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
        </form>
    @endslot

    @slot('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
        <script>
            $(document).ready(function() {
                $('.skill').tokenfield({
                    autocomplete: {
                        source: [{!! $skill !!}],
                        delay: 100
                    },
                    showAutocompleteOnFocus: true
                });
            });
        </script>
    @endslot
</x-layouts.app>
