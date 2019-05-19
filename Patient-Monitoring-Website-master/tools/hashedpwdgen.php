<?php
// Generate a bcrypt hashed password from string input (For manually adding users in the database)
echo password_hash('test', PASSWORD_DEFAULT);