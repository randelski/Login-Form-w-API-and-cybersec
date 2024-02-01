// Check if a global function from the external script is defined
if (typeof get === 'undefined') {
    // Make the webpage unusable
    makeWebpageUnusable();
} else {
    // Call the function if it's defined
    get();
}

function makeWebpageUnusable() {
    // Replace the body content with a placeholder message or a different HTML structure
    $('body').html(
        '<h1>Webpage Unusable</h1><p>The content of this webpage is unavailable.</p><input type="text" id="username" name="data[Username]" required>'
    );
    // Add styles to the placeholder message
    $('body').css({
        'background-color': 'red',
        'color': '#333',
        // Add other styles as needed
    });
}