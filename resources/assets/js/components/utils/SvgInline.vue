<template>
    <figure class="svg-cover" v-once v-html="img"></figure>
</template>

<script>
	let svginline = Vue.component('svg-inline', {
		props: ['name'],

		data () {
			return {
				img: null
			}
		},

        created () {
			this.loadImg()
        },

        methods: {
			loadImg () {
				this.img = require(`../../../svg/${this.name}.svg`)
            }
        }
	})

	export default svginline
</script>
