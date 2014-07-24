function ItemWork(data){
	var item = this;
	item.activity = ko.observable(data.activity || "");
	item.date = ko.observable(data.date || "");
	item.hfrom = ko.observable(data.hfrom || "");
	item.hto = ko.observable(data.hto || "");
	item.status = ko.observable(data.status || "");
	item.note = ko.observable(data.note || "");
	item.isEditing = ko.observable(data.isEditing || false);
	item.isNew = ko.observable(data.isNew || false);
	item.isSearch = ko.observable(data.isSearch || false);
	item.itemBackup = ko.observable();

	item.toJS = function(){
		return ko.toJS(data);
	};

	item.updateValueBackup = function(data){
		item.activity = ko.observable(data.activity());
		item.date = ko.observable(data.date());
		item.hfrom = ko.observable(data.hfrom());
		item.hto = ko.observable(data.hto());
		item.status = ko.observable(data.status());
		item.note = ko.observable(data.note());
		item.isSearch = ko.observable(data.isSearch);
	};
}

function Task_ListWork(name, time, item_work){
	var self = this;
	self.name = name;
	self.time = time;
	self.listwork = ko.observableArray(item_work);
	self.amountWork = ko.observable(0);
	

	function cloneObservable(observableObject) {
	    return ko.mapping.fromJS(ko.toJS(observableObject));
	}

	self.addWork = function () {
		self.listwork.push(new ItemWork({ isNew : true, isEditing : true }));
	};

	self.deleteWork = function(item){
		var result = confirm("Do you want to delete?");
		if(result){
			self.listwork.remove(item);
		}
	};

	self.editWork = function(item){
		item.isEditing(!item.isEditing());	
		item.itemBackup(cloneObservable(item));
	};

	self.saveWork = function(item){
		item.isEditing(false);
		item.isNew(false);
	};

	self.cancelEdit = function(item){			
		item.updateValueBackup(item.itemBackup());
		self.saveWork(item);
	};

	self.cancelNew = function(item){
		self.listwork.remove(item);
	};

	self.countSearch = function(){
		count = 0;
		ko.utils.arrayForEach(self.listwork(), function(listwork){
			if(listwork.isSearch())
				count = count + 1;
		});
		return count;
	};
}

function myDoingList(){
	var self = this;

	self.ListTask = [
		new Task_ListWork('Learn Knockout',  '08h00',[
			new ItemWork({
				activity : 'activity 1',
				date : '21/01/2014' ,
				hfrom : 8,
				hto : 10,
				status : 'Todo',
				note : 'abcd'
			}),
			new ItemWork({
				activity : 'activity 2',
				date : '20/01/2014' ,
				hfrom : 8,
				hto : 10,
				status : 'Todo',
				note : 'abcd'
			}),
			new ItemWork({
				activity : 'activity 3',
				date : '22/01/2014' ,
				hfrom : 18,
				hto : 20,
				status : 'Todo',
				note : 'abcd'
			})
		]),
		new Task_ListWork('Layout webpage',  '12h30'),
		new Task_ListWork('Load the list in left sidebar',  '14h00'),
		new Task_ListWork('Load the list in main content',  '19h00'),
		new Task_ListWork('Edit selecting task',  '08h00'),
		new Task_ListWork('Delete selecting task', '10h00'),
		new Task_ListWork('Add new to-do list',  '12h00')];

	self.chosenTask = ko.observable();
	self.Search = ko.observable(false);
	self.keySearch = ko.observable('');

	self.gotoTask = function(task){
		self.chosenTask(task);
		self.Search(false);
	};

	self.addWork = function(){
		self.chosenTask().addWork();
	};

	self.searchWork = function(){
		self.Search(true);
		if(self.keySearch() != ''){
			key = self.keySearch().toUpperCase();
			ko.utils.arrayForEach(self.ListTask, function(ListTask){
				ko.utils.arrayForEach(ListTask.listwork(), function(listwork){
					var temp1 = listwork.activity().toUpperCase();
					var temp2 = listwork.status().toUpperCase();
					if(temp1.indexOf(key) != -1 || listwork.date().indexOf(key) != -1 || temp2.indexOf(key) != -1){
						 listwork.isSearch(true);
					}
					else listwork.isSearch(false);
				});
			});
		}
	};
}
ko.applyBindings(new myDoingList());