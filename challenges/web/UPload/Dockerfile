# Use an official PHP runtime as the base image
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html/

COPY ./flag.txt /flag.txt
RUN chmod 600 /flag.txt

# Enable Apache mod_rewrite module
RUN a2enmod rewrite

# Set file permissions to allow uploaded files to be written in the sandbox directory
RUN mkdir /var/www/html/sandbox && \
    chown -R www-data:www-data /var/www/html/sandbox && \
    chmod -R 755 /var/www/html/sandbox

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
