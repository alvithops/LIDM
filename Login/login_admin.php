<!DOCTYPE html>
<html class="dark" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Login | SmartBank Syariah AI</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        colors: {
          tertiary: "#e6c183",
          "surface-variant": "#353534",
          error: "#ffb4ab",
          "secondary-container": "#ad5401",
          "surface-tint": "#8ed5b9",
          "on-error-container": "#ffdad6",
          "inverse-surface": "#e5e2e1",
          surface: "#131313",
          "on-primary-fixed-variant": "#00513d",
          "on-primary": "#003829",
          "on-secondary-fixed": "#311300",
          "sharia-green-deep": "#083B2D",
          "on-surface": "#e5e2e1",
          outline: "#89938d",
          "charcoal-surface": "#1A1A1A",
          "on-error": "#690005",
          "ivory-text": "#F5F5F0",
          "inverse-primary": "#226a53",
          primary: "#8ed5b9",
          "on-tertiary": "#422d00",
          "tertiary-fixed-dim": "#e6c183",
          "surface-container-highest": "#353534",
          "on-background": "#e5e2e1",
          "on-secondary-fixed-variant": "#733600",
          secondary: "#ffb787",
          "outline-variant": "#3f4944",
          "error-container": "#93000a",
          "tertiary-container": "#674d1a",
          "surface-container-lowest": "#0e0e0e",
          "on-tertiary-fixed-variant": "#5b4311",
          "on-primary-container": "#8cd2b6",
          "primary-container": "#0d5c46",
          background: "#131313",
          "secondary-fixed-dim": "#ffb787",
          "surface-dim": "#131313",
          "on-tertiary-fixed": "#271900",
          "bronze-accent": "#AD844A",
          "surface-container-low": "#1c1b1b",
          "on-secondary": "#512400",
          "inverse-on-surface": "#313030",
          "surface-container": "#201f1f",
          "primary-fixed-dim": "#8ed5b9",
          "on-secondary-container": "#ffede3",
          "on-primary-fixed": "#002117",
          "tertiary-fixed": "#ffdea8",
          "on-tertiary-container": "#e3bf81",
          "surface-container-high": "#2a2a2a",
          "primary-fixed": "#aaf1d4",
          "warning-amber": "#FFBF00",
          "on-surface-variant": "#bfc9c2",
          "surface-bright": "#393939",
          "secondary-fixed": "#ffdcc7"
        },
        borderRadius: {
          DEFAULT: "0.25rem",
          lg: "0.5rem",
          xl: "0.75rem",
          "2xl": "1rem",
          full: "9999px"
        },
        fontFamily: {
          "label-caps": ["Inter"],
          "headline-md": ["Plus Jakarta Sans"],
          "headline-lg": ["Plus Jakarta Sans"],
          "body-lg": ["Plus Jakarta Sans"],
          "data-mono": ["Inter"],
          "body-md": ["Plus Jakarta Sans"]
        },
        fontSize: {
          "label-caps": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
          "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
          "headline-lg": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
          "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
          "data-mono": ["14px", {"lineHeight": "1.4", "fontWeight": "500"}],
          "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}]
        },
        animation: {
          "gradient-shift": "gradientShift 15s ease infinite",
          "float-slow": "floatSlow 8s ease-in-out infinite",
          "float-slower": "floatSlower 12s ease-in-out infinite",
          "pulse-soft": "pulseSoft 4s ease-in-out infinite",
          "shimmer": "shimmer 3s ease-in-out infinite",
          "drift": "drift 20s linear infinite"
        },
        keyframes: {
          gradientShift: {
            "0%, 100%": { backgroundPosition: "0% 50%" },
            "50%": { backgroundPosition: "100% 50%" }
          },
          floatSlow: {
            "0%, 100%": { transform: "translateY(0px) rotate(0deg)" },
            "50%": { transform: "translateY(-20px) rotate(2deg)" }
          },
          floatSlower: {
            "0%, 100%": { transform: "translateY(0px) rotate(0deg)" },
            "50%": { transform: "translateY(-15px) rotate(-1deg)" }
          },
          pulseSoft: {
            "0%, 100%": { opacity: "0.4" },
            "50%": { opacity: "0.8" }
          },
          shimmer: {
            "0%": { transform: "translateX(-100%)" },
            "100%": { transform: "translateX(100%)" }
          },
          drift: {
            "0%": { transform: "translate(0, 0)" },
            "25%": { transform: "translate(30px, -20px)" },
            "50%": { transform: "translate(-10px, -40px)" },
            "75%": { transform: "translate(-30px, -10px)" },
            "100%": { transform: "translate(0, 0)" }
          }
        }
      }
    }
  }
