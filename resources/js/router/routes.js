import Vue from 'vue'
import VueRouter from 'vue-router'

let routes = [
	{
		path : '/',
		component: require('../components/Shops.vue'),
		name: 'all'
	},
	{
		path: '/liked',
		component: require('../components/Liked.vue'),
		name: 'liked'
	}
]

export default routes;