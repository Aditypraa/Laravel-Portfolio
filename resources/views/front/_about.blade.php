<section class="resume-section" id="about">
    <div class="resume-section-content">
        <h1 class="mb-0">
            {{-- Setting di bagian helper --}}
            {!! set_about_nama($about->title) !!}
        </h1>
        <div class="subheading mb-5">
            {{ get_meta_value('kota') }} · {{ get_meta_value('provinsi') }} · {{ get_meta_value('nohp') }} ·
            <a href="mailto:{{ get_meta_value('email') }}">{{ get_meta_value('email') }}</a>
        </div>

        {{-- Tanda !! !! pada $about->content untuk tidak menampilkan style karakter atau yang lainnya --}}
        <div class="lead mb-5">{!! $about->content !!}</div>
        <div class="social-icons">
            <a class="social-icon" href="{{ get_meta_value('linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
            <a class="social-icon" href="{{ get_meta_value('github') }}"><i class="fab fa-github"></i></a>
            <a class="social-icon" href="{{ get_meta_value('x') }}"><i class="fab fa-twitter"></i></a>
            <a class="social-icon" href="{{ get_meta_value('facebook') }}"><i class="fab fa-facebook-f"></i></a>
            <a class="social-icon" href="{{ get_meta_value('instagram') }}"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</section>
