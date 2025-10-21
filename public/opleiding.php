<?php include 'header.php'; ?>

<?php
$slug = $_GET['slug'] ?? null;
if (!$slug) {
    echo '<p class="text-center text-red-600 mt-10">Opleiding niet gevonden.</p>';
    include 'footer.php';
    exit;
}
?>

<section x-data="courseData('<?php echo $slug; ?>')" x-init="init()" class="flex flex-col gap-24 pb-24 bg-white">

    <!-- Loader -->
    <div x-show="!course" class="flex justify-center items-center py-40">
        <div class="loader w-14 h-14 border-4 border-gray-300 rounded-full border-t-[#293a96] animate-spin"></div>
    </div>

    <!-- Hero / Intro -->
    <template x-if="course">
        <div class="relative bg-gradient-to-b from-white to-[#f4f6ff] overflow-hidden py-5">
            <div class="max-w-7xl mx-auto px-6 lg:px-12 py-28 flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2 space-y-6">
                    <h1 x-text="course.title" class="text-5xl md:text-6xl font-extrabold text-[#293a96] leading-tight">
                    </h1>
                    <p class="text-[#293a96] font-bold text-3xl">€<span
                            x-text="parseFloat(course.price).toFixed(2)"></span></p>
                    <a :href="`https://e-learningcourse.com/embed/course-form?domain=bhvcentrumnederland.nl&course_id=${course.id}`"
                        class="inline-block px-8 py-4 bg-[#293a96] text-white font-bold rounded-full hover:bg-[#1f2d72] transition shadow-lg">
                        Inschrijven
                    </a>
                </div>
                <div class="lg:w-1/2 relative">
                    <img :src="'/images/img1.jpg'" alt=""
                        class="rounded-3xl shadow-xl object-cover w-full max-h-[500px]">
                    <!-- Subtle hero decoration -->
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-[#293a96] opacity-10 rounded-full"></div>
                </div>
            </div>
        </div>
    </template>

    <!-- Beschrijving sectie -->
    <template x-if="course">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 space-y-24">

            <div class="bg-white py-10">
                <div x-html="course.description" class="prose prose-gray max-w-full break-words"></div>
            </div>

            <!-- Highlights -->
            <div>
                <template x-if="course.highlights && course.highlights.length">
                    <div class="flex flex-wrap gap-6">
                        <template x-for="item in course.highlights" :key="item">
                            <div
                                class="flex items-center gap-3 bg-[#f4f4f4] p-4 rounded-xl shadow-sm flex-1 min-w-[250px]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 flex-shrink-0"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="font-semibold text-gray-800" x-text="item"></span>
                            </div>
                        </template>
                    </div>
                </template>

                <template x-if="!course.highlights || !course.highlights.length">
                    <div class="flex flex-wrap gap-6">
                        <div class="flex items-center gap-3 bg-[#f4f4f4] p-4 rounded-xl shadow-sm flex-1 min-w-[250px]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 flex-shrink-0"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="font-semibold text-gray-800">Praktijkgerichte training</span>
                        </div>
                        <div class="flex items-center gap-3 bg-[#f4f4f4] p-4 rounded-xl shadow-sm flex-1 min-w-[250px]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 flex-shrink-0"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="font-semibold text-gray-800">Kleine groepen & persoonlijke aandacht</span>
                        </div>
                        <div class="flex items-center gap-3 bg-[#f4f4f4] p-4 rounded-xl shadow-sm flex-1 min-w-[250px]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 flex-shrink-0"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="font-semibold text-gray-800">Inclusief certificaat en materialen</span>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Alternating content / images -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-4">
                    <h2 class="text-3xl font-semibold text-[#293a96]">Hoe onze cursussen worden gegeven</h2>
                    <p class="text-gray-700">
                        Al onze opleidingen zijn praktijkgericht. Theorie wordt gekoppeld aan oefeningen zodat je kennis
                        direct toepast.
                    </p>
                    <p class="text-gray-700">
                        Kleine groepen met persoonlijke begeleiding zorgen voor optimale leerervaring.
                    </p>
                </div>
                <div>
                    <img :src="'/images/img2.jpg'" alt="Training sessie"
                        class="rounded-2xl shadow-lg object-cover w-full h-64 lg:h-full">
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center lg:flex-row-reverse">
                <div class="space-y-4">
                    <h2 class="text-3xl font-semibold text-[#293a96]">Beleid & certificering</h2>
                    <p class="text-gray-700">
                        Onze cursussen zijn erkend door relevante instanties. Na afronding ontvang je een officieel
                        certificaat.
                    </p>
                    <p class="text-gray-700">
                        Lunch en materialen inbegrepen waar van toepassing. Wij hanteren een veilig en professioneel
                        leerklimaat.
                    </p>
                </div>
                <div>
                    <img :src="'/images/img3.webp'" alt="Certificaat"
                        class="rounded-2xl shadow-lg object-cover w-full h-64 lg:h-full">
                </div>
            </div>

            <!-- FAQ / Tips -->
            <div class="bg-[#f4f4f4] p-10 rounded-2xl shadow space-y-6">
                <h2 class="text-3xl font-semibold text-[#293a96]">Veelgestelde vragen</h2>
                <p class="text-gray-700">
                    Vragen over inhoud, niveau of planning? Neem contact op via ons <a href="/contact.php"
                        class="text-[#293a96] underline font-semibold">contactformulier</a>.
                </p>
            </div>

            <!-- CTA onderaan -->
            <div class="text-center mt-8">
                <a :href="`https://e-learningcourse.com/embed/course-form?domain=bhvcentrumnederland.nl&course_id=${course.id}`"
                    class="inline-block px-10 py-4 bg-[#293a96] text-white font-bold rounded-full hover:bg-[#1f2d72] transition shadow-lg">
                    Inschrijven
                </a>
            </div>

        </div>
    </template>

    <template x-if="course === null">
        <p class="text-center text-gray-500 py-40">Opleiding wordt geladen of bestaat niet.</p>
    </template>

</section>

<script>
document.addEventListener("alpine:init", () => {
    Alpine.data("courseData", (slug) => ({
        course: null,
        async init() {
            try {
                const res = await fetch(
                    "https://e-learningcourse.com/api/courses?domain=bhvcentrumnederland.nl"
                );
                const data = await res.json();
                const allCourses = data.courses || [];
                this.course = allCourses.find(c => c.slug === slug) || null;
            } catch (err) {
                console.error(err);
            }
        }
    }));
});
</script>

<?php include 'footer.php'; ?>