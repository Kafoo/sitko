<template>
    <div class="container">
        <div class="card">
            <div class="card-header">Mes catégories :</div>

            <div class="card-body">
                <div v-for="category in categories">
                    -- {{category.name}} --
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        mounted() {
            this.$store.dispatch('fetchCategories')
        },
        data(){return{
            
        }},
        computed: {
            ...mapGetters([
                'categories'
            ])
        }
    }
</script>

<style scoped>
    

</style>
