<template>
    <layout>
        <template #header>
            <div class="pt-10 bg-gray-900 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
            <div class="mx-auto max-w-7xl lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                        <div class="lg:py-24">
                            <a href="https://www.deferousa.com/the-opportunities/?utm_source=defero.dev&utm_medium=referral&utm_campaign=Hiring+Badge+Home" class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                                <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-gradient-to-r from-rad-red-500 to-defero-red-600 rounded-full">We're hiring</span>
                                <span class="ml-4 text-sm">Visit our careers page</span>
                                <ChevronRightIcon class="ml-2 w-5 h-5 text-gray-500" aria-hidden="true" />
                            </a>
                            <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl font-heading">
                                <span class="block">Defero</span>
                                <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-rad-red-500 to-defero-red-600 sm:pb-5">Development</span>
                            </h1>
                            <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">
                                Documentation and information on any and all open-source packages. If you are looking for some custom work, let us know and we will see what we can do to help you out!
                            </p>
<!--                            <div class="mt-10 sm:mt-12">-->
<!--                                <form action="#" class="sm:max-w-xl sm:mx-auto lg:mx-0">-->
<!--                                    <div class="sm:flex">-->
<!--                                        <div class="min-w-0 flex-1">-->
<!--                                            <label for="email" class="sr-only">Email address</label>-->
<!--                                            <input id="email" type="email" placeholder="Enter your email" class="block w-full px-4 py-3 rounded-md border-0 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rad-red-200 focus:ring-offset-gray-900" />-->
<!--                                        </div>-->
<!--                                        <div class="mt-3 sm:mt-0 sm:ml-3">-->
<!--                                            <button type="submit" class="block w-full py-3 px-4 rounded-md shadow bg-gradient-to-r from-rad-red-500 to-defero-red-600 text-white font-medium hover:from-rad-red-600 hover:to-defero-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400 focus:ring-offset-gray-900">Start free trial</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <p class="mt-3 text-sm text-gray-300 sm:mt-4">Start your free 14-day trial, no credit card necessary. By providing your email, you agree to our <a href="#" class="font-medium text-white">terms or service</a>.</p>-->
<!--                                </form>-->
<!--                            </div>-->
                        </div>
                    </div>
                    <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                            <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="/images/code.svg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </template>
        <div class="relative bg-white py-16 sm:py-24 lg:py-32">
            <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                <h2 class="text-base font-semibold tracking-wider text-defero-red-500 uppercase">Our Projects</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                    Open Source
                </p>
                <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
                    Take a look at what we have out for anyone to use. All our open source projects, documentation, and more.
                </p>
                <repo-list :repos="repos" />
            </div>
        </div>

<!--        <testimonial image="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" quote="This is a test quote" name="Brian Logan" position="Full Stack Developer at Defero" />-->

<!--        <div class="relative bg-gray-50 py-16 sm:py-24 lg:py-32">-->
<!--            <div class="relative">-->
<!--                <div class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">-->
<!--                    <h2 class="text-base font-semibold tracking-wider text-cyan-600 uppercase">Learn</h2>-->
<!--                    <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">-->
<!--                        Helpful Resources-->
<!--                    </p>-->
<!--                    <p class="mt-5 mx-auto max-w-prose text-xl text-gray-500">-->
<!--                        Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.-->
<!--                    </p>-->
<!--                </div>-->
<!--                <blog-list :blogs="blogPosts" />-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="relative bg-gray-900">-->
<!--            <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">-->
<!--                <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&sat=-100" alt="" />-->
<!--                <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-r from-rad-red-500 to-defero-red-600 mix-blend-multiply" />-->
<!--            </div>-->
<!--            <div class="relative mx-auto max-w-md px-4 py-12 sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-32">-->
<!--                <div class="md:ml-auto md:w-1/2 md:pl-10">-->
<!--                    <h2 class="text-base font-semibold uppercase tracking-wider text-gray-300">-->
<!--                        Award winning support-->
<!--                    </h2>-->
<!--                    <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">-->
<!--                        We’re here to help-->
<!--                    </p>-->
<!--                    <p class="mt-3 text-lg text-gray-300">-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue. Aliquet amet volutpat quisque ut interdum tincidunt duis.-->
<!--                    </p>-->
<!--                    <div class="mt-8">-->
<!--                        <div class="inline-flex rounded-md shadow">-->
<!--                            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">-->
<!--                                Visit the help center-->
<!--                                <ExternalLinkIcon class="-mr-1 ml-3 h-5 w-5 text-gray-400" aria-hidden="true" />-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Layout from "../Layouts/Layout";
    import RepoList from "../Components/RepoList";
    import Testimonial from "../Components/Testimonial";
    import BlogList from "../Components/BlogList";
    import Repo from "./Repo";

    const blogPosts = []

    export default {
        props: {
            repos: {
                type: Array,
                required: true,
            }
        },
        setup() {
            return {
                blogPosts
            }
        },
        components: {
            Repo,
            BlogList,
            Testimonial,
            RepoList,
            Layout,
            AppLayout,
        },
    }
</script>
