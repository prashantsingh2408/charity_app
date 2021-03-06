<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//session_start();
require 'config.php';
$id = $_SESSION['loggin_data'];
$stmt = $link->prepare("SELECT * FROM user WHERE id=?");
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);
$user_id = $row['id'];
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$phone = $row['phone'];
$email = $row['email'];
$gender = $row['gender'];
$weight = $row['weight'];
$goals_id = $row['goals_id'];
$title = $row['title'];
$bio = $row['bio'];
$height = $row['height'];
$birthday = $row['birthday'];
$pic = $row['pic'];
$current = $row['current_steps'];
$step_active = $row['step_active'];
$step_passive = $row['step_passive'];
$target = $row['target_steps'];
$workouts = $row['workouts'];
$todays_steps = $row['todays_steps'];
$current_streak = $row['current_streak'];
$max_streak = $row['max_streak'];
$total_donation_steps = $row['total_donation_steps'];
$workouts = $row['workouts'];
$stmt->close();

$admin_id = 1;
$stmt_a = $link->prepare("SELECT * FROM admin_data where id=?");
$stmt_a->bind_param('i', $admin_id);
$stmt_a->execute();
$result = $stmt_a->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

$rate_per_km = $row['rate_per_km'];
$step_in_m = $row['step_in_m'];

// Fetch goal
$goals_id =  83; //For testing only
$stmt = $link->prepare("SELECT goal_name FROM goals WHERE goal_id=?");
// var_dump($stmt);
$stmt->bind_param('i', $goals_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);
// var_dump($row['goal_name']);
$goal_name = $row['goal_name'];
// var_dump($goal_name);