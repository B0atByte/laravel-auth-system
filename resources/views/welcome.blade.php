<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบ Login/Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .welcome-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            padding: 3rem;
            text-align: center;
            max-width: 500px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .welcome-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .btn-primary {
            background: #4CAF50;
            border: none;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #45a049;
        }

        .btn-outline-primary {
            border-color: #4CAF50;
            color: #4CAF50;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: #4CAF50;
            color: white;
        }

        small.text-muted {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="welcome-card">
        <h1 class="mb-4">🔐 ระบบ Login/Register</h1>
        <p class="lead mb-4">ยินดีต้อนรับสู่ระบบจัดการสมาชิก</p>
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <a href="/login" class="btn btn-primary btn-lg me-md-2">เข้าสู่ระบบ</a>
            <a href="/register" class="btn btn-outline-primary btn-lg">สมัครสมาชิก</a>
        </div>
        
        <div class="mt-4">
            <small class="text-muted">สร้างด้วย Laravel {{ app()->version() }}</small>
        </div>
    </div>
</body>
</html>