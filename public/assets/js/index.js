
$(document).ready(function () {
    // alert('hello');
    $('#region').on('change', function () {
        let region = $(this).val();
        $('#district').html('<option value="">Loading...</option>'); // Show loading text
       
        if (region) {
            $.ajax({
                url: "/get-districts", // URL to the route
                type: "GET",
                data: { region: region },
                before: function () {
                    $('#district').empty().append('<option value="">Loading...</option>');
                },
                error: function (error) {
                    $('#district').empty();
                    console.log('error',error);
                    
                    // $('#district').append('<option value="">Select District</option>');
                },
                success: function (data) {
                    $('#district').empty();
                    $('#district').append('<option value="">Select District</option>');
                    $.each(data, function (key, value) {
                        $('#district').append('<option value="' + value.district + '">' + value.district + '</option>');
                    });
                }
            });
        } else {
            $('#district').empty().append('<option value="">Select District</option>');
        }
    });


    function filterCourses() {
        let searchQuery = $('#searchBox').val().toLowerCase();
        
        // Get all selected category IDs
        let selectedCategories = [];
        $('.category-checkbox:checked').each(function () {
            selectedCategories.push($(this).val());
        });

        $('.course-item').each(function () {
            let courseTitle = $(this).data('title').toLowerCase();
            let courseCategory = $(this).data('category');

            // Check if course matches search query and selected categories
            let matchesSearch = courseTitle.includes(searchQuery);
            let matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(courseCategory.toString());

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

    // Trigger filterCourses on category checkbox change
    $('.category-checkbox').on('change', function () {
        filterCourses();
    });




// ****************************************************************************

    // Handle pagination click
    $(document).on('click', '.pagination a', function (e) {
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        fetchCourses(page);
    });




    function fetchCourses(page) {
        // Fetch data via AJAX
        // console.log(page);   
        // return false;
        $.ajax({
            url: '?page=' + page,
            type: 'GET',
            beforeSend: function() {
                $('#coursesContent').html('<p>Loading...</p>'); // Optional loading message
            },
            success: function (data) {
                $('#coursesContent').html(data);
            },
            error: function () {
                alert('Courses could not be loaded.');
            }
        });
    }

});

