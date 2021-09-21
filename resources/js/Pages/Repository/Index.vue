<template>
    <layout>
        <template #header>
            <div class="py-8 bg-gray-900 lg:overflow-hidden px-3">
                <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="flex">
                        <div class="flex-col w-10/12">
                            <h3 class="text-white text-xl font-heading uppercase inline">Repos</h3>
                        </div>
                        <div class="flex-col">
<!--                            <a :href="repo.url" class="mx-3 text-white font-xl"><i class="fab fa-github fa-lg"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <div class="py-6">
            <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 text-center">
                <repo-list :repos="repos" />
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
            repos: {
                type: Array,
                required: true,
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
