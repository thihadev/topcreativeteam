<template>
	<div class="alert alert-success alert-flash" v-show="show">
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ body }}
    </div>
</template>

<script>
	export default {
		props: ['message'],

		data() {
			return {
				body: 'Hello Body',
				show: false
			}
		},

		created() {
			if (this.message) {
				this.flash(this.message);
			}
		},

		methods: {
			flash(message) {
				this.body = message;
				this.show = true;

				this.hide();
			},

			hide() {
				setTimeout(() => {
					this.show = false
				}, 3000);	
			}
		}
	}
</script>

<style>
	.alert-flash {
		position: fixed;
		right: 15px;
		bottom: 30px;
		z-index: 10
	}
</style>

