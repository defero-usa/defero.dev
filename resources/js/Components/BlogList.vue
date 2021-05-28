<template>
    <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
        <div v-for="post in blogs" :key="post.id" class="flex flex-col rounded-lg shadow-lg overflow-hidden">
            <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover" :src="post.imageUrl" alt="" />
            </div>
            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                <div class="flex-1">
                    <p class="text-sm font-medium text-cyan-600">
                        <a :href="post.category.href" class="hover:underline">
                            {{ post.category.name }}
                        </a>
                    </p>
                    <a :href="post.href" class="block mt-2">
                        <p class="text-xl font-semibold text-gray-900">
                            {{ post.title }}
                        </p>
                        <p class="mt-3 text-base text-gray-500">
                            {{ post.preview }}
                        </p>
                    </a>
                </div>
                <div class="mt-6 flex items-center">
                    <div class="flex-shrink-0">
                        <a :href="post.author.href">
                            <img class="h-10 w-10 rounded-full" :src="post.author.imageUrl" :alt="post.author.name" />
                        </a>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">
                            <a :href="post.author.href" class="hover:underline">
                                {{ post.author.name }}
                            </a>
                        </p>
                        <div class="flex space-x-1 text-sm text-gray-500">
                            <time :datetime="post.datetime">
                                {{ post.date }}
                            </time>
                            <span aria-hidden="true">&middot;</span>
                            <span> {{ post.readingLength }} read </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        blogs: {
            type: Array,
            required: true
        }
    }
}
</script>