# Category Tree Technical Test

# Notes
Installed and updated Laragon for development environment
Updated .env file with development database created
Created migration 'Category' with basic attributes
'parent_id' attribute set within same entity as to allow for recursion
Category controller created.
Index view created for displaying list of categories
Used @include for outputting nested lists
Set Category Ids within href attribute value for links.
Edit view(category) created to illustrate realistic scenario.
Added layout for base page mark up
Use of @yield for Category index page content
Seeders created for category entity, with 3 nested examples

# Setup
Within a local development environment, from the project's root directory:
- Run 'composer install'
- Run 'npm install'
- Create and edit .env with local database credentials
- Run 'php artisan migrate:fresh --seed'
- Run 'php artisan serve' to view in the browser

