
$(document).on('click', '#add-option', function() {
    // Increment or initialize the count variable as needed
    let count = $('.option-container .option').length + 1;

    // Create the new option element and hide it initially
    let newOption = $(
        `<div class="row option" data-id="${count}" style="display: none;">
            <div class="col-lg-6">
                <div class="form-floating mb-3 d-flex align-items-center ">

                    <input type="text" class="form-control d-inline" placeholder="Option" name="option[]">
                    <span class="remove-option"><ion-icon class="close-outline" name="close-outline"></ion-icon></span>
                    <label for="floatingInput">Option</label>
                </div>
                <div class="form-check">
                    <input type="hidden" name="is_answer[]" value="false">
                    <input class="form-check-input" name="is_correct[]" type="checkbox" value="${count}" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Answer
                    </label>
                </div>
            </div>
        </div>`
    );

    // Append the new option to the container and fade it in
    $('.option-container').append(newOption);
    newOption.fadeIn('slow');
});

$(document).on('click', '.remove-option', function() {
    var dataId = $(this).closest('.option').data('id');
    $('.option[data-id="' + dataId + '"]').fadeOut('slow', function() {
        $(this).remove(); // Optionally remove the element from the DOM after fading out
    });
});

$(document).ready(function () {
    function filterCourses() {
        let searchQuery = $('#searchBox').val().toLowerCase();
        let selectedCategory = $('input[name="category_id"]:checked').val();

        $('.course-item').each(function () {
            let courseTitle = $(this).data('title').toLowerCase();
            let courseCategory = $(this).data('category');

            // Check if course matches search query and selected category
            let matchesSearch = courseTitle.includes(searchQuery);
            let matchesCategory = selectedCategory ? courseCategory == selectedCategory : true;

            if (matchesSearch && matchesCategory) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }

    // Trigger filterCourses on search input change
    $('#searchBox').on('input', function () {
        filterCourses();
    });

    // Trigger filterCourses on category selection change
    $('.category-radio').on('change', function () {
        filterCourses();
    });
});