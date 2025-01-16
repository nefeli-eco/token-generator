<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title><?= $pageTitle ?? 'Cryptonow' ?></title>
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .main-header {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #fff;
            padding: 40px 20px;
            text-align: center;
        }
        .main-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            background: #e9ecef;
        }
        footer a {
            margin: 0 10px;
            color: #007bff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
