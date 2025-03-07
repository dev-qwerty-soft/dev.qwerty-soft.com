jQuery(document).ready(function ($) {
  // Add smooth scrolling to all links
  $(".menu__link").on("click", function (e) {
    const url = $(this).attr("href");
    const hashIndex = url.indexOf("#");

    if (hashIndex !== -1) {
      e.preventDefault();

      const hash = url.substring(hashIndex);
      const target = $(hash);
      const offset = $("body").width() > 1050 ? 65 : 150;

      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top - offset,
          },
          300
        );
      } else {
        window.location.href = `${window.location.origin}/${hash}`;
      }
    }
  });

  const $headerBlockFixed = $(".header-block-fixed");
  const maybeShowAddMenu = () => {
    const $mainSoftware = $(".main-software");
    if ($mainSoftware.length) {
      const offset = $mainSoftware.offset().top + $mainSoftware.height() - 70;
      if ($(window).scrollTop() >= offset) {
        $headerBlockFixed.addClass("visible");
      } else {
        $headerBlockFixed.removeClass("visible");
      }
    }
  };
  maybeShowAddMenu();
  $(window).scroll(maybeShowAddMenu);

  $(".icon-menu").on("click", function (e) {
    e.preventDefault();
    $("body").toggleClass("menu-active");
    $(this).parent().toggleClass("menu-open");
    return false;
  });

  $(".menu__link").on("click", function () {
    $("body").removeClass("menu-active");
    $(".menu-open").removeClass("menu-open");
  });

  $(".scroll-arrows").on("click", function (e) {
    e.preventDefault();

    $("html, body").animate(
      {
        scrollTop: $("#services").offset().top - 65,
      },
      300
    );

    return false;
  });

  let isSwiped = false;

  const servicesSlick = () => {
    if ($(window).width() > 752) {
      if ($(".main-services__list").hasClass("slick-initialized")) {
        $(".main-services__list").slick("unslick");
      }
    } else {
      // Initialize sliders on mobile screens
      if (!$(".main-services__list").hasClass("slick-initialized")) {
        $(".main-services__list").slick({
          arrows: false,
          dots: false,
          variableWidth: true,
          swipeToSlide: true,
          infinite: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          asNavFor: ".dev__slider",
          focusOnSelect: true,
          afterChange: function (event, slick, currentSlide) {
            if (!isSwiped) {
              $(".main-services__link").removeClass("active");
              $(".main-services__item").eq(currentSlide).find(".main-services__link").addClass("active");
            }
            isSwiped = false;
          },
        });
      }

      if (!$(".dev__slider").hasClass("slick-initialized")) {
        $(".dev__slider").slick({
          arrows: false,
          dots: false,
          swipeToSlide: true,
          infinite: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          asNavFor: ".main-services__list",
          afterChange: function (event, slick, currentSlide) {
            if (!isSwiped) {
              $(".main-services__link").removeClass("active");
              $(".main-services__item").eq(currentSlide).find(".main-services__link").addClass("active");
            }
            isSwiped = false;
            $(".dev__box").addClass("box-hidden");
            $(".dev__box").eq(currentSlide).removeClass("box-hidden");
          },
        });
      }

      // Show only the active slide content on page load
      const initialSlide = $(".main-services__list").slick("slickCurrentSlide");
      $(".dev__box").addClass("box-hidden");
      $(".dev__box").eq(initialSlide).removeClass("box-hidden"); // Show only the active content block
    }
  };

  servicesSlick();
  $(window).resize(servicesSlick);

  // Click handler for tabs
  $(".main-services__link").on("click", function (e) {
    e.preventDefault();

    // Remove active class from all links and add to the clicked one
    $(".main-services__link").removeClass("active");
    $(this).addClass("active");

    const targetIndex = $(this).closest(".main-services__item").index();

    if ($(window).width() >= 768) {
      // Hide all content blocks and show only the selected one on desktop screens
      $(".dev__box").css("display", "none").removeClass("active-animate"); // Reset all boxes
      $(".dev__box").eq(targetIndex).css("display", "flex");

      // Add active-animate class with a 0.3s delay
      setTimeout(() => {
        $(".dev__box").eq(targetIndex).addClass("active-animate");
      }, 300);

      // Remove the active-animate class after 1.3 seconds
      setTimeout(() => {
        $(".dev__box").eq(targetIndex).removeClass("active-animate");
      }, 1300);
    } else {
      // Mobile logic remains the same
      isSwiped = true;
      $(".dev__box").addClass("box-hidden");
      $(".dev__box").eq(targetIndex).removeClass("box-hidden");

      if ($(".main-services__list").hasClass("slick-initialized")) {
        $(".main-services__list").slick("slickGoTo", targetIndex);
      }
    }

    return false;
  });

  servicesSlick();
  $(window).resize(servicesSlick);

  // Click handler for tabs
  $(".main-services__link").on("click", function (e) {
    e.preventDefault();

    $(".main-services__link").removeClass("active");
    $(this).addClass("active");

    const targetIndex = $(this).closest(".main-services__item").index();

    // Hide all content blocks and show only the selected one on mobile screens
    if ($(window).width() <= 767) {
      updateContentDisplay(targetIndex);

      if ($(".main-services__list").hasClass("slick-initialized")) {
        $(".main-services__list").slick("slickGoTo", targetIndex);
      }
    }

    return false;
  });

  servicesSlick();
  $(window).resize(servicesSlick);

  $(".main-services__link").on("click", function (e) {
    e.preventDefault();

    isSwiped = true;

    $(".main-services__link").removeClass("active");
    $(this).addClass("active");

    const targetIndex = $(this).closest(".main-services__item").index();
    $(".main-services__list").slick("slickGoTo", targetIndex);
    $(".dev__slider").slick("slickGoTo", targetIndex);
  });

  $(document).ready(function () {
    $(".main-services__item").eq(0).find(".main-services__link").addClass("active");
    $(".dev__box").eq(0).removeClass("box-hidden");
  });

  const initTwinCards = () => {
    $(".cards__twin").each(function () {
      const h = $(this).find(".cards__card-back").outerHeight();
      $(this)
        .find(".cards__card")
        .css("height", h + "px");
      $(this).css("height", h + "px");
    });
  };
  initTwinCards();
  $(window).resize(initTwinCards);

  $(document).ready(function () {
    $(".accordion__title").on("click", function (e) {
      e.preventDefault();
      var $this = $(this);
      var $item = $this.closest(".accordion__item");

      if (!$this.hasClass("accordion-active")) {
        $(".accordion__content").slideUp(400);
        $(".accordion__title").removeClass("accordion-active");
        $(".accordion__arrow").removeClass("accordion__rotate");
        $(".accordion__item").removeClass("bounce-animation");
      }

      $this.toggleClass("accordion-active");
      $this.find(".accordion__arrow").toggleClass("accordion__rotate");

      var $content = $this.next(".accordion__content");

      if ($content.is(":hidden")) {
        $content.slideDown(400, function () {
          $item.addClass("bounce-animation");
          // Remove the class after animation completes
          setTimeout(function () {
            $item.removeClass("bounce-animation");
          }, 500);
        });
      } else {
        $content.slideUp(400);
      }
    });
  });

  const $span = $(".moving-text span"),
    text = $span.text(),
    needWidth = $("body").width() * 2,
    currentWidth = $span.width(),
    repeat = Math.max(1, Math.ceil(needWidth / currentWidth) - 1);
  for (let i = 0; i < repeat; i++) {
    $span.append(text);
  }
  let margin = 0;
  setInterval(function () {
    margin = currentWidth + margin < 0 ? 0 : margin - 1;
    $span.css("margin-left", margin + "px");
  }, 10);

  $(".block-about__box").each(function () {
    tippy($(this).get(0), {
      content: (ref) => '<div class="team-tooltip"><span class="qs-tooltip-name">' + ref.getAttribute("data-tooltip-name") + '</span> <span class="qs-tooltip-position">' + ref.getAttribute("data-tooltip-position") + "</span></div>",
      allowHTML: true,
      followCursor: false,
      arrow: false,
      placement: "bottom",
      delay: [100, 0],
    });
  });

  $(".qwerty-letter").each(function () {
    tippy($(this).get(0), {
      content: (ref) => '<div class="letter-tooltip"><span class="qs-tooltip-title">' + ref.getAttribute("data-tooltip-title") + '</span> <span class="qs-tooltip-text">' + ref.getAttribute("data-tooltip-text") + "</span></div>",
      allowHTML: true,
      followCursor: true,
      arrow: false,
      placement: "bottom-start", // Подсказка будет располагаться справа снизу от курсора
      // offset: [0, 10],
    });
  });

  $(".body-tech__item").on("click", function (e) {
    e.preventDefault();

    $(".body-tech__item").removeClass("active");
    $(".main-technologies__item").removeClass("active");

    $(this).addClass("active");
    const tabId = $("#" + $(this).attr("data-tab"));
    const $container = $(".main-technologies__block");

    // Получаем высоту нового таба
    const newHeight = tabId.outerHeight() + 200; // Высота текущего таба

    // Анимация изменения высоты контейнера
    $container.animate({ height: newHeight }, 0, "easeInOutBounce", function () {
      // После завершения анимации скрываем все табы и показываем текущий
      $(".main-technologies__item").hide(); // Скрываем все табы
      tabId.show(); // Показываем текущий таб
    });

    return false;
  });
  const technologiesSlick = () => {
    if ($("body").width() > 768) {
      $(".main-technologies__items.slick-initialized").slick("unslick");
    } else {
      $(".main-technologies__items:not(.slick-initialized)")
        .slick({
          arrows: false,
          dots: false,
          slidesToShow: 1,
        })
        .on("afterChange", function (event, slick, currentSlide) {
          $("[data-tab]").removeClass("active");
          $('.body-tech__item[data-tab="tech-tab-' + currentSlide + '"]').addClass("active");
        });
    }
  };
  technologiesSlick();
  $(window).resize(technologiesSlick);

  $(".main-recent__project_wrap.slider").slick({
    prevArrow: $(".project-prev"),
    nextArrow: $(".project-next"),
    cssEase: "cubic-bezier(.24,1.41,.54,1.01)",
    speed: 500,
    dots: false,
    slidesToShow: 1,
  });

  $(".main-testimonials__content.slider").slick({
    prevArrow: $(".testimonial-prev"),
    nextArrow: $(".testimonial-next"),
    cssEase: "cubic-bezier(.24,1.41,.54,1.01)",
    speed: 500,
    dots: false,
    slidesToShow: 1,
  });
  if ($(".main-contact-us").length) {
    const adjustFooterPosition = () => {
      // Set padding for the main content based on the footer height
      $("main.main").css("padding-bottom", $(".main-contact-us").height() + "px");

      // Fix the footer position only once to avoid flickering
      $(".main-contact-us")
        .css("bottom", $("section.footer").height() + "px")
        .addClass("initialized");
    };

    adjustFooterPosition();

    const maybeScrollEnd = () => {
      const bottomOffset = 10; // Offset threshold
      const scrollPosition = $(window).scrollTop();
      const windowHeight = $(window).height();
      const documentHeight = $(document).height();

      if (scrollPosition + windowHeight >= documentHeight - bottomOffset) {
        $("body").addClass("scroll-end");
      } else {
        $("body").removeClass("scroll-end");
      }
    };

    $(window).on("resize", adjustFooterPosition); // Adjust on window resize
    $(window).scroll(maybeScrollEnd);
  }
});

