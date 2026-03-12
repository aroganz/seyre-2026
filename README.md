# Seychelles Reinsurance Global (2026) - Custom PHP Build

An ultra-lightweight, high-performance corporate web solution for **Seychelles Reinsurance Global (SeyRe Global)**. This project represents a migration from a resource-heavy WordPress environment to a streamlined, custom PHP/Bootstrap 5 framework.

## 🚀 Key Features
- **Custom PHP Architecture:** Reduced file overhead from thousands of files (WP) to ~80 core files.
- **Dynamic Content Engine:** Managed via a lightweight MySQL backend (`p` table) for SEO and page content.
- **Modern UI/UX:** Built with Bootstrap 5.3, featuring custom-coded components like the infinite partner logo slider.
- **Performance Optimized:** 90+ PageSpeed scores achieved through minimal JS dependencies and hardware-accelerated CSS animations.
- **SEO Ready:** Automated `sitemap.xml` and `robot.txt` generation with dynamic meta-tag injection.

## 📁 Project Structure
- `/about-us`: Membership and Team modules.
- `/assets`: Minified CSS, optimized SVGs, and brand imagery.
- `/blog`: Lightweight blog engine using PHP GET parameters for routing.
- `/includes`: Centralized `header.php` and `footer.php` for site-wide consistency.
- `/corporate-solutions`: Specialized reinsurance service landing pages.

## 🛠️ Tech Stack
- **Frontend:** HTML5, CSS3 (Custom Grid), Bootstrap 5.3.
- **Backend:** PHP 8.x (Environment-aware configuration).
- **Database:** MySQL (Relational schema for staff, services, and SEO data).
- **Deployment:** Git-flow with staging on ColorChalk servers.

## ⚙️ Local Development (XAMPP)
1. Clone the repository into `htdocs/seyre-global-2026`.
2. Import `seyre_local.sql` into your local phpMyAdmin.
3. Update `includes/db_connect.php` (if required) to match your local credentials.
4. Access via `http://localhost/seyre-global-2026`.

---
*Maintained by Amarnath Jaganathan | ColorChalk Studio*
