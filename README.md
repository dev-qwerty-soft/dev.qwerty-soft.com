# dev.qwerty-soft.com
# Git Repository Setup and Workflow Guide

## Initial Repository Setup

### On Production (https://github.com/dev-qwerty-soft/qwerty-soft.com)

1. **Navigate to your production directory:**
```bash
cd ~/public_html
```

2. **Initialize a git repository:**
```bash
git init
```

3. **Add remote origin:**
```bash
git remote add origin https://github.com/dev-qwerty-soft/qwerty-soft.com.git
```

4. **Add all existing files to the repository:**
```bash
git add .
```

5. **Commit files:**
```bash
git commit -m "Initial commit from production"
```

6. **Push to GitHub:**
```bash
git branch -M main
git push -u origin main
```

### On Staging (https://github.com/dev-qwerty-soft/dev.qwerty-soft.com)

1. **Navigate to your staging directory:**
```bash
cd ~/dev.qwerty-soft.com
```

2. **Initialize a git repository if not yet initialized:**
```bash
git init
```

3. **Add remote origin:**
```bash
git remote add origin https://github.com/dev-qwerty-soft/dev.qwerty-soft.com.git
```

4. **Add all files to the repository:**
```bash
git add .
```

5. **Commit files:**
```bash
git commit -m "Initial commit from staging"
```

6. **Push to GitHub:**
```bash
git branch -M main
git push -u origin main
```

## Workflow: Pushing from Staging to Production

### Step 1: Ensure staging is up-to-date
```bash
cd ~/dev.qwerty-soft.com
git status
# Add changes
git add .
git commit -m "Your descriptive commit message"
git push origin main
```

### Step 2: Deploy changes from Staging to Production

#### Pull changes from Staging repository to Production:

```bash
cd ~/public_html
git remote add staging https://github.com/dev-qwerty-soft/dev.qwerty-soft.com.git
```

Fetch the changes:
```bash
git fetch staging
```

Merge changes from staging into production:
```bash
git merge staging/main
```

Push merged changes back to production repository:
```bash
git push origin main
```

### Workflow summary
- Make changes in the staging environment.
- Push to the staging repository.
- Pull and merge changes from staging into production.
- Push merged changes to the production repository.

Following this guide ensures a smooth and controlled workflow between your staging and production environments.


