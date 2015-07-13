new Vue({
	el: '#list',

	data: {
		items: []
	},

	ready: function () {
		this.fetchLists();
	},

	methods: {
		fetchLists: function () {
			this.$http.get('/awesomelist/items', function (items) {
				this.items = items;
			});
		}
	}
});
