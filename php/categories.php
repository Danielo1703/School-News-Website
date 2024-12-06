<!-- admin/categories.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UMBC News - Category Management</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #003399;  /* UMBC Blue */
        }

        .header {
            background-color: #000000;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .logo {
            height: 40px;
        }

        .nav-buttons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-button {
            color: #FDB930;  /* UMBC Gold */
            text-decoration: none;
            padding: 8px 15px;
            font-size: 14px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .nav-button:hover {
            color: white;
        }

        .content-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }

        .add-category-form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .submit-button {
            background: #FDB930;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .submit-button:hover {
            background: #e5a82c;
        }

        .categories-list {
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        .category-table {
            width: 100%;
            border-collapse: collapse;
        }

        .category-table th,
        .category-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .action-button {
            padding: 6px 12px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            font-size: 14px;
            margin-right: 5px;
        }

        .edit-button {
            background: #28a745;
        }

        .delete-button {
            background: #dc3545;
        }
    </style>
</head>
<body>
    <header class="header">
        <img src="../images/logo.jpg" alt="UMBC News" class="logo">
        <div class="nav-buttons">
            <a href="dashboard.html" class="nav-button">DASHBOARD</a>
            <a href="categories.php" class="nav-button">CATEGORIES</a>
            <a href="news.html" class="nav-button">NEWS</a>
            <a href="comments.html" class="nav-button">COMMENTS</a>
            <a href="../first.php" class="nav-button">PUBLIC SITE</a>
            <a href="../logout.php" class="nav-button">LOGOUT</a>
        </div>
    </header>

    <div class="content-container">
        <div class="add-category-form">
            <h2>Add New Category</h2>
            <form action="process_category.php" method="POST">
                <div class="form-group">
                    <label for="catname">Category Name:</label>
                    <input type="text" id="catname" name="catname" required>
                </div>
                <button type="submit" class="submit-button">Add Category</button>
            </form>
        </div>

        <div class="categories-list">
            <h2>Existing Categories</h2>
            <table class="category-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Number of Articles</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require '../dbcon.php';
                    $sql = "SELECT c.catid, c.catname, COUNT(n.newsid) as article_count 
                           FROM tblcategory c 
                           LEFT JOIN tblnews n ON c.catid = n.newscatid 
                           GROUP BY c.catid";
                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['catid']}</td>
                                <td>{$row['catname']}</td>
                                <td>{$row['article_count']}</td>
                                <td>
                                    <a href='edit_category.php?id={$row['catid']}' class='action-button edit-button'>Edit</a>
                                    <a href='delete_category.php?id={$row['catid']}' class='action-button delete-button' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                                </td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Add any necessary JavaScript here
    </script>
</body>
</html>