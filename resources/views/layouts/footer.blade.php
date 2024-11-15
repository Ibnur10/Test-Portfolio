<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Menambahkan gaya untuk footer agar tetap di bawah */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        footer {
            margin-top: auto; /* Memastikan footer berada di bawah */
        }
    </style>
</head>
<body>
    
    <footer class="bg-dark text-white text-center py-1">
        <div class="container">
            <p>&copy; Copyright Ibnu Dev {{ date('Y') }}. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>