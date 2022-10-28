<template>
    <li class="col-2">
        <div v-if="post.image">
            <img :src="post.cover_path" :alt="post.title">
        </div>
        {{ post.title }}
    </li>
</template>


<script>
export default {
    props: {
        post: Object
    },

    beforeMount () {
        console.log( this.post );
    }
}
</script>


<style lang="">
    
</style>