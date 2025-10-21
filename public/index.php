<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="py-10 bg-gradient-to-b from-white to-[#f4f6ff]" x-data="heroData()" x-init="init()">
    <div
        class="container mx-auto flex flex-col-reverse lg:flex-row items-center justify-between max-w-7xl px-6 md:px-12 py-20 lg:py-28">

        <!-- Text Content -->
        <div class="w-full lg:w-1/2 text-center lg:text-left mt-10 lg:mt-0">
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#293a96] leading-tight mb-6">
                Word voorbereid op elke noodsituatie
                <span class="block text-gray-800 mt-2">Volg de <span class="text-[#293a96]">BHV
                        Basiscursus</span></span>
            </h1>

            <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed max-w-md mx-auto lg:mx-0">
                Krijg praktijkgerichte, erkende BHV-training door ervaren instructeurs.
                Leer effectief handelen bij noodsituaties — inclusief certificaat, lunch en persoonlijke begeleiding.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-wrap justify-center lg:justify-start gap-4 mb-8">
                <a :href="firstCourseUrl"
                    class="px-8 py-3 bg-[#293a96] text-white font-semibold rounded-full shadow-md hover:bg-[#1e2b6f] hover:shadow-lg transition duration-300 transform hover:-translate-y-1"
                    x-bind:class="!firstCourseUrl && 'opacity-50 pointer-events-none'">
                    Inschrijven
                </a>
                <a href="/opleidingen.php"
                    class="px-8 py-3 border-2 border-[#293a96] text-[#293a96] font-semibold rounded-full hover:bg-[#293a96] hover:text-white transition duration-300 transform hover:-translate-y-1">
                    Bekijk opleidingen
                </a>
            </div>

            <!-- USP's -->
            <div class="flex flex-wrap justify-center lg:justify-start items-center gap-6 mt-6">
                <!-- USP Item -->
                <div class="flex items-center gap-3">
                    <div
                        class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-[#e0e4ff] text-[#293a96] transition transform hover:-translate-y-1 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>

                    </div>
                    <span class="font-semibold text-gray-700">Erkend certificaat</span>
                </div>

                <!-- USP Item -->
                <div class="flex items-center gap-3">
                    <div
                        class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-[#e0e4ff] text-[#293a96] transition transform hover:-translate-y-1 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                        </svg>

                    </div>
                    <span class="font-semibold text-gray-700">Praktijkgerichte training</span>
                </div>

                <!-- USP Item -->
                <div class="flex items-center gap-3">
                    <div
                        class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-[#e0e4ff] text-[#293a96] transition transform hover:-translate-y-1 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                            stroke="currentColor" class="size-6">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                        </svg>

                    </div>
                    <span class="font-semibold text-gray-700">Inclusief lunch & materialen</span>
                </div>
            </div>

        </div>

        <!-- Hero Image -->
        <div class="w-full lg:w-1/2 flex justify-center">
            <img src="images/img1.jpg" alt="Professionele BHV opleiding"
                class="rounded-2xl shadow-xl max-h-[500px] object-cover">
        </div>
    </div>
</section>

<!-- Alpine.js Logic -->
<script>
document.addEventListener("alpine:init", () => {
    Alpine.data("heroData", () => ({
        firstCourseUrl: null,
        async init() {
            try {
                const res = await fetch(
                    "https://e-learningcourse.com/api/courses?domain=bhvcentrumnederland.nl"
                );
                const data = await res.json();
                const courses = data.courses || [];
                if (courses.length > 0) {
                    const first = courses[0];
                    this.firstCourseUrl =
                        `https://e-learningcourse.com/embed/course-form?domain=bhvcentrumnederland.nl&course_id=${first.id}`;
                }
            } catch (err) {
                console.error("Error fetching first course:", err);
            }
        }
    }));
});
</script>

<!-- Populaire Opleidingen Section -->
<section class="bg-gradient-to-b from-white to-[#f4f6ff] py-20" x-data="coursesData()" x-init="init()">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Section Titel -->
        <div class="text-center mb-12  text-center mb-16 py-10 bg-[#f4f4f4] rounded-xl">
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#293a96] mb-4">Onze populairste opleidingen</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Professionele BHV-, EHBO- en veiligheidstrainingen. Altijd
                praktijkgericht, erkend en betrouwbaar.</p>
        </div>

        <!-- CTA boven grid -->
        <div class="text-center mb-10">
            <a href="/opleidingen.php"
                class="px-8 py-3 bg-[#293a96] text-white font-semibold rounded-full shadow-md hover:bg-[#1e2b6f] hover:shadow-lg transition transform hover:-translate-y-1">
                Bekijk alle opleidingen
            </a>
        </div>

        <!-- Opleidingen Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Loader -->
            <template x-if="loading">
                <div class="col-span-full flex justify-center items-center py-20">
                    <div class="loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-16 w-16"></div>
                </div>
            </template>


            <template x-for="course in courses.slice(0,5)" :key="course.id">
                <div
                    class="bg-white border border-gray-200 rounded-2xl shadow-md hover:shadow-lg transition-all p-6 flex flex-col justify-between">
                    <div>
                        <h3 x-text="course.title" class="text-[#293a96] text-xl font-semibold mb-3 leading-snug"></h3>
                        <p class="text-[#293a96] font-bold mb-4 text-lg">€<span
                                x-text="parseFloat(course.price).toFixed(2)"></span></p>

                        <!-- Highlights -->
                        <ul class="mb-5 list-none text-gray-700 text-sm space-y-2">
                            <template x-for="item in course.highlights?.slice(0,3) || []" :key="item">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-[#293a96] mr-2 mt-[2px]" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span x-text="item"></span>
                                </li>
                            </template>
                        </ul>

                        <!-- USP's -->
                        <ul class="mt-4 border-t pt-4 text-gray-600 text-sm space-y-2">
                            <li class="flex items-center">
                                <svg class="h-4 w-4 text-[#293a96] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                Praktijkgerichte training
                            </li>
                            <li class="flex items-center">
                                <svg class="h-4 w-4 text-[#293a96] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                Erkend door experts
                            </li>
                            <li class="flex items-center">
                                <svg class="h-4 w-4 text-[#293a96] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                Kleine groepen & persoonlijke aandacht
                            </li>
                        </ul>
                    </div>

                    <!-- Knoppen -->
                    <div class="flex flex-col sm:flex-row gap-3 mt-6">
                        <a :href="`/opleiding.php?slug=${course.slug}`"
                            class="flex-1 text-center px-4 py-2 border-2 border-[#293a96] text-[#293a96] font-semibold rounded-lg hover:bg-[#293a96] hover:text-white transition">
                            Bekijk
                        </a>
                        <a :href="`https://e-learningcourse.com/embed/course-form?domain=bhvcentrumnederland.nl&course_id=${course.id}`"
                            class="flex-1 text-center px-4 py-2 bg-[#293a96] text-white font-semibold rounded-lg hover:bg-[#1e2b6f] transition">
                            Inschrijven
                        </a>
                    </div>
                </div>
            </template>

            <template x-if="courses.length === 0">
                <p class="col-span-full text-center text-gray-500">Geen opleidingen beschikbaar.</p>
            </template>
        </div>
    </div>
</section>
<style>
/* Loader styling */
.loader {
    border-top-color: #293a96;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}
</style>
<script>
document.addEventListener("alpine:init", () => {
    Alpine.data("coursesData", () => ({
        courses: [],
        loading: true,
        async init() {
            this.loading = true; // start loader
            try {
                const res = await fetch(
                    "https://e-learningcourse.com/api/courses?domain=bhvcentrumnederland.nl"
                );
                const data = await res.json();
                this.courses = data.courses || [];
            } catch (err) {
                console.error("Fout bij ophalen:", err);
            } finally {
                this.loading = false; // stop loader
            }
        }
    }));
});
</script>

<?php include 'footer.php'; ?>