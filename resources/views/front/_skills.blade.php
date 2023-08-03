<section class="resume-section" id="skills">
    <div class="resume-section-content">
        <h2 class="mb-5">Skills</h2>
        <div class="subheading mb-3">Programming Languages & Tools</div>
        <ul class="list-inline dev-icons">
            @foreach (explode(', ', get_meta_value('language')) as $item)
                <li class="list-inline-item"><i class="devicon-{{ $item }}-plain colored"></i></li>
            @endforeach
        </ul>
        <div class="subheading mb-3">Workflow</div>
        {!! set_list_workflow(get_meta_value('workflow')) !!}
    </div>
</section>
