## Project description

A test site that allows user to upload images to a database, choose their placement on the front page, and to see the
total number of click and view count of each image placement. The site's front page by default contains empty
placeholders that can be populated with the user's images.

The <i>Home page</i> contains an interactive image slider and static images that load randomly on each page load.
The <i> Upload page</i> allows the upload of images in .jpg, .png, and .gif formats (images are then automatically
cropped and resized to fit the given image placeholders). The <i>Statistics page</i> shows a table of the total number
of clicks and views per image placement.

Clicks are recorded once per page load. Views are recorded when an image appears in the viewport, and once per page
load (views will be recorded also for the empty placeholders).

Project made using the Laravel 5.6 framework.

## Project requirements

- PHP version 7.1.3
- GD Graphics Library `sudo apt install php7.1-gd`

## Project setup

- Create a local database named `test_project`
- Rename the `.env.example` file to `.env` and fill in the database information.
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan serve`
- Access the project at `localhost:8000`