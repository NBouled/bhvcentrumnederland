</main>
<footer class="bg-gradient-to-t from-[#00061c] to-[#1e2b6f] text-white/80 pt-12 pb-6 relative">
    <div class="max-w-6xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Bedrijf info -->
        <div class="space-y-3 text-center md:text-left">
            <h3 class="text-lg font-semibold">BHV Centrum Nederland</h3>
            <p class="text-gray-200 text-sm">
                Professionele BHV-, EHBO- en veiligheidstrainingen.<br>
                Altijd praktijkgericht, erkend en betrouwbaar.
            </p>
            <p class="text-gray-200 text-sm">
                📍 Hollantlaan 4
                3526 AM Utrecht<br>
                📞 030 744 02 40<br>
                ✉️ info@bhvcentrumnederland.nl
            </p>
        </div>

        <!-- Navigatie links -->
        <div class="text-center md:text-left">
            <h3 class="text-lg font-semibold mb-3">Links</h3>
            <ul class="space-y-2">
                <li><a href="/privacy.php" class="hover:underline hover:text-gray-300 transition">Privacybeleid</a></li>
                <li><a href="/voorwaarden.php" class="hover:underline hover:text-gray-300 transition">Algemene
                        voorwaarden</a></li>
                <li><a href="/contact.php" class="hover:underline hover:text-gray-300 transition">Contact</a></li>
                <li><a href="/opleidingen.php" class="hover:underline hover:text-gray-300 transition">Opleidingen</a>
                </li>
            </ul>
        </div>

        <!-- Socials -->
        <div class="text-center md:text-left">
            <h3 class="text-lg font-semibold mb-3">Volg ons</h3>
            <div class="flex justify-center md:justify-start gap-4">
                <a href="https://www.facebook.com" target="_blank"
                    class="hover:text-gray-300 transition transform hover:-translate-y-1">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M22 12a10 10 0 1 0-11.6 9.9v-7H8v-3h2.4V9.5c0-2.4 1.4-3.7 3.6-3.7 1 0 2 .1 2 .1v2.2h-1.1c-1.1 0-1.5.7-1.5 1.4v1.7h2.7l-.4 3h-2.3v7A10 10 0 0 0 22 12" />
                    </svg>
                </a>
                <a href="https://www.twitter.com" target="_blank"
                    class="hover:text-gray-300 transition transform hover:-translate-y-1">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 22.4.4a9 9 0 0 1-2.83 1.1A4.52 4.52 0 0 0 11 4.8a12.84 12.84 0 0 1-9-4.6s-4 9 5 13a12.76 12.76 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                    </svg>
                </a>
                <a href="https://www.linkedin.com" target="_blank"
                    class="hover:text-gray-300 transition transform hover:-translate-y-1">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M19 0h-14c-2.7 0-5 2.3-5 5v14c0 2.7 2.3 5 5 5h14c2.7 0 5-2.3 5-5v-14c0-2.7-2.3-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.3c-1 0-1.7-.7-1.7-1.5S5.5 5.7 6.5 5.7 8 6.4 8 7.2 7 7.7 6 7.7zm13.5 11.3h-3v-5.6c0-1.3-.5-2.1-1.7-2.1-1 0-1.5.7-1.7 1.4-.1.2-.1.5-.1.8v5.5h-3v-10h3v1.4c.4-.7 1.1-1.7 2.8-1.7 2 0 3.5 1.3 3.5 4.1v6.2z" />
                    </svg>
                </a>
            </div>
        </div>

    </div>

    <!-- Copyright & credits -->
    <div class="mt-8 border-t border-white/20 pt-6 text-center text-gray-200 text-sm space-y-2">
        <div>&copy; <?php echo date("Y"); ?> BHV Centrum Nederland. Alle rechten voorbehouden.</div>
        <div class="text-xs">Website gemaakt door <a href="https://nexfinity.nl" target="_blank"
                class="hover:underline">Nexfinity</a></div>
    </div>

    <!-- Back-to-top button -->
    <button id="backToTop"
        class="hidden fixed bottom-6 right-6 bg-white text-[#293a96] p-3 h-12 w-12 flex justify-center items-center rounded-full shadow-lg hover:bg-gray-100 hover:shadow-xl transition transform hover:-translate-y-1">
        ↑
    </button>
</footer>

<script>
// Back-to-top functionality
const btn = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        btn.classList.remove('hidden');
    } else {
        btn.classList.add('hidden');
    }
});
btn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
</script>
</body>

</html>