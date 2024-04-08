<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax CRUD Example</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kyc">
        <h1>PHP Ajax CRUD Example</h1>
        <form action="#" method="post" id="kycForm">
            <p>
                <label for="full_name">Full Name:</label><br>
                <input type="text" name="full_name" id="full_name">
            </p>
            <p>
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email">
            </p>
            <p>
                <label for="contact">Contact:</label><br>
                <input type="text" name="contact" id="contact">
            </p>
            <p>
                <label for="address">Address:</label><br>
                <input type="text" name="address" id="address">
            </p>
            <p>
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password">
            </p>
            <input type="submit" value="Submit KYC" id="btnSubmit">
        </form>
    </div>
    <div class="data">
        <table>
            <thead>
                <th>Full Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
            </thead>
            <tbody id="tableData">
            <!-- we will load data here from ajax -->
            </tbody>
        </table>
    </div>
    <!-- ajax cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>
</html>