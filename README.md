Dead simple Behat tests running in a Docker container on a headless Chromium.
=============================================================================

This repository holds a dead simple plain PHP application and some Behat tests, all within Docker containers.

*****

Running the application yourself
--------------------------------

### Manually (without Docker)

To test that things are working before adding Docker into the mix, this application can be run using PHP's inbuilt server.

1) Clone the repository: `git clone https://github.com/g105b/docker-behat-chromium-headless`.
2) Enter the directory and run the server: `cd docker-behat-chromium-headless`, `php -S 0.0.0.0:80`.
3) Visit http://localhost in your browser. You should see a _Hello, World_ message and an interactive form.

Press Ctrl+C to stop PHP's inbuilt server.

### As a Docker composition

1) Clone and enter the repository.
2) Run `docker-compose up` to bring up the code and web containers, as defined within `docker-compose.yml`.
3) Visit http://localhost in your browser. You should see a _Hello, World_ message and an interactive form.

Run `docker-compose down` to stop the Docker composition.

Running the tests
-----------------

// TODO.