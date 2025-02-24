This project provides a basic interface for managing hospital data, including tracking the number of patients, active doctors, and managing doctor information.

Features
Dashboard Page
The Dashboard Page provides an overview of hospital statistics and user profile details:

Total Patients: Displays the total number of patients.
Active Doctors: Displays the number of active doctors compared to the total number of doctors.
Profile Information: Displays user profile details such as name, email, phone number, and address.
Doctor's Page
The Doctor's Page lists all doctors, with options to filter by their status (Active/Inactive) and add new doctors.

Doctor List: A table displaying doctor details, including their name, age, contact, and status.
Add New Doctor: A modal window that allows the user to add a new doctor to the system.
Prerequisites
Before running this application, ensure that you have the following installed:

PHP (>= 8.0)
Laravel (>= 8.0)
Node.js and npm (for frontend dependencies)
You should also have a database set up (e.g., MySQL) and the required database tables migrated.

Installation
Clone the repository:

bash
Copy
git clone <repository_url>
Navigate into the project directory:

bash
Copy
cd <project_directory>
Install PHP dependencies:

bash
Copy
composer install
Set up the environment variables by copying .env.example to .env:

bash
Copy
cp .env.example .env
Generate the application key:

bash
Copy
php artisan key:generate
Run the database migrations:

bash
Copy
php artisan migrate
Install frontend dependencies:

bash
Copy
npm install
Compile assets:

bash
Copy
npm run dev
Serve the application:

bash
Copy
php artisan serve
The application should now be accessible at http://127.0.0.1:8000.
