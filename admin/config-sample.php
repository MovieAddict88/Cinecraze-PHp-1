<?php
// Database configuration
define('DB_HOST', 'sql306.infinityfree.com');
define('DB_USERNAME', 'if0_39989224');
define('DB_PASSWORD', 'U1At0hgKptnk');
define('DB_NAME', 'if0_39989224_netflix');

// TMDB API Key - IMPORTANT: For production, use environment variables instead of hardcoding.
// Get your key from https://www.themoviedb.org/settings/api
define('TMDB_API_KEYS', [
    'bb51e18edb221e87a05f90c2eb456069',
    'ec926176bf467b3f7735e3154238c161'
]);

// Establish database connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
