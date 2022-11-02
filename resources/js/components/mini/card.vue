<template>
    <li class="g-col-4 shadow-2-light">
        <div v-if="post.image">
            <img class="fluid-img" :src="post.cover_path" :alt="post.title">
        </div>
        <p class="t-center" v-else>Not img for this post</p>
        <div class="p-2">
            <h3 class="t-center">{{ post.title }}</h3>
            <p class="gray-6 bold" v-if="post.category"><span class="black">Category : </span>{{ post.category.name }}</p>
            <ul class="list-style-none flex gap-20">
                <li class="bold">TAGS :</li>
                <li class="bold gray-6" v-for="(tag, i) in post.tags" :key="i">{{ tag.name }}</li>
            </ul>
            <p class="bold">Description : </p>
            <p>{{ post.description }}</p>
        </div>
    </li>
</template>


<script>
// @ts-nocheck
export default {
    props: {
        post: Object
    },
}
</script>


<style lang="">

</style>
