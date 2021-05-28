<template>
    <div class="mt-12">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <div v-for="project in repos" :key="project.name" class="pt-6">
                <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                    <div class="-mt-6">
                        <div>
                            <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-rad-red-500 to-defero-red-600 rounded-md shadow-lg">
<!--                                <component :is="project.icon" class="h-6 w-6 text-white" aria-hidden="true" />-->
                            </span>
                        </div>
                        <a :href="route('repo.view', project)">
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">{{ project.name }}</h3>
                        </a>
                        <p class="mt-5 text-base text-gray-500">
                            {{ project.description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        repos: {
            type: Array,
            required: true,
        }
    }
}
</script>