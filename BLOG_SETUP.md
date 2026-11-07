# Technofra blog setup

## Routes

- Blog listing: `/blog/`
- Article details: `/blog/?post={article-slug}`
- Blog admin: `/blog-admin/`

These URLs use directory index entry points so they also work in an XAMPP subfolder with the original `.htaccess` and its `RewriteBase /`. No rewrite changes are required. Use `/blog-admin/?view=list` for the article list. All admin form actions and redirects use this route. The optional `/blog/admin/` compatibility route needs the nested `blog/admin/index.php` file deployed; use `/blog-admin/` as the main address. Older `/blog/{article-slug}` URLs require custom rewrites and are not used by this setup. Inline image uploads use `/blog-upload-image/` so POST requests avoid redirects. For a subdirectory installation, prefix these paths with the project directory.

## Live deployment checks

Upload `blog-helpers.php` whenever routing changes: it generates listing, detail, admin, login, edit, delete, and status form URLs. Upload the directory entry points `blog/index.php`, `blog-admin/index.php`, and `blog-upload-image/index.php` with the root PHP files. Keep the original `.htaccess` unchanged. Do not replace production credentials with local XAMPP credentials.

Verify `/blog/`, a real `/blog/?post=...` link from a card, and `/blog-admin/`. The admin login form must submit to `/blog-admin/`, not `/blog/admin/`. A local code change does not change the live server until the edited files are uploaded.

The routes require Apache `mod_rewrite` and the project `.htaccess` file to be enabled.

## Configure admin access

Set `TECHNOFRA_BLOG_ADMIN_USERNAME` and `TECHNOFRA_BLOG_ADMIN_PASSWORD_HASH` in the PHP/Apache environment. Generate a password hash with PHP:

```powershell
php -r "echo password_hash('replace-with-a-strong-password', PASSWORD_DEFAULT), PHP_EOL;"
```

For a local XAMPP setup, create an untracked `blog-config.local.php` beside `blog-config.php`:

```php
<?php
return [
    'username' => 'admin',
    'password_hash' => 'paste-the-generated-password-hash-here',
];
```

Do not use a plain-text password in this file. Keep the local config private and do not commit it.

## Storage permissions

The PHP process needs permission to write to `blog-content/` and `blog-content/uploads/`. The JSON post store and uploaded images are created there. Post content is plain text; blank lines separate paragraphs. Cover images may be JPG, PNG, or WebP and must be 5 MB or smaller.
