# Jimmy Mathew - Portfolio Website

## Overview
Personal portfolio website for Jimmy Mathew, a Full-Stack Lead Developer with 9+ years of end-to-end IT experience, specializing in .NET Core, Angular, and Cloud Technologies. Currently pursuing Master's in Digital Project Management at Université Toulouse - Jean Jaurès and seeking a 4-6 months internship starting February 2026.

## Project Architecture
- **Frontend**: Static HTML/CSS/JavaScript
  - Bootstrap 5.3.7 framework
  - Vendor libraries: AOS (animations), GLightbox (lightbox), Swiper (carousel), Typed.js (typing effect), etc.
  - Main pages: index.html, portfolio-details.html, service-details.html, starter-page.html
- **Backend**: PHP contact form handler (forms/contact.php)
- **Assets**: Images, CSS, JavaScript files, resume PDF in the assets/ directory

## Technology Stack
- HTML5
- CSS3 (Bootstrap 5.3.7)
- JavaScript (Vanilla JS with vendor libraries)
- PHP 8.2 (for serving the site and contact form handling)

## Structure
```
├── index.html              # Main portfolio page
├── portfolio-details.html  # Portfolio item details
├── service-details.html    # Service details
├── starter-page.html       # Template starter page
├── assets/                 # Static assets
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   ├── img/               # Images (including profile photos)
│   ├── vendor/            # Third-party libraries
│   └── JimmyMathew_IT_LeadDeveloper_*.pdf  # Resume
└── forms/                 # PHP contact form
    └── contact.php
```

## Profile Information
- **Name**: Jimmy Mathew
- **Title**: Full-Stack Lead Developer
- **Experience**: 9+ years
- **Location**: Toulouse, France
- **Email**: jimmy.connect@gmail.com
- **Phone**: +33 7 45 72 19 40
- **LinkedIn**: https://www.linkedin.com/in/jimmy-mathew-tech/
- **Availability**: Seeking 4-6 months internship from February 2026

## Development Setup
The site is served using PHP's built-in development server on port 5000.

## Deployment
Configured for autoscale deployment using PHP built-in server.

## Recent Changes
- **October 25, 2025**: GitHub Pages compatibility and contact form updates
  - Updated contact form to use Formspree for GitHub Pages compatibility (static hosting)
  - Added phone number field to contact form (optional)
  - Created FORMSPREE_SETUP.md guide for easy Formspree configuration
  - PHP/PHPMailer backend still available for Replit deployments
  - Form now works on both GitHub Pages (via Formspree) and Replit (via PHP)
- **October 25, 2025**: Contact form implementation and content updates
  - Implemented functional contact form using PHPMailer with Gmail SMTP
  - Added SMTP_PASSWORD to Replit Secrets for secure email delivery
  - Updated hero typed items order: "Full Stack Developer, Team Leader, .NET And Angular Expert, AWS Certified Developer Associate, Agile Strategist, Emerging Digital Project Management Professional, Tech Hobbyist"
  - Changed profile tagline to "Building systems that scale. Leading teams that thrive. Designing futures that matter."
  - Installed PHPMailer via Composer for email functionality
  - Updated .gitignore to exclude vendor/ and composer.lock
- **October 25, 2025**: Final portfolio updates with theme-matched custom images
  - Generated 11 unique custom portfolio images matching the website's clean, modern corporate theme
  - All images use the website's vibrant blue accent color (#065cc2), navy tones, and teal highlights
  - Images feature technology-forward dashboards, cloud infrastructure diagrams, API workflows, and mobile app interfaces
  - Applied flat-plus-neumorphic design style with rounded corners and subtle shadows to match site aesthetic
  - Images include: AWS cloud rental screening platform, API marketplace interface, consumer portal, ID verification system, demand management dashboard, form builder, resource allocation tool, framework components, ServiceNow system, mobile app tracker, and college website
  - Added professional disclaimer to portfolio section: "Portfolio images are visual representations for reference purposes and do not depict actual project screenshots"
  - Updated React JS skill from 90% to 75%
  - Changed Professional Expertise stat from "3 Team Members Led" to "10 Million+ Users Supported"
  - Updated LinkedIn URL to https://www.linkedin.com/in/jimmy-mathew-tech/ across all instances
  - Added 2013 Bachelors in Computer Science education timeline entry
  - Changed "MCA" to full "Masters in Computer Applications" in timeline and education section
  - Created and installed new clearer JM favicon with large bold letters for better visibility
- **October 25, 2025**: Enhanced portfolio with additional projects and tech stacks
  - Added Jayaam Mobile App and Loyola College Website projects at the end of portfolio
  - Added detailed tech stack information to all 11 portfolio projects
  - Created custom "JM" favicon reflecting the website's blue color theme (#065cc2)
  - Updated all project descriptions with comprehensive technology details
- **October 25, 2025**: Updated portfolio section with key professional projects
  - Replaced all portfolio items with 9 key projects from professional career (2016-2025)
  - Projects include: TransUnion Rental Screening Solutions (TURSS), TransUnion API Marketplace, TransUnion Consumer Interactive (TUCI), ID Vision 2.0, Integrated Demand Management System, Dynamic Form Management, Resource Forecasting, Framework Components, and Failure Analysis System
  - Excluded Loyola College student projects as requested
  - Updated portfolio filters to categorize projects as Cloud Apps, APIs & Services, and Web Apps
  - Added detailed descriptions with technologies used and timeframes for each project
- **October 25, 2025**: Updated portfolio based on key projects document
  - Changed Projects Completed statistic from 150 to 30+
  - Updated floating cards from "UI/UX Design, Development, Creative Ideas" to "Development, Creative Ideas, Project Management"
  - Added full location details to education institutions:
    - Université Toulouse - Jean Jaurès, Toulouse, France
    - Loyola College, University of Madras, Chennai, India
  - Updated career timeline: 2016 - Graduated with MCA from Loyola College - Gold Medalist and joined Flex as an Associate Software Developer
- **October 25, 2025**: Updated portfolio with latest details
  - Changed title from Senior Developer to Lead Developer
  - Updated profile picture to professional photo
  - Updated work experience with TransUnion Lead Developer role (2024-2025)
  - Added current Master's degree in Digital Project Management
  - Updated location from India to Toulouse, France
  - Updated contact information (phone: +33 7 45 72 19 40)
  - Updated years of experience from 5 to 9+
  - Added LinkedIn profile link
  - Added downloadable resume PDF
  - Fixed broken image references in portfolio section
  - Updated skills to include PostgreSQL, Oracle, Azure DevOps, Terraform
  - Updated statistics to show 10M+ users supported
- **October 25, 2025**: Initial project setup in Replit environment
  - Configured PHP 8.2 for development server
  - Set up workflow to serve the site on port 5000
  - Created .gitignore for Replit environment
  - Configured autoscale deployment for production

## Contact Form
- **GitHub Pages Compatible**: Contact form uses Formspree (https://formspree.io) for static site email delivery
- **Setup Required**: Sign up at formspree.io, create a form, and replace `YOUR_FORM_ID` in index.html with your actual form ID
- **How it works**: When hosted on GitHub Pages, form submissions are sent to Formspree, which forwards them to your email
- **For Replit hosting**: The PHP/PHPMailer backend (forms/contact.php) is still available if you deploy to Replit instead of GitHub Pages
- **Free tier**: 50 submissions per month on Formspree's free plan

## Notes
- Template originally from BootstrapMade.com, customized with personal information
- All images optimized in WebP format for better performance
- Resume PDF available for download directly from the About section