const fadeInSection = () => {
  const sections = document.querySelectorAll(".fade-in-section");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
        }
      });
    },
    { threshold: 0.1 }
  );

  sections.forEach((section) => {
    observer.observe(section);
  });
};

window.addEventListener("load", fadeInSection);

document.addEventListener("DOMContentLoaded", function () {
  const projectImages = document.querySelectorAll(".project__image");

  function togglePlayPauseButtons() {
    projectImages.forEach(function (projectImage) {
      const playButton = projectImage.querySelector(".project__play");
      const pauseButton = projectImage.querySelector(".project__pause");

      if (window.innerWidth <= 980) {
        playButton.style.display = "block";
        pauseButton.style.display = "none";
      } else {
        playButton.style.display = "none";
        pauseButton.style.display = "none";
      }
    });
  }

  togglePlayPauseButtons();

  projectImages.forEach(function (projectImage) {
    const posterImage = projectImage.querySelector(".gif-poster");
    const gifElement = projectImage.querySelector(".media");
    const gifUrl = gifElement.dataset.src;
    const playButton = projectImage.querySelector(".project__play");
    const pauseButton = projectImage.querySelector(".project__pause");
    const preloader = projectImage.querySelector(".preloader");

    let gifPlaying = false;

    function playGifWithPreloader() {
      preloader.style.display = "flex"; // Show preloader
      posterImage.style.display = "none";
      gifElement.src = gifUrl + "?" + new Date().getTime();
      gifElement.style.display = "block";

      // Use a timeout as a fallback to hide preloader after a delay
      const fallbackTimeout = setTimeout(hidePreloader, 1000);

      gifElement.onload = function () {
        clearTimeout(fallbackTimeout); // Cancel fallback if onload triggers
        hidePreloader(); // Hide preloader once GIF is fully loaded
        gifPlaying = true; // Set GIF playing state to true
        if (window.innerWidth <= 980) {
          playButton.style.display = "none";
          pauseButton.style.display = "block";
        }
      };
    }

    function hidePreloader() {
      preloader.style.display = "none";
    }

    function pauseGif() {
      gifElement.style.display = "none";
      posterImage.style.display = "block";
      gifElement.src = ""; // Clear the GIF source to stop it
      gifPlaying = false;

      if (window.innerWidth <= 980) {
        playButton.style.display = "block";
        pauseButton.style.display = "none";
      }
    }

    posterImage.addEventListener("click", function () {
      if (!gifPlaying) {
        playGifWithPreloader();
      }
    });

    playButton.addEventListener("click", function () {
      if (!gifPlaying) {
        playGifWithPreloader();
      }
    });

    gifElement.addEventListener("click", pauseGif);
    pauseButton.addEventListener("click", pauseGif);
  });

  window.addEventListener("resize", togglePlayPauseButtons);
});

