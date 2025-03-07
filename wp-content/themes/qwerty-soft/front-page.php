<?php

$fields = get_fields();

get_header();

?>
<main class="main">
   <section class="main-software">
      <div class="main-software__container">
         <div class="software-block">
            <div class="software-content">
               <h6 class="software-content__heading-title"><?= $fields['banner_title']; ?></h6>
               <h1 class="software-content__title"><?= $fields['banner_h1_title']; ?></h1>
               <p class="software-content__text"><?= $fields['banner_content']; ?></p>
               <div class="button_wrapper">
                  <button id="sb_content_t" class="software-content__button button button_wrapper_button" style="padding:0!important; width:170px; height:54px; display:flex; justify-content:center;align-items:center;">
                     <span style="gap:10px;   width:170px; height:54px;display:flex; justify-content:center;align-items:center;"><?= $fields['banner_button_text']; ?>
                        <!-- <svg width='17' height='16' viewBox='0 0 17 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                           <path d='M3.5 12.5L12.5 3.5M3.5 3.5L12.5 3.5M12.5 3.5L12.5 12.5' stroke='white' stroke-width='1.5' stroke-linejoin='round' />
                        </svg> -->
                     </span>
                  </button>
                  <img class="button_wrapper_img" id="hero_btn_img" src="<?= get_template_directory_uri() ?>/assets/src/images/icons/shadow-header.svg" alt="shadow">
               </div>

            </div>
            <div class="software-magic">
