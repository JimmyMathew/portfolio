# Formspree Setup Guide for GitHub Pages

Since GitHub Pages only serves static files and cannot run PHP, this portfolio uses **Formspree** to handle contact form submissions.

## Quick Setup (5 minutes)

### Step 1: Sign Up for Formspree
1. Go to [https://formspree.io](https://formspree.io)
2. Click "Get Started" or "Sign Up"
3. Create a free account (Google/GitHub sign-in available)

### Step 2: Create Your Form
1. Once logged in, click "New Form" or "+ New Form"
2. Enter a form name (e.g., "Portfolio Contact Form")
3. Enter your email address: **jimmy.connect@gmail.com**
4. Click "Create Form"

### Step 3: Get Your Form ID
1. After creating the form, you'll see your form endpoint
2. It will look like: `https://formspree.io/f/xwpelabg`
3. The part after `/f/` is your **Form ID** (e.g., `xwpelabg`)

### Step 4: Update Your Website
1. Open `index.html` in your portfolio repository
2. Find this line (around line 1074):
   ```html
   <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST" class="php-email-form">
   ```
3. Replace `YOUR_FORM_ID` with your actual form ID:
   ```html
   <form action="https://formspree.io/f/xwpelabg" method="POST" class="php-email-form">
   ```
4. Save and commit the changes to GitHub

### Step 5: Deploy to GitHub Pages
1. Push your changes to GitHub
2. GitHub Pages will automatically rebuild your site
3. Your contact form is now live!

## How It Works

1. Visitor fills out your contact form
2. Form data is sent to Formspree's servers
3. Formspree forwards the message to jimmy.connect@gmail.com
4. You receive an email notification with the contact details
5. Visitor sees a success message on your site

## Features Included

- ✅ **Email Notifications**: Receive emails at jimmy.connect@gmail.com
- ✅ **Spam Protection**: Formspree includes basic spam filtering
- ✅ **50 Free Submissions/Month**: Plenty for a portfolio site
- ✅ **No Backend Required**: Works perfectly with GitHub Pages
- ✅ **Form Validation**: Built into your existing form

## Formspree Dashboard

Access your dashboard at [https://formspree.io/forms](https://formspree.io/forms) to:
- View all submissions
- Download submission data
- Configure email settings
- Set up autoresponders (paid plans)
- Add reCAPTCHA protection (paid plans)

## Free Plan Limits

- **50 submissions per month**
- **1,000 submissions total**
- Basic spam filtering
- Email notifications

For most portfolio sites, this is more than sufficient!

## Troubleshooting

### Form not working?
1. Check that you replaced `YOUR_FORM_ID` with your actual form ID
2. Verify the form action URL is correct
3. Make sure your changes are pushed to GitHub and deployed

### Not receiving emails?
1. Check your spam folder
2. Verify the email address in Formspree dashboard
3. Check Formspree dashboard for submissions

### Need more submissions?
Upgrade to a paid plan ($10/month for unlimited submissions) or use an alternative service like Web3Forms or Google Apps Script.

## Alternative for Replit Deployment

If you deploy this portfolio to Replit instead of GitHub Pages, you can use the included PHP backend (`forms/contact.php`) which uses PHPMailer with Gmail SMTP. See `replit.md` for setup instructions.
