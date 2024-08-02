# Airline Reservation System

This repository contains the code for an Airline Reservation System built using PHP and MySQL. The system allows users to book flights, view booked tickets, and manage flight details. It also includes administrative functionalities for managing flights and jets.

## Features

- User registration and authentication
- Flight booking and ticket management
- Admin functionalities for managing flights and jets
- Password reset functionality
- Payment handling

We have added a new "Forgot Password" feature to enhance user experience and security. This feature allows users to reset their password if they forget it. Here is a description of how it works:

Forgot Password Page (forgot_password.php):

Users enter their registered email address.
A reset link is sent to their email using PHPMailer.
Forgot Password Handler (forgot_password_handler.php):

Validates the email address.
Generates a unique token and saves it in the database.
Sends an email with the reset link containing the token.
Reset Password Page (reset_password.php):

Users access this page via the link sent to their email.
They enter a new password.
Reset Password Handler (reset_password_handler.php):

Validates the token and new password.
Updates the user's password in the database.


