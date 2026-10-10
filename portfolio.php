      <!-- Modal Body -->
      <div id="modalDescription" class="text-slate-300 text-sm leading-relaxed space-y-3">
        <!-- Injected via JavaScript -->
      </div>
      <!-- Tech Stack Used -->
      <div class="space-y-2">
        <h4 class="text-xs font-mono text-slate-400 uppercase tracking-wider">Teknologi yang Digunakan:</h4>
        <div id="modalTechStack" class="flex flex-wrap gap-2">
          <!-- Injected via JavaScript -->
        </div>
      </div>
      <!-- Action Buttons -->
      <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-800">
        <button onclick="closeProjectModal()" class="px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-xs font-semibold">Tutup</button>
        <a id="modalDemoLink" href="#" target="_blank" class="px-5 py-2 rounded-xl bg-brand-600 hover:bg-brand-500 text-white text-xs font-semibold flex items-center gap-1.5 shadow-md">
          <span>Kunjungi Tautan</span>
          <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- TOAST NOTIFICATION -->
  <div id="toastNotification" class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 pointer-events-none transition-all duration-300 flex items-center gap-3 px-4 py-3 rounded-2xl bg-slate-900/95 border border-brand-500/50 text-white shadow-2xl backdrop-blur-xl">
    <div class="w-7 h-7 rounded-xl bg-brand-500/20 text-brand-400 flex items-center justify-center">
      <i data-lucide="check" class="w-4 h-4"></i>
    </div>
    <span id="toastMessage" class="text-xs sm:text-sm font-medium">Pesan Berhasil!</span>
  </div>
  <!-- Custom JavaScript -->
  <script src="script.js"></script>
</body>
</html>
