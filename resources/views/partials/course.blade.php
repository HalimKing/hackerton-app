<!-- {{-- resources/views/partials/courses.blade.php --}} -->
<div class="row properties-box" id="coursesContainer">
    @if ($courses->count() > 0)
        @foreach ($courses as $course)
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items course-item" data-category="{{ $course->category_id }}" data-title="{{ $course->title }}">
                <div class="item">
                    <a href="#"><img src="{{ asset('uploads/course/' . $course->image) }}" alt="{{ $course->image }}"></a>
                    <h4><a href="{{ route('education.show', $course->id) }}">{{ $course->title }}</a></h4>
                    <div class="main-button">
                        <a href="{{ route('education.show', $course->id) }}">Start Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No courses found.</p>
    @endif
</div>

<!-- Pagination Links -->
<div class="row">
    <div class="col-lg-12">
        <ul class="pagination">
            <!-- {{ $courses->links() }} -->
            {!! $courses->links() !!}
        </ul>
    </div>
</div>
