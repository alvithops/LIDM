(function() {
    var overlay = document.createElement('div');
    overlay.id = 'adminHelpOverlay';
    overlay.style.cssText = 'position:fixed;inset:0;z-index:9998;background:rgba(0,0,0,0.5);display:none;backdrop-filter:blur(4px);-webkit-backdrop-filter:blur(4px);';

    var panel = document.createElement('div');
    panel.id = 'adminHelpPanel';
    panel.style.cssText = 'position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);z-index:9999;width:520px;max-width:calc(100vw - 32px);max-height:85vh;background:rgba(30,30,30,0.97);backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px);border:1px solid rgba(255,255,255,0.08);border-radius:20px;box-shadow:0 8px 40px rgba(0,0,0,0.5);display:none;flex-direction:column;overflow:hidden;';

    document.body.appendChild(overlay);
    document.body.appendChild(panel);

    var currentView = 'list';
    var READ_KEY = 'lidm_help_last_read';

    function getLastRead() {
        try { return parseInt(localStorage.getItem(READ_KEY)) || 0; } catch(e) { return 0; }
    }

    function setLastRead(ts) {
        localStorage.setItem(READ_KEY, String(ts));
    }

    function hasUnread() {
        var messages = loadMessages();
        if (messages.length === 0) return false;
        var lastRead = getLastRead();
        var latest = messages[messages.length - 1].timestamp;
        return latest > lastRead;
    }

    function updateBadge() {
        var link = document.getElementById('adminHelpLink');
        var icon = document.getElementById('adminHelpIcon');
        var text = document.getElementById('adminHelpText');
        if (!link || !icon || !text) return;
        if (hasUnread()) {
            link.style.background = 'rgba(142,213,185,0.12)';
            link.style.color = '#8ed5b9';
            link.style.borderLeft = '3px solid #ffb787';
            icon.textContent = 'help';
            icon.style.fontVariationSettings = "'FILL' 1";
            text.style.color = '#8ed5b9';
            text.style.fontWeight = '700';
        } else {
            link.style.background = '';
            link.style.color = '';
            link.style.borderLeft = '';
            icon.textContent = 'help';
            icon.style.fontVariationSettings = '';
            text.style.color = '';
            text.style.fontWeight = '';
        }
    }

    function markAsRead() {
        setLastRead(Date.now());
        updateBadge();
    }

    function loadMessages() {
        var key = 'lidm_help_messages';
        try { return JSON.parse(localStorage.getItem(key)) || []; } catch(e) { return []; }
    }

    function saveMessages(arr) {
        localStorage.setItem('lidm_help_messages', JSON.stringify(arr));
    }

    function formatTime(ts) {
        var d = new Date(ts);
        var hours = d.getHours().toString().padStart(2,'0');
        var mins = d.getMinutes().toString().padStart(2,'0');
        var day = d.getDate().toString().padStart(2,'0');
        var month = (d.getMonth()+1).toString().padStart(2,'0');
        var year = d.getFullYear();
        return hours + ':' + mins + ' | ' + day + '/' + month + '/' + year;
    }

    function renderList() {
        currentView = 'list';
        var messages = loadMessages();
        var html = '';
        html += '<div style="padding:20px 24px 16px;border-bottom:1px solid rgba(255,255,255,0.06);">';
        html += '<div style="display:flex;align-items:center;gap:12px;">';
        html += '<div style="width:40px;height:40px;border-radius:12px;background:rgba(142,213,185,0.15);display:flex;align-items:center;justify-content:center;"><span class="material-symbols-outlined" style="color:#8ed5b9;font-size:24px;">support_agent</span></div>';
        html += '<div><h3 style="font-size:16px;font-weight:700;color:#F5F5F0;margin:0;">Pusat Bantuan Admin</h3><p style="font-size:11px;color:#bfc9c2;margin:2px 0 0;">' + messages.length + ' pesan dari siswa</p></div>';
        html += '<button onclick="window.closeAdminHelp()" style="margin-left:auto;width:32px;height:32px;border-radius:8px;background:rgba(255,255,255,0.05);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;color:#bfc9c2;"><span class="material-symbols-outlined" style="font-size:18px;">close</span></button>';
        html += '</div></div>';
        html += '<div style="padding:8px 12px;overflow-y:auto;flex:1;">';
        if (messages.length === 0) {
            html += '<div style="text-align:center;padding:60px 20px;"><span class="material-symbols-outlined" style="font-size:48px;color:#bfc9c2;opacity:0.3;">inbox</span><p style="font-size:13px;color:#bfc9c2;margin-top:12px;">Belum ada pesan dari siswa.</p></div>';
        } else {
            for (var i = messages.length - 1; i >= 0; i--) {
                var m = messages[i];
                var isCustom = m.type === 'custom';
                var icon = isCustom ? 'edit_note' : 'help';
                var label = isCustom ? 'Pesan Kustom' : (m.category || 'Opsi Bantuan');
                var labelColor = isCustom ? '#ffb787' : '#8ed5b9';
                html += '<div onclick="window._adminViewMessage(' + i + ')" style="padding:14px 16px;margin-bottom:6px;border-radius:14px;cursor:pointer;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.05);transition:all 0.2s;" onmouseenter="this.style.background=\'rgba(142,213,185,0.08)\';this.style.borderColor=\'rgba(142,213,185,0.2)\';" onmouseleave="this.style.background=\'rgba(255,255,255,0.03)\';this.style.borderColor=\'rgba(255,255,255,0.05)\';">';
                html += '<div style="display:flex;align-items:flex-start;gap:12px;">';
                html += '<div style="width:32px;height:32px;border-radius:10px;background:rgba(142,213,185,0.12);display:flex;align-items:center;justify-content:center;flex-shrink:0;"><span class="material-symbols-outlined" style="color:' + labelColor + ';font-size:18px;">' + icon + '</span></div>';
                html += '<div style="flex:1;min-width:0;">';
                html += '<p style="font-size:13px;font-weight:600;color:#F5F5F0;margin:0;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">' + m.text + '</p>';
                html += '<div style="display:flex;gap:8px;margin-top:4px;"><span style="font-size:10px;color:' + labelColor + ';font-weight:600;">' + label + '</span><span style="font-size:10px;color:#bfc9c2;">' + formatTime(m.timestamp) + '</span></div>';
                html += '</div></div></div>';
            }
        }
        html += '</div>';
        if (messages.length > 0) {
            html += '<div style="padding:12px 20px;border-top:1px solid rgba(255,255,255,0.06);display:flex;gap:8px;">';
            html += '<button onclick="window._adminClearAll()" style="flex:1;padding:10px;border-radius:12px;background:rgba(255,77,77,0.1);color:#ff6b6b;border:1px solid rgba(255,77,77,0.2);cursor:pointer;font-size:12px;font-weight:600;font-family:inherit;">Hapus Semua</button>';
            html += '<button onclick="window.closeAdminHelp()" style="flex:1;padding:10px;border-radius:12px;background:rgba(255,255,255,0.05);color:#bfc9c2;border:1px solid rgba(255,255,255,0.08);cursor:pointer;font-size:12px;font-weight:600;font-family:inherit;">Tutup</button>';
            html += '</div>';
        }
        panel.innerHTML = html;
    }

    window._adminViewMessage = function(idx) {
        currentView = 'detail';
        var messages = loadMessages();
        var m = messages[idx];
        if (!m) return;
        var isCustom = m.type === 'custom';
        var icon = isCustom ? 'edit_note' : 'help';
        var label = isCustom ? 'Pesan Kustom' : (m.category || 'Opsi Bantuan');
        var labelColor = isCustom ? '#ffb787' : '#8ed5b9';
        var html = '';
        html += '<div style="padding:20px 24px 16px;border-bottom:1px solid rgba(255,255,255,0.06);">';
        html += '<div style="display:flex;align-items:center;gap:12px;">';
        html += '<button onclick="window._adminBack()" style="width:32px;height:32px;border-radius:8px;background:rgba(255,255,255,0.05);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;color:#bfc9c2;"><span class="material-symbols-outlined" style="font-size:18px;">arrow_back</span></button>';
        html += '<div style="width:36px;height:36px;border-radius:10px;background:rgba(142,213,185,0.12);display:flex;align-items:center;justify-content:center;"><span class="material-symbols-outlined" style="color:#8ed5b9;font-size:20px;">support_agent</span></div>';
        html += '<div><h3 style="font-size:14px;font-weight:700;color:#F5F5F0;margin:0;">Detail Pesan</h3></div>';
        html += '</div></div>';
        html += '<div style="padding:20px 24px;overflow-y:auto;flex:1;">';
        html += '<div style="margin-bottom:16px;"><span style="font-size:10px;color:' + labelColor + ';font-weight:600;background:' + labelColor + '15;padding:4px 10px;border-radius:6px;">' + label + '</span></div>';
        html += '<div style="padding:14px 18px;border-radius:16px;background:rgba(142,213,185,0.08);border:1px solid rgba(142,213,185,0.12);"><p style="font-size:14px;color:#e5e2e1;margin:0;line-height:1.7;">' + m.text + '</p></div>';
        html += '<div style="margin-top:12px;font-size:11px;color:#bfc9c2;">Dikirim: ' + formatTime(m.timestamp) + '</div>';
        html += '<div style="display:flex;gap:8px;flex-wrap:wrap;margin-top:24px;padding-top:16px;border-top:1px solid rgba(255,255,255,0.06);">';
        html += '<button onclick="window._adminBack()" style="padding:10px 20px;border-radius:12px;background:rgba(142,213,185,0.12);color:#8ed5b9;border:1px solid rgba(142,213,185,0.2);cursor:pointer;font-size:12px;font-weight:600;font-family:inherit;">Kembali</button>';
        html += '<button onclick="window._adminDeleteMessage(' + idx + ')" style="padding:10px 20px;border-radius:12px;background:rgba(255,77,77,0.1);color:#ff6b6b;border:1px solid rgba(255,77,77,0.2);cursor:pointer;font-size:12px;font-weight:600;font-family:inherit;">Hapus</button>';
        html += '<button onclick="window.closeAdminHelp()" style="padding:10px 20px;border-radius:12px;background:rgba(255,255,255,0.05);color:#bfc9c2;border:1px solid rgba(255,255,255,0.08);cursor:pointer;font-size:12px;font-weight:600;font-family:inherit;">Tutup</button>';
        html += '</div></div>';
        panel.innerHTML = html;
    };

    window._adminBack = function() {
        renderList();
    };

    window._adminClearAll = function() {
        if (!confirm('Hapus semua pesan bantuan dari siswa?')) return;
        localStorage.removeItem('lidm_help_messages');
        markAsRead();
        renderList();
    };

    window._adminDeleteMessage = function(idx) {
        var messages = loadMessages();
        messages.splice(idx, 1);
        saveMessages(messages);
        updateBadge();
        renderList();
    };

    window.openAdminHelp = function() {
        panel.style.display = 'flex';
        overlay.style.display = 'block';
        renderList();
        markAsRead();
    };

    window.closeAdminHelp = function() {
        panel.style.display = 'none';
        overlay.style.display = 'none';
    };

    overlay.addEventListener('click', function() {
        window.closeAdminHelp();
    });

    updateBadge();

    window.addEventListener('storage', function(e) {
        if (e.key === 'lidm_help_messages') updateBadge();
    });
})();
