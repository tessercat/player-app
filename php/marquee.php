<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Now Playing"/>
    <meta property="og:type" content="video.other"/>
    <meta property="og:image" content="https://<?php echo gethostname() ?>/static/img/marquee.jpg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="300"/>
    <meta property="og:url" content="https://<?php echo gethostname() ?>/marquee"/>
    <title>Now Playing</title>
    <link rel="stylesheet" href="static/css/marquee.css">
  </head>
  <body>
    <header>
      <h1>Now Playing</h1>
    </header>
    <main>
<?php
$file = '/opt/index/media/marquee.json';
$movies = json_decode(file_get_contents($file));
foreach ($movies as $movie) {
  $title = ucwords(str_replace('-', ' ', $movie->slug));
  echo "      <article>\n";
  echo "        <figure>\n";
  echo "          <a href=\"/player?$movie->slug\" title=\"$title\">\n";
  echo "            <img src=\"/media/$movie->slug/poster.jpg\">\n";
  echo "          </a>\n";
  echo "        </figure>\n";
  echo "        <figcaption>$movie->description</figcaption>\n";
  echo "      </article>\n";
}
?>
    </main>
    <footer>
      <nav>
        <ul>
          <li><a href="/" title="Go to the index page">Home</a></li>
        </ul>
      </nav>
    </footer>
  </body>
</html>
