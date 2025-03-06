<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UM | Alumni Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 280px;
            --primary-color: #2e7d32;
            --text-color: #333;
            --text-light: #666;
            --border-color: #eee;
        }
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-color);
            background: #f8f9fa;
        }
        .sidebar {
            width: var(--sidebar-width);
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            background: #fff;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            z-index: 1000;
            display: flex;
            flex-direction: column;
        }
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 30px;
            background: #f8f9fa;
            min-height: 100vh;
        }
        .logo {
            padding: 24px;
            border-bottom: 1px solid var(--border-color);
            text-align: center;
            background: #fff;
        }
        .logo img {
            height: 60px;
            margin-bottom: 12px;
        }
        .portal-name {
            color: var(--primary-color);
            font-size: 1.25rem;
            font-weight: 500;
            letter-spacing: -0.01em;
        }
        .nav-menu {
            padding: 20px 0;
            flex-grow: 1;
        }
        .nav-section {
            margin-bottom: 24px;
        }
        .nav-section-title {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-light);
            padding: 0 24px;
            margin-bottom: 8px;
        }
        .nav-link {
            color: var(--text-color);
            padding: 12px 24px;
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .nav-link i {
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
            color: var(--text-light);
            transition: all 0.2s ease;
        }
        .nav-link:hover {
            background: rgba(46, 125, 50, 0.04);
            color: var(--primary-color);
            border-left-color: var(--primary-color);
        }
        .nav-link:hover i {
            color: var(--primary-color);
        }
        .nav-link.active {
            background: rgba(46, 125, 50, 0.08);
            color: var(--primary-color);
            font-weight: 500;
            border-left-color: var(--primary-color);
        }
        .nav-link.active i {
            color: var(--primary-color);
        }
        .user-section {
            padding: 16px 24px;
            border-top: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 12px;
            background: #fff;
        }
        .user-avatar-large {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 500;
        }
        .user-info {
            flex-grow: 1;
            overflow: hidden;
        }
        .user-name {
            font-weight: 500;
            color: var(--text-color);
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .user-role {
            font-size: 0.8rem;
            color: var(--text-light);
            margin: 0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        .welcome-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            border: 1px solid var(--border-color);
        }
        .welcome-card h1 {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px solid var(--border-color);
        }
        .stat-card i {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        .stat-value {
            font-size: 1.5rem;
            font-weight: 500;
            margin-bottom: 0.25rem;
        }
        .stat-label {
            color: var(--text-light);
            font-size: 0.9rem;
        }
        .content-section {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            margin-bottom: 1.5rem;
        }
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        .section-title {
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--primary-color);
        }
        .item {
            padding: 1rem 0;
            border-bottom: 1px solid var(--border-color);
        }
        .item:last-child {
            border-bottom: none;
        }
        .item-title {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        .item-meta {
            color: var(--text-light);
            font-size: 0.9rem;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                padding: 1.5rem 0.75rem;
            }
            .logo span, .nav-link span {
                display: none;
            }
            .nav-link {
                justify-content: center;
                padding: 0.75rem;
            }
            .nav-link i {
                margin: 0;
            }
            .main-content {
                margin-left: 70px;
                padding: 1rem;
            }
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include '..\repository\sidepanel.php'; ?>

    <main class="main-content">
        <div class="header">
            <h1>Dashboard</h1>
            <div class="user-profile">
                <img src="\Alumni\repository\image\default-avatar.png" alt="User Avatar">
                <span>Welcome, <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : 'User'; ?></span>
            </div>
        </div>

        <div class="welcome-card">
            <h1>Welcome to Alumni Portal</h1>
            <p>Stay connected with your alma mater and fellow alumni.</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <i class="fas fa-file-alt"></i>
                <div class="stat-value">5</div>
                <div class="stat-label">Pending Requests</div>
            </div>
            <div class="stat-card">
                <i class="fas fa-calendar-alt"></i>
                <div class="stat-value">3</div>
                <div class="stat-label">Upcoming Events</div>
            </div>
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <div class="stat-value">1.2k</div>
                <div class="stat-label">Alumni Network</div>
            </div>
        </div>

        <div class="content-section">
            <div class="section-header">
                <h2 class="section-title">Recent Announcements</h2>
            </div>
            <div class="item">
                <h3 class="item-title">Donation of UMAAI</h3>
                <p>Donation by UM Alumni Association 2023-2024 to support student scholarships.</p>
                <div class="item-meta">Nov 25, 2024</div>
            </div>
            <div class="item">
                <h3 class="item-title">HEAD BARISTA Position Available</h3>
                <p>Career opportunity at The GREENCUTS BARBERSHOP.</p>
                <div class="item-meta">Nov 25, 2024</div>
            </div>
        </div>
    </main>

    <script>
        // Add active state to nav links
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
            });
        });
    </script>
</body>
</html>
