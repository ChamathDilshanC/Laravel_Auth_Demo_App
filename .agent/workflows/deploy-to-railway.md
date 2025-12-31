---
description: Deploy Laravel App to Railway.app
---

# Deploy Laravel Application to Railway.app

## Prerequisites

-   GitHub account
-   Railway.app account (free)
-   Your Laravel app ready

## Step 1: Prepare Your Application

### 1.1 Create a Procfile

Create a file named `Procfile` in your project root:

```
web: php artisan serve --host=0.0.0.0 --port=$PORT
```

### 1.2 Update composer.json

Add this to your `composer.json` under `scripts`:

```json
"post-install-cmd": [
    "php artisan clear-compiled",
    "php artisan optimize",
    "php artisan migrate --force"
]
```

### 1.3 Create .gitignore (if not exists)

Make sure `.env` is in your `.gitignore`:

```
/vendor
/node_modules
.env
.env.backup
```

## Step 2: Push to GitHub

```bash
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO.git
git push -u origin main
```

## Step 3: Deploy to Railway

### 3.1 Create New Project

1. Go to [railway.app](https://railway.app)
2. Sign in with GitHub
3. Click "New Project"
4. Select "Deploy from GitHub repo"
5. Choose your repository

### 3.2 Add MySQL Database

1. In your Railway project, click "New"
2. Select "Database" → "Add MySQL"
3. Railway will provision a MySQL database

### 3.3 Configure Environment Variables

1. Click on your Laravel service
2. Go to "Variables" tab
3. Add these variables:

```env
APP_NAME=YourAppName
APP_ENV=production
APP_KEY=base64:YOUR_APP_KEY_HERE
APP_DEBUG=false
APP_URL=https://your-app.railway.app

DB_CONNECTION=mysql
DB_HOST=${{MySQL.MYSQL_HOST}}
DB_PORT=${{MySQL.MYSQL_PORT}}
DB_DATABASE=${{MySQL.MYSQL_DATABASE}}
DB_USERNAME=${{MySQL.MYSQL_USER}}
DB_PASSWORD=${{MySQL.MYSQL_PASSWORD}}

SESSION_DRIVER=database
SESSION_LIFETIME=120
```

**Important:** Generate APP_KEY by running:

```bash
php artisan key:generate --show
```

Copy the output and paste it as APP_KEY value.

### 3.4 Deploy

Railway will automatically deploy your app!

## Step 4: Run Migrations

1. In Railway, go to your Laravel service
2. Click on "Settings" → "Deploy"
3. Or run migrations manually in the terminal:

```bash
php artisan migrate --force
```

## Step 5: Access Your Application

Your app will be available at:
`https://your-app-name.railway.app`

---

## Alternative: Deploy to Heroku

### 1. Install Heroku CLI

Download from [heroku.com/cli](https://devcenter.heroku.com/articles/heroku-cli)

### 2. Login and Create App

```bash
heroku login
heroku create your-app-name
```

### 3. Add MySQL Database

```bash
heroku addons:create jawsdb:kitefin
```

### 4. Set Environment Variables

```bash
heroku config:set APP_KEY=$(php artisan key:generate --show)
heroku config:set APP_ENV=production
heroku config:set APP_DEBUG=false
```

### 5. Create Procfile

```
web: vendor/bin/heroku-php-apache2 public/
```

### 6. Deploy

```bash
git push heroku main
heroku run php artisan migrate --force
```

---

## Database Backup (Important!)

### Export Current Database

```bash
mysqldump -u root -p laravel_auth_db > backup.sql
```

### Import to Production

After deployment, import your data:

```bash
# On Railway, use the MySQL connection string
mysql -h MYSQL_HOST -u MYSQL_USER -p MYSQL_DATABASE < backup.sql
```

---

## Troubleshooting

### Issue: 500 Error

**Solution:** Check logs in Railway dashboard

### Issue: Database Connection Failed

**Solution:** Verify environment variables match Railway's MySQL credentials

### Issue: Assets Not Loading

**Solution:** Run `php artisan optimize` and `php artisan config:cache`

---

## Production Checklist

-   [ ] APP_DEBUG set to `false`
-   [ ] APP_ENV set to `production`
-   [ ] Strong APP_KEY generated
-   [ ] Database credentials configured
-   [ ] .env file NOT committed to Git
-   [ ] Migrations run successfully
-   [ ] Test signup/signin functionality
-   [ ] SSL certificate enabled (automatic on Railway/Heroku)

---

## Useful Commands

```bash
# Clear all caches
php artisan optimize:clear

# Rebuild caches
php artisan optimize

# View logs
heroku logs --tail  # For Heroku
# Or check Railway dashboard for logs

# Run migrations
php artisan migrate --force

# Rollback migration
php artisan migrate:rollback
```
