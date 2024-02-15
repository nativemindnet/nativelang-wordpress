# 🌐 nativemind_wordpress

Welcome to `nativemind_wordpress`! This plugin enhances your WordPress site with advanced translation capabilities. 🚀

## Prerequisites

Before proceeding with the installation of nativemind_wordpress`, make sure you have:

1. **Install Polylang** 🛠️

   This plugin requires the original [Polylang](https://wordpress.org/plugins/polylang/) plugin. Install and activate Polylang through your WordPress dashboard.

## 🛠️ Installation

1. **Download the Plugin** 📦
   
   Download `nativemind_wordpress` to your local machine.

2. **Upload to WordPress** 📤

   Place the plugin folder in the WordPress directory: `/wp-content/plugins/`. Customize the translations as needed.

3. **Subdomain Setup (Optional, for Wordpress Multisites)** 🌐

   If using subdomains:
   - Rename `my_domains.php.example` to `my_domains.php`.
   - Edit `my_domains.php` to include your actual domain names.
   - Set `define('SUNRISE', 'true');` in your `wp-config.php` file to enable domain mapping.

4. **Move Essential Files** 📁

   Transfer `sunrise.php` and `my_domains.php` (if using subdomains) to the `/wp-content/` directory.

## 🔌 Activation

1. **Activate the Plugin** ✅

   Log in to your WordPress dashboard, navigate to the 'Plugins' section, and activate `nativemind_wordpress`.

Your site is now ready to embrace multilingual content! 🌍

---

If you have suggestions or improvements, feel free to open an issue or submit a pull request. Happy translating! 🎉
