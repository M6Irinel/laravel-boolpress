<template>
    <header>
        <div v-html="headerParams.forLogin"></div>
    </header>
</template>

<script>
// @ts-nocheck
export default {
    props: {
        headerParams: Object
    }
}
</script>
