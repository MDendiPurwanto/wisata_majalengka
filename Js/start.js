
    $(document).ready(function () {
        $('#star-rating').raty({
            scoreName: 'rating',
            score: 0, // Initial rating (optional)
            starType: 'i', // Type of stars (e.g., i, img)
            starOff: 'far fa-star', // Class for inactive star icon
            starOn: 'fas fa-star', // Class for active star icon
            hints: ['1', '2', '3', '4', '5'], // Optional hints for ratings
            click: function (score, evt) {
                $('#rating-input').val(score); // Set the hidden input value
            }
        });
    });
