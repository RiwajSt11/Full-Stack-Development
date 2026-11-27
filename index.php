<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Padhai</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  
  <body>

    <? require_once 'data.php'?>
    <header>
      <div class="header-text">
        <h1 class="logo">Padhai</h1>
      </div>

      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#notes">Notes</a></li>
          <li><a href="#media">Video and Audio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>

    <section id="home" class="welcome">
      <div class="welcome-text">
        <h2>Welcome to Padhai</h2>
        <p>
          A free place for students to learn. Find courses, notes, videos and
          audio lessons.
        </p>
        <a href="#courses" class="button">See Courses</a>
      </div>
      <figure>
        <img
          src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800"
          alt="A student studying at a desk"
        />
        <figcaption>Ramrari padhna lai Padhai.</figcaption>
      </figure>
    </section>

    <div class="page">
      <main>
        <section id="courses">
          <h2>Courses</h2>

          <div class="courses">
            <? foreach ($courses as $course) :?>
            <article>
              <img
                src='<?=$course["img"]?>'
                alt='<?=$course["altText"]?>'
              />
              <h3><?=$course["title"]?></h3>
              <p><?=$course["description"]?></p>
              <a href="#notes">See notes</a>
            </article>
            <?endforeach;?>

           
          </div>
        </section>

        <section id="notes">
          <h2>Study Notes</h2>

          <div class="notes">
            <article>
              <h3>Notes</h3>
              <ul>
                <li><a href="#notes">Algebra summary</a></li>
                <li><a href="#notes">Laws of motion</a></li>
                <li><a href="#notes">How to write an essay</a></li>
              </ul>
            </article>

            <article>
              <h3>Practice Papers</h3>
              <ul>
                <li><a href="#notes">Maths test 1</a></li>
                <li><a href="#notes">Science quiz</a></li>
                <li><a href="#notes">Grammar sheet</a></li>
              </ul>
            </article>
          </div>
        </section>

        <section id="media">
          <h2>Video and Audio</h2>

          <div class="media">
            <figure>
              <video controls>
                <source
                  src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4"
                  type="video/mp4"
                />
                Your browser cannot play this video.
              </video>
              <figcaption>Video</figcaption>
            </figure>

            <figure>
              <audio controls>
                <source
                  src="https://samplelib.com/mp3/sample-3s.mp3"
                  type="audio/mpeg"
                />
                Your browser cannot play this audio.
              </audio>
              <figcaption>Audio</figcaption>
            </figure>
          </div>
        </section>
      </main>

      <aside>
        <section>
          <h2>Quick Links</h2>
          <ul>
            <li><a href="#courses">All courses</a></li>
            <li><a href="#notes">Download notes</a></li>
          </ul>
        </section>

        <section>
          <h2>Important Dates</h2>
          <ul>
            <li>5 Dec - Maths quiz</li>
            <li>10 Dec - Science report</li>
            <li>20 Dec - Exams start</li>
          </ul>
        </section>
      </aside>
    </div>

    <footer id="contact">
      <div class="footer-boxes">
        <section>
          <h2>Padhai</h2>
          <p>A free place for students to learn.</p>
        </section>

        <section>
          <h3>Links</h3>
          <ul>
            <li><a href="#courses">Courses</a></li>
            <li><a href="#notes">Notes</a></li>
            <li><a href="#media">Video and Audio</a></li>
          </ul>
        </section>

        <section>
          <h3>Contact</h3>
          <p>padhai@gmail.com</p>
          <p>Kathmandu, Nepal</p>
        </section>
      </div>
      <p class="copy">&copy; 2026 Padhai. <a href="#home">Go to top</a></p>
    </footer>
  ?>
  </body>
</html>
