# Subdomain Setup (Optional, for Wordpress Multisites)
1. **Move Essential Files** 📁

   If using subdomains:
   - Rename `my_domains.php.example` to `my_domains.php`.
   - Edit `my_domains.php` to include your actual domain names.
   - Set `define('SUNRISE', 'true');` in your `wp-config.php` file to enable domain mapping.

2. **Move Essential Files** 📁

   Transfer `sunrise.php` and `my_domains.php` (if using subdomains) to the `/wp-content/` directory.

details: https://gist.github.com/cyrillbolliger/0fc8f8d72273e5227890dfcf9d6c017a