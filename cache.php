function get_cache_folder_path() {
    // Check if object cache is enabled
    if (function_exists('wp_cache_get')) {
        // Try to get the cache directory path
        $cache_directory = wp_cache_get('cache_directory', 'general');

        // If the cache directory is not set, use the default location
        if (!$cache_directory) {
            $cache_directory = ABSPATH . 'wp-content/cache/';
        }

        // Ensure that the cache directory exists, and create it if necessary
        if (!is_dir($cache_directory)) {
            // Create the cache directory with the appropriate permissions (e.g., 0755)
            mkdir($cache_directory, 0755, true);
        }

        return trailingslashit($cache_directory);
    } else {
        // Object cache is not enabled, handle accordingly
        // You may want to return a default path or handle it in a different way
        return false;
    }
}