</script>
<style>
  body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    overflow: hidden;
    background: #131313;
  }
  .glass-panel {
    background: rgba(26, 26, 26, 0.75);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(142, 213, 185, 0.08);
  }
  .glass-panel-strong {
    background: rgba(26, 26, 26, 0.88);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(142, 213, 185, 0.1);
  }
  .input-focus-glow:focus-within {
    box-shadow: 0 0 0 2px rgba(142, 213, 185, 0.25), 0 0 20px rgba(142, 213, 185, 0.08);
    border-color: #8ed5b9;
  }
  .sharia-gradient {
    background: linear-gradient(135deg, #083B2D 0%, #0d5c46 50%, #1A1A1A 100%);
    background-size: 200% 200%;
    animation: gradientShift 15s ease infinite;
  }
  .sharia-glow {
    box-shadow: 0 0 30px rgba(142, 213, 185, 0.12);
  }
  .sharia-glow-hover:hover {
    box-shadow: 0 0 40px rgba(142, 213, 185, 0.25);
  }
  /* Animated background grid */
  .animated-grid {
    background-image:
      linear-gradient(rgba(142, 213, 185, 0.03) 1px, transparent 1px),
      linear-gradient(90deg, rgba(142, 213, 185, 0.03) 1px, transparent 1px);
    background-size: 60px 60px;
  }
  /* Floating orbs */
  .orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    pointer-events: none;
  }
  /* Particle canvas */
  #particleCanvas {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
  }
  /* Elegant divider */
  .divider-gradient {
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(142, 213, 185, 0.3), transparent);
  }
