<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UMBC News</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #000000;  /* UMBC Black */
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 20px;
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

        .utility-nav {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-icon {
            width: 24px;
            height: 24px;
            cursor: pointer;
        }

        .main-content {
            margin-top: 80px;
            padding: 20px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .news-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .main-story {
            position: relative;
        }

        .main-story img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .category-tag {
            display: inline-block;
            padding: 4px 8px;
            background-color: #FDB930;  /* UMBC Gold */
            color: black;
            font-size: 12px;
            margin-bottom: 5px;
            border-radius: 4px;
        }

        .story-title {
            text-decoration: none;
        }

        .story-title h2, .story-title h3 {
            color: #000;
            margin: 10px 0;
        }

        .story-desc {
            color: #666;
            line-height: 1.4;
        }

        .secondary-stories {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .secondary-story img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .additional-news {
            margin-top: 40px;
        }

        .news-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .news-item {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .news-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .news-item h3 {
            margin: 10px 0;
            font-size: 18px;
        }

        .news-item p {
            color: #666;
            font-size: 14px;
            line-height: 1.4;
        }

        @media (max-width: 768px) {
            .news-grid {
                grid-template-columns: 1fr;
            }
            .news-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo-section">
            <img src="images/logo.jpg" alt="UMBC News" class="logo">
            <div class="nav-buttons">
                <a href="first.php" class="nav-button">HOME</a>
                <a href="academics.html" class="nav-button">ACADEMICS</a>
                <a href="events.html" class="nav-button">EVENTS</a>
            </div>
        </div>
        <div class="utility-nav">
            <a href="contact.html" class="nav-button">CONTACT</a>
            <a href="account.html" class="nav-button">ACCOUNT</a>
            <img src="images/search.png" alt="Search" class="search-icon" onclick="toggleSearch()">
        </div>
    </header>

    <main class="main-content">
        <div class="news-grid">
            <!-- Main featured story -->
            <div class="main-story">
                <img src="images/nature1.jpg" alt="UMBC Research Achievement">
                <div class="category-tag">ACADEMICS</div>
                <a href="#" class="story-title">
                    <h2>UMBC Researchers Make Breakthrough in Quantum Computing</h2>
                </a>
                <p class="story-desc">A team of UMBC researchers has achieved a significant breakthrough in quantum computing technology, paving the way for more efficient and powerful computing systems. The discovery could revolutionize data processing and encryption methods.</p>
            </div>

            <div class="secondary-stories">
                <!-- Secondary story 1 -->
                <div class="secondary-story">
                    <img src="images/car1.jpg" alt="UMBC Engineering Success">
                    <div class="category-tag">EVENTS</div>
                    <a href="#" class="story-title">
                        <h3>Engineering Students Win National Competition</h3>
                    </a>
                </div>

                <!-- Secondary story 2 -->
                <div class="secondary-story">
                    <img src="images/owl.jpg" alt="Campus Initiative">
                    <div class="category-tag">ACADEMICS</div>
                    <a href="#" class="story-title">
                        <h3>New Sustainability Initiative Launches on Campus</h3>
                    </a>
                </div>

                <!-- Secondary story 3 -->
                <div class="secondary-story">
                    <img src="images/asteroid.jpg" alt="Sports Achievement">
                    <div class="category-tag">EVENTS</div>
                    <a href="#" class="story-title">
                        <h3>UMBC Basketball Team Advances to Finals</h3>
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional news section -->
        <section class="additional-news">
            <div class="news-row">
                <div class="news-item">
                    <img src="images/car2.jpg" alt="Campus Event">
                    <div class="category-tag">EVENTS</div>
                    <h3>Spring Festival Returns Next Month</h3>
                    <p>Annual celebration to feature local artists, food vendors, and student performances.</p>
                </div>

                <div class="news-item">
                    <img src="images/car3.jpg" alt="Academic Achievement">
                    <div class="category-tag">ACADEMICS</div>
                    <h3>Computer Science Department Receives Major Grant</h3>
                    <p>$2 million grant will support new research initiatives in artificial intelligence.</p>
                </div>

                <div class="news-item">
                    <img src="images/car4.jpg" alt="Campus News">
                    <div class="category-tag">EVENTS</div>
                    <h3>Career Fair Attracts Top Employers</h3>
                    <p>Over 100 companies to participate in next week's career fair.</p>
                </div>
            </div>
        </section>
    </main>

    <script>
        function toggleSearch() {
            alert('Search feature coming soon!');
        }
    </script>
</body>
</html>