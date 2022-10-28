<template>
    <header>
        <div v-html="headerParams.forLogin"></div>
    </header>
</template>

<script>
export default {
    props: {
        headerParams: Object
    }
}
</script>
