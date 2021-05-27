<template>
    <Popover as="header" class="relative">
        <div class="bg-gray-900 pt-6">
            <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                <div class="flex items-center flex-1">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="#">
                            <application-logo class="w-36" />
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <PopoverButton class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white">
                                <span class="sr-only">Open main menu</span>
                                <MenuIcon class="h-6 w-6" aria-hidden="true" />
                            </PopoverButton>
                        </div>
                    </div>
                    <div class="hidden space-x-8 md:flex md:ml-10">
                        <a v-for="item in navigation" :key="item.name" :href="item.href" class="text-base font-medium text-white hover:text-gray-300">{{ item.name }}</a>
                    </div>
                </div>
                <div class="hidden md:flex md:items-center md:space-x-6">
<!--                    <a href="#" class="text-base font-medium text-white hover:text-gray-300">-->
<!--                        Log in-->
<!--                    </a>-->
<!--                    <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">-->
<!--                        Start free trial-->
<!--                    </a>-->
                </div>
            </nav>
        </div>

        <transition enter-active-class="duration-150 ease-out" enter-from-class="opacity-0 scale-95" enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in" leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
            <PopoverPanel focus class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden">
                <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="px-5 pt-4 flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-teal-500-cyan-600.svg" alt="" />
                        </div>
                        <div class="-mr-2">
                            <PopoverButton class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-600">
                                <span class="sr-only">Close menu</span>
                                <XIcon class="h-6 w-6" aria-hidden="true" />
                            </PopoverButton>
                        </div>
                    </div>
                    <div class="pt-5 pb-6">
                        <div class="px-2 space-y-1">
                            <a v-for="item in navigation" :key="item.name" :href="item.href" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">{{ item.name }}</a>
                        </div>
<!--                        <div class="mt-6 px-5">-->
<!--                            <a href="#" class="block text-center w-full py-3 px-4 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white font-medium hover:from-teal-600 hover:to-cyan-700">Start free trial</a>-->
<!--                        </div>-->
<!--                        <div class="mt-6 px-5">-->
<!--                            <p class="text-center text-base font-medium text-gray-500">Existing customer? <a href="#" class="text-gray-900 hover:underline">Login</a></p>-->
<!--                        </div>-->
                    </div>
                </div>
            </PopoverPanel>
        </transition>
    </Popover>
</template>

<script>
import {Popover, PopoverButton, PopoverPanel} from "@headlessui/vue";
import {ChevronRightIcon, ExternalLinkIcon} from "@heroicons/vue/solid/esm";
import {MenuIcon, XIcon} from "@heroicons/vue/outline/esm";
import ApplicationLogo from "../Jetstream/ApplicationLogo";

const navigation = [
    { name: 'Our Github', href: 'https://github.com/defer-usa' },
    { name: 'Defero', href: 'https://deferousa.com?utm_source=defero.dev&utm_medium=referral&utm_campaign=Nav+Bar' },
]

export default {
    components: {
        ApplicationLogo,
        Popover,
        PopoverButton,
        PopoverPanel,
        ChevronRightIcon,
        ExternalLinkIcon,
        MenuIcon,
        XIcon,
    },
    setup() {
        return {
            navigation,
        }
    },
}
</script>