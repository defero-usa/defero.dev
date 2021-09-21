<template>
    <layout>
        <template #header>
            <div class="py-8 bg-gray-900 lg:overflow-hidden px-3">
                <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="flex">
                        <div class="flex-col w-10/12">
                            <inertia-link :href="route('repo.index')"><h3 class="text-white text-xl font-heading uppercase inline">Repos > </h3></inertia-link>
                            <h3 class="text-white text-xl font-heading uppercase inline">{{ repo.name }}</h3>
                        </div>
                        <div class="flex-col">
                            <a :href="repo.url" class="mx-3 text-white font-xl"><i class="fab fa-github fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <div class="py-6">
            <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="hidden lg:block lg:col-span-3 xl:col-span-2">
                    <nav aria-label="Sidebar" class="sticky top-6 divide-y divide-gray-300">
                        <!-- Your content -->
                    </nav>
                </div>
                <main class="lg:col-span-9 xl:col-span-6" v-html="readme">

                </main>
            </div>
        </div>
    </layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Layout from "@/Layouts/Layout";
    import RepoList from "@/Components/RepoList";
    import Testimonial from "@/Components/Testimonial";
    import BlogList from "@/Components/BlogList";

    const blogPosts = []

    export default {
        props: {
            repo: {
                type: Object,
                required: true,
            },
            docs: {
                required: false,
            },
            readme: {
                required: false,
            }
        },
        components: {
            BlogList,
            Testimonial,
            RepoList,
            Layout,
            AppLayout,
        },
    }
</script>
