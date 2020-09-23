<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<!-- BEGIN SIDEBAR -->
<aside class="section sidebar">
  <!-- PHOTO -->
  <div class="img_wrapper sidebar-photo">
    <img src="img/photo.jpg" alt="Аватар" class="img_wrapper-img" />
  </div>

  <!-- BEGIN SIDEBAR LISTS -->
  <div class="container">

    <?php if (!empty($contacts)) : ?>
      <!-- CONTACTS -->
      <section class="col sidebar-section contacts">
        <h2 class="section-title sidebar-title">Contacts</h2>
        <ul class="list list--clearfix sidebar-list contacts-list">
          <?php foreach ($contacts as $contact) : ?>
            <li class="list-item">
              <span class="list-marker"><?= $contact->marker ?>:</span>
              <a href="<?= $contact->link ?>" class="link list-link"><?= $contact->value ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>
    <?php endif; ?>

    <?php if (!empty($categories)) : ?>
      <!-- TECH SKILLS -->
      <section class="col sidebar-section">
        <h2 class="section-title sidebar-title">Tech Skills</h2>
        <ul class="list list--marked sidebar-list sidebar-list--marked">
          <li class="list-item">HTML5</li>
          <li class="list-item">CSS3</li>
          <li class="list-item">GIT</li>
          <li class="list-item">WebPack</li>
          <li class="list-item">JavaScript</li>
          <li class="list-item">React.js</li>
          <li class="list-item">Node.js</li>
        </ul>
      </section>

      <!-- SOFT SKILLS -->
      <section class="col sidebar-section">
        <h2 class="section-title sidebar-title">Soft Skills</h2>
        <ul class="list list--marked sidebar-list sidebar-list--marked">
          <li class="list-item">Scrum</li>
          <li class="list-item">Agile</li>
          <li class="list-item">GTD</li>
          <li class="list-item">Teamwork</li>
        </ul>
      </section>
    <?php endif; ?>

  </div>
  <!-- END SIDEBAR LISTS -->
</aside>
<!-- END SIDEBAR -->

<!-- BEGIN MAIN -->
<main class="section main">
  <div class="container">
    <h4 class="section-title section-title--small"><?= $profile->profession; ?></h4>
    <h1 class="section-title section-title--large"><?= $profile->name; ?></h1>
    <p class="section-desc main-desc">
      <?= $profile->description; ?>
    </p>

    <!-- BEGIN PORTFOLIO -->
    <section class="col portfolio">
      <h2 class="section-title portfolio-title">Projects</h2>
      <ol class="list list--ordered portfolio-list">
        <li class="list-item">
          <span class="list-index">1.</span>
          <span class="list-item_content">
            <a href="https://lovecamp.allinsol.com/" class="link list-link portfolio-link">
              https://lovecamp.allinsol.com/</a>
            <span class="portfolio-techs_wrapper">
              <span class="portfolio-list_dots"></span>
              <span class="portfolio-techs">HTML5, CSS3</span>
            </span>
          </span>
        </li>
        <li class="list-item">
          <span class="list-index">2.</span>
          <span class="list-item_content">
            <a href="https://cryptohub.goit.ua/" class="link list-link portfolio-link">
              https://cryptohub.goit.ua/</a>
            <span class="portfolio-techs_wrapper">
              <span class="portfolio-list_dots"></span>
              <span class="portfolio-techs">JavaScript</span>
            </span>
          </span>
        </li>
        <li class="list-item">
          <span class="list-index">3.</span>
          <span class="list-item_content">
            <a href="https://kidslike.goit.co.ua/" class="link list-link portfolio-link">
              https://kidslike.goit.co.ua/</a>
            <span class="portfolio-techs_wrapper">
              <span class="portfolio-list_dots"></span>
              <span class="portfolio-techs">React.js, Node.js</span>
            </span>
          </span>
        </li>
      </ol>
    </section>
    <!-- END PORTFOLIO -->

    <?php if (!empty($jobs)) : ?>
      <!-- BEGIN EXPERIENCE -->
      <section class="col experience">
        <h2 class="section-title experience-title">Work Experience</h2>

        <?php foreach ($jobs as $number => $job) : ?>
          <!-- BEGIN <?= $number; ?> JOB -->
          <article class="experience-block">
            <h3 class="section-title section-title--sub main-section_title">
              <span class="section-title_dark"><?= $job->profession; ?></span>
              <?= $job->company; ?>
            </h3>
            <div class="status">
              <span class="status-date"><?= $job->employment_date; ?> - <?= $job->dismissal_date; ?></span>
              <span class="status-separator"></span>
              <span class="status-place"><?= $job->country; ?></span>
            </div>

            <?php if (!empty($descriptions)) : ?>
              <ul class="list list--marked experience-list">
                <?php foreach ($descriptions as $desc) : ?>
                  <li class="list-item section-desc">
                    <?= $desc->text; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

          </article>
          <!-- END <?= $number; ?> JOB -->
        <?php endforeach; ?>

      </section>
      <!-- END EXPERIENCE -->
    <?php endif; ?>

    <?php if (!empty($educations)) : ?>
      <!-- BEGIN EDUCATION -->
      <section class="col education">
        <h2 class="section-title education-title">Education</h2>

        <?php foreach ($educations as $number => $education) : ?>
          <!-- BEGIN <?= $number; ?> EDUCATION -->
          <h3 class="section-title section-title--sub main-section_title">
            <?= $education->university; ?>
          </h3>
          <h4 class="section-title section-title--small education-small_title"><?= $education->university; ?></h4>
          <div class="status">
            <span class="status-date"><?= $education->admission_date; ?> - <?= $education->graduation_date; ?></span>
            <span class="status-separator"></span>
            <span class="status-place"><?= $education->country; ?></span>
          </div>
          <!-- END <?= $number; ?> EDUCATION -->
        <?php endforeach; ?>

      </section>
      <!-- END EDUCATION -->
    <?php endif; ?>

  </div>
</main>
<!-- END MAIN -->