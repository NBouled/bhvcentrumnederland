<?php include 'header.php'; ?>

<section class="bg-gradient-to-b from-white to-[#f4f6ff] py-10 min-h-screen" x-data="coursesData()" x-init="init()">
    <div class=" mx-auto px-6 max-w-7xl px-6 md:px-12 py-10 lg:py-28">

        <!-- Titel + Intro -->
        <div class="text-center mb-16 py-10 bg-[#f4f4f4] rounded-xl">
            <h1 class="text-4xl md:text-5xl font-bold text-[#283a96] mb-4">Onze opleidingen</h1>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                Bekijk al onze BHV-, EHBO- en veiligheidstrainingen. Al onze opleidingen zijn praktijkgericht,
                erkend en worden gegeven door ervaren instructeurs. Kies hieronder jouw categorie om snel te vinden wat
                je zoekt.
            </p>
        </div>

        <!-- Filter buttons -->
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <template x-for="cat in ['all','BHV','EHBO','BLS','PBL']" :key="cat">
                <button @click="filterCategory(cat)"
                    :class="activeCategory === cat ? 'bg-[#283a96] text-white' : 'bg-white text-[#283a96]'"
                    class="px-6 py-2 border border-[#283a96] rounded-full font-medium hover:bg-[#283a96] hover:text-white transition">
                    <span x-text="cat.charAt(0).toUpperCase() + cat.slice(1)"></span>
                </button>
            </template>
        </div>

        <!-- Opleidingen grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Loader -->
            <template x-if="loading">
                <div class="col-span-full flex justify-center items-center py-20">
                    <div class="loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-16 w-16"></div>
                </div>
            </template>

            <!-- Course cards -->
            <template x-for="course in filteredCourses" :key="course.id">
                <div
                    class="bg-white border border-gray-200 rounded-2xl shadow-md hover:shadow-lg transition-all p-6 flex flex-col justify-between">
                    <div>
                        <h3 x-text="course.title" class="text-[#283a96] text-2xl font-bold mb-3 leading-snug"></h3>
                        <p class="text-[#283a96] font-bold mb-4 text-xl">
                            €<span x-text="parseFloat(course.price).toFixed(2)"></span>
                        </p>

                        <!-- Highlights -->
                        <ul class="mb-5 text-gray-700 text-sm space-y-2">
                            <template x-for="item in course.highlights?.slice(0,3) || []" :key="item">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2 mt-[2px]"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                Praktijkgerichte training
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                Erkend door experts
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600 mr-2"
                                    viewBox="0 0 20 20" fill="currentColor">
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
                            class="flex-1 text-center px-4 py-2 border-2 border-[#283a96] text-[#283a96] font-semibold rounded-lg hover:bg-[#283a96] hover:text-white transition">
                            Bekijk
                        </a>
                        <a :href="`https://e-learningcourse.com/embed/course-form?domain=bhvcentrumnederland.nl&course_id=${course.id}`"
                            class="flex-1 text-center px-4 py-2 bg-[#283a96] text-white font-semibold rounded-lg hover:bg-[#1f2d72] transition">
                            Inschrijven
                        </a>
                    </div>
                </div>
            </template>
        </div>

        <template x-if="filteredCourses.length === 0">
            <p class="text-center text-gray-500 mt-10 text-lg">Geen opleidingen beschikbaar.</p>
        </template>
    </div>
</section>

<style>
/* Loader styling */
.loader {
    border-top-color: #283a96;
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
        filteredCourses: [],
        activeCategory: "all",
        loading: true,

        async init() {
            this.loading = true;
            try {
                const res = await fetch(
                    "https://e-learningcourse.com/api/courses?domain=bhvcentrumnederland.nl"
                );
                const data = await res.json();
                this.courses = data.courses || [];
                this.filteredCourses = this.courses;
            } catch (err) {
                console.error("Fout bij laden:", err);
            } finally {
                this.loading = false;
            }
        },

        filterCategory(category) {
            this.activeCategory = category;
            if (category === "all") {
                this.filteredCourses = this.courses;
            } else {
                this.filteredCourses = this.courses.filter(course => {
                    const title = course.title?.toLowerCase() || "";
                    const cat = course.category?.name?.toLowerCase() || "";
                    return title.includes(category.toLowerCase()) || cat.includes(category
                        .toLowerCase());
                });
            }
        }
    }));
});
</script>

<?php include 'footer.php'; ?>