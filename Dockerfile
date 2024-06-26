# Use an official PHP image as a base
FROM php:latest

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Set the working directory in the container
WORKDIR /var/www/html
# Expose port 80 to allow external access
EXPOSE 80

# Start the PHP server
CMD ["php", "-S", "0.0.0.0:80"]