<!--                <img style="max-width: 100%;" src="<?= get_template_directory_uri() ?>/assets/dist/images/new-cube.gif" alt="animation effect"> -->

    <video autoplay muted loop preload="auto" poster="https://dev.qwerty-soft.com/wp-content/uploads/2024/12/Cubic@1-1200x1200-1.jpg">
        <source src="<?= $fields['banner_video']; ?>" type="video/mp4">
        Ваш браузер не підтримує відтворення відео.
    </video>


            </div>
            <div class="scroll-arrows">
               <div class="scroll-arrows__arrow">
                  <img src="/wp-content/themes/qwerty-soft/assets/src/images/icons/arrow-down.svg" alt="arrow">
               </div>

               <div class="scroll-arrows__text"><?= $fields['banner_scroll']; ?></div>
            </div>
         </div>
      </div>
   </section>

   <section class="main-services fade-in-section" id="services">
      <div class="main-services__container">
         <h6 class="main-services__heading-title"><?= $fields['services_title']; ?></h6>
         <div class="main-services__content">
            <div class="main-services__left-side">
               <!-- Слайдер для табів -->
               <div class="main-services__list">
                  <?php foreach ($fields['services_list'] as $ilk => $list_item) { ?>
                     <div class="main-services__item">
                        <a href="#<?= sanitize_key($list_item['title']); ?>" class="main-services__link<?= $ilk === 0 ? ' active' : ''; ?>"><?= $list_item['title']; ?></a>
                     </div>
                  <?php } ?>
               </div>
            </div>
            <div class="main-services__dev dev">
               <!-- Слайдер для контенту -->
               <div class="dev__slider">
                  <?php foreach ($fields['services_list'] as $ilk => $list_item) { ?>
                     <div id="<?= sanitize_key($list_item['title']); ?>" class="dev__box<?= $ilk !== 0 ? ' box-hidden' : ''; ?>">
                        <h2 class="dev__title"><?= $list_item['title']; ?></h2>
                        <div class="dev__blocks">
                           <?php $show_numbers = count($list_item['items']) > 1; ?>
                           <?php foreach ($list_item['items'] as $ik => $item) { ?>
                              <div class="dev__block">
                                 <?php if ($show_numbers) { ?>
                                    <div class="dev__block-number"><?= sprintf("%02d", $ik + 1); ?></div>
                                 <?php } ?>
                                 <div class="dev__block-description block-description">
                                    <?php if ($item['title']) { ?>
                                       <h3 class="block-description__title"><?= $item['title']; ?></h3>
                                    <?php } ?>
                                    <?php if ($item['description']) { ?>
                                       <p class="block-description__text"><?= $item['description']; ?></p>
                                    <?php } ?>
                                 </div>
                              </div>
                           <?php } ?>
                        </div>
                     </div>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="main-work fade-in-section" id="how-we-work">
      <div class="main-work__container">
         <h6 class="main-work__heading-title"><?= $fields['how_we_work_title']; ?></h6>
         <h2 class="main-work__title"><?= $fields['how_we_work_content']; ?></h2>
         <div class="main-work__cards cards">
            <?php foreach ($fields['how_we_work_cards'] as $k => $card) { ?>
               <div class="cards__twin cards__twin_<?= $k; ?> ">
                  <div class="cards__card cards__card_<?= $k; ?>">
                     <h3 class="cards__title-<?= $k === 0 ? 'first' : 'second'; ?>"><?= $card['title']; ?></h3>
                  </div>
                  <div class="cards__card-back cards__card-back_<?= $k; ?>">
                     <h3 class="cards__title-<?= $k === 0 ? 'first' : 'second'; ?>"><?= $card['title']; ?></h3>
                     <ul class="cards__list">
                        <?php foreach ($card['items'] as $item) { ?>
                           <li class="cards__item">
                              <h4>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 16.5L16 7.5M7 7.5L16 7.5M16 7.5L16 16.5" stroke="#2B2BD9" stroke-width="1.5" stroke-linejoin="round" />
                                 </svg>
                                 <?= $item['title']; ?>
                              </h4>
                              <p> <?= $item['description']; ?></p>
                           </li>
                        <?php } ?>
                     </ul>
                  </div>
               </div>
            <?php } ?>
         </div>
      </div>
   </section>

   <section class="main-recent fade-in-section" id="recent">
      <div class="main-recent__container">
         <h6 class="main-recent__heading-title"><?= $fields['recent_project_title']; ?></h6>
         <div class="main-recent__project_wrap<?= count($fields['recent_project_items']) > 1 ? ' slider' : ''; ?>">
            <?php foreach ($fields['recent_project_items'] as $project) { ?>
               <div class="main-recent__project project">
                  <div class="project__image">
                     <div class="preloader" style="display: none;">
                        <!-- Preloader SVG Animation -->
                        <svg width="50" height="50" viewBox="0 0 283 283" fill="none" xmlns="http://www.w3.org/2000/svg" class="preloader-svg">
                           <rect x="141.518" y="149.429" width="11.3333" height="11.3333" rx="1" transform="rotate(-135 141.518 149.429)" stroke="#2B2BD9" stroke-width="2" />
                           <rect x="141.422" y="168.291" width="38" height="38" rx="1" transform="rotate(-135 141.422 168.291)" stroke="#2B2BD9" stroke-width="2" />
                           <rect x="141.422" y="187.148" width="64.6667" height="64.6667" rx="1" transform="rotate(-135 141.422 187.148)" stroke="#2B2BD9" stroke-width="2" />
                           <rect x="141.422" y="206.004" width="91.3333" height="91.3333" rx="1" transform="rotate(-135 141.422 206.004)" stroke="#2B2BD9" stroke-width="2" />
                           <rect x="141.422" y="224.86" width="118" height="118" rx="1" transform="rotate(-135 141.422 224.86)" stroke="#2B2BD9" stroke-width="2" />
                           <rect x="141.422" y="243.716" width="144.667" height="144.667" rx="1" transform="rotate(-135 141.422 243.716)" stroke="#2B2BD9" stroke-width="2" />
                           <rect x="141.422" y="262.572" width="171.333" height="171.333" rx="1" transform="rotate(-135 141.422 262.572)" stroke="#2B2BD9" stroke-width="2" />
                           <rect x="141.422" y="281.429" width="198" height="198" rx="1" transform="rotate(-135 141.422 281.429)" stroke="#2B2BD9" stroke-width="2" />
                        </svg>
                     </div>
                     <?php
                     $gif_file = $project['project_video'];
                     $poster_image = $project['project_image'];

                     if (!empty($gif_file)) {
                        $gif_url = is_array($gif_file) ? $gif_file['url'] : $gif_file;
                     ?>
                        <img src="<?= esc_url($poster_image); ?>" alt="<?= esc_attr($project['project_title']) ?>" class="gif-poster">
                        <img data-src="<?= esc_url($gif_url); ?>" class="media gif-hidden" alt="<?= esc_attr($project['project_title']) ?>" style="display: none;">
                     <?php
                     } else {
                     ?>
                        <img src="<?= esc_url($poster_image); ?>" alt="<?= esc_attr($project['project_title']) ?>">
                     <?php
                     }
                     ?>
                     <svg class="project__play" width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="51" height="51" rx="25.5" fill="white" />
                        <rect x="0.5" y="0.5" width="51" height="51" rx="25.5" stroke="#2B2BD9" />
                        <path d="M33.965 26.8145C34.2284 26.6268 34.3848 26.3234 34.3848 26C34.3848 25.6766 34.2284 25.3732 33.965 25.1855L23.2288 17.537C22.9239 17.3198 22.5232 17.291 22.1904 17.4626C21.8577 17.6341 21.6486 17.9771 21.6486 18.3514L21.6486 33.6486C21.6486 34.0229 21.8577 34.3659 22.1904 34.5374C22.5232 34.709 22.9239 34.6802 23.2288 34.463L33.965 26.8145Z" fill="#2B2BD9" stroke="#2B2BD9" stroke-width="2" stroke-linejoin="round" />
                     </svg>
                     <svg class="project__pause" width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="51" height="51" rx="25.5" fill="white" />
                        <rect x="0.5" y="0.5" width="51" height="51" rx="25.5" stroke="#2B2BD9" />
                        <rect x="19" y="19" width="14" height="14" rx="3" fill="#2B2BD9" stroke="#2B2BD9" stroke-width="2" />
                     </svg>

                  </div>

                  <div class="project__description">
                     <div class="project__gfi-content">
                        <h2 class="project__title"><?= $project['project_title'] ?></h2>
                        <div class="project__text"><?= $project['content'] ?></div>
                     </div>
                     <div class="project__gfi-info">
                        <div class="project__services">
                           <h3 class="project__services-title title-recent-mrg"><?= $project['project_services_title'] ?></h3>
                           <ul class="project__list">
                              <?php foreach ($project['project_services_items'] as $services) { ?>
                                 <li class="project__item"><?= $services['project_services_item'] ?></li>
                              <?php } ?>
                           </ul>
                        </div>
                        <div class="project__direction">
                           <div class="project__industry">
                              <h3 class="project__title-direction title-recent-mrg"><?= $project['project_industry_title'] ?></h3>
                              <?php foreach ($project['project_industry_items'] as $industry) { ?>
                                 <div class="project__text-ecommerce"><?= $industry['project_industry_item'] ?></div>
                              <?php } ?>
                           </div>
                           <div class="project__site-link">
                              <?php if (!empty($project['link_url']) && !empty($project['link_title'])): ?>
                                 <a href="<?= htmlspecialchars($project['link_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" class="project__gfi-link">
                                    <?= htmlspecialchars($project['link_title'], ENT_QUOTES, 'UTF-8') ?>
                                 </a>
                              <?php endif; ?>

                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            <?php } ?>

         </div>
         <?php if (count($fields['recent_project_items']) > 1) { ?>
            <div class="project__arrows">
               <button class="arrow-back project-prev home-arrow-prev" aria-label="Previous project">
               </button>
               <button class="arrow-forw project-next home-arrow-next" aria-label="Next project">
               </button>
            </div>
         <?php } ?>
      </div>
   </section>

   <section class="main-about fade-in-section" id="about">
      <div class="main-about__container">
         <h6 class="main-about__heading-title"><?= $fields['about_us_title']; ?></h6>
         <h2 class="main-about__title"><?= $fields['about_us_subtitle']; ?></h2>
         <div class="main-about__block block-about">
            <div class="block-about__photos">


               <div class="block-about__photo">
                  <?php foreach ($fields['about_us_photos'] as $photo) { ?>
                     <div class="block-about__box" data-tooltip-name="<?= $photo['about_name'] ?? ''; ?>" data-tooltip-position="<?= $photo['about_position'] ?? ''; ?>">
                        <img src="<?= $photo['about_us_team_photo'] ?? ''; ?>" alt="<?= esc_attr($photo['about_us_pop_up_photo'] ?? ''); ?>">
                     </div>
                  <?php } ?>
               </div>



               <div class="block-about__city"><?= $fields['about_us_location']; ?></div>
            </div>
            <div class="block-about__text"><?= $fields['about_us_content']; ?></div>
         </div>
         <div class="main-about__qwerty">
            <span class="qwerty-letter ql-1" data-tooltip-title="<?= $fields['q_title']; ?>" data-tooltip-text="<?= $fields['q_content']; ?>">
               <svg height="233" width="100%" viewBox="0 0 201 233" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M64.2628 185.455V186.046C64.2628 193.428 69.0452 198.744 76.5176 199.335L174.855 207.603V233L68.1485 223.845C60.6761 223.255 55.8937 217.939 55.8937 210.261V182.797C22.4173 170.985 0 143.521 0 95.09C0 26.8733 44.5356 0 100.429 0C156.323 0 200.261 26.8733 200.261 95.09C200.261 167.736 156.024 188.113 93.5547 189.885C83.0933 189.294 73.2297 187.818 64.2628 185.455ZM100.429 166.555C141.976 166.555 173.36 147.951 173.36 95.09C173.36 42.2294 141.976 23.6248 100.429 23.6248C58.5838 23.6248 26.9007 41.9341 26.9007 95.09C26.9007 148.246 58.5838 166.555 100.429 166.555Z" stroke="white" stroke-linejoin="round" stroke-dasharray="2 4" />
               </svg>
            </span>
            <span class="qwerty-letter ql-2" data-tooltip-title="<?= $fields['w_title']; ?>" data-tooltip-text="<?= $fields['w_content']; ?>">
               <svg height="187" width="100%" viewBox="0 0 333 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M27.4887 0.0673828L85.1759 173.119H87.567L145.553 0.0673828H187.1L244.787 173.119H247.178L305.164 0.0673828H332.065L270.791 186.113H221.473L166.177 19.2626L111.18 186.113H61.8619L-0.00976562 0.0673828H27.4887Z" stroke="white" stroke-linejoin="round" stroke-dasharray="2 4" />
               </svg>
            </span>
            <span class="qwerty-letter ql-3" data-tooltip-title="<?= $fields['e_title']; ?>" data-tooltip-text="<?= $fields['e_content']; ?>">
               <svg height="187" width="100%" viewBox="0 0 138 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M137.58 186.113H0.984375V0.0673828H133.993V23.1016H27.8851V83.0496H126.521V102.835H27.8851V163.079H137.58V186.113Z" stroke="white" stroke-linejoin="round" stroke-dasharray="2 4" />
               </svg>
            </span>
            <span class="qwerty-letter ql-4" data-tooltip-title="<?= $fields['r_title']; ?>" data-tooltip-text="<?= $fields['r_content']; ?>">
               <svg height="187" width="100%" viewBox="0 0 156 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M126.32 186.113L103.305 127.346C99.4193 117.896 97.3271 110.218 78.4966 110.218H27.0863V186.113H0.185547V0.0673828H87.7624C125.423 0.0673828 152.324 15.7188 152.324 57.6529C152.324 85.4121 137.379 102.245 101.512 102.245V103.426C111.375 105.493 125.722 106.084 132.896 125.574L155.612 186.113H126.32ZM27.0863 93.9761H81.7844C106.593 93.9761 125.423 84.8215 125.423 56.1764C125.423 30.1891 110.777 23.1016 86.8657 23.1016H27.0863V93.9761Z" stroke="white" stroke-linejoin="round" stroke-dasharray="2 4" />
               </svg>
            </span>
            <span class="qwerty-letter ql-5" data-tooltip-title="<?= $fields['t_title']; ?>" data-tooltip-text="<?= $fields['t_content']; ?>">
               <svg height="187" width="100%" viewBox="0 0 157 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M91.853 186.113H65.2512V23.1016H0.689453V0.0673828H156.415V23.1016H91.853V186.113Z" stroke="white" stroke-linejoin="round" stroke-dasharray="2 4" />
               </svg>
            </span>
            <span class="qwerty-letter ql-6" data-tooltip-title="<?= $fields['y_title']; ?>" data-tooltip-text="<?= $fields['y_content']; ?>">
               <svg height="187" width="100%" viewBox="0 0 175 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M100.275 186.113H73.6731V121.44L0.443359 0.0673828H27.6431L86.5257 97.8152L148.397 0.0673828H174.999L100.275 121.44V186.113Z" stroke="white" stroke-linejoin="round" stroke-dasharray="2 4" />
               </svg>
            </span>
         </div>
         <div class="main-about__qwerty-mobile qwerty-mobile">
            <p class="qwerty-mobile__text">
               <span>Q</span>uality
            </p>
            <p class="qwerty-mobile__text">
               <span>W</span>ide-Reaching Impact
            </p>
            <p class="qwerty-mobile__text">
               <span>E</span>xpertise
            </p>
            <p class="qwerty-mobile__text">
               <span>R</span>eliability
            </p>
            <p class="qwerty-mobile__text">
               <span>T</span>ransparency
            </p>
            <p class="qwerty-mobile__text">
               <span>Y</span>our Vision, Our Mission
            </p>
         </div>

         <div class="main-about__card-list card-list">
            <div class="card-list__intro">
               <p><?= $fields['about_us_subcontent']; ?></p>
            </div>
            <div class="card-list__cards">
               <?php foreach ($fields['about_us_cards'] as $about_card) { ?>
                  <div class="card-list__card-parallax">
                     <div class="card-list__content">
                        <img src="<?= $about_card['about_us_card_icon']; ?>" alt="<?= esc_attr($about_card['about_us_card_title']) ?>" class="card-list__icon">
                        <h2 class="card-list__title-h1"><?= $about_card['about_us_card_title'] ?></h2>
                        <p class="card-list__text"><?= $about_card['about_us_card_content'] ?></p>
                     </div>
                  </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </section>

   <section class="main-technologies fade-in-section" id="techno">
      <div class="main-technologies__container">
         <h6 class="main-technologies__heading-title"><?= $fields['technologies_we_use_title']; ?></h6>
         <div class="main-technologies__block">
            <div class="main-technologies__body body-tech">
               <div class="body-tech__tabs">
                  <ul class="body-tech__list">
                     <?php foreach ($fields['technologies_items'] as $k => $technologies_item) { ?>
                        <li data-tab="tech-tab-<?= $k; ?>" class="body-tech__item<?= $k === 0 ? ' active' : ''; ?>"><?= $technologies_item['technologies_title']; ?></li>
                     <?php } ?>
                  </ul>
               </div>
            </div>
            <div class="main-technologies__items">
               <?php foreach ($fields['technologies_items'] as $k => $technologies_item) { ?>
                  <div id="tech-tab-<?= $k; ?>" class="main-technologies__item<?= $k === 0 ? ' active' : ''; ?>">
                     <div class="body-tech__item"><?= $technologies_item['technologies_title']; ?></div>
                     <div class="main-technologies__text"><?= $technologies_item['content']; ?></div>
                     <div class="main-technologies__programms programms ">
                        <ul class="programms__list">
                           <?php foreach ($technologies_item['programms_items'] as $program_item) { ?>
                              <li class="programms__item">
                                 <img src="<?= $program_item['programm_icon'] ?>" alt="<?= esc_attr($program_item['programm_title']); ?>">
                                 <div class="programms__description"><?= $program_item['programm_title']; ?></div>
                              </li>
                           <?php } ?>
                        </ul>
                     </div>
                  </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </section>

   <div class="main-moving-text">
      <div class="moving-text">
         <span><?= $fields['running_text']; ?></span>
      </div>
   </div>

   <section class="main-testimonials fade-in-section" id="testimonials">
      <div class="main-testimonials__container">
         <h6 class="main-testimonials__heading-title"><?= $fields['testimonials_title']; ?></h6>

         <div class="main-testimonials__content<?= count($fields['testimonials_items']) > 1 ? ' slider' : ''; ?>">
            <?php foreach ($fields['testimonials_items'] as $testimonials) { ?>
               <div class="main-testimonials__content testimonials-content">
                  <div class="testimonials-content__image">
                     <img src="<?= $testimonials['author_image']; ?>" alt="<?= esc_attr($testimonials['author_name']) ?>">
                  </div>
                  <div class="testimonials-content__body">
                     <div class="testimonials-content__text"><?= $testimonials['content'] ?></div>

                     <div class="testimonials-content__block">

                        <div class="testimonials-content__client">
                           <div class="testimonials-content__logo-brand">
                              <img src="<?= $testimonials['logo']; ?>" alt="<?= esc_attr($testimonials['logo_alt']) ?>">
                           </div>
                           <div class="testimonials-content__author">
                              <div class="testimonials-content__name"><?= $testimonials['author_name'] ?></div>
                              <div class="testimonials-content__position"><?= $testimonials['author_position'] ?></div>
                           </div>
                        </div>


                     </div>
                  </div>
               </div>
            <?php } ?>
         </div>
         <?php if (count($fields['testimonials_items']) > 1) { ?>
            <div class="testimonials-content__arrows">
               <button class="arrow-back testimonial-prev home-arrow-prev2" aria-label="Previous testimonial">
               </button>
               <button class="arrow-forw testimonial-next home-arrow-next2" aria-label="Next testimonial">
               </button>
            </div>
         <?php } ?>
      </div>
   </section>

   <section class="main-faq fade-in-section" id="faq">
      <div class="main-faq__container">
         <h6 class="main-faq__heading-title"><?= $fields['faq_title']; ?></h6>
         <div class="main-faq__content">
            <h2 class="main-faq__title"><?= $fields['faq_subtitle']; ?></h2>
            <div class="accordion">

               <?php
               if (have_rows('faq_items')):
                  while (have_rows('faq_items')): the_row();
                     $title = get_sub_field('title');
                     $content = get_sub_field('content');
               ?>
                     <div class="accordion__item">
                        <div class="accordion__title">
                           <span class="accordion__title-text"><?php echo $title; ?></span>
                           <span class="accordion__arrow-item"></span>
                        </div>
                        <div class="accordion__content"><?php echo $content; ?></div>
                     </div>
               <?php
                  endwhile;
               endif;
               ?>

            </div>
         </div>
      </div>
   </section>

   <section class="main-contact-us fade-in-section">
      <div class="main-contact-us__container">
         <div class="main-contact-us__body">
            <h6 class="main-contact-us__heading-title"><?= $fields['contact_us_title']; ?></h6>
            <div class="main-contact-us__block">
               <h2 class="main-contact-us__title"><?= $fields['contact_us_title_h1']; ?></h2>

               <div class="button_wrapper2">
                  <button id="sb_content_d" class="main-contact-us__button button_wrapper_button" style="padding:0!important; width:170px; height:54px; display:flex; justify-content:center;align-items:center;">
                     <span style="gap:10px; padding-right:0;  width:170px; height:54px;display:flex; justify-content:center;align-items:center;"><?= $fields['contact_us_button_text']; ?></span>
                  </button>
                  <img class="button_wrapper_img" src="<?= get_template_directory_uri() ?>/assets/src/images/icons/shadow-header.svg" alt="shadow">
               </div>
            </div>
         </div>
      </div>
   </section>
</main>

<script>
   // Получаем все элементы с классом main-technologies__item
   var items = document.querySelectorAll('.main-technologies__item');

   // Перебираем   каждый элемент
   items.forEach(function(item) {
      // При изменении классов
      item.addEventListener('change', function() {
         // Проверяем, есть ли у второго дочернего элемента класс active
         if (items[1].classList.contains('active')) {
            console.log(items)
            // Если есть, устанавливаем высоту родительского элемента в 400px
            document.querySelector('.main-technologies__items').style.height = '400px';
         } else {
            // Если нет, возвращаем высоту к значению по умолчанию
            document.querySelector('.main-technologies__items').style.height = '200px';
         }
      });
   });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3.2/jquery.easing.js"></script>

<?php
get_footer();
