# Technofra blog setup

## Routes

- Blog listing: `/blog`
- Article details: `/blog/{article-slug}`
- Blog admin: `/blog/admin`

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
