# Use an official PHP image with Apache
FROM php:8.1-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy all the contents of the current directory to the container's working directory
COPY . /var/www/html

# Grant appropriate permissions to the web root
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Enable Apache mod_rewrite if needed (optional)
RUN a2enmod rewrite

# Expose port 80 for HTTP traffic
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
