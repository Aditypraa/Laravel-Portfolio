<section class="resume-section" id="education">
    <div class="resume-section-content">
        <h2 class="mb-5">Education</h2>
        {{-- $eduaction di ambil dari key $education_data --}}
        @foreach ($education as $item)
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">{{ $item->title }}</h3>
                    <div class="subheading mb-3">{{ $item->info1 }} - {{ $item->info2 }}</div>
                    <p>IPK : {{ $item->info3 }}</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">{{ $item->tanggal_mulai_indo }} -
                        {{ $item->tanggal_akhir_indo }}</span></div>
            </div>
        @endforeach
    </div>
</section>
