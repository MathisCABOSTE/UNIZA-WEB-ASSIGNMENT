# Providence

![PHP](https://img.shields.io/badge/PHP-86.7%25-777BB4?style=flat&logo=php) ![CSS](https://img.shields.io/badge/CSS-12.7%25-1572B6?style=flat&logo=css3) ![Docker](https://img.shields.io/badge/Docker-0.6%25-2496ED?style=flat&logo=docker)

Providence is a lightweight social media platform where users can publish articles, browse content, and react to posts by leaving likes.

![Front page of Providence](readme_images/image.png)

## 🚀 Getting Started

### Prerequisites
Make sure you have [Docker](https://www.docker.com/) and `docker-compose` installed on your machine.

### Installation & Running

1. Clone the repository and navigate into it.
2. Build and start the Docker containers:
   ```bash
   docker-compose up --build
   ```
3. Open your browser and visit: [http://localhost](http://localhost)

## ⚙️ Configuration & Accounts

### Database Password
To make the database password easily configurable, it is stored in `docker-compose.yml` and `config.php`. 
To change the password, you must update:
- The `MYSQL_PASSWORD` environment variable in `docker-compose.yml`
- The `$dbpassword` variable in `config.php`

### Admin Account
The platform comes with a default administrator account:
- **Username:** `admin`
- **Password:** `admin`

*(Note: You can change the password from the account settings page once logged in.)*

## ✨ Features

### Browsing & Searching
- **Front Page:** View the latest posts or log in to interact.
- **Search:** Find specific articles by entering keywords in the search bar. Results are ordered from newest to oldest.

### Reading & Interacting
- **Articles:** Click on an article to read the full content.
- **Likes:** Logged-in users can like articles.
- **Moderation:** Authors and Administrators have the ability to delete articles directly from the reading view.

### User Authentication
- **Log In:** Access your existing account.
- **Sign Up:** Create a new account. *(Note: Usernames only support lowercase alphanumeric characters and underscores. Duplicate usernames in different cases are not permitted.)*

### Content Creation
- **Create New Article:** Logged-in users can write and publish articles effortlessly via the "Create Article" page.

### User Dashboard (Account Panel)
Accessible from the top right of the screen when logged in, giving you quick access to:
- **My Articles:** Manage and view articles you've authored.
- **Liked Articles:** View a list of articles you've liked.
- **Settings:** Change your password and manage account preferences.

### Admin Panel
Administrators get access to an exclusive **Admin Panel** via the settings page:
- View a comprehensive list of all registered users.
- Search for specific users.
- Access detailed views of any user's "Liked Articles" and "Authored Articles".
