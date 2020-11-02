<template>
    <div class="container">
        <div class="card">
            <div class="card-header">Mes p'tits users :</div>

            <div class="card-body">
                <div v-for="user in users">
                    {{user.name}}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        mounted() {
            this.$store.dispatch('fetchUsers')
        },
        data(){return{
            msg:"piloupa"
        }},
        computed: {
            ...mapGetters([
                'users'
            ])
        }
    }
</script>

<style scoped>


</style>
