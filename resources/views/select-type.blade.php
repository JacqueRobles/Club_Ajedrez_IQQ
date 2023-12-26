<form id="user_type_form">
    <select name="user_type" id="user_type">
        <option value="directives">Directive</option>
        <option value="players">Player</option>
        <!-- Add more options as needed -->
    </select>
    <button type="submit">Next</button>
</form>
<div id="registration_form"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#user_type_form').on('submit', function(e) {
        e.preventDefault();

        var userType = $('#user_type').val();

        $.ajax({
            url: '/' + userType + '/create', // Replace with the URL of your form route
            type: 'GET',
            success: function(response) {
                // Load the form into the registration_form div
                $('#registration_form').html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Handle the error
                console.log(textStatus, errorThrown);
            }
        });
    });
</script>