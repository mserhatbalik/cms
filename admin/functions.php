<?php

function confirmQuery($result)
{
  global $connection;
  if (!$result) {
    die("Query Failed. " . mysqli_error($connection));
  }
  return $result;
}

function insertCategories()
{

  if (isset($_POST['submit'])) {
    global $connection;
    $cat_title = $_POST['cat_title'];
    if ($cat_title == "" || empty($cat_title)) {
      echo "This field should not be empty.";
    } else {
      $query = "INSERT INTO categories(cat_title) ";
      $query .= "VALUES ('{$cat_title}')";
      $create_category = mysqli_query($connection, $query);

      if (!$create_category) die("Query Failed" . mysqli_error($connection));
    }
  }
}

function findAllCategories()
{
  global $connection;
  $query = "SELECT * FROM categories";
  $selectCategories = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($selectCategories)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";
  }
}

function deleteCategories()
{
  global $connection;
  if (isset($_GET['delete'])) {
    $get_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id = {$get_cat_id}";
    $delete_query = mysqli_query($connection, $query);
    // Refresh page after clicking delete.
    header("Location: categories.php");
  }
}
