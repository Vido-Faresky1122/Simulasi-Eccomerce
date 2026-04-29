<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SUDIMART — Setiap Peralatan Yang Anda Butuhkan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="/js/script.js"></script>
  <link rel="stylesheet" href="/css/output.css">
  <link rel="stylesheet" href="/css/outputlanding.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rajdhani:wght@300;400;500;600;700&family=Barlow+Condensed:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet" />
</head>

<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header Start -->
    <?php require_once "../app/views/layouts/partials/header.php" ?>
    <!-- Header End -->

    <!-- Main Start -->
    <main class="grow flex flex-col items-center justify-center">
        <?php require_once "$content" ?>
    </main>
    <!-- Main End -->

    <!-- Footer Start -->
    <?php require_once "../app/views/layouts/partials/footer.php" ?>
    <!-- Footer End -->
</body>

  <script>
    /* ─── Custom cursor ─────────────────────── */
    const cur = document.getElementById("cur");
    const curR = document.getElementById("cur-r");
    let mx = 0,
      my = 0,
      rx = 0,
      ry = 0;
    document.addEventListener("mousemove", (e) => {
      mx = e.clientX;
      my = e.clientY;
    });
    (function animCur() {
      rx += (mx - rx) * 0.18;
      ry += (my - ry) * 0.18;
      cur.style.left = mx + "px";
      cur.style.top = my + "px";
      curR.style.left = rx + "px";
      curR.style.top = ry + "px";
      requestAnimationFrame(animCur);
    })();
    document.querySelectorAll("a,button").forEach((el) => {
      el.addEventListener("mouseenter", () => {
        cur.style.width = "20px";
        cur.style.height = "20px";
        curR.style.width = "48px";
        curR.style.height = "48px";
      });
      el.addEventListener("mouseleave", () => {
        cur.style.width = "10px";
        cur.style.height = "10px";
        curR.style.width = "32px";
        curR.style.height = "32px";
      });
    });

    /* ─── Progress bar ──────────────────────── */
    const prog = document.getElementById("progress");
    window.addEventListener("scroll", () => {
      const pct =
        (window.scrollY /
          (document.documentElement.scrollHeight - window.innerHeight)) *
        100;
      prog.style.width = pct + "%";
    });

    /* ─── Navbar scroll bg ──────────────────── */
    const nb = document.getElementById("navbar");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 60) {
        nb.style.background = "rgba(8,0,26,.92)";
        nb.style.backdropFilter = "blur(16px)";
        nb.style.borderBottom = "1px solid rgba(107,31,212,.25)";
      } else {
        nb.style.background = "transparent";
        nb.style.backdropFilter = "none";
        nb.style.borderBottom = "none";
      }
    });

    /* ─── Scroll reveal ─────────────────────── */
    const srEls = document.querySelectorAll(".sr");
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            e.target.classList.add("on");
            io.unobserve(e.target);
          }
        });
      },
      { threshold: 0.12 },
    );
    srEls.forEach((el) => io.observe(el));

    /* ─── Counter animation ─────────────────── */
    function animCount(el, target, duration = 1800) {
      let start = 0;
      const step = (timestamp) => {
        if (!start) start = timestamp;
        const prog = Math.min((timestamp - start) / duration, 1);
        el.textContent = Math.floor(prog * target).toLocaleString("id-ID");
        if (prog < 1) requestAnimationFrame(step);
        else el.textContent = target.toLocaleString("id-ID");
      };
      requestAnimationFrame(step);
    }
    const statNums = document.querySelectorAll(".stat-num");
    const statIO = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            animCount(e.target, parseInt(e.target.dataset.target));
            statIO.unobserve(e.target);
          }
        });
      },
      { threshold: 0.5 },
    );
    statNums.forEach((el) => statIO.observe(el));

    /* ─── Marquee init ──────────────────────── */
    const mqInner = document.querySelector(".marquee-inner");
    const tmpl = document.getElementById("mq-t");
    const clone1 = tmpl.content.cloneNode(true);
    const clone2 = tmpl.content.cloneNode(true);
    mqInner.appendChild(clone1);
    mqInner.appendChild(clone2);

    /* ─── Mobile menu ───────────────────────── */
    let mobOpen = false;
    function toggleMob() {
      mobOpen = !mobOpen;
      const menu = document.getElementById("mob-menu");
      menu.classList.toggle("open", mobOpen);
      document.getElementById("h1").style.transform = mobOpen
        ? "rotate(45deg) translate(4px,5px)"
        : "";
      document.getElementById("h3").style.transform = mobOpen
        ? "rotate(-45deg) translate(4px,-5px)"
        : "";
      document.getElementById("h2").style.opacity = mobOpen ? "0" : "1";
      document.body.style.overflow = mobOpen ? "hidden" : "";
    }

    /* ─── Accordion ─────────────────────────── */
    function toggleAcc(btn) {
      const item = btn.closest(".acc-item");
      const content = item.querySelector(".acc-content");
      const isOpen = item.classList.contains("active");
      document.querySelectorAll(".acc-item.active").forEach((i) => {
        i.classList.remove("active");
        i.querySelector(".acc-content").classList.remove("open");
      });
      if (!isOpen) {
        item.classList.add("active");
        content.classList.add("open");
      }
    }

    /* ─── Toast ─────────────────────────────── */
    let toastT;
    function showToast(msg) {
      const t = document.getElementById("toast");
      t.textContent = msg + " ✦";
      clearTimeout(toastT);
      t.classList.add("show");
      toastT = setTimeout(() => t.classList.remove("show"), 2800);
    }

    /* ─── Parallax on scroll ────────────────── */
    window.addEventListener("scroll", () => {
      const sy = window.scrollY;
      document.querySelectorAll(".float").forEach((el, i) => {
        el.style.transform += ` translateY(${sy * (0.03 + i * 0.01)}px)`;
      });
    });
  </script>

</html>