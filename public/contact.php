<?php include 'header.php'; ?>

<main class="py-24 min-h-screen px-6 lg:px-8 max-w-7xl mx-auto">

    <!-- Hero / Intro -->
    <section class="text-center py-20">
        <h1 class="text-4xl md:text-5xl font-bold text-[#293a96] mb-4">Neem contact met ons op</h1>
        <p class="text-gray-700 text-lg md:text-xl">
            Heb je vragen over onze cursussen, inschrijvingen of andere zaken? Vul het formulier in of gebruik de
            contactgegevens hieronder. We helpen je graag verder!
        </p>
    </section>

    <!-- Contact Info & Form -->
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-white p-10 rounded-lg shadow">

        <!-- Contactgegevens -->
        <div class="space-y-6">
            <h2 class="text-2xl font-semibold text-[#293a96]">Onze gegevens</h2>
            <p class="text-gray-700"><strong>Adres:</strong> Hollantlaan 4, 3526 AM Utrecht</p>
            <p class="text-gray-700">
                <strong>Telefoon:</strong>
                <a href="tel:+310307440240" class="text-[#293a96] hover:underline">+31 30 744 02 40</a>
            </p>
            <p class="text-gray-700">
                <strong>Email:</strong>
                <a href="mailto:info@bhvcentrumnederland.nl" class="text-[#293a96] hover:underline">
                    info@bhvcentrumnederland.nl
                </a>
            </p>
            <p class="text-gray-700"><strong>Openingstijden:</strong> Ma–Vr 09:00 – 17:00</p>

            <!-- Social Links -->
            <div class="flex space-x-4 mt-4">
                <a href="#" class="text-[#293a96] hover:text-gray-700 transition" aria-label="Facebook">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.438 9.879v-6.987h-2.54V12h2.54V9.797c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.772-1.63 1.563V12h2.773l-.443 2.892h-2.33v6.987C18.343 21.128 22 16.991 22 12z" />
                    </svg>
                </a>
                <a href="#" class="text-[#293a96] hover:text-gray-700 transition" aria-label="LinkedIn">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M4.98 3.5C3.35 3.5 2 4.86 2 6.5c0 1.63 1.34 3 2.98 3 1.64 0 2.98-1.37 2.98-3 0-1.64-1.34-3-2.98-3zm.02 5.5H2V21h5V9H5v-.001zM9 9h4.8v1.57h.07c.67-1.28 2.3-2.63 4.74-2.63 5.07 0 6 3.33 6 7.66V21h-5v-6.67c0-1.59-.03-3.64-2.22-3.64-2.22 0-2.56 1.73-2.56 3.53V21H9V9z" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Contactformulier -->
        <div>
            <h2 class="text-2xl font-semibold text-[#293a96] mb-4">Stuur ons een bericht</h2>

            <!-- Alert -->
            <div id="form-alert" class="hidden mb-6 p-4 rounded text-white font-medium"></div>

            <form id="contact-form" action="contact-verzenden.php" method="POST" class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700 font-medium mb-1">Naam</label>
                    <input type="text" id="name" name="name" required
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#293a96]">
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#293a96]">
                </div>
                <div>
                    <label for="subject" class="block text-gray-700 font-medium mb-1">Onderwerp</label>
                    <input type="text" id="subject" name="subject" required
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#293a96]">
                </div>
                <div>
                    <label for="message" class="block text-gray-700 font-medium mb-1">Bericht</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#293a96]"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-[#293a96] text-white font-bold py-3 rounded hover:bg-[#1f2d72] transition">
                    Verstuur
                </button>
            </form>
        </div>
    </section>
</main>

<script>
const form = document.getElementById('contact-form');
const alertBox = document.getElementById('form-alert');

form.addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(form);

    fetch('contact-verzenden.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                alertBox.className = 'mb-6 p-4 rounded text-white font-medium bg-green-600';
                alertBox.textContent = data.message;
                form.reset();
            } else {
                alertBox.className = 'mb-6 p-4 rounded text-white font-medium bg-red-600';
                alertBox.textContent = data.message;
            }

            alertBox.classList.remove('hidden');
            setTimeout(() => alertBox.classList.add('hidden'), 5000);
        })
        .catch(() => {
            alertBox.className = 'mb-6 p-4 rounded text-white font-medium bg-red-600';
            alertBox.textContent = 'Er is een onverwachte fout opgetreden.';
            alertBox.classList.remove('hidden');
            setTimeout(() => alertBox.classList.add('hidden'), 5000);
        });
});
</script>

<?php include 'footer.php'; ?>