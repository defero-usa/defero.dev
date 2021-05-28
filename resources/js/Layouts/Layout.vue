<template>
    <div class="bg-white">
        <div class="relative overflow-hidden">
            <navigation></navigation>
            <main>
                <slot name="header"></slot>
                <slot></slot>
            </main>
            <footer-bar />
        </div>
    </div>
</template>

<script>
import { defineComponent, h } from 'vue'
import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue'
import {
    CloudUploadIcon,
    CogIcon,
    LockClosedIcon,
    MenuIcon,
    RefreshIcon,
    ServerIcon,
    ShieldCheckIcon,
    XIcon,
} from '@heroicons/vue/outline'
import { ChevronRightIcon, ExternalLinkIcon } from '@heroicons/vue/solid'
import Navigation from "./Navigation";
import FooterBar from "./Footer";

export default {
    components: {
        FooterBar,
        Navigation,
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
        }
    },
}
</script>