<?php
require_once __DIR__ . '/includes/functions.php';
$articles = get_articles();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ali Raza SEO | Off-Page SEO Expert</title>
<meta name="description" content="Ali Raza — Off-Page SEO Expert providing high DA backlinks, mix backlinks, article publishing and backlink indexing services.">
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="topbar">
  <div class="container nav">
    <a class="brand" href="index.php">
      <img src="assets/aliraza.jpg" alt="Ali Raza">
      <span>AliRaza<span>SEO333</span></span>
    </a>
    <nav>
      <a href="#services">Services</a>
      <a href="#articles">Articles</a>
      <a class="nav-btn" href="submit.php">Write an Article</a>
    </nav>
  </div>
</header>

<main>
<section class="hero">
  <div class="container hero-grid">
    <div>
      <div class="eyebrow">OFF-PAGE SEO EXPERT</div>
      <h1>High-Quality Backlinks for Better SEO Visibility</h1>
      <p class="lead">I provide off-page SEO services focused on high-DA backlinks, mix backlink profiles, article placements and backlink indexing.</p>
      <div class="hero-actions">
        <a class="btn primary" href="submit.php">Publish Your Article</a>
        <a class="btn secondary" href="https://kwork.com/smm/34983258/i-will-top-500-mix-profile-article-web-pdf-directory-backlinks?ref=18041547" target="_blank" rel="noopener">View My Kwork</a>
      </div>
      <div class="stats">
        <div><strong>High DA</strong><span>Backlink Focus</span></div>
        <div><strong>Manual</strong><span>Off-Page Work</span></div>
        <div><strong>Indexing</strong><span>Link Support</span></div>
      </div>
    </div>
    <div class="profile-card">
      <div class="profile-glow"></div>
      <img src="assets/aliraza.jpg" alt="Ali Raza - Off-Page SEO Expert">
      <h2>Ali Raza</h2>
      <p>Off-Page SEO Expert</p>
      <a href="https://kwork.com/smm/34983258/i-will-top-500-mix-profile-article-web-pdf-directory-backlinks?ref=18041547" target="_blank" rel="noopener">Hire me on Kwork →</a>
    </div>
  </div>
</section>

<section id="services" class="section">
  <div class="container">
    <div class="section-head">
      <div><div class="eyebrow">MY SERVICES</div><h2>Off-Page SEO Services</h2></div>
      <p>Simple, focused services for websites that need stronger off-page signals.</p>
    </div>
    <div class="cards">
      <article class="card"><div class="icon">↗</div><h3>High DA Backlinks</h3><p>High-authority backlink campaigns designed around your target pages and keywords.</p></article>
      <article class="card"><div class="icon">◎</div><h3>Mix Backlinks</h3><p>Profile, article, web, PDF directory and other backlink types in a mixed campaign.</p></article>
      <article class="card"><div class="icon">✓</div><h3>Backlink Indexing</h3><p>Indexing support for submitted backlink URLs with a clear report of the work completed.</p></article>
      <article class="card"><div class="icon">✎</div><h3>Article Publishing</h3><p>Publish useful SEO articles with links to your website through the public article submission area.</p></article>
    </div>
  </div>
</section>

<section id="articles" class="section alt">
  <div class="container">
    <div class="section-head">
      <div><div class="eyebrow">PUBLISHED CONTENT</div><h2>Latest Articles</h2></div>
      <a class="text-link" href="submit.php">Write an article →</a>
    </div>
    <?php if (!$articles): ?>
      <div class="empty"><h3>No articles yet</h3><p>Be the first person to publish an article on this website.</p><a class="btn primary" href="submit.php">Publish First Article</a></div>
    <?php else: ?>
      <div class="article-grid">
      <?php foreach (array_slice($articles, 0, 12) as $article): ?>
        <article class="article-card">
          <div class="tag"><?= e($article['category'] ?? 'SEO') ?></div>
          <h3><a href="article.php?slug=<?= urlencode($article['slug']) ?>"><?= e($article['title']) ?></a></h3>
          <p><?= e(article_excerpt($article['content'])) ?></p>
          <div class="meta"><?= e($article['author'] ?? 'Guest Author') ?> · <?= e($article['date'] ?? '') ?></div>
        </article>
      <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="cta">
  <div class="container cta-box">
    <div><div class="eyebrow">NEED OFF-PAGE SEO?</div><h2>Let's build a stronger backlink profile.</h2><p>For backlink services, visit my Kwork profile.</p></div>
    <a class="btn light" href="https://kwork.com/smm/34983258/i-will-top-500-mix-profile-article-web-pdf-directory-backlinks?ref=18041547" target="_blank" rel="noopener">Open Kwork Profile</a>
  </div>
</section>
</main>

<footer><div class="container footer"><div><strong>AliRazaSEO333</strong><span> — Off-Page SEO Expert</span></div><div>© <?= date('Y') ?> Ali Raza. All rights reserved.</div></div></footer>
</body>
</html>