document.addEventListener("DOMContentLoaded", function () {
  const rotatingImage = document.getElementById("rotating-image");

  if (rotatingImage) {
    window.addEventListener("scroll", function () {
      const scrollPosition = window.scrollY;

      const rotation = scrollPosition * 0.15;

      rotatingImage.style.transform = `rotate(${rotation}deg)`;
    });
  }
});

setTimeout(function () {
  const consentContainer = document.querySelector(".cky-consent-container");

  if (consentContainer) {
    consentContainer.classList.add("show");
  }
}, 5000);

document.addEventListener("DOMContentLoaded", function () {
  const leftPaths = document.querySelectorAll(".page_404_l path");
  const rightPaths = document.querySelectorAll(".page_404_r path");

  function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  function animatePathSmoothly(path) {
    // Додаємо плавний перехід
    path.style.transition = "transform 1s ease";

    function applyRandomTransform() {
      const randomRotation = getRandomInt(-180, 180);
      path.style.transform = `rotate(${randomRotation}deg)`;
      setTimeout(() => {
        path.style.transform = `rotate(0deg)`;
      }, 2500);
    }

    // Запускаємо анімацію з невеликою затримкою, щоб вона виглядала плавною при завантаженні
    setTimeout(applyRandomTransform, 500); // Плавний старт після 0.5 секунд
    setInterval(applyRandomTransform, 5000); // Повторюємо кожні 5 секунд
  }

  leftPaths.forEach((path) => {
    path.style.transformOrigin = "center";
    animatePathSmoothly(path);
  });

  rightPaths.forEach((path) => {
    path.style.transformOrigin = "center";
    animatePathSmoothly(path);
  });
});

document.addEventListener("contextmenu", (e) => e.preventDefault());
document.addEventListener("selectstart", (e) => e.preventDefault());
document.addEventListener("dragstart", (e) => e.preventDefault());
