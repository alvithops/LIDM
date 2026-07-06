(function() {
    var helpData = [
        {
            category: 'Halaman Dashboard',
            icon: 'dashboard',
            items: [
                { question: 'Grafik performa tidak muncul', answer: 'Coba refresh halaman (F5). Jika masih tidak muncul, pastikan browser Anda mendukung Canvas. Gunakan Chrome atau Firefox versi terbaru.' },
                { question: 'Data XP tidak sesuai', answer: 'XP diperbarui setelah menyelesaikan simulasi. Jika ada selisih, coba logout lalu login kembali. Jika masih berbeda, hubungi pengawas laboratorium.' },
                { question: 'Tombol mulai simulasi tidak merespons', answer: 'Pastikan Anda sudah login dengan role Student. Coba clear cache browser atau gunakan mode incognito.' }
            ]
        },
        {
            category: 'Halaman Simulasi',
            icon: 'psychology',
            items: [
                { question: 'Chat dengan AI customer tidak merespons', answer: 'Pastikan tab Simulasi dan tab Admin Preview keduanya terbuka. Chat memerlukan koneksi BroadcastChannel antar tab. Refresh halaman jika perlu.' },
                { question: 'Tombol Verifikasi Dokumen error', answer: 'Verifikasi Dokumen membutuhkan input chat terlebih dahulu. Ketik pesan ke AI customer, lalu coba klik tombol Verifikasi Dokumen.' },
                { question: 'Tombol Pilih Akad tidak berfungsi', answer: 'Pastikan sesi simulasi sedang berjalan. Tombol Pilih Akad aktif setelah Anda memulai percakapan dengan AI customer.' },
                { question: 'Pesan tidak terkirim', answer: 'Coba ketik ulang pesan Anda. Pastikan tidak ada karakter khusus yang bermasalah. Refresh halaman jika terus bermasalah.' }
            ]
        },
        {
            category: 'Halaman Kompetensi',
            icon: 'military_tech',
            items: [
                { question: 'Sertifikat tidak tampil', answer: 'Sertifikat akan muncul setelah admin menambahkan dan menerbitkannya. Hubungi pengawas jika Anda yakin sudah lulus namun sertifikat tidak muncul.' },
                { question: 'Level progresi tidak berubah', answer: 'Level progresi diperbarui setelah Anda mengerjakan soal di modal level. Skor harus >= 70 untuk lulus satu level.' },
                { question: 'Kartu skill tidak muncul', answer: 'Data skill dikelola oleh admin. Hubungi pengawas jika kartu skill kosong atau tidak sesuai.' }
            ]
        },
        {
            category: 'Halaman Riwayat',
            icon: 'history',
            items: [
                { question: 'Riwayat simulasi tidak muncul', answer: 'Riwayat akan muncul setelah Anda menyelesaikan simulasi. Jika masih kosong, coba refresh halaman.' },
                { question: 'Data rapor tidak akurat', answer: 'Rapor dibuat berdasarkan evaluasi simulasi terakhir. Jika ada kesalahan data, hubungi pengawas laboratorium.' },
                { question: 'Filter tanggal tidak berfungsi', answer: 'Pastikan format tanggal yang dipilih benar. Coba gunakan rentang tanggal yang lebih lebar.' }
            ]
        },
        {
            category: 'Halaman Pengaturan',
            icon: 'settings',
            items: [
                { question: 'Foto profil tidak tersimpan', answer: 'Pastikan file gambar berformat JPG/PNG dan ukurannya tidak terlalu besar (maks 2MB). Coba upload ulang.' },
                { question: 'Perubahan tidak tersimpan', answer: 'Beberapa perubahan mungkin memerlukan refresh halaman. Coba refresh setelah menyimpan pengaturan.' },
                { question: 'Tema tidak berubah', answer: 'Perubahan tema akan terlihat setelah halaman di-refresh. Jika masih tidak berubah, coba clear cache.' }
            ]
        },
        {
            category: 'Fitur Umum',
            icon: 'widgets',
            items: [
                { question: 'Notifikasi tidak muncul', answer: 'Pastikan notifikasi tidak diblokir oleh browser. Periksa pengaturan notifikasi di browser Anda.' },
                { question: 'Sidebar navigasi error', answer: 'Coba refresh halaman. Jika sidebar tidak muncul di layar desktop, pastikan lebar layar minimal 768px.' },
                { question: 'Halaman lambat loading', answer: 'Coba refresh halaman atau gunakan koneksi internet yang stabil. Tutup tab yang tidak perlu.' },
                { question: 'Bahasa tidak berubah', answer: 'Klik tombol ID/EN di pojok kanan bawah. Bahasa akan berubah secara real-time di seluruh halaman.' }
            ]
        },
        {
            category: 'Komplain & Laporan',
            icon: 'report',
            items: [
                { question: 'Laporkan bug', answer: 'Silakan laporkan bug dengan detail: (1) Halaman apa, (2) Langkah reproduksi, (3) Pesan error yang muncul. Laporkan ke pengawas laboratorium.' },
                { question: 'Saran fitur', answer: 'Kami menerima saran fitur untuk pengembangan web ini. Sampaikan saran Anda ke pengawas laboratorium atau melalui form yang disediakan.' },
                { question: 'Masalah teknis lainnya', answer: 'Untuk masalah teknis yang tidak tercantum di sini, hubungi pengawas laboratorium atau administrator sistem.' }
            ]
        }
    ];

    var botName = 'Bantuan LIDM';
    var botAvatar = 'support_agent';
    var state = { view: 'menu' };

    var overlay = document.createElement('div');
    overlay.id = 'helpOverlay';
    overlay.style.cssText = 'position:fixed;inset:0;z-index:9998;background:rgba(0,0,0,0.5);display:none;backdrop-filter:blur(4px);-webkit-backdrop-filter:blur(4px);';

    var panel = document.createElement('div');
    panel.id = 'helpPanel';
    panel.style.cssText = 'position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);z-index:9999;width:420px;max-width:calc(100vw - 32px);max-height:80vh;background:rgba(30,30,30,0.97);backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px);border:1px solid rgba(255,255,255,0.08);border-radius:20px;box-shadow:0 8px 40px rgba(0,0,0,0.5);display:none;flex-direction:column;overflow:hidden;';

    document.body.appendChild(overlay);
    document.body.appendChild(panel);

    var currentHtml = '';

    function renderMenu() {
        state.view = 'menu';
        var html = '';
        html += '<div style="padding:20px 24px 16px;border-bottom:1px solid rgba(255,255,255,0.06);">';
        html += '<div style="display:flex;align-items:center;gap:12px;">';
        html += '<div style="width:40px;height:40px;border-radius:12px;background:rgba(142,213,185,0.15);display:flex;align-items:center;justify-content:center;"><span class="material-symbols-outlined" style="color:#8ed5b9;font-size:24px;">support_agent</span></div>';
        html += '<div><h3 style="font-size:16px;font-weight:700;color:#F5F5F0;margin:0;">' + botName + '</h3><p style="font-size:11px;color:#bfc9c2;margin:2px 0 0;">Pilih topik bantuan</p></div>';
        html += '<button onclick="window.closeHelp()" style="margin-left:auto;width:32px;height:32px;border-radius:8px;background:rgba(255,255,255,0.05);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;color:#bfc9c2;"><span class="material-symbols-outlined" style="font-size:18px;">close</span></button>';
        html += '</div></div>';
        html += '<div style="padding:12px;overflow-y:auto;flex:1;">';
        for (var i = 0; i < helpData.length; i++) {
            var cat = helpData[i];
            html += '<div onclick="window._helpOpenCategory(' + i + ')" style="display:flex;align-items:center;gap:14px;padding:14px 16px;margin-bottom:6px;border-radius:14px;cursor:pointer;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.05);transition:all 0.2s;" onmouseenter="this.style.background=\'rgba(142,213,185,0.08)\';this.style.borderColor=\'rgba(142,213,185,0.2)\';" onmouseleave="this.style.background=\'rgba(255,255,255,0.03)\';this.style.borderColor=\'rgba(255,255,255,0.05)\';">';
            html += '<div style="width:36px;height:36px;border-radius:10px;background:rgba(142,213,185,0.12);display:flex;align-items:center;justify-content:center;"><span class="material-symbols-outlined" style="color:#8ed5b9;font-size:20px;">' + cat.icon + '</span></div>';
            html += '<div style="flex:1;"><p style="font-size:13px;font-weight:600;color:#F5F5F0;margin:0;">' + cat.category + '</p><p style="font-size:11px;color:#bfc9c2;margin:2px 0 0;">' + cat.items.length + ' topik</p></div>';
            html += '<span class="material-symbols-outlined" style="color:#bfc9c2;font-size:18px;">chevron_right</span>';
            html += '</div>';
        }
        html += '</div>';
        html += '<div style="padding:12px 16px;border-top:1px solid rgba(255,255,255,0.06);">';
        html += '<div style="display:flex;gap:8px;">';
        html += '<input id="helpCustomInput" type="text" placeholder="Ketik pesan Anda di sini..." style="flex:1;padding:10px 14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#F5F5F0;font-size:13px;font-family:inherit;outline:none;" onkeydown="if(event.key===\'Enter\')window._helpSendMessage()">';
        html += '<button onclick="window._helpSendMessage()" style="width:40px;height:40px;border-radius:12px;background:#8ed5b9;color:#003829;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span class="material-symbols-outlined" style="font-size:20px;">send</span></button>';
        html += '</div></div>';
        panel.innerHTML = html;
        currentHtml = 'menu';
        var inp = document.getElementById('helpCustomInput');
        if (inp) setTimeout(function(){ inp.focus(); }, 100);
    }

    function _helpSaveMessage(text, type, category) {
        var key = 'lidm_help_messages';
        var stored = [];
        try { stored = JSON.parse(localStorage.getItem(key)) || []; } catch(e) {}
        stored.push({ id: Date.now(), text: text, type: type || 'custom', category: category || null, timestamp: Date.now() });
        localStorage.setItem(key, JSON.stringify(stored));
    }

    window._helpSendMessage = function() {
        var inp = document.getElementById('helpCustomInput');
        if (!inp) return;
        var text = inp.value.trim();
        if (!text) return;
        _helpSaveMessage(text, 'custom');
        inp.value = '';
        state.view = 'answer';
        var html = '';
        html += '<div style="padding:20px 24px 16px;border-bottom:1px solid rgba(255,255,255,0.06);">';
        html += '<div style="display:flex;align-items:center;gap:12px;">';
        html += '<button onclick="window._helpBack()" style="width:32px;height:32px;border-radius:8px;background:rgba(255,255,255,0.05);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;color:#bfc9c2;"><span class="material-symbols-outlined" style="font-size:18px;">arrow_back</span></button>';
        html += '<div style="width:36px;height:36px;border-radius:10px;background:rgba(142,213,185,0.12);display:flex;align-items:center;justify-content:center;"><span class="material-symbols-outlined" style="color:#8ed5b9;font-size:20px;">support_agent</span></div>';
        html += '<div><h3 style="font-size:14px;font-weight:700;color:#F5F5F0;margin:0;">Pesan Anda</h3></div>';
        html += '</div></div>';
        html += '<div style="padding:20px 24px;overflow-y:auto;flex:1;">';
        html += '<div style="display:flex;gap:12px;margin-bottom:16px;flex-direction:row-reverse;">';
        html += '<div style="width:32px;height:32px;border-radius:50%;background:rgba(142,213,185,0.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span class="material-symbols-outlined" style="color:#8ed5b9;font-size:16px;">person</span></div>';
        html += '<div style="flex:1;padding:12px 16px;border-radius:16px 16px 4px 16px;background:rgba(142,213,185,0.12);border:1px solid rgba(142,213,185,0.15);"><p style="font-size:13px;color:#F5F5F0;margin:0;line-height:1.6;">' + _helpEscape(text) + '</p></div>';
        html += '</div>';
        html += '<div style="display:flex;gap:12px;margin-bottom:16px;">';
        html += '<div style="width:36px;height:36px;border-radius:50%;background:rgba(142,213,185,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span class="material-symbols-outlined" style="color:#8ed5b9;font-size:20px;">support_agent</span></div>';
        html += '<div style="flex:1;padding:14px 18px;border-radius:16px 16px 16px 4px;background:rgba(142,213,185,0.08);border:1px solid rgba(142,213,185,0.12);"><p style="font-size:13px;color:#e5e2e1;margin:0;line-height:1.7;">Terima kasih telah menghubungi kami. Pesan Anda telah kami catat. Untuk tindak lanjut lebih cepat, silakan hubungi pengawas laboratorium secara langsung.</p></div>';
        html += '</div>';
        html += '<div style="display:flex;gap:8px;flex-wrap:wrap;margin-top:16px;padding-top:16px;border-top:1px solid rgba(255,255,255,0.06);">';
        html += '<button onclick="window._helpBack()" style="padding:8px 18px;border-radius:10px;background:rgba(142,213,185,0.12);color:#8ed5b9;border:1px solid rgba(142,213,185,0.2);cursor:pointer;font-size:12px;font-weight:600;font-family:inherit;">Kembali</button>';
        html += '<button onclick="window._helpNewMessage()" style="padding:8px 18px;border-radius:10px;background:rgba(255,255,255,0.05);color:#bfc9c2;border:1px solid rgba(255,255,255,0.08);cursor:pointer;font-size:12px;font-weight:600;font-family:inherit;">Kirim pesan lain</button>';
        html += '<button onclick="window.closeHelp()" style="padding:8px 18px;border-radius:10px;background:rgba(255,255,255,0.05);color:#bfc9c2;border:1px solid rgba(255,255,255,0.08);cursor:pointer;font-size:12px;font-weight:600;font-family:inherit;">Tutup</button>';
        html += '</div>';
        html += '</div>';
        panel.innerHTML = html;
        currentHtml = 'answer';
    };

    window._helpNewMessage = function() {
        renderMenu();
        var inp = document.getElementById('helpCustomInput');
        if (inp) setTimeout(function(){ inp.focus(); }, 100);
    };

    function _helpEscape(str) {
        var div = document.createElement('div');
        div.appendChild(document.createTextNode(str));
        return div.innerHTML;
    }

    window._helpOpenCategory = function(idx) {
        state.view = 'category';
        state.categoryIdx = idx;
        var cat = helpData[idx];
        var html = '';
        html += '<div style="padding:20px 24px 16px;border-bottom:1px solid rgba(255,255,255,0.06);">';
        html += '<div style="display:flex;align-items:center;gap:12px;">';
        html += '<button onclick="window._helpBack()" style="width:32px;height:32px;border-radius:8px;background:rgba(255,255,255,0.05);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;color:#bfc9c2;"><span class="material-symbols-outlined" style="font-size:18px;">arrow_back</span></button>';
        html += '<div style="width:36px;height:36px;border-radius:10px;background:rgba(142,213,185,0.12);display:flex;align-items:center;justify-content:center;"><span class="material-symbols-outlined" style="color:#8ed5b9;font-size:20px;">' + cat.icon + '</span></div>';
        html += '<div><h3 style="font-size:16px;font-weight:700;color:#F5F5F0;margin:0;">' + cat.category + '</h3><p style="font-size:11px;color:#bfc9c2;margin:2px 0 0;">Pilih masalah yang dialami</p></div>';
        html += '</div></div>';
        html += '<div style="padding:12px;overflow-y:auto;flex:1;">';
        for (var i = 0; i < cat.items.length; i++) {
            var item = cat.items[i];
            html += '<div onclick="window._helpShowAnswer(' + idx + ',' + i + ')" style="padding:14px 16px;margin-bottom:6px;border-radius:14px;cursor:pointer;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.05);transition:all 0.2s;" onmouseenter="this.style.background=\'rgba(142,213,185,0.08)\';this.style.borderColor=\'rgba(142,213,185,0.2)\';" onmouseleave="this.style.background=\'rgba(255,255,255,0.03)\';this.style.borderColor=\'rgba(255,255,255,0.05)\';">';
            html += '<div style="display:flex;align-items:flex-start;gap:12px;">';
            html += '<span class="material-symbols-outlined" style="color:#ffb787;font-size:18px;margin-top:1px;">help</span>';
            html += '<p style="font-size:13px;color:#F5F5F0;margin:0;line-height:1.4;">' + item.question + '</p>';
            html += '</div></div>';
        }
        html += '</div>';
        html += '<div style="padding:12px 16px;border-top:1px solid rgba(255,255,255,0.06);">';
        html += '<div style="display:flex;gap:8px;">';
        html += '<input id="helpCustomInput" type="text" placeholder="Ketik pesan lain..." style="flex:1;padding:10px 14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#F5F5F0;font-size:13px;font-family:inherit;outline:none;" onkeydown="if(event.key===\'Enter\')window._helpSendMessage()">';
        html += '<button onclick="window._helpSendMessage()" style="width:40px;height:40px;border-radius:12px;background:#8ed5b9;color:#003829;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span class="material-symbols-outlined" style="font-size:20px;">send</span></button>';
        html += '</div></div>';
        panel.innerHTML = html;
        currentHtml = 'category';
        var inp = document.getElementById('helpCustomInput');
        if (inp) setTimeout(function(){ inp.focus(); }, 100);
    };

    window._helpShowAnswer = function(catIdx, itemIdx) {
        state.view = 'answer';
        var cat = helpData[catIdx];
        var item = cat.items[itemIdx];
        _helpSaveMessage(item.question, 'option', cat.category);
        var html = '';
        html += '<div style="padding:20px 24px 16px;border-bottom:1px solid rgba(255,255,255,0.06);">';
        html += '<div style="display:flex;align-items:center;gap:12px;">';
        html += '<button onclick="window._helpBack()" style="width:32px;height:32px;border-radius:8px;background:rgba(255,255,255,0.05);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;color:#bfc9c2;"><span class="material-symbols-outlined" style="font-size:18px;">arrow_back</span></button>';
        html += '<div style="width:36px;height:36px;border-radius:10px;background:rgba(142,213,185,0.12);display:flex;align-items:center;justify-content:center;"><span class="material-symbols-outlined" style="color:#8ed5b9;font-size:20px;">' + cat.icon + '</span></div>';
        html += '<div><h3 style="font-size:14px;font-weight:700;color:#F5F5F0;margin:0;line-height:1.3;">' + item.question + '</h3></div>';
        html += '</div></div>';
        html += '<div style="padding:20px 24px;overflow-y:auto;flex:1;">';
        html += '<div style="display:flex;gap:12px;margin-bottom:16px;">';
        html += '<div style="width:36px;height:36px;border-radius:50%;background:rgba(142,213,185,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span class="material-symbols-outlined" style="color:#8ed5b9;font-size:20px;">' + botAvatar + '</span></div>';
        html += '<div style="flex:1;padding:14px 18px;border-radius:16px 16px 16px 4px;background:rgba(142,213,185,0.08);border:1px solid rgba(142,213,185,0.12);"><p style="font-size:13px;color:#e5e2e1;margin:0;line-height:1.7;">' + item.answer + '</p></div>';
        html += '</div>';
        html += '<div style="padding:12px 0;margin-top:16px;padding-top:16px;border-top:1px solid rgba(255,255,255,0.06);">';
        html += '<div style="display:flex;gap:8px;">';
        html += '<input id="helpCustomInput" type="text" placeholder="Ketik pesan lain..." style="flex:1;padding:10px 14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#F5F5F0;font-size:13px;font-family:inherit;outline:none;" onkeydown="if(event.key===\'Enter\')window._helpSendMessage()">';
        html += '<button onclick="window._helpSendMessage()" style="width:40px;height:40px;border-radius:12px;background:#8ed5b9;color:#003829;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span class="material-symbols-outlined" style="font-size:20px;">send</span></button>';
        html += '</div></div>';
        html += '<div style="display:flex;gap:8px;flex-wrap:wrap;">';
        html += '<button onclick="window._helpBack()" style="padding:8px 18px;border-radius:10px;background:rgba(142,213,185,0.12);color:#8ed5b9;border:1px solid rgba(142,213,185,0.2);cursor:pointer;font-size:12px;font-weight:600;font-family:inherit;">Kembali ke daftar</button>';
        html += '<button onclick="window.closeHelp()" style="padding:8px 18px;border-radius:10px;background:rgba(255,255,255,0.05);color:#bfc9c2;border:1px solid rgba(255,255,255,0.08);cursor:pointer;font-size:12px;font-weight:600;font-family:inherit;">Tutup</button>';
        html += '</div>';
        html += '</div>';
        panel.innerHTML = html;
        currentHtml = 'answer';
        var inp = document.getElementById('helpCustomInput');
        if (inp) setTimeout(function(){ inp.focus(); }, 100);
    };

    window._helpBack = function() {
        renderMenu();
    };

    window.openHelp = function() {
        panel.style.display = 'flex';
        overlay.style.display = 'block';
        if (currentHtml !== 'menu') renderMenu();
    };

    window.closeHelp = function() {
        panel.style.display = 'none';
        overlay.style.display = 'none';
    };

    overlay.addEventListener('click', function() {
        window.closeHelp();
    });
})();
