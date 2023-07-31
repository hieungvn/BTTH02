<?php

require 'vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create();

// Sinh dữ liệu giả cho bảng users
$usersData = [];
for ($i = 0; $i < 10; $i++) {
    $usersData[] = [
        'username' => $faker->userName,
        'password' => password_hash('password123', PASSWORD_DEFAULT),
        'profile_picture' => 'profile_picture_' . $i . '.jpg',
        'bio' => $faker->paragraph,
        'created_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
        'updated_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
    ];
}

// Sinh dữ liệu giả cho bảng posts
$postsData = [];
for ($i = 0; $i < 20; $i++) {
    $postsData[] = [
        'user_id' => $faker->randomElement(range(1, 10)),
        'content' => $faker->text,
        'post_image' => 'post_image_' . $i . '.jpg', // Tên ảnh giả
        'created_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
        'updated_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
    ];
}

// Sinh dữ liệu giả cho bảng messages
$messagesData = [];
for ($i = 0; $i < 30; $i++) {
    $messagesData[] = [
        'sender_id' => $faker->randomElement(range(1, 10)),
        'receiver_id' => $faker->randomElement(range(1, 10)),
        'message' => $faker->sentence,
        'created_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
        'updated_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
    ];
}

// Sinh dữ liệu giả cho bảng likes
$likesData = [];
for ($i = 0; $i < 50; $i++) {
    $likesData[] = [
        'user_id' => $faker->randomElement(range(1, 10)),
        'post_id' => $faker->randomElement(range(1, 20)),
        'created_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
    ];
}

// Sinh dữ liệu giả cho bảng friends
$friendsData = [];
for ($i = 0; $i < 10; $i++) {
    $friendsData[] = [
        'user_id1' => $faker->randomElement(range(1, 10)),
        'user_id2' => $faker->randomElement(range(1, 10)),
        'status' => $faker->randomElement(['pending', 'accepted', 'rejected']),
        'action_user_id' => $faker->randomElement(range(1, 10)),
        'created_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
        'updated_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
    ];
}

// Sinh dữ liệu giả cho bảng comments
$commentsData = [];
for ($i = 0; $i < 30; $i++) {
    $commentsData[] = [
        'user_id' => $faker->randomElement(range(1, 10)),
        'post_id' => $faker->randomElement(range(1, 20)),
        'comment' => $faker->sentence,
        'created_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
        'updated_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
    ];
}

// Kết nối và thực thi các câu lệnh INSERT vào CSDL FacebookClone

try {
    $db = new PDO('mysql:host=localhost;dbname=facebookclone', 'username', 'password');

    // Insert dữ liệu cho bảng users
    $sql = "INSERT INTO users (username, password, profile_picture, bio, created_at, updated_at) VALUES (:username, :password, :profile_picture, :bio, :created_at, :updated_at)";
    $stmt = $db->prepare($sql);
    foreach ($usersData as $user) {
        $stmt->execute($user);
    }

    // Insert dữ liệu cho bảng posts
    $sql = "INSERT INTO posts (user_id, content, post_image, created_at, updated_at) VALUES (:user_id, :content, :post_image, :created_at, :updated_at)";
    $stmt = $db->prepare($sql);
    foreach ($postsData as $post) {
        $stmt->execute($post);
    }

    // Insert dữ liệu cho bảng messages
    $sql = "INSERT INTO messages (sender_id, receiver_id, message, created_at, updated_at) VALUES (:sender_id, :receiver_id, :message, :created_at, :updated_at)";
    $stmt = $db->prepare($sql);
    foreach ($messagesData as $message) {
        $stmt->execute($message);
    }

    // Insert dữ liệu cho bảng likes
    $sql = "INSERT INTO likes (user_id, post_id, created_at) VALUES (:user_id, :post_id, :created_at)";
    $stmt = $db->prepare($sql);
    foreach ($likesData as $like) {
        $stmt->execute($like);
    }

    // Insert dữ liệu cho bảng friends
    $sql = "INSERT INTO friends (user_id1, user_id2, status, action_user_id, created_at, updated_at) VALUES (:user_id1, :user_id2, :status, :action_user_id, :created_at, :updated_at)";
    $stmt = $db->prepare($sql);
    foreach ($friendsData as $friend) {
        $stmt->execute($friend);
    }

    // Insert dữ liệu cho bảng comments
    $sql = "INSERT INTO comments (user_id, post_id, comment, created_at, updated_at) VALUES (:user_id, :post_id, :comment, :created_at, :updated_at)";
    $stmt = $db->prepare($sql);
    foreach ($commentsData as $comment) {
        $stmt->execute($comment);
    }

    echo "Dữ liệu giả cho các bảng đã được tạo thành công.";
} catch (PDOException $e) {
    echo "Lỗi kết nối CSDL: " . $e->getMessage();
}

?>
