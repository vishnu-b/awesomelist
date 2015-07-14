new Vue({
	el: '#list',

	data: {
		newItem: {
			item: '',
			completed: '0'
		},
		items: []
	},

	ready: function () {
		this.fetchLists();
	},

	filters: {
		inComplete: function (items) {
			return items.filter(function (item) {
				return item.completed == '0';
			});
		},

		complete: function (items) {
			return items.filter(function (item) {
				return item.completed == '1';
			});
		}
	},

	methods: {
		fetchLists: function () {
			this.$http.get('/awesomelist/items', function (items) {
				this.items = items;
			});
		},

		onSubmitForm: function (e) {
			e.preventDefault();
			var item = this.newItem;
			this.items.unshift(item);
			this.newItem = { item: '', completed: '0' };
			this.$http.post('/awesomelist/items', item, function(data) {
				this.items[0].id = data;
			});
		},

		completeItem: function (item) {
			item.completed = "1";
			this.$http.put('/awesomelist/items/' + item.id);
		},

		deleteItem: function (item) {
			this.items.$remove(item);
			this.$http.delete('/awesomelist/items/' + item.id);
		},

		moveToInComplete: function (item) {
			item.completed = '0';
			this.$http.put('/awesomelist/items/' + item.id);
		}
	}
});