</style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 md:p-0 relative overflow-hidden">
  <!-- Animated Wallpaper Layer -->
  <canvas id="particleCanvas"></canvas>

  <!-- Floating Orbs -->
  <div class="orb w-[500px] h-[500px] bg-primary/8 -top-48 -left-48 animate-float-slower" style="background:rgba(142,213,185,0.06)"></div>
  <div class="orb w-[400px] h-[400px] bg-secondary/5 bottom-32 -right-32 animate-float-slow" style="background:rgba(255,183,135,0.04)"></div>
  <div class="orb w-[300px] h-[300px] bg-tertiary/5 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 animate-pulse-soft" style="background:rgba(230,193,131,0.03)"></div>

  <!-- Animated Grid Overlay -->
  <div class="animated-grid fixed inset-0 opacity-40 pointer-events-none z-[1]"></div>

  <!-- Decorative Geometric Elements -->
  <div class="fixed top-20 right-[10%] text-primary/6 pointer-events-none z-[1] animate-float-slow" style="font-size: 120px;">
    <span class="material-symbols-outlined" style="font-size:inherit;">hexagon</span>
  </div>
  <div class="fixed bottom-32 left-[8%] text-secondary/5 pointer-events-none z-[1] animate-float-slower" style="font-size: 80px;">
    <span class="material-symbols-outlined" style="font-size:inherit;">diamond</span>
  </div>
  <div class="fixed top-1/3 right-[5%] text-primary/4 pointer-events-none z-[1] animate-drift" style="font-size: 50px;">
    <span class="material-symbols-outlined" style="font-size:inherit;">circles</span>
  </div>

  <!-- Main Login Container -->
  <main class="relative z-10 w-full max-w-[1200px] grid grid-cols-1 lg:grid-cols-5 glass-panel rounded-2xl overflow-hidden shadow-2xl sharia-glow" style="min-height:600px;max-height:780px;">

    <!-- Left Side: Branding & Info (3/5) -->
    <section class="hidden lg:flex lg:col-span-3 flex-col justify-between relative overflow-hidden sharia-gradient">
      <!-- Decorative overlay -->
      <div class="absolute inset-0 opacity-[0.04] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%23ffffff%22 fill-opacity=%220.15%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

      <!-- Subtle mosque silhouette -->
      <div class="absolute bottom-0 left-0 right-0 h-32 opacity-[0.03] pointer-events-none" style="background: url('data:image/svg+xml,%3Csvg viewBox=%220 0 1200 100%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cpath d=%22M0 100V60l60-40 60 40v40h120V40l60-30 60 30v60h120V50l60-35 60 35v50h120V45l60-40 60 40v55h120V60l60-40 60 40v40h120V40l60-30 60 30v60z%22 fill=%22%23ffffff%22/%3E%3C/svg%3E') repeat-x bottom; background-size: 1200px 100px;"></div>

      <div class="relative z-10 p-10 lg:p-14 flex flex-col h-full">
        <!-- Top: Brand -->
        <div class="flex items-center gap-4 mb-12">
          <div class="w-14 h-14 bg-primary/20 backdrop-blur-sm rounded-xl flex items-center justify-center border border-primary/20">
            <span class="material-symbols-outlined text-primary text-3xl font-bold" style="font-variation-settings:'FILL'1;">shield_person</span>
          </div>
          <div>
            <h1 class="text-2xl font-bold text-white tracking-tight">SmartBank AI</h1>
            <p class="text-xs text-primary/70 uppercase tracking-[0.15em] font-semibold">Admin Console v4.8.2</p>
          </div>
        </div>

        <!-- Center: Hero -->
        <div class="flex-1 flex flex-col justify-center max-w-xl">
          <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-primary/10 backdrop-blur-sm border border-primary/20 rounded-full text-primary/90 text-xs font-semibold uppercase tracking-wider mb-6 w-fit">
            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse-soft"></span>
            Secure Admin Panel
          </div>
          <h2 class="text-4xl lg:text-5xl font-bold text-ivory-text leading-[1.15] mb-6">
            Kendali Penuh
            <span class="text-primary">Ekosistem</span>
            Perbankan Syariah.
          </h2>
          <p class="text-base lg:text-lg text-white/60 max-w-lg leading-relaxed">
            Akses administrator untuk pemantauan simulasi real-time, manajemen pengguna, analisis kepatuhan syariah, dan audit laboratorium virtual.
          </p>

          <!-- Stats row -->
          <div class="flex gap-8 mt-10">
            <div>
              <p class="text-2xl font-bold text-primary">50+</p>
              <p class="text-xs text-white/40 uppercase tracking-wider">Institusi</p>
            </div>
            <div class="w-px bg-white/10"></div>
            <div>
              <p class="text-2xl font-bold text-primary">4.8k</p>
              <p class="text-xs text-white/40 uppercase tracking-wider">Sesi Aktif</p>
            </div>
            <div class="w-px bg-white/10"></div>
            <div>
              <p class="text-2xl font-bold text-primary">99.9%</p>
              <p class="text-xs text-white/40 uppercase tracking-wider">Uptime</p>
            </div>
          </div>
        </div>

        <!-- Bottom: Footer -->
        <div class="flex items-center justify-between text-xs text-white/30 mt-8">
          <div class="flex gap-6">
            <span>© 2024 SmartBank Syariah AI</span>
            <a href="#" class="hover:text-primary transition-colors">Kebijakan Privasi</a>
            <a href="#" class="hover:text-primary transition-colors">Dokumentasi</a>
          </div>
          <div class="flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-green-500"></span>
            <span class="text-white/40">Sistem Aman</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Right Side: Login Form (2/5) -->
    <section class="lg:col-span-2 bg-charcoal-surface/95 backdrop-blur-sm flex flex-col justify-center p-8 lg:p-12 relative overflow-hidden">
      <!-- Subtle decorative top border -->
      <div class="absolute top-0 left-0 right-0 h-[3px] bg-gradient-to-r from-primary via-primary/50 to-transparent"></div>

      <!-- Mobile Branding -->
      <div class="lg:hidden flex items-center gap-3 mb-8">
        <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
          <span class="material-symbols-outlined text-sharia-green-deed font-bold">shield_person</span>
        </div>
        <div>
          <h1 class="font-bold text-white text-lg">SmartBank AI</h1>
          <p class="text-[10px] text-primary/70 uppercase tracking-widest font-semibold">Admin Console</p>
        </div>
      </div>

      <div class="max-w-sm mx-auto w-full">
        <!-- Header -->
        <div class="mb-8">
          <h3 class="text-2xl font-bold text-ivory-text mb-1">Portal Administrator</h3>
          <div class="divider-gradient w-16 mt-3 mb-4"></div>
          <p class="text-sm text-on-surface-variant/80">Masuk untuk mengelola dan memonitor seluruh aktivitas laboratorium virtual.</p>
        </div>

        <!-- Form -->
        <form class="space-y-5" id="adminLoginForm">
          <!-- Username -->
          <div class="space-y-1.5">
            <label class="text-label-caps font-label-caps text-on-surface-variant uppercase tracking-wider" for="username">Username Admin</label>
            <div class="relative group input-focus-glow transition-all duration-300 rounded-xl border border-outline-variant/60 bg-surface-container-low/80 hover:border-outline-variant overflow-hidden">
              <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <span class="material-symbols-outlined text-outline text-xl group-focus-within:text-primary transition-colors">admin_panel_settings</span>
              </div>
              <input class="block w-full pl-12 pr-4 py-3.5 bg-transparent border-none text-on-surface placeholder:text-outline/60 focus:ring-0 rounded-xl font-body-md text-sm" id="username" name="username" placeholder="admin@smartbank.ai" required="" type="text"/>
            </div>
          </div>

          <!-- Password -->
          <div class="space-y-1.5">
            <div class="flex justify-between items-center">
              <label class="text-label-caps font-label-caps text-on-surface-variant uppercase tracking-wider" for="password">Kata Sandi</label>
              <a class="text-[11px] text-bronze-accent hover:text-secondary transition-colors font-semibold" href="#">Lupa?</a>
            </div>
            <div class="relative group input-focus-glow transition-all duration-300 rounded-xl border border-outline-variant/60 bg-surface-container-low/80 hover:border-outline-variant overflow-hidden">
              <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <span class="material-symbols-outlined text-outline text-xl group-focus-within:text-primary transition-colors">lock</span>
              </div>
              <input class="block w-full pl-12 pr-12 py-3.5 bg-transparent border-none text-on-surface placeholder:text-outline/60 focus:ring-0 rounded-xl font-body-md text-sm" id="password" name="password" placeholder="••••••••••••" required="" type="password"/>
              <button class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-outline hover:text-primary transition-colors" onclick="togglePassword()" type="button">
                <span class="material-symbols-outlined text-xl" id="toggleIcon">visibility</span>
              </button>
            </div>
          </div>

          <!-- Submit Button -->
          <button class="relative w-full bg-primary hover:bg-primary-fixed-dim text-on-primary font-bold py-3.5 px-6 rounded-xl transition-all duration-300 transform active:scale-[0.98] sharia-glow sharia-glow-hover flex items-center justify-center gap-2 overflow-hidden group mt-2" type="submit">
            <span class="relative z-10 flex items-center gap-2" id="btnContent">
              <span class="font-semibold text-base">Masuk ke Panel Kontrol</span>
              <span class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </span>
            <div class="absolute inset-0 bg-white/10 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></div>
          </button>
        </form>

        <!-- Security Indicator -->
        <div class="mt-6 p-4 rounded-xl bg-surface-container-low/60 border border-outline-variant/20 flex items-center gap-3">
          <div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings:'FILL'1;">verified_user</span>
          </div>
          <div>
            <p class="text-label-caps font-label-caps text-primary uppercase text-[11px]">Secure Session</p>
            <p class="text-[10px] text-on-surface-variant/60 leading-tight">Enkripsi AES-256 · Sesi berakhir dalam 8 jam</p>
          </div>
        </div>

        <!-- Footer -->
        <footer class="mt-6 pt-5 border-t border-outline-variant/10 flex flex-wrap justify-between items-center gap-2">
          <div class="flex gap-4">
            <a class="text-[11px] text-on-surface-variant/50 hover:text-primary transition-colors" href="#">Bantuan</a>
            <a class="text-[11px] text-on-surface-variant/50 hover:text-primary transition-colors" href="#">Status</a>
          </div>
          <span class="text-[10px] text-outline/40 font-mono">v4.8.2</span>
        </footer>

        <!-- Back to student login -->
        <div class="mt-5 text-center">
          <a href="login.php" class="text-xs text-on-surface-variant/50 hover:text-primary transition-colors">
            <span class="material-symbols-outlined text-xs align-middle">arrow_back</span>
            Kembali ke halaman siswa
          </a>
        </div>
      </div>
    </section>
  </main>

  <!-- Scripts -->
  <script>
    // Particle system for animated wallpaper
    (function() {
      const canvas = document.getElementById('particleCanvas');
      const ctx = canvas.getContext('2d');
      let particles = [];
      let mouseX = 0, mouseY = 0;

      function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
      }
      window.addEventListener('resize', resize);
      resize();

      class Particle {
        constructor() { this.reset(); }
        reset() {
          this.x = Math.random() * canvas.width;
          this.y = Math.random() * canvas.height;
          this.size = Math.random() * 2 + 0.5;
          this.speedX = (Math.random() - 0.5) * 0.3;
          this.speedY = (Math.random() - 0.5) * 0.3;
          this.opacity = Math.random() * 0.4 + 0.1;
          this.hue = 160 + Math.random() * 20; // green-teal range
        }
        update() {
          this.x += this.speedX;
          this.y += this.speedY;
          // Gentle mouse interaction
          const dx = this.x - mouseX;
          const dy = this.y - mouseY;
          const dist = Math.sqrt(dx * dx + dy * dy);
          if (dist < 200) {
            const force = (200 - dist) / 200 * 0.3;
            this.x += (dx / dist) * force;
            this.y += (dy / dist) * force;
          }
          if (this.x < -10 || this.x > canvas.width + 10 || this.y < -10 || this.y > canvas.height + 10) {
            this.reset();
          }
        }
        draw() {
          ctx.beginPath();
          ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
          ctx.fillStyle = `rgba(142, 213, 185, ${this.opacity})`;
          ctx.fill();
        }
      }

      // Create particles
      const count = Math.min(80, Math.floor(canvas.width * canvas.height / 15000));
      for (let i = 0; i < count; i++) particles.push(new Particle());

      // Connection lines
      function drawConnections() {
        for (let i = 0; i < particles.length; i++) {
          for (let j = i + 1; j < particles.length; j++) {
            const dx = particles[i].x - particles[j].x;
            const dy = particles[i].y - particles[j].y;
            const dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < 150) {
              ctx.beginPath();
              ctx.moveTo(particles[i].x, particles[i].y);
              ctx.lineTo(particles[j].x, particles[j].y);
              ctx.strokeStyle = `rgba(142, 213, 185, ${0.06 * (1 - dist / 150)})`;
              ctx.lineWidth = 0.5;
              ctx.stroke();
            }
          }
        }
      }

      function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => { p.update(); p.draw(); });
        drawConnections();
        requestAnimationFrame(animate);
      }
      animate();

      document.addEventListener('mousemove', e => { mouseX = e.clientX; mouseY = e.clientY; });
      document.addEventListener('touchmove', e => {
        if (e.touches[0]) { mouseX = e.touches[0].clientX; mouseY = e.touches[0].clientY; }
      });
    })();

    // Toggle password visibility
    function togglePassword() {
      const pwd = document.getElementById('password');
      const icon = document.getElementById('toggleIcon');
      if (pwd.type === 'password') {
        pwd.type = 'text';
        icon.innerText = 'visibility_off';
      } else {
        pwd.type = 'password';
        icon.innerText = 'visibility';
      }
    }

    // Form submit
    document.getElementById('adminLoginForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const btn = e.target.querySelector('button[type="submit"]');
      const content = document.getElementById('btnContent');

      btn.disabled = true;
      content.innerHTML = '<span class="material-symbols-outlined animate-spin text-lg">sync</span> <span class="font-semibold text-base">Mengautentikasi...</span>';

      setTimeout(function() {
        content.innerHTML = '<span class="material-symbols-outlined text-lg">check_circle</span> <span class="font-semibold text-base">Akses Diberikan</span>';
        btn.classList.remove('bg-primary', 'hover:bg-primary-fixed-dim');
        btn.classList.add('bg-sharia-green-deep');

        setTimeout(function() {
          var adminUser = document.getElementById('username').value.trim() || 'Admin';
          localStorage.setItem('isLoggedIn', 'true');
          localStorage.setItem('userRole', 'admin');
          localStorage.setItem('currentUser', adminUser);
          window.location.href = '../Dashboard_Siswa/Dashboard_admin.php';
        }, 1000);
      }, 1500);
    });

    // Keyboard shortcut: Ctrl+Shift+L to focus username
    document.addEventListener('keydown', function(e) {
      if (e.ctrlKey && e.shiftKey && e.key === 'L') {
        e.preventDefault();
        document.getElementById('username').focus();
      }
    });
  </script>
</body>
</html>
