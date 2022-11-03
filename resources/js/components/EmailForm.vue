<template>
    <div>
        <div v-if="success" class="bg-azure border border-azure-3 t-center p-5 rounded-5">
            Il messaggio è stato inviato. Ti invio l'email di conferma. Grazie che hai usato il nostro servizio.
        </div>
        <form v-else @submit.prevent="GO" class="grid-12 gap-20 w-100">
            <div class="g-col-6">
                <input :class="[errors.name ? 'border-danger' : '', 'rounded-5 fs-3 block p-2 border w-100']"
                    type="text" name="name" placeholder="Il tuo nome qui..." v-model="name">
                <small v-if="errors.name" class="mt-1 py-2 red fs-3">
                    <span v-for="(er, i) in errors.name" :key="i">{{ er }}</span>
                </small>
            </div>
            <div class="g-col-6">
                <input :class="[errors.email ? 'border-danger' : '', 'rounded-5 fs-3 block p-2 border w-100']"
                    type="text" name="email" placeholder="La tua email qui..." v-model="email">
                <small v-if="errors.email" class="mt-1 py-2 red fs-3">
                    <span v-for="(er, i) in errors.email" :key="i">{{ er }}</span>
                </small>
            </div>
            <div class="g-col-12">
                <textarea :class="[errors.content ? 'border-danger' : '', 'rounded-5 fs-3 block p-2 border w-100']"
                    name="content" cols="30" rows="6" v-model="content"
                    placeholder="Qui va il tuo contenuto della email..."></textarea>
                <small v-if="errors.content" class="mt-1 py-2 red fs-3">
                    <span v-for="(er, i) in errors.content" :key="i">{{ er }}</span>
                </small>
            </div>

            <input class="mt-3 g-col-12 border-none rounded-full bg-green-8 shadow-b-3-light white bold fs-6"
                type="submit" value="Invia" :disabled="!(name && email && content)">
        </form>
    </div>
</template>


<script>
// @ts-nocheck

export default {
    data () {
        return {
            name: '',
            email: '',
            content: '',
            errors: {},
            success: null
        }
    },

    methods: {
        GO () {
            const data = {
                name: this.name,
                email: this.email,
                content: this.content,
            }

            axios.post( '/api/email', data )
                .then( () => {
                    this.name = this.email = this.content = '';
                    this.errors = {};
                    this.success = true;
                    setTimeout( () => {
                        this.success = null;
                    }, 6000 );
                } ).catch( e => {
                    this.errors = e.response.data.errors;
                } );
        }
    },
}
</script>


<style lang="scss">

</style>
