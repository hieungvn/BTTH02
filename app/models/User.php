<?php
class User {
    // Database connection
    private $conn;

    // User properties
    private $user_id;
    private $username;
    private $email;
    private $password;
    private $profile_picture;
    private $bio;
    private $created_at;
    private $updated_at;

    // Constructor with database connection
    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new user
    public function create() {
        // SQL query to create a new user
        $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

        // Prepare the statement
        $stmt = $this->conn->prepare($query);

        // Bind the parameters
        $stmt->bind_param('ssss', $this->username, $this->email, $this->password);

        // Execute the query
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Other methods to read, update, delete users go here...
